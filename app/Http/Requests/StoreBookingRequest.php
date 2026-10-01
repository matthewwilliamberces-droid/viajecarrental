<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'car_id' => 'required|integer|exists:cars,id',
            'renter.name' => 'required|string|max:255',
            'renter.phone' => 'nullable|string|max:50',
            'renter.email' => 'required|email|max:255',
            'renter.flight' => 'nullable|string|max:50',

            'trip.pickupLocation' => 'nullable|string|max:255',
            'trip.dropoffLocation' => 'nullable|string|max:255',
            'trip.pickupDate' => 'required|date',
            'trip.pickupTime' => 'nullable|string|max:20',
            'trip.dropoffDate' => [
                'required',
                'date',
                'after_or_equal:trip.pickupDate',
                function ($attribute, $value, $fail) {
                    $pickup = $this->input('trip.pickupDate');
                    if (!$pickup || !$value) {
                        return;
                    }
                    $diffDays = Carbon::parse($pickup)->diffInDays(Carbon::parse($value));
                    if ($diffDays < 1) {
                        $fail('Minimum rental duration is 1 day.');
                    }
                    if ($diffDays > 60) {
                        $fail('Maximum rental duration is 60 days.');
                    }
                },
            ],
            'trip.dropoffTime' => 'nullable|string|max:20',

            'addons.fullInsurance' => 'nullable|boolean',
            'addons.chauffeur' => 'nullable|boolean',
            'addons.rfidLoad' => 'nullable|boolean',

            'promoCode' => 'nullable|string|max:30',
            'paymentMethod' => 'nullable|string|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'car_id.required' => 'Please select a valid vehicle.',
            'renter.name.required' => 'Your full name is required.',
            'renter.email.required' => 'A valid contact email address is required.',
            'trip.pickupDate.required' => 'Please select a pickup date.',
            'trip.dropoffDate.required' => 'Please select a dropoff date.',
        ];
    }
}
