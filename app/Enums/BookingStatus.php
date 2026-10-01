<?php

declare(strict_types=1);

namespace App\Enums;

enum BookingStatus: string
{
    case Pending = 'pending';
    case Confirmed = 'confirmed';
    case Paid = 'paid';
    case Cancelled = 'cancelled';
    case Finished = 'finished';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pending Payment',
            self::Confirmed => 'Confirmed',
            self::Paid => 'Paid & Active',
            self::Cancelled => 'Cancelled',
            self::Finished => 'Completed',
        };
    }

    public function badgeClasses(): string
    {
        return match ($this) {
            self::Pending => 'bg-amber-500/10 text-amber-400 border border-amber-500/20',
            self::Confirmed => 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20',
            self::Paid => 'bg-cyan-500/10 text-cyan-400 border border-cyan-500/20',
            self::Cancelled => 'bg-rose-500/10 text-rose-400 border border-rose-500/20',
            self::Finished => 'bg-zinc-500/10 text-zinc-400 border border-zinc-500/20',
        };
    }

    public function isHold(): bool
    {
        return in_array($this, [self::Pending, self::Confirmed, self::Paid], true);
    }
}
