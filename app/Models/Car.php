<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CarStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'category',
        'categoryName',
        'dailyRate',
        'rating',
        'reviews',
        'seats',
        'bags',
        'transmission',
        'fuel',
        'eco',
        'image',
        'badge',
        'badgeColor',
    ];

    protected function casts(): array
    {
        return [
            'status' => CarStatus::class,
            'dailyRate' => 'float',
            'rating' => 'float',
            'reviews' => 'integer',
            'seats' => 'integer',
            'bags' => 'integer',
        ];
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
