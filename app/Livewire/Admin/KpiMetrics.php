<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Booking;
use Carbon\Carbon;

class KpiMetrics extends Component
{
    #[On('booking-updated')]
    public function render()
    {
        $today = Carbon::today();
        
        $pendingAction = Booking::where('booking_status', 'pending')->count();
        
        $activeToday = Booking::whereIn('booking_status', ['confirmed', 'paid', 'finished'])
            ->whereDate('pickup_date', '<=', $today)
            ->whereDate('dropoff_date', '>=', $today)
            ->count();
            
        $upcomingPickups = Booking::whereIn('booking_status', ['confirmed', 'paid', 'pending'])
            ->whereDate('pickup_date', '>', $today)
            ->whereDate('pickup_date', '<=', $today->copy()->addDays(2))
            ->count();
            
        $monthlyRevenue = Booking::whereIn('booking_status', ['paid', 'finished'])
            ->whereMonth('created_at', $today->month)
            ->whereYear('created_at', $today->year)
            ->sum('total_amount');

        return view('livewire.admin.kpi-metrics', [
            'pendingAction' => $pendingAction,
            'activeToday' => $activeToday,
            'upcomingPickups' => $upcomingPickups,
            'monthlyRevenue' => $monthlyRevenue
        ]);
    }
}
