<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RevenueChart extends Component
{
    public $chartLabels = [];
    public $chartData = [];

    public function mount()
    {
        $this->loadRevenueData();
    }

    #[On('booking-updated')]
    public function loadRevenueData()
    {
        $startDate = Carbon::now()->subMonths(5)->startOfMonth();

        // Single query fetching last 6 months aggregated in memory, avoiding N-query loop
        $monthlyTotals = Booking::whereIn('booking_status', ['paid', 'confirmed', 'finished'])
            ->where('created_at', '>=', $startDate)
            ->get(['created_at', 'total_amount'])
            ->groupBy(fn ($b) => Carbon::parse($b->created_at)->format('Y-m'));

        $months = [];
        $revenues = [];

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $months[] = $month->format('M Y');
            $key = $month->format('Y-m');

            $revenues[] = (float) ($monthlyTotals->get($key)?->sum('total_amount') ?? 0);
        }

        $this->chartLabels = $months;
        $this->chartData = $revenues;
    }

    public function render()
    {
        return view('livewire.admin.revenue-chart');
    }
}
