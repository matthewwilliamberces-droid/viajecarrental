<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

\Illuminate\Support\Facades\Schedule::command('app:reset-staging-database --force')
    ->twiceDaily(0, 12)
    ->when(fn () => \App\Support\DemoMode::isEnabled());

