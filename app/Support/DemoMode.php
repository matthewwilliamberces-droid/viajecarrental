<?php

namespace App\Support;

class DemoMode
{
    /**
     * Determine if the demo staging sandbox features are enabled.
     */
    public static function isEnabled(): bool
    {
        // 1. Explicit environment variable override takes highest priority
        $configured = env('DEMO_SANDBOX_ENABLED');
        if ($configured !== null) {
            return filter_var($configured, FILTER_VALIDATE_BOOLEAN);
        }

        // 2. Automatically enabled in local, staging, and demo environments
        if (app()->environment(['local', 'staging', 'demo'])) {
            return true;
        }

        // 3. Automatically enabled on configured demo/portfolio domains
        $host = '';
        try {
            if (request() && request()->hasHeader('Host')) {
                $host = request()->getHost();
            }
        } catch (\Throwable $e) {
            $host = '';
        }

        $demoDomains = config('app.demo_domains', [
            'viaje.matthewberces.dev',
            'demo.',
            'staging.',
            'dev.',
            'portfolio.',
            'viajecarrental.test',
        ]);

        foreach ($demoDomains as $domain) {
            if ($host && str_contains($host, $domain)) {
                return true;
            }
        }

        return false;
    }
}
