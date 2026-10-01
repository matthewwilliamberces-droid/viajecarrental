<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->index(['car_id', 'booking_status']);
            $table->index(['booking_status', 'created_at']);
            $table->index(['pickup_date', 'dropoff_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropIndex(['car_id', 'booking_status']);
            $table->dropIndex(['booking_status', 'created_at']);
            $table->dropIndex(['pickup_date', 'dropoff_date']);
        });
    }
};
