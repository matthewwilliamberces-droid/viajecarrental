# Patch: Comprehensive API Rate Limiting

**Patch Target:** `routes/web.php` & `tests/Feature/BookingSecurityTest.php`  
**Standard:** `laravel-security-audit` & `laravel-expert`  
**Purpose:** Restrict unauthenticated polling on date availability and calendar endpoints, preventing resource exhaustion and automated scraper attacks.

---

## 1. Unified Diff Patch

```diff
--- a/routes/web.php
+++ b/routes/web.php
@@ -24,8 +24,11 @@
     ->name('bookings.store');
 Route::get('/payment/success/{booking}', [\App\Http\Controllers\PaymentController::class, 'success'])->name('payment.success');
 Route::get('/payment/cancel/{booking}', [\App\Http\Controllers\PaymentController::class, 'cancel'])->name('payment.cancel');
-Route::get('/api/availability', [\App\Http\Controllers\BookingController::class, 'checkAvailability']);
-Route::get('/api/car-booked-dates/{car_id}', [\App\Http\Controllers\BookingController::class, 'getBookedDates']);
+
+Route::middleware('throttle:60,1')->group(function () {
+    Route::get('/api/availability', [\App\Http\Controllers\BookingController::class, 'checkAvailability']);
+    Route::get('/api/car-booked-dates/{car_id}', [\App\Http\Controllers\BookingController::class, 'getBookedDates']);
+});
 
 Route::view('profile', 'profile')
     ->middleware(['auth'])
```

---

## 2. Engineering Analysis

### PROS
1. **DDoS & Scraping Mitigation:** Prevents rogue bots or competitors from hammering availability endpoints to scrape pricing/inventory or cause database CPU spikes.
2. **Predictable Capacity:** Limits each IP address to 60 requests per minute (1 req/sec average), which is plenty for real users browsing the Flatpickr calendar, while choking automated loops.
3. **Graceful HTTP 429 Responses:** Instead of the server crashing or timing out under load, clients receive standard HTTP 429 Too Many Requests headers (`Retry-After`).

### CONS
1. **Shared IP / NAT Bottlenecks:** Multiple users behind a single corporate or school network sharing a single public IP might hit the 60 req/min limit during peak office hours if many browse simultaneously.
2. **Aggressive Calendar Clicking:** If a client rapidly clicks between 50 different vehicles in under 60 seconds, they could trigger a temporary 60-second cooldown.

### HIDDEN RISKS & TECHNICAL DEBT
- **Cache Driver Dependency:** By default, Laravel uses the `file` or `database` cache driver for throttles unless Redis is configured. Under a massive distributed botnet, writing rate limit tokens to disk/SQLite can become an I/O bottleneck. For production scale, move cache to Redis (`CACHE_STORE=redis`).

### WORST-CASE SCENARIO
- Without this patch: A single machine running a loop with `curl` or Python `requests` can fire 5,000 queries/minute into `BookingController::checkAvailability`, locking the SQLite database file and bringing down the entire rental platform for legitimate paying customers.

---

## 3. Automated Verification

Covered by Pest test in `tests/Feature/BookingSecurityTest.php`:
```powershell
vendor/bin/pest tests/Feature/BookingSecurityTest.php
```
Ensures 60 requests pass, and the 61st request receives HTTP 429.
