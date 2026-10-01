<?php

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Support\Facades\Mail;

beforeEach(function () {
    Mail::fake();
});

test('a user can successfully book an available car', function () {
    $car = Car::create([
        'name' => 'Suzuki Jimny 4x4 Test',
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
        'image' => 'https://example.com/jimny.jpg',
        'badge' => 'Favorite',
        'badgeColor' => 'bg-gold',
        'status' => 'Available',
    ]);

    $payload = [
        'car_id' => $car->id,
        'renter' => [
            'name' => 'Juan Dela Cruz',
            'phone' => '09171234567',
            'email' => 'juan@example.com',
            'flight' => 'PR123',
        ],
        'trip' => [
            'pickupLocation' => 'Manila NAIA Terminal 3 (MNL)',
            'dropoffLocation' => 'Manila NAIA Terminal 3 (MNL)',
            'pickupDate' => '2026-10-10',
            'pickupTime' => '10:00',
            'dropoffDate' => '2026-10-12',
            'dropoffTime' => '10:00',
        ],
        'addons' => [
            'fullInsurance' => true,
            'chauffeur' => false,
            'rfidLoad' => true,
        ],
        'promoCode' => 'ISLAND2024',
        'paymentMethod' => 'gcash',
    ];

    $response = $this->postJson('/bookings', $payload);

    $response->assertStatus(200)
             ->assertJsonPath('success', true);

    $this->assertDatabaseHas('bookings', [
        'car_id' => $car->id,
        'customer_email' => 'juan@example.com',
        'customer_name' => 'Juan Dela Cruz',
    ]);
});

test('booking prevents double-booking on overlapping dates', function () {
    $car = Car::create([
        'name' => 'Toyota Fortuner Test',
        'category' => 'suv',
        'categoryName' => 'SUV',
        'dailyRate' => 4000,
        'rating' => 4.9,
        'reviews' => 12,
        'seats' => 7,
        'bags' => 5,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '12 km/L',
        'image' => 'https://example.com/fortuner.jpg',
        'badge' => 'Popular',
        'badgeColor' => 'bg-blue',
        'status' => 'Available',
    ]);

    // Create an existing booking from Oct 10 to Oct 15
    Booking::create([
        'car_id' => $car->id,
        'pickup_location' => 'NAIA',
        'dropoff_location' => 'NAIA',
        'pickup_date' => '2026-10-10',
        'pickup_time' => '10:00',
        'dropoff_date' => '2026-10-15',
        'dropoff_time' => '10:00',
        'customer_name' => 'Existing Customer',
        'customer_phone' => '09189999999',
        'customer_email' => 'existing@example.com',
        'base_rate' => 20000,
        'tax_amount' => 2400,
        'total_amount' => 22400,
        'payment_method' => 'gcash',
        'booking_status' => 'confirmed',
        'booking_reference' => 'VJ-TEST01',
    ]);

    // Attempt overlapping booking (Oct 12 to Oct 18)
    $payload = [
        'car_id' => $car->id,
        'renter' => [
            'name' => 'Attacker Renter',
            'phone' => '09170000000',
            'email' => 'attacker@example.com',
        ],
        'trip' => [
            'pickupDate' => '2026-10-12',
            'dropoffDate' => '2026-10-18',
        ],
    ];

    $response = $this->postJson('/bookings', $payload);

    $response->assertStatus(422)
             ->assertJsonPath('success', false)
             ->assertJsonPath('message', 'This vehicle is already booked for the selected dates.');
});

test('booking fails if rental duration is less than 1 day', function () {
    $car = Car::create([
        'name' => 'BYD Atto 3 Test',
        'category' => 'electric',
        'categoryName' => 'Electric',
        'dailyRate' => 3500,
        'rating' => 4.8,
        'reviews' => 5,
        'seats' => 5,
        'bags' => 3,
        'transmission' => 'Automatic',
        'fuel' => 'Electric',
        'eco' => '400 km',
        'image' => 'https://example.com/atto.jpg',
        'badge' => 'Eco',
        'badgeColor' => 'bg-green',
        'status' => 'Available',
    ]);

    $payload = [
        'car_id' => $car->id,
        'renter' => [
            'name' => 'Short Stay',
            'phone' => '09171112222',
            'email' => 'short@example.com',
            'flight' => 'PR123',
        ],
        'trip' => [
            'pickupLocation' => 'NAIA',
            'dropoffLocation' => 'NAIA',
            'pickupDate' => '2026-10-10',
            'pickupTime' => '10:00',
            'dropoffDate' => '2026-10-10', // 0 days diff
            'dropoffTime' => '10:00',
        ],
        'addons' => [
            'fullInsurance' => false,
            'chauffeur' => false,
            'rfidLoad' => false,
        ],
        'promoCode' => '',
        'paymentMethod' => 'gcash',
    ];

    $response = $this->json('POST', '/bookings', $payload);
    // dump($response->headers->get('Location'));
    expect($response->status())->toBe(422);
});

