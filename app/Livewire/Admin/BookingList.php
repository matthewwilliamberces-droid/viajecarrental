<?php

declare(strict_types=1);

namespace App\Livewire\Admin;

use App\Enums\BookingStatus;
use App\Enums\CarStatus;
use App\Mail\CustomerBookingConfirmation;
use App\Models\Booking;
use App\Models\Car;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public string $search = '';

    public string $sortField = 'created_at';
    public bool $sortAsc = false;

    #[Url(history: true)]
    public string $filterStatus = '';

    public bool $showModal = false;
    public ?Booking $selectedBooking = null;

    public function boot(): void
    {
        if (!auth()->check()) {
            abort(403, 'Unauthorized access to booking management.');
        }
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilterStatus(): void
    {
        $this->resetPage();
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
            $this->sortField = $field;
        }
    }

    public function viewDetails(int $id): void
    {
        $this->selectedBooking = Booking::with('car')->findOrFail($id);
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->selectedBooking = null;
    }

    public function updateStatus(int $id, string $status): void
    {
        $targetStatus = BookingStatus::tryFrom($status);
        if (!$targetStatus) {
            session()->flash('error', 'Invalid booking status provided.');
            return;
        }

        $booking = Booking::findOrFail($id);
        $booking->update(['booking_status' => $targetStatus]);
        session()->flash('message', 'Booking status updated to ' . $targetStatus->label());

        // Architectural fix: Only update physical car status if rental is active TODAY
        $today = Carbon::today()->toDateString();
        $isCurrentlyActive = ($booking->pickup_date <= $today && $booking->dropoff_date >= $today);

        $car = Car::find($booking->car_id);
        if ($car && $car->status !== CarStatus::Maintenance) {
            if ($isCurrentlyActive && in_array($targetStatus, [BookingStatus::Confirmed, BookingStatus::Paid], true)) {
                $car->update(['status' => CarStatus::Rented]);
            } elseif (in_array($targetStatus, [BookingStatus::Finished, BookingStatus::Cancelled], true)) {
                $hasOtherActiveToday = Booking::where('car_id', $car->id)
                    ->whereIn('booking_status', [BookingStatus::Confirmed->value, BookingStatus::Paid->value])
                    ->where('pickup_date', '<=', $today)
                    ->where('dropoff_date', '>=', $today)
                    ->exists();

                if (!$hasOtherActiveToday) {
                    $car->update(['status' => CarStatus::Available]);
                }
            }
        }

        $this->dispatch('booking-updated');

        if ($this->selectedBooking && $this->selectedBooking->id === $id) {
            $this->selectedBooking = Booking::with('car')->find($id);
        }
    }

    public function resendEmail(int $id): void
    {
        $booking = Booking::with('car')->findOrFail($id);

        try {
            Mail::to($booking->customer_email)
                ->send(new CustomerBookingConfirmation($booking));

            session()->flash('message', 'Booking email successfully resent to ' . $booking->customer_email);
        } catch (Exception $e) {
            Log::error('Failed to resend booking email: ' . $e->getMessage());
            session()->flash('error', 'Failed to resend email. Check system logs.');
        }
    }

    public function exportCsv()
    {
        $query = Booking::with('car');

        if ($this->filterStatus) {
            $query->where('booking_status', $this->filterStatus);
        }

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('booking_reference', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_name', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_email', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_phone', 'like', '%' . $this->search . '%');
            });
        }

        $bookings = $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->get();

        $csvHeader = [
            "Ref #", "Date Booked", "Customer Name", "Email", "Phone", "Vehicle",
            "Pickup Date", "Dropoff Date", "Status", "Base Rate",
            "Tax", "Total Amount", "Payment Method",
        ];

        $callback = function () use ($bookings, $csvHeader) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $csvHeader);

            foreach ($bookings as $booking) {
                fputcsv($file, [
                    $booking->booking_reference,
                    $booking->created_at ? $booking->created_at->format('Y-m-d H:i:s') : 'N/A',
                    $booking->customer_name,
                    $booking->customer_email,
                    $booking->customer_phone,
                    $booking->car->name ?? 'N/A',
                    $booking->pickup_date . ' ' . $booking->pickup_time,
                    $booking->dropoff_date . ' ' . $booking->dropoff_time,
                    $booking->booking_status instanceof BookingStatus ? $booking->booking_status->value : (string) $booking->booking_status,
                    $booking->base_rate,
                    $booking->tax_amount,
                    $booking->total_amount,
                    $booking->payment_method,
                ]);
            }
            fclose($file);
        };

        return response()->streamDownload($callback, 'viaje-bookings-' . date('Y-m-d') . '.csv');
    }

    public function render()
    {
        $query = Booking::with('car');

        if ($this->filterStatus) {
            $query->where('booking_status', $this->filterStatus);
        }

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('booking_reference', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_name', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_email', 'like', '%' . $this->search . '%')
                    ->orWhere('customer_phone', 'like', '%' . $this->search . '%');
            });
        }

        $bookings = $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate(10);

        return view('livewire.admin.booking-list', [
            'bookings' => $bookings,
        ]);
    }
}
