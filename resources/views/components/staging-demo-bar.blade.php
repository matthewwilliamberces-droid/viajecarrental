@if(\App\Support\DemoMode::isEnabled())
<div x-data="{ 
    open: true, 
    minimized: localStorage.getItem('demoDockMinimized') === 'true',
    confirmReset: false,
    toggleMinimize() {
        this.minimized = !this.minimized;
        localStorage.setItem('demoDockMinimized', this.minimized);
    }
}" 
x-cloak
class="fixed bottom-5 right-5 z-[9999] font-sans text-left">

    {{-- Expanded Floating Demo Dock --}}
    <div x-show="open && !minimized" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 scale-95"
         class="bg-zinc-950/95 text-white backdrop-blur-xl border border-white/10 rounded-2xl p-4 shadow-2xl flex flex-col gap-3 max-w-xs w-80 ring-1 ring-white/5">
        
        <div class="flex items-center justify-between gap-3 border-b border-white/10 pb-2.5">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-xs font-black tracking-wider text-white uppercase">Client Demo Sandbox</span>
            </div>
            <button @click="toggleMinimize()" class="text-zinc-400 hover:text-white text-xs p-1 rounded-lg hover:bg-white/10 transition-colors" title="Minimize Dock">
                <i class="fa-solid fa-minus text-xs"></i>
            </button>
        </div>

        <p class="text-[11px] text-zinc-400 leading-snug">
            Fast 1-click evaluation access. Database auto-resets every 12h (00:00 & 12:00 UTC) to pristine state.
        </p>

        <div class="flex flex-col gap-2">
            @auth
                <div class="flex items-center justify-between px-3 py-2 bg-emerald-950/40 border border-emerald-500/30 rounded-xl text-xs font-bold text-emerald-300">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-user-shield text-emerald-400"></i>
                        <span>Logged in as Admin</span>
                    </span>
                    <a href="{{ route('dashboard') }}" class="text-[10px] underline hover:text-white">Dashboard</a>
                </div>
            @else
                <a href="{{ route('staging.login.admin') }}" 
                   class="flex items-center justify-center gap-2 px-3 py-2.5 bg-viaje-500 hover:bg-viaje-400 text-zinc-950 rounded-xl text-xs font-black transition-all shadow-glow-emerald active:scale-95 text-center">
                    <i class="fa-solid fa-bolt"></i>
                    <span>1-Click Admin Access</span>
                </a>
            @endauth

            {{-- Return to Homepage if on subpages --}}
            @if(!request()->is('/'))
                <a href="{{ route('home') }}" 
                   class="flex items-center justify-center gap-2 px-3 py-2 bg-zinc-900 hover:bg-zinc-800 text-zinc-300 hover:text-white rounded-xl text-xs font-bold border border-white/10 transition-all text-center">
                    <i class="fa-solid fa-house text-viaje-400"></i>
                    <span>Return to Homepage</span>
                </a>
            @endif

            {{-- On-Demand Database Reset --}}
            <div class="pt-1 border-t border-white/5">
                <template x-if="!confirmReset">
                    <button type="button" @click="confirmReset = true" 
                            class="w-full flex items-center justify-center gap-2 px-3 py-1.5 text-zinc-400 hover:text-red-400 rounded-lg text-[11px] font-bold hover:bg-red-950/30 transition-all">
                        <i class="fa-solid fa-rotate-left text-[10px]"></i>
                        <span>Reset Demo Database</span>
                    </button>
                </template>

                <template x-if="confirmReset">
                    <form method="POST" action="{{ route('staging.database.reset') }}" class="space-y-2">
                        @csrf
                        <div class="p-2 rounded-xl bg-red-950/50 border border-red-500/30 text-[10px] text-red-200 leading-tight">
                            Wipe all test bookings and restore pristine SQLite template state?
                        </div>
                        <div class="flex gap-2">
                            <button type="submit" 
                                    class="flex-1 py-1.5 px-2 bg-red-600 hover:bg-red-500 text-white font-black text-[11px] rounded-lg transition-all shadow-sm">
                                Confirm Reset
                            </button>
                            <button type="button" @click="confirmReset = false" 
                                    class="py-1.5 px-2.5 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 font-bold text-[11px] rounded-lg transition-all">
                                Cancel
                            </button>
                        </div>
                    </form>
                </template>
            </div>
        </div>
    </div>

    {{-- Minimized Trigger Pill --}}
    <div x-show="minimized">
        <button type="button" @click="toggleMinimize()" 
                class="flex items-center gap-2.5 bg-zinc-950/95 text-white border border-white/10 px-3.5 py-2.5 rounded-full text-xs font-black shadow-2xl hover:bg-zinc-900 transition-all active:scale-95 backdrop-blur-md cursor-pointer ring-1 ring-white/5">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span>Demo Sandbox</span>
            <i class="fa-solid fa-chevron-up text-[10px] text-viaje-400"></i>
        </button>
    </div>
</div>
@endif
