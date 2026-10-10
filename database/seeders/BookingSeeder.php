<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\BookingStatus;
use App\Models\Booking;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = Car::all()->keyBy('id');
        if ($cars->isEmpty()) {
            return;
        }

        $now = Carbon::now();

        $bookingTemplates = [
            // --- 1. CURRENTLY ACTIVE ON-ROAD RENTALS (Active Today KPI) ---
            [
                'car_id' => 1, // Jimny
                'pickup_location' => 'NAIA Terminal 3',
                'dropoff_location' => 'Mandaluyong Warehouse',
                'pickup_offset_days' => -2,
                'dropoff_offset_days' => 3,
                'pickup_time' => '09:00',
                'dropoff_time' => '17:00',
                'customer_name' => 'Carlos Antonio Mendoza',
                'customer_phone' => '+63 917 882 1940',
                'customer_email' => 'carlos.mendoza@gmail.com',
                'flight_number' => 'PR 102 (LAX-MNL)',
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Paid->value,
                'booking_reference' => 'VJ-2026-88192',
                'created_offset_days' => -5,
            ],
            [
                'car_id' => 2, // HiAce VIP
                'pickup_location' => 'SM MOA',
                'dropoff_location' => 'SM MOA',
                'pickup_offset_days' => -1,
                'dropoff_offset_days' => 4,
                'pickup_time' => '10:30',
                'dropoff_time' => '14:00',
                'customer_name' => 'Maria Santos-Reyes',
                'customer_phone' => '+63 920 945 3211',
                'customer_email' => 'maria.reyes@yahoo.com',
                'flight_number' => null,
                'addon_cdw' => true,
                'addon_driver' => true,
                'addon_toll' => true,
                'payment_method' => 'gcash',
                'booking_status' => BookingStatus::Confirmed->value,
                'booking_reference' => 'VJ-2026-94301',
                'created_offset_days' => -3,
            ],
            [
                'car_id' => 4, // Prado VX
                'pickup_location' => 'NAIA Terminal 1',
                'dropoff_location' => 'NAIA Terminal 1',
                'pickup_offset_days' => 0,
                'dropoff_offset_days' => 5,
                'pickup_time' => '13:00',
                'dropoff_time' => '11:00',
                'customer_name' => 'Kenji Takahashi',
                'customer_phone' => '+63 918 334 9012',
                'customer_email' => 'kenji.takahashi@tokyo-ventures.jp',
                'flight_number' => 'NH 869 (HND-MNL)',
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Paid->value,
                'booking_reference' => 'VJ-2026-33902',
                'created_offset_days' => -2,
            ],

            // --- 2. UPCOMING PICKUPS (Next 1-2 Days KPI) ---
            [
                'car_id' => 3, // Fortuner
                'pickup_location' => 'Araneta Cubao',
                'dropoff_location' => 'Araneta Cubao',
                'pickup_offset_days' => 1,
                'dropoff_offset_days' => 4,
                'pickup_time' => '08:00',
                'dropoff_time' => '18:00',
                'customer_name' => 'Atty. Juan Paolo Cruz',
                'customer_phone' => '+63 919 443 2189',
                'customer_email' => 'jp.cruz@lawfirm.ph',
                'flight_number' => null,
                'addon_cdw' => false,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'gcash',
                'booking_status' => BookingStatus::Confirmed->value,
                'booking_reference' => 'VJ-2026-44219',
                'created_offset_days' => -1,
            ],
            [
                'car_id' => 7, // Zenix Hybrid
                'pickup_location' => 'NAIA Terminal 2',
                'dropoff_location' => 'Mandaluyong Warehouse',
                'pickup_offset_days' => 2,
                'dropoff_offset_days' => 6,
                'pickup_time' => '15:30',
                'dropoff_time' => '12:00',
                'customer_name' => 'David Michael Miller',
                'customer_phone' => '+63 917 554 8872',
                'customer_email' => 'david.miller@expatmanila.com',
                'flight_number' => 'SQ 918 (SIN-MNL)',
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Paid->value,
                'booking_reference' => 'VJ-2026-55872',
                'created_offset_days' => -2,
            ],

            // --- 3. PENDING ACTION DISPATCHES (Pending Action KPI) ---
            [
                'car_id' => 5, // Everest
                'pickup_location' => 'SM Megamall',
                'dropoff_location' => 'SM Megamall',
                'pickup_offset_days' => 2,
                'dropoff_offset_days' => 5,
                'pickup_time' => '11:00',
                'dropoff_time' => '17:00',
                'customer_name' => 'Sarah Jane Lim',
                'customer_phone' => '+63 922 876 5432',
                'customer_email' => 'sarah.lim@bpo-global.com',
                'flight_number' => null,
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => false,
                'payment_method' => 'cash',
                'booking_status' => BookingStatus::Pending->value,
                'booking_reference' => 'VJ-2026-87654',
                'created_offset_days' => 0,
            ],
            [
                'car_id' => 9, // Navara PRO-4X
                'pickup_location' => 'Mandaluyong Warehouse',
                'dropoff_location' => 'Mandaluyong Warehouse',
                'pickup_offset_days' => 3,
                'dropoff_offset_days' => 7,
                'pickup_time' => '07:30',
                'dropoff_time' => '19:00',
                'customer_name' => 'Mark Anthony Villanueva',
                'customer_phone' => '+63 908 765 4321',
                'customer_email' => 'mark.villanueva@techstart.ph',
                'flight_number' => null,
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'gcash',
                'booking_status' => BookingStatus::Pending->value,
                'booking_reference' => 'VJ-2026-76543',
                'created_offset_days' => 0,
            ],

            // --- 4. CANCELLED RESERVATIONS ---
            [
                'car_id' => 8, // BYD Atto 3
                'pickup_location' => 'SM MOA',
                'dropoff_location' => 'SM MOA',
                'pickup_offset_days' => 4,
                'dropoff_offset_days' => 6,
                'pickup_time' => '14:00',
                'dropoff_time' => '10:00',
                'customer_name' => 'Jessica Taylor',
                'customer_phone' => '+63 917 123 4567',
                'customer_email' => 'jessica.taylor@travelnomad.io',
                'flight_number' => 'CX 901 (HKG-MNL)',
                'addon_cdw' => false,
                'addon_driver' => false,
                'addon_toll' => false,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Cancelled->value,
                'booking_reference' => 'VJ-2026-12345',
                'created_offset_days' => -4,
            ],

            // --- 5. COMPLETED HISTORICAL BOOKINGS (Populating 6-Month Revenue Trendline) ---
            [
                'car_id' => 2, // HiAce Super Grandia
                'pickup_location' => 'NAIA Terminal 3',
                'dropoff_location' => 'NAIA Terminal 3',
                'pickup_offset_days' => -25,
                'dropoff_offset_days' => -20,
                'pickup_time' => '08:00',
                'dropoff_time' => '16:00',
                'customer_name' => 'Dr. Fernando Roxas',
                'customer_phone' => '+63 917 998 7766',
                'customer_email' => 'dr.roxas@medgroup.ph',
                'flight_number' => 'PR 115 (SFO-MNL)',
                'addon_cdw' => true,
                'addon_driver' => true,
                'addon_toll' => true,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Finished->value,
                'booking_reference' => 'VJ-2026-10294',
                'created_offset_days' => -30,
            ],
            [
                'car_id' => 4, // Prado
                'pickup_location' => 'Mandaluyong Warehouse',
                'dropoff_location' => 'Mandaluyong Warehouse',
                'pickup_offset_days' => -50,
                'dropoff_offset_days' => -45,
                'pickup_time' => '10:00',
                'dropoff_time' => '18:00',
                'customer_name' => 'Eduardo Zobel-Concepcion',
                'customer_phone' => '+63 918 221 4455',
                'customer_email' => 'ezc@holdingcorp.com',
                'flight_number' => null,
                'addon_cdw' => true,
                'addon_driver' => true,
                'addon_toll' => true,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Finished->value,
                'booking_reference' => 'VJ-2026-21849',
                'created_offset_days' => -55,
            ],
            [
                'car_id' => 6, // Staria VIP
                'pickup_location' => 'SM Megamall',
                'dropoff_location' => 'NAIA Terminal 1',
                'pickup_offset_days' => -80,
                'dropoff_offset_days' => -76,
                'pickup_time' => '09:00',
                'dropoff_time' => '15:00',
                'customer_name' => 'Liam Fitzpatrick',
                'customer_phone' => '+63 919 332 5566',
                'customer_email' => 'liam.fitz@ireland-tech.ie',
                'flight_number' => 'QR 932 (DOH-MNL)',
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'card',
                'booking_status' => BookingStatus::Finished->value,
                'booking_reference' => 'VJ-2026-33921',
                'created_offset_days' => -85,
            ],
            [
                'car_id' => 3, // Fortuner
                'pickup_location' => 'NAIA Terminal 3',
                'dropoff_location' => 'Mandaluyong Warehouse',
                'pickup_offset_days' => -110,
                'dropoff_offset_days' => -105,
                'pickup_time' => '11:00',
                'dropoff_time' => '14:00',
                'customer_name' => 'Engr. Roberto Dalisay',
                'customer_phone' => '+63 920 112 3344',
                'customer_email' => 'roberto.dalisay@buildcorp.ph',
                'flight_number' => null,
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => true,
                'payment_method' => 'gcash',
                'booking_status' => BookingStatus::Finished->value,
                'booking_reference' => 'VJ-2026-44812',
                'created_offset_days' => -115,
            ],
            [
                'car_id' => 1, // Jimny
                'pickup_location' => 'Mandaluyong Warehouse',
                'dropoff_location' => 'Mandaluyong Warehouse',
                'pickup_offset_days' => -140,
                'dropoff_offset_days' => -136,
                'pickup_time' => '07:00',
                'dropoff_time' => '17:00',
                'customer_name' => 'Bea Patricia Soriano',
                'customer_phone' => '+63 921 556 7788',
                'customer_email' => 'bea.soriano@adventureph.com',
                'flight_number' => null,
                'addon_cdw' => true,
                'addon_driver' => false,
                'addon_toll' => false,
                'payment_method' => 'gcash',
                'booking_status' => BookingStatus::Finished->value,
                'booking_reference' => 'VJ-2026-55923',
                'created_offset_days' => -145,
            ],
        ];

        foreach ($bookingTemplates as $data) {
            $car = $cars->get($data['car_id']) ?? $cars->first();
            $dailyRate = (float) $car->dailyRate;

            $pickupDate = (clone $now)->addDays($data['pickup_offset_days'])->format('Y-m-d');
            $dropoffDate = (clone $now)->addDays($data['dropoff_offset_days'])->format('Y-m-d');
            $createdAt = (clone $now)->addDays($data['created_offset_days']);

            $days = max(1, (int) round((strtotime($dropoffDate) - strtotime($pickupDate)) / 86400));
            $baseRate = $dailyRate * $days;

            $cdwCost = $data['addon_cdw'] ? (800 * $days) : 0;
            $driverCost = $data['addon_driver'] ? (1500 * $days) : 0;
            $tollCost = $data['addon_toll'] ? 500 : 0;

            // Location fees (₱250 for airports and malls)
            $locationFee = 0;
            if ($data['pickup_location'] !== 'Mandaluyong Warehouse') {
                $locationFee += 250;
            }
            if ($data['dropoff_location'] !== 'Mandaluyong Warehouse') {
                $locationFee += 250;
            }

            $subtotal = $baseRate + $cdwCost + $driverCost + $tollCost + $locationFee;
            $taxAmount = round($subtotal * 0.12, 2);
            $totalAmount = round($subtotal + $taxAmount, 2);

            Booking::updateOrCreate(
                ['booking_reference' => $data['booking_reference']],
                [
                    'car_id' => $car->id,
                    'pickup_location' => $data['pickup_location'],
                    'dropoff_location' => $data['dropoff_location'],
                    'pickup_date' => $pickupDate,
                    'pickup_time' => $data['pickup_time'],
                    'dropoff_date' => $dropoffDate,
                    'dropoff_time' => $data['dropoff_time'],
                    'customer_name' => $data['customer_name'],
                    'customer_phone' => $data['customer_phone'],
                    'customer_email' => $data['customer_email'],
                    'flight_number' => $data['flight_number'],
                    'addon_cdw' => $data['addon_cdw'],
                    'addon_driver' => $data['addon_driver'],
                    'addon_toll' => $data['addon_toll'],
                    'promo_code' => null,
                    'base_rate' => $baseRate,
                    'tax_amount' => $taxAmount,
                    'total_amount' => $totalAmount,
                    'payment_method' => $data['payment_method'],
                    'booking_status' => $data['booking_status'],
                    'created_at' => $createdAt,
                    'updated_at' => $createdAt,
                ]
            );
        }
    }
}
