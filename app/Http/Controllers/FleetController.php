<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class FleetController extends Controller
{
    public function show($slug)
    {
        $car = Car::where('slug', $slug)->whereIn('status', ['Available', 'Rented'])->firstOrFail();
        return view('fleet.show', compact('car'));
    }
}
