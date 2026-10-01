<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cars = Car::whereIn('status', ['Available', 'Rented'])->get();
    return view('index', compact('cars'));
})->name('home');

Route::get('/booking', function () {
    $cars = Car::whereIn('status', ['Available', 'Rented'])->get();
    return view('booking', compact('cars'));
})->name('booking');

Route::get('/fleet/{slug}', [\App\Http\Controllers\FleetController::class, 'show'])->name('fleet.show');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::post('/bookings', [\App\Http\Controllers\BookingController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('bookings.store');
Route::get('/payment/success/{booking}', [\App\Http\Controllers\PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel/{booking}', [\App\Http\Controllers\PaymentController::class, 'cancel'])->name('payment.cancel');
Route::middleware('throttle:60,1')->group(function () {
    Route::get('/api/availability', [\App\Http\Controllers\BookingController::class, 'checkAvailability']);
    Route::get('/api/car-booked-dates/{car_id}', [\App\Http\Controllers\BookingController::class, 'getBookedDates']);
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
