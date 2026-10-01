<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            
            // Trip Details
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->date('pickup_date');
            $table->string('pickup_time');
            $table->date('dropoff_date');
            $table->string('dropoff_time');
            
            // Customer Details
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->string('flight_number')->nullable();
            
            // Add-ons & Options
            $table->boolean('addon_cdw')->default(false);
            $table->boolean('addon_driver')->default(false);
            $table->boolean('addon_toll')->default(false);
            
            // Financials
            $table->string('promo_code')->nullable();
            $table->decimal('base_rate', 10, 2);
            $table->decimal('tax_amount', 10, 2);
            $table->decimal('total_amount', 10, 2);
            
            // Payment & Status
            $table->string('payment_method');
            $table->string('booking_status')->default('pending');
            $table->string('booking_reference')->unique();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
