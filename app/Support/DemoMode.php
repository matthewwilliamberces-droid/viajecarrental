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

        // 2. Automatically enabled in local, staging, demo, and testing environments
        if (app()->environment(['local', 'staging', 'demo', 'testing'])) {
            return true;
        }

        // 3. Automatically enabled on configured demo/portfolio domains
        $demoDomains = config('app.demo_domains', [
            'viaje.matthewberces.dev',
            'demo.',
            'staging.',
            'dev.',
            'portfolio.',
            'viajecarrental.test',
        ]);

        $appUrl = (string) config('app.url', '');
        foreach ($demoDomains as $domain) {
            if ($appUrl !== '' && str_contains($appUrl, $domain)) {
                return true;
            }
        }

        try {
            if (request()) {
                $host = (string) request()->getHost();
                $forwardedHost = (string) request()->header('X-Forwarded-Host', '');
                $httpHost = (string) request()->server('HTTP_HOST', '');

                foreach ($demoDomains as $domain) {
                    if (
                        ($host !== '' && str_contains($host, $domain)) ||
                        ($forwardedHost !== '' && str_contains($forwardedHost, $domain)) ||
                        ($httpHost !== '' && str_contains($httpHost, $domain))
                    ) {
                        return true;
                    }
                }
            }
        } catch (\Throwable $e) {
            // Ignored in console/CLI
        }

        return false;
    }
}
