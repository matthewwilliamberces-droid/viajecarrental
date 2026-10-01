<?php

declare(strict_types=1);

use App\Models\Booking;
use App\Models\Car;
use App\Services\BookingPricingService;

test('pricing service builds itemized stripe line items with exact penny precision', function () {
    $car = Car::create([
        'name' => 'Suzuki Jimny AllGrip 4x4',
        'category' => 'island',
        'categoryName' => 'Island 4x4',
        'dailyRate' => 2799,
        'rating' => 5.0,
        'reviews' => 10,
        'seats' => 4,
        'bags' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'eco' => '14 km/L',
        'image' => 'https://example.com/jimny.jpg',
        'status' => 'Available',
    ]);

    $validated = [
        'car_id' => $car->id,
        'renter' => [
            'name' => 'Stripe Tester',
            'email' => 'stripe@example.com',
            'phone' => '09171234567',
        ],
        'trip' => [
            'pickupLocation' => 'Manila NAIA Terminal 3 (MNL)',
            'dropoffLocation' => 'Manila NAIA Terminal 3 (MNL)',
            'pickupDate' => '2026-11-10',
            'dropoffDate' => '2026-11-13', // 3 days
        ],
        'addons' => [
            'fullInsurance' => true,
            'chauffeur' => false,
            'rfidLoad' => true,
        ],
        'promoCode' => 'ISLAND2024', // 20% discount
        'paymentMethod' => 'card',
    ];

    $service = new BookingPricingService();
    $pricing = $service->calculate($car, $validated);

    $booking = new Booking([
        'pickup_date' => '2026-11-10',
        'dropoff_date' => '2026-11-13',
    ]);

    $lineItems = $service->buildStripeLineItems($car, $validated, $pricing, $booking);

    // 1. Verify structure
    expect($lineItems)->toBeArray()
        ->and(count($lineItems))->toBeGreaterThanOrEqual(3); // Vehicle, Insurance, RFID, Airport, VAT

    // 2. Verify line item names
    $itemNames = array_map(fn ($item) => $item['price_data']['product_data']['name'], $lineItems);
    expect($itemNames[0])->toContain('Suzuki Jimny AllGrip 4x4 (3 Days)')
        ->and($itemNames)->toContain('Full Comprehensive CDW Insurance')
        ->and($itemNames)->toContain('Autosweep & Easytrip RFID Preload')
        ->and($itemNames)->toContain('Value Added Tax (12% VAT)');

    // 3. Verify exact penny precision: Sum of all unit amounts in line items must equal grandTotalCents
    $totalCents = array_sum(array_column(array_column($lineItems, 'price_data'), 'unit_amount'));
    expect($totalCents)->toBe($pricing['grandTotalCents']);
});
