<?php

declare(strict_types=1);

namespace App\Enums;

enum CarStatus: string
{
    case Available = 'Available';
    case Rented = 'Rented';
    case Maintenance = 'Maintenance';

    public function label(): string
    {
        return match ($this) {
            self::Available => 'Available',
            self::Rented => 'Currently Rented',
            self::Maintenance => 'Under Maintenance',
        };
    }

    public function badgeClasses(): string
    {
        return match ($this) {
            self::Available => 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20',
            self::Rented => 'bg-amber-500/10 text-amber-400 border border-amber-500/20',
            self::Maintenance => 'bg-rose-500/10 text-rose-400 border border-rose-500/20',
        };
    }
}
