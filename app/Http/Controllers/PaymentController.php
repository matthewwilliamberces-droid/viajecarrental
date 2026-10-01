<?php

namespace App\Http\Controllers;

use App\Enums\BookingStatus;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function success(Request $request, $bookingRef)
    {
        $booking = Booking::with('car')->where('booking_reference', $bookingRef)->firstOrFail();

        // Check if booking is pending and transition to confirmed
        if ($booking->booking_status === BookingStatus::Pending) {
            $booking->update(['booking_status' => BookingStatus::Confirmed]);

            try {
                Mail::to($booking->customer_email)
                    ->send(new \App\Mail\CustomerBookingConfirmation($booking));
            } catch (\Exception $e) {
                Log::error('Failed to send booking emails: ' . $e->getMessage());
            }
        }

        return redirect('/')->with('success', 'Payment successful! Your booking is confirmed.');
    }

    public function cancel(Request $request, $bookingRef)
    {
        $booking = Booking::where('booking_reference', $bookingRef)->firstOrFail();

        if ($booking->booking_status === BookingStatus::Pending) {
            $booking->update(['booking_status' => BookingStatus::Cancelled]);
        }

        return redirect('/')->with('error', 'Payment was cancelled. Your booking was not completed.');
    }
}
