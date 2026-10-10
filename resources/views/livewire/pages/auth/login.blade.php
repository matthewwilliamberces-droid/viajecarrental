<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Mount component and pre-fill credentials in demo mode.
     */
    public function mount(): void
    {
        if (\App\Support\DemoMode::isEnabled()) {
            $this->form->name = 'admin';
            $this->form->password = env('ADMIN_DEFAULT_PASSWORD', 'admin');
        }
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if(\App\Support\DemoMode::isEnabled())
        <div class="mb-6 p-4 rounded-2xl bg-zinc-900 border border-viaje-500/30 text-white shadow-lg space-y-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-xs font-black uppercase tracking-wider text-viaje-400">Client Demo Sandbox</span>
                </div>
                <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10 text-zinc-300 font-mono">Pre-filled</span>
            </div>
            <p class="text-xs text-zinc-300 leading-relaxed">
                Evaluator credentials are pre-filled below. You can also bypass manual entry directly:
            </p>
            <div class="flex gap-2 pt-1">
                <a href="{{ route('staging.login.admin') }}" 
                   class="flex-1 py-2.5 px-4 rounded-xl bg-viaje-500 hover:bg-viaje-400 text-zinc-950 text-xs font-black text-center transition-all shadow-glow-emerald active:scale-95 flex items-center justify-center gap-2">
                    <i class="fa-solid fa-bolt"></i>
                    <span>1-Click Admin Access</span>
                </a>
                <a href="{{ route('home') }}" 
                   class="py-2.5 px-3 rounded-xl border border-white/10 hover:bg-white/5 text-zinc-300 hover:text-white text-xs font-bold text-center transition-all flex items-center justify-center gap-1.5"
                   title="Return to Homepage">
                    <i class="fa-solid fa-house"></i>
                </a>
            </div>
        </div>
    @endif

    <form wire:submit="login">
        <!-- Username -->
        <div>
            <x-input-label for="name" :value="__('Username')" />
            <x-text-input wire:model="form.name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div>
