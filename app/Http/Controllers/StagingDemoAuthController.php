<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\DemoMode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class StagingDemoAuthController extends Controller
{
    /**
     * Self-healing 1-click admin login.
     */
    public function loginAdmin(Request $request): RedirectResponse
    {
        $this->ensureDemoAllowed();

        $admin = User::where('name', 'admin')
            ->orWhere('email', 'admin@viaje.ph')
            ->first();

        if (! $admin) {
            $defaultPassword = env('ADMIN_DEFAULT_PASSWORD', 'admin');
            $admin = User::firstOrCreate(
                ['email' => 'admin@viaje.ph'],
                [
                    'name' => 'admin',
                    'password' => bcrypt($defaultPassword),
                    'email_verified_at' => now(),
                ]
            );
        }

        Auth::guard('web')->login($admin, remember: true);
        $request->session()->regenerate();

        return redirect()->intended(route('dashboard'))
            ->with('status', 'Authenticated as Demo Administrator.');
    }

    /**
     * On-demand database reset with automatic session recovery.
     */
    public function resetDatabase(Request $request): RedirectResponse
    {
        $this->ensureDemoAllowed();

        $wasLoggedIn = Auth::check();

        Artisan::call('app:reset-staging-database', ['--force' => true]);

        if ($wasLoggedIn) {
            // Re-authenticate admin seamlessly since SQLite reset wiped sessions table
            $admin = User::where('name', 'admin')
                ->orWhere('email', 'admin@viaje.ph')
                ->first();

            if ($admin) {
                Auth::guard('web')->login($admin, remember: true);
                $request->session()->regenerate();
            }

            return redirect()->route('dashboard')
                ->with('status', 'Pristine database state restored successfully.');
        }

        return redirect()->back()
            ->with('status', 'Pristine database state restored successfully.');
    }

    /**
     * Staging status API endpoint.
     */
    public function status(): JsonResponse
    {
        $this->ensureDemoAllowed();

        return response()->json([
            'demo_mode' => true,
            'connection' => config('database.default'),
            'reset_interval' => '12 hours (00:00 & 12:00 UTC)',
            'time_utc' => now()->toIso8601String(),
        ]);
    }

    /**
     * Ensure staging sandbox is authorized.
     */
    protected function ensureDemoAllowed(): void
    {
        if (! DemoMode::isEnabled()) {
            abort(404, 'Demo sandbox access is disabled.');
        }
    }
}