test('availability api endpoint returns booked car ids', function () {
    $car = Car::create([
        'name' => 'Hyundai Staria Test',
        'category' => 'van',
        'categoryName' => 'Van',
        'dailyRate' => 6000,
        'rating' => 4.9,
        'reviews' => 8,
        'seats' => 10,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '10 km/L',
        'image' => 'https://example.com/staria.jpg',
        'badge' => 'VIP',
        'badgeColor' => 'bg-purple',
        'status' => 'Available',
    ]);

    Booking::create([
        'car_id' => $car->id,
        'pickup_location' => 'NAIA',
        'dropoff_location' => 'NAIA',
        'pickup_date' => '2026-11-01',
        'pickup_time' => '10:00',
        'dropoff_date' => '2026-11-05',
        'dropoff_time' => '10:00',
        'customer_name' => 'Booked Person',
        'customer_phone' => '09178888888',
        'customer_email' => 'booked@example.com',
        'base_rate' => 24000,
        'tax_amount' => 2880,
        'total_amount' => 26880,
        'payment_method' => 'card',
        'booking_status' => 'confirmed',
        'booking_reference' => 'VJ-NOV01',
    ]);

    $response = $this->getJson('/api/availability?pickup_date=2026-11-02&dropoff_date=2026-11-04');

    $response->assertStatus(200)
             ->assertJson([$car->id]);
});

test('stripe payment success confirms booking and dispatches confirmation mail', function () {
    $car = Car::create([
        'name' => 'Stripe Car',
        'category' => 'suv',
        'categoryName' => 'SUV',
        'dailyRate' => 3000,
        'rating' => 5.0,
        'reviews' => 5,
        'seats' => 5,
        'bags' => 3,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '12 km/L',
        'image' => 'https://example.com/suv.jpg',
        'status' => 'Available',
    ]);

    $booking = Booking::create([
        'car_id' => $car->id,
        'pickup_location' => 'NAIA',
        'dropoff_location' => 'NAIA',
        'pickup_date' => '2026-12-01',
        'pickup_time' => '10:00',
        'dropoff_date' => '2026-12-03',
        'dropoff_time' => '10:00',
        'customer_name' => 'Stripe Tester',
        'customer_phone' => '09171234567',
        'customer_email' => 'stripe@example.com',
        'base_rate' => 6000,
        'tax_amount' => 720,
        'total_amount' => 6720,
        'payment_method' => 'card',
        'booking_status' => \App\Enums\BookingStatus::Pending,
        'booking_reference' => 'VJ-STRIPE01',
    ]);

    $response = $this->get(route('payment.success', ['booking' => 'VJ-STRIPE01']));

    $response->assertRedirect('/')
             ->assertSessionHas('success');

    $booking->refresh();
    expect($booking->booking_status)->toBe(\App\Enums\BookingStatus::Confirmed);

    Mail::assertQueued(\App\Mail\CustomerBookingConfirmation::class, function ($mail) use ($booking) {
        return $mail->hasTo('stripe@example.com');
    });
});

test('stripe payment cancel marks pending booking as cancelled', function () {
    $car = Car::create([
        'name' => 'Cancel Car',
        'category' => 'sedan',
        'categoryName' => 'Sedan',
        'dailyRate' => 2000,
        'rating' => 5.0,
        'reviews' => 5,
        'seats' => 5,
        'bags' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'eco' => '15 km/L',
        'image' => 'https://example.com/sedan.jpg',
        'status' => 'Available',
    ]);

    $booking = Booking::create([
        'car_id' => $car->id,
        'pickup_location' => 'NAIA',
        'dropoff_location' => 'NAIA',
        'pickup_date' => '2026-12-05',
        'pickup_time' => '10:00',
        'dropoff_date' => '2026-12-07',
        'dropoff_time' => '10:00',
        'customer_name' => 'Cancel Tester',
        'customer_phone' => '09171234567',
        'customer_email' => 'cancel@example.com',
        'base_rate' => 4000,
        'tax_amount' => 480,
        'total_amount' => 4480,
        'payment_method' => 'card',
        'booking_status' => \App\Enums\BookingStatus::Pending,
        'booking_reference' => 'VJ-CANCEL01',
    ]);

    $response = $this->get(route('payment.cancel', ['booking' => 'VJ-CANCEL01']));

    $response->assertRedirect('/')
             ->assertSessionHas('error');

    $booking->refresh();
    expect($booking->booking_status)->toBe(\App\Enums\BookingStatus::Cancelled);
});

