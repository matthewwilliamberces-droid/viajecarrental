<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Booking;
use App\Models\Car;
use Carbon\Carbon;

class BookingPricingService
{
    private const VAT_RATE = 0.12;

    public function calculate(Car $car, array $validated): array
    {
        $pickup = $validated['trip']['pickupDate'];
        $dropoff = $validated['trip']['dropoffDate'];

        $start = Carbon::parse($pickup);
        $end = Carbon::parse($dropoff);
        $diffDays = $start->diffInDays($end);
        $calculatedDays = max(1, $diffDays);

        $baseRate = (float) $car->dailyRate * $calculatedDays;

        $dailyAddons = 0;
        if (!empty($validated['addons']['fullInsurance'])) {
            $dailyAddons += 450;
        }
        if (!empty($validated['addons']['chauffeur'])) {
            $dailyAddons += 1200;
        }

        $oneTimeAddons = !empty($validated['addons']['rfidLoad']) ? 1000 : 0;

        $locationFee = 0;
        $pickupLoc = strtolower($validated['trip']['pickupLocation'] ?? '');
        $dropoffLoc = strtolower($validated['trip']['dropoffLocation'] ?? '');

        if ($pickupLoc && !str_contains($pickupLoc, 'warehouse')) {
            $locationFee += 250;
        }
        if ($dropoffLoc && !str_contains($dropoffLoc, 'warehouse')) {
            $locationFee += 250;
        }

        $addonsTotal = ($dailyAddons * $calculatedDays) + $oneTimeAddons + $locationFee;

        $discountPercentage = 0;
        if (!empty($validated['promoCode'])) {
            $code = strtoupper(trim((string) $validated['promoCode']));
            $discountPercentage = match ($code) {
                'ISLAND2024', 'MABUHAY20', 'VIAJE20', 'SUMMER20' => 20,
                default => 10,
            };
        }

        $totalBeforeDiscount = $baseRate + $addonsTotal;
        $discountAmount = $totalBeforeDiscount * ($discountPercentage / 100);

        $subtotal = $totalBeforeDiscount - $discountAmount;
        $taxAmount = $subtotal * self::VAT_RATE;
        $grandTotal = $subtotal + $taxAmount;

        return [
            'days' => $calculatedDays,
            'baseRate' => $baseRate,
            'addonsTotal' => $addonsTotal,
            'discountAmount' => $discountAmount,
            'subtotal' => $subtotal,
            'taxAmount' => $taxAmount,
            'grandTotal' => $grandTotal,
            'grandTotalCents' => (int) round($grandTotal * 100),
        ];
    }

    /**
     * Build dynamic itemized Stripe line items representing vehicles, addons, and VAT.
     */
    public function buildStripeLineItems(Car $car, array $validated, array $pricing, Booking $booking): array
    {
        $days = (int) $pricing['days'];
        $discountMultiplier = 1.0;
        $totalBefore = $pricing['baseRate'] + $pricing['addonsTotal'];
        if ($totalBefore > 0 && $pricing['discountAmount'] > 0) {
            $discountMultiplier = 1.0 - ($pricing['discountAmount'] / $totalBefore);
        }

        $promoNote = !empty($validated['promoCode'])
            ? ' [' . strtoupper(trim((string) $validated['promoCode'])) . ' applied]'
            : '';

        $lineItems = [];

        // 1. Base Vehicle Rental Product
        $vehicleAmount = (int) round(($pricing['baseRate'] * $discountMultiplier) * 100);
        $lineItems[] = [
            'price_data' => [
                'currency' => 'php',
                'product_data' => [
                    'name' => $car->name . ' (' . $days . ' ' . ($days === 1 ? 'Day' : 'Days') . ')' . $promoNote,
                    'images' => !empty($car->image) ? [$car->image] : [],
                    'description' => "Rental: {$booking->pickup_date} to {$booking->dropoff_date}",
                ],
                'unit_amount' => $vehicleAmount,
            ],
            'quantity' => 1,
        ];

        // 2. Comprehensive CDW Insurance
        if (!empty($validated['addons']['fullInsurance'])) {
            $cdwAmount = (int) round(((450 * $days) * $discountMultiplier) * 100);
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'php',
                    'product_data' => [
                        'name' => 'Full Comprehensive CDW Insurance',
                        'description' => "Zero-excess collision damage waiver protection ({$days} days)",
                    ],
                    'unit_amount' => $cdwAmount,
                ],
                'quantity' => 1,
            ];
        }

        // 3. Dedicated Chauffeur Service
        if (!empty($validated['addons']['chauffeur'])) {
            $driverAmount = (int) round(((1200 * $days) * $discountMultiplier) * 100);
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'php',
                    'product_data' => [
                        'name' => 'Dedicated Chauffeur & Island Guide',
                        'description' => "Professional DOT-accredited driver ({$days} days)",
                    ],
                    'unit_amount' => $driverAmount,
                ],
                'quantity' => 1,
            ];
        }

        // 4. Express RFID Tollway Preload
        if (!empty($validated['addons']['rfidLoad'])) {
            $rfidAmount = (int) round((1000 * $discountMultiplier) * 100);
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'php',
                    'product_data' => [
                        'name' => 'Autosweep & Easytrip RFID Preload',
                        'description' => 'Preloaded toll credit for Luzon expressways (SLEX, NLEX, SCTEX)',
                    ],
                    'unit_amount' => $rfidAmount,
                ],
                'quantity' => 1,
            ];
        }

        // 5. Terminal Handover & Logistics Surcharges
        $pickupLoc = strtolower($validated['trip']['pickupLocation'] ?? '');
        $dropoffLoc = strtolower($validated['trip']['dropoffLocation'] ?? '');
        $locationFee = 0;
        if ($pickupLoc && !str_contains($pickupLoc, 'warehouse')) {
            $locationFee += 250;
        }
        if ($dropoffLoc && !str_contains($dropoffLoc, 'warehouse')) {
            $locationFee += 250;
        }

        if ($locationFee > 0) {
            $locAmount = (int) round(($locationFee * $discountMultiplier) * 100);
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'php',
                    'product_data' => [
                        'name' => 'Airport / Terminal Handover Service',
                        'description' => 'Vehicle delivery and terminal handover logistics',
                    ],
                    'unit_amount' => $locAmount,
                ],
                'quantity' => 1,
            ];
        }

        // 6. Value Added Tax (12% VAT) - exact penny balancing
        $currentSumCents = array_sum(array_column(array_column($lineItems, 'price_data'), 'unit_amount'));
        $taxCents = $pricing['grandTotalCents'] - $currentSumCents;

        if ($taxCents > 0) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'php',
                    'product_data' => [
                        'name' => 'Value Added Tax (12% VAT)',
                        'description' => 'Philippine Bureau of Internal Revenue (BIR) statutory tax',
                    ],
                    'unit_amount' => $taxCents,
                ],
                'quantity' => 1,
            ];
        }

        return $lineItems;
    }
}
