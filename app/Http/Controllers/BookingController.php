<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\BookingStatus;
use App\Http\Requests\StoreBookingRequest;
use App\Mail\CustomerBookingConfirmation;
use App\Models\Booking;
use App\Models\Car;
use App\Services\BookingPricingService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function __construct(
        protected BookingPricingService $pricingService
    ) {}

    public function store(StoreBookingRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $pickup = $validated['trip']['pickupDate'];
        $dropoff = $validated['trip']['dropoffDate'];

        try {
            $bookingData = DB::transaction(function () use ($validated, $pickup, $dropoff) {
                // Pessimistic lock on the vehicle row to prevent concurrent race condition
                $car = Car::where('id', $validated['car_id'])->lockForUpdate()->first();
                if (!$car) {
                    abort(422, 'This vehicle does not exist.');
                }

                // Check for overlapping non-cancelled bookings with a pessimistic read lock
                $isOverlapping = Booking::where('car_id', $car->id)
                    ->whereNotIn('booking_status', [BookingStatus::Cancelled->value])
                    ->where('pickup_date', '<=', $dropoff)
                    ->where('dropoff_date', '>=', $pickup)
                    ->lockForUpdate()
                    ->exists();

                if ($isOverlapping) {
                    abort(422, 'This vehicle is already booked for the selected dates.');
                }

                // Calculate domain pricing via dedicated service
                $pricing = $this->pricingService->calculate($car, $validated);
                $bookingRef = 'VJ-' . strtoupper(Str::random(6));

                $booking = Booking::create([
                    'car_id' => $car->id,
                    'pickup_location' => $validated['trip']['pickupLocation'] ?? 'Manila NAIA Terminal 3 (MNL)',
                    'dropoff_location' => $validated['trip']['dropoffLocation'] ?? 'Manila NAIA Terminal 3 (MNL)',
                    'pickup_date' => $pickup,
                    'pickup_time' => $validated['trip']['pickupTime'] ?? '10:00',
                    'dropoff_date' => $dropoff,
                    'dropoff_time' => $validated['trip']['dropoffTime'] ?? '10:00',
                    'customer_name' => $validated['renter']['name'],
                    'customer_phone' => !empty($validated['renter']['phone']) ? $validated['renter']['phone'] : 'N/A',
                    'customer_email' => $validated['renter']['email'],
                    'flight_number' => $validated['renter']['flight'] ?? null,
                    'addon_cdw' => !empty($validated['addons']['fullInsurance']),
                    'addon_driver' => !empty($validated['addons']['chauffeur']),
                    'addon_toll' => !empty($validated['addons']['rfidLoad']),
                    'promo_code' => $validated['promoCode'] ?? null,
                    'base_rate' => $pricing['baseRate'],
                    'tax_amount' => $pricing['taxAmount'],
                    'total_amount' => $pricing['grandTotal'],
                    'payment_method' => $validated['paymentMethod'] ?? 'gcash',
                    'booking_status' => BookingStatus::Pending,
                    'booking_reference' => $bookingRef,
                ]);

                return [$booking, $car, $pricing, $bookingRef];
            });
        } catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], $e->getStatusCode());
        }

        [$booking, $car, $pricing, $bookingRef] = $bookingData;
        $paymentMethod = strtolower((string) ($validated['paymentMethod'] ?? 'gcash'));

        // Stripe Checkout integration via Laravel Cashier (Method B: Dynamic Itemized Products)
        if ($paymentMethod === 'card') {
            if (!config('cashier.secret') || config('cashier.secret') === 'your_stripe_secret') {
                return response()->json([
                    'success' => false,
                    'message' => 'Stripe Card Gateway is enabled, but valid test keys (STRIPE_SECRET=sk_test_...) are missing in .env. Please configure Stripe keys to proceed.',
                ], 422);
            }

            try {
                $lineItems = $this->pricingService->buildStripeLineItems($car, $validated, $pricing, $booking);

                $checkout = $booking->checkout($lineItems, [
                    'success_url' => route('payment.success', ['booking' => $bookingRef]) . '?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => route('payment.cancel', ['booking' => $bookingRef]),
                ]);

                return response()->json([
                    'success' => true,
                    'booking_reference' => $bookingRef,
                    'checkout_url' => $checkout->url,
                    'booking' => $booking,
                ]);
            } catch (Exception $e) {
                Log::error('Stripe Checkout Error: ' . $e->getMessage());
                return response()->json([
                    'success' => false,
                    'message' => 'Stripe Checkout Error: ' . $e->getMessage(),
                ], 500);
            }
        }

        // For GCash, Cash, or Mock Gateway: dispatch booking confirmation email with PDF invoice
        try {
            Mail::to($booking->customer_email)
                ->send(new CustomerBookingConfirmation($booking));
        } catch (Exception $e) {
            Log::error('Failed to send booking emails: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'booking_reference' => $bookingRef,
            'booking' => $booking,
        ]);
    }

    public function getBookedDates(int $carId): JsonResponse
    {
        $bookings = Booking::where('car_id', $carId)
            ->whereNotIn('booking_status', [BookingStatus::Cancelled->value])
            ->where('dropoff_date', '>=', now()->toDateString())
            ->get(['pickup_date', 'dropoff_date']);

        $ranges = [];
        foreach ($bookings as $booking) {
            $ranges[] = [
                'from' => $booking->pickup_date,
                'to' => $booking->dropoff_date,
            ];
        }

        return response()->json($ranges);
    }

    public function checkAvailability(Request $request): JsonResponse
    {
        $pickup = $request->input('pickup_date');
        $dropoff = $request->input('dropoff_date');

        if (!$pickup || !$dropoff) {
            return response()->json([]);
        }

        $bookedCarIds = Booking::whereNotIn('booking_status', [BookingStatus::Cancelled->value])
            ->where('pickup_date', '<=', $dropoff)
            ->where('dropoff_date', '>=', $pickup)
            ->pluck('car_id')
            ->unique()
            ->values();

        return response()->json($bookedCarIds);
    }
}