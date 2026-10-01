<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\BookingStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Cashier\Billable;

class Booking extends Model
{
    use Billable;

    protected $fillable = [
        'car_id',
        'pickup_location',
        'dropoff_location',
        'pickup_date',
        'pickup_time',
        'dropoff_date',
        'dropoff_time',
        'customer_name',
        'customer_phone',
        'customer_email',
        'flight_number',
        'addon_cdw',
        'addon_driver',
        'addon_toll',
        'promo_code',
        'base_rate',
        'tax_amount',
        'total_amount',
        'payment_method',
        'booking_status',
        'booking_reference',
        'stripe_id',
        'pm_type',
        'pm_last_four',
        'trial_ends_at',
    ];

    protected function casts(): array
    {
        return [
            'booking_status' => BookingStatus::class,
            'base_rate' => 'float',
            'tax_amount' => 'float',
            'total_amount' => 'float',
            'addon_cdw' => 'boolean',
            'addon_driver' => 'boolean',
            'addon_toll' => 'boolean',
        ];
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class)->withTrashed();
    }

    public function stripeEmail(): string
    {
        return $this->customer_email;
    }

    public function stripeName(): string
    {
        return $this->customer_name;
    }

    public function scopeActiveBetween(Builder $query, string $pickup, string $dropoff): Builder
    {
        return $query->whereNotIn('booking_status', [BookingStatus::Cancelled->value])
            ->where('pickup_date', '<=', $dropoff)
            ->where('dropoff_date', '>=', $pickup);
    }
}
