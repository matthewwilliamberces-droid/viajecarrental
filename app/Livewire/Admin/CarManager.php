<?php

declare(strict_types=1);

namespace App\Livewire\Admin;

use App\Enums\BookingStatus;
use App\Enums\CarStatus;
use App\Models\Car;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CarManager extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public string $search = '';

    #[Url(history: true)]
    public string $filterCategory = '';

    #[Url(history: true)]
    public string $filterStatus = '';

    public string $sortField = 'created_at';
    public bool $sortAsc = false;

    #[Locked]
    public ?int $carId = null;

    public string $name = '';
    public string $category = '';
    public string $categoryName = '';
    public int|string $dailyRate = '';
    public float|string $rating = 5.0;
    public int|string $reviews = 0;
    public int|string $seats = 5;
    public int|string $bags = 3;
    public string $transmission = 'Automatic';
    public string $fuel = 'Diesel';
    public string $eco = '14 km/L';
    public string $status = 'Available';
    public string $image = '';
    public ?string $badge = null;
    public ?string $badgeColor = null;

    public bool $isEditMode = false;
    public bool $showModal = false;

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'categoryName' => 'required|string|max:255',
            'dailyRate' => 'required|integer|min:500',
            'rating' => 'required|numeric|between:0,5',
            'reviews' => 'required|integer|min:0',
            'seats' => 'required|integer|min:1',
            'bags' => 'required|integer|min:0',
            'transmission' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'eco' => 'required|string|max:255',
            'status' => 'required|string|in:Available,Rented,Maintenance',
            'image' => 'required|url|max:1000',
            'badge' => 'nullable|string|max:255',
            'badgeColor' => 'nullable|string|max:255',
        ];
    }

    public function boot(): void
    {
        if (!auth()->check()) {
            abort(403, 'Unauthorized access to fleet management.');
        }
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingFilterCategory(): void
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

    public function openCreateModal(): void
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function resetForm(): void
    {
        $this->reset([
            'carId', 'name', 'category', 'categoryName', 'dailyRate', 'rating',
            'reviews', 'seats', 'bags', 'transmission', 'fuel', 'eco', 'status',
            'image', 'badge', 'badgeColor',
        ]);
        $this->isEditMode = false;
        $this->resetValidation();
        $this->status = CarStatus::Available->value;
    }

    public function updatedCategory(string $value): void
    {
        $categoryNames = [
            'island' => 'Island 4x4',
            'van' => 'Executive & Family Van',
            'suv' => '7-Seater SUV',
            'luxury' => 'VIP Luxury 4x4',
            'electric' => 'Hybrid & EV',
        ];

        if (isset($categoryNames[$value]) && (empty($this->categoryName) || in_array($this->categoryName, $categoryNames, true))) {
            $this->categoryName = $categoryNames[$value];
        }
    }

    public function store(): void
    {
        $this->validate();

        Car::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'category' => $this->category,
            'categoryName' => $this->categoryName,
            'dailyRate' => (int) $this->dailyRate,
            'rating' => (float) $this->rating,
            'reviews' => (int) $this->reviews,
            'seats' => (int) $this->seats,
            'bags' => (int) $this->bags,
            'transmission' => $this->transmission,
            'fuel' => $this->fuel,
            'eco' => $this->eco,
            'status' => CarStatus::from($this->status),
            'image' => $this->image,
            'badge' => $this->badge,
            'badgeColor' => $this->badgeColor ?: 'bg-viaje-400',
        ]);

        session()->flash('message', 'Vehicle successfully added to the fleet.');
        $this->showModal = false;
        $this->resetForm();
    }

    public function edit(int $id): void
    {
        $this->resetForm();
        $car = Car::findOrFail($id);
        $this->carId = $car->id;
        $this->name = $car->name;
        $this->category = $car->category;
        $this->categoryName = $car->categoryName;
        $this->dailyRate = (int) $car->dailyRate;
        $this->rating = (float) $car->rating;
        $this->reviews = (int) $car->reviews;
        $this->seats = (int) $car->seats;
        $this->bags = (int) $car->bags;
        $this->transmission = $car->transmission;
        $this->fuel = $car->fuel;
        $this->eco = $car->eco;
        $this->status = $car->status instanceof CarStatus ? $car->status->value : (string) $car->status;
        $this->image = $car->image;
        $this->badge = $car->badge;
        $this->badgeColor = $car->badgeColor;

        $this->isEditMode = true;
        $this->showModal = true;
    }

    public function update(): void
    {
        $this->validate();

        if (!$this->carId) {
            abort(400, 'Missing vehicle ID for update.');
        }

        $car = Car::findOrFail($this->carId);
        $car->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'category' => $this->category,
            'categoryName' => $this->categoryName,
            'dailyRate' => (int) $this->dailyRate,
            'rating' => (float) $this->rating,
            'reviews' => (int) $this->reviews,
            'seats' => (int) $this->seats,
            'bags' => (int) $this->bags,
            'transmission' => $this->transmission,
            'fuel' => $this->fuel,
            'eco' => $this->eco,
            'status' => CarStatus::from($this->status),
            'image' => $this->image,
            'badge' => $this->badge,
            'badgeColor' => $this->badgeColor ?: 'bg-viaje-400',
        ]);

        session()->flash('message', 'Vehicle details successfully updated.');
        $this->showModal = false;
        $this->resetForm();
    }

    public function delete(int $id): void
    {
        Car::findOrFail($id)->delete();
        session()->flash('message', 'Vehicle has been removed from the fleet.');
    }

    public function render()
    {
        $query = Car::with(['bookings' => function ($q) {
            $q->select(['id', 'car_id', 'pickup_date', 'dropoff_date'])
                ->whereIn('booking_status', [BookingStatus::Confirmed->value, BookingStatus::Paid->value])
                ->orderBy('pickup_date', 'asc');
        }]);

        if ($this->filterCategory) {
            $query->where('category', $this->filterCategory);
        }

        if ($this->filterStatus) {
            $query->where('status', $this->filterStatus);
        }

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('categoryName', 'like', '%' . $this->search . '%')
                    ->orWhere('transmission', 'like', '%' . $this->search . '%')
                    ->orWhere('fuel', 'like', '%' . $this->search . '%');
            });
        }

        $cars = $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate(10);

        return view('livewire.admin.car-manager', [
            'cars' => $cars,
        ]);
    }
}
