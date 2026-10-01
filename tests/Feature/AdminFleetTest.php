<?php

use App\Models\Car;
use App\Models\User;

test('unauthenticated guests cannot access admin dashboard', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect('/loginAdmin');
});

test('authenticated admin can access dashboard', function () {
    $admin = User::factory()->create();

    $response = $this->actingAs($admin)->get('/dashboard');

    $response->assertStatus(200);
});

test('admin can view fleet cars on home page', function () {
    $car = Car::create([
        'name' => 'Nissan Navara Test',
        'category' => 'island',
        'categoryName' => '4x4 Double Cab',
        'dailyRate' => 3700,
        'rating' => 4.9,
        'reviews' => 15,
        'seats' => 5,
        'bags' => 4,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '13 km/L',
        'image' => 'https://example.com/navara.jpg',
        'badge' => 'Offroad',
        'badgeColor' => 'bg-amber',
        'status' => 'Available',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200)
             ->assertSee('Nissan Navara Test');
});
