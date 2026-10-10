<?php

use App\Models\User;
use App\Support\DemoMode;
use Illuminate\Support\Facades\Artisan;
use Livewire\Volt\Volt;

test('demo mode helper detects enabled sandbox state', function () {
    expect(DemoMode::isEnabled())->toBeTrue();
});

test('1-click staging admin login authenticates and redirects to dashboard', function () {
    $response = $this->get(route('staging.login.admin'));

    $response->assertRedirect(route('dashboard'));
    $this->assertAuthenticated();

    $user = auth()->user();
    expect($user->name)->toBe('admin');
});

test('1-click staging admin login self-heals when admin record is missing', function () {
    User::where('name', 'admin')->orWhere('email', 'admin@viaje.ph')->delete();

    $response = $this->get(route('staging.login.admin'));

    $response->assertRedirect(route('dashboard'));
    $this->assertAuthenticated();

    $user = auth()->user();
    expect($user->email)->toBe('admin@viaje.ph');
});

test('staging login is forbidden when demo mode is explicitly disabled', function () {
    putenv('DEMO_SANDBOX_ENABLED=false');

    $response = $this->get(route('staging.login.admin'));
    $response->assertNotFound();

    // Reset env
    putenv('DEMO_SANDBOX_ENABLED');
});

test('on-demand database reset route executes reset and redirects', function () {
    $response = $this->post(route('staging.database.reset'));

    $response->assertRedirect();
    $response->assertSessionHas('status');
});

test('staging status endpoint returns json metadata', function () {
    $response = $this->get(route('staging.status'));

    $response->assertOk()
        ->assertJsonStructure([
            'demo_mode',
            'connection',
            'reset_interval',
            'time_utc',
        ]);
});

test('login screen pre-fills demo credentials when demo mode is enabled', function () {
    $component = Volt::test('pages.auth.login');

    $component->assertSet('form.name', 'admin');
    $component->assertSet('form.password', 'admin');
});

test('reset staging database artisan command runs successfully', function () {
    $exitCode = Artisan::call('app:reset-staging-database', ['--force' => true]);
    expect($exitCode)->toBe(0);
});

test('dashboard view renders return to website navigation link', function () {
    $user = User::firstOrCreate(
        ['email' => 'admin@viaje.ph'],
        ['name' => 'admin', 'password' => bcrypt('admin')]
    );

    $this->actingAs($user);

    $response = $this->get(route('dashboard'));
    $response->assertOk();
    $response->assertSee('Return to Website');
});
