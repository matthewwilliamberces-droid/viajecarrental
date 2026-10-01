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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('categoryName');
            $table->integer('dailyRate');
            $table->decimal('rating', 3, 2);
            $table->integer('reviews');
            $table->integer('seats');
            $table->integer('bags');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('eco');
            $table->string('image');
            $table->string('badge')->nullable();
            $table->string('badgeColor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
