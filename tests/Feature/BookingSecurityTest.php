<?php

declare(strict_types=1);

use App\Models\Car;
use Illuminate\Support\Facades\Mail;

beforeEach(function () {
    Mail::fake();
});

test('public booking submission is rate limited after 10 requests per minute', function () {
    $car = Car::create([
        'name' => 'Rate Limit Test Car',
        'category' => 'island',
        'categoryName' => 'Island 4x4',
        'dailyRate' => 2500,
        'rating' => 5.0,
        'reviews' => 10,
        'seats' => 4,
        'bags' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'eco' => '14 km/L',
        'image' => 'https://example.com/car.jpg',
        'status' => 'Available',
    ]);

    $payload = [
        'car_id' => $car->id,
        'renter' => [
            'name' => 'Rate Limited Tester',
            'phone' => '09171234567',
            'email' => 'ratelimit@example.com',
        ],
        'trip' => [
            'pickupLocation' => 'Manila NAIA Terminal 3 (MNL)',
            'dropoffLocation' => 'Manila NAIA Terminal 3 (MNL)',
            'pickupDate' => '2026-11-01',
            'dropoffDate' => '2026-11-03',
        ],
        'paymentMethod' => 'gcash',
    ];

    // Send 10 requests (allowed by throttle:10,1)
    for ($i = 0; $i < 10; $i++) {
        $payload['trip']['pickupDate'] = '2026-11-' . sprintf('%02d', 1 + ($i * 2));
        $payload['trip']['dropoffDate'] = '2026-11-' . sprintf('%02d', 2 + ($i * 2));
        $response = $this->postJson('/bookings', $payload);
        $this->assertNotEquals(429, $response->getStatusCode(), "Request $i was throttled prematurely");
    }

    // 11th request must be throttled with HTTP 429 Too Many Requests
    $payload['trip']['pickupDate'] = '2026-12-01';
    $payload['trip']['dropoffDate'] = '2026-12-03';
    $response = $this->postJson('/bookings', $payload);
    $response->assertStatus(429);
});

test('public availability checks are rate limited after 60 requests per minute', function () {
    for ($i = 0; $i < 60; $i++) {
        $response = $this->getJson('/api/availability?pickup_date=2026-11-01&dropoff_date=2026-11-03');
        $this->assertNotEquals(429, $response->getStatusCode(), "Availability request $i was throttled prematurely");
    }

    // 61st request must be throttled with HTTP 429
    $response = $this->getJson('/api/availability?pickup_date=2026-11-01&dropoff_date=2026-11-03');
    $response->assertStatus(429);
});
