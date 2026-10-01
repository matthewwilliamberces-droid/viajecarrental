<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class FeaturedFleetShowcase extends Component
{
    public function render()
    {
        $featuredCars = Car::whereIn('status', ['Available', 'Rented'])
            ->whereBetween('rating', [4.0, 5.0])
            ->orderBy('rating', 'desc')
            ->limit(5)
            ->get();

        return view('livewire.featured-fleet-showcase', [
            'featuredCars' => $featuredCars
        ]);
    }
}
