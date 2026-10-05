@ph
<!DOCTYPE html>
@php
$defaultCars = [
    [
        'id' => 1,
        'name' => 'Suzuki Jimny AllGrip 4x4',
        'category' => 'island',
        'categoryName' => 'Island 4x4',
        'dailyRate' => 2799,
        'rating' => 4.99,
        'reviews' => 215,
        'seats' => 4,
        'bags' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'eco' => '14 km/L',
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Island Favorite',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 2,
        'name' => 'Toyota HiAce Super Grandia VIP',
        'category' => 'van',
        'categoryName' => 'Executive Van',
        'dailyRate' => 6499,
        'rating' => 4.98,
        'reviews' => 320,
        'seats' => 10,
        'bags' => 7,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '11 km/L',
        'image' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Balikbayan Choice',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 3,
        'name' => 'Toyota Fortuner GR-Sport 4x4',
        'category' => 'suv',
        'categoryName' => '7-Seater 4x4 SUV',
        'dailyRate' => 4199,
        'rating' => 4.97,
        'reviews' => 180,
        'seats' => 7,
        'bags' => 5,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '13 km/L',
        'image' => 'https://images.unsplash.com/photo-1520031441872-265e4ff70366?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Provincial Cruiser',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 4,
        'name' => 'Toyota Land Cruiser Prado VX',
        'category' => 'luxury',
        'categoryName' => 'VIP Luxury 4x4',
        'dailyRate' => 14500,
        'rating' => 5.00,
        'reviews' => 64,
        'seats' => 7,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '10 km/L',
        'image' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Presidential VIP',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 5,
        'name' => 'Ford Everest Titanium 4x4',
        'category' => 'suv',
        'categoryName' => '7-Seater SUV',
        'dailyRate' => 4499,
        'rating' => 4.95,
        'reviews' => 142,
        'seats' => 7,
        'bags' => 5,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '12 km/L',
        'image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Family Comfort',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 6,
        'name' => 'Hyundai Staria Lounge 7-Seater',
        'category' => 'van',
        'categoryName' => 'Futuristic VIP Van',
        'dailyRate' => 6999,
        'rating' => 4.98,
        'reviews' => 95,
        'seats' => 7,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '12 km/L',
        'image' => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Captain Seats',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 7,
        'name' => 'Toyota Innova Zenix Hybrid',
        'category' => 'electric',
        'categoryName' => 'Hybrid 7-Seater',
        'dailyRate' => 3499,
        'rating' => 4.93,
        'reviews' => 210,
        'seats' => 7,
        'bags' => 4,
        'transmission' => 'Automatic',
        'fuel' => 'Hybrid',
        'eco' => '23 km/L',
        'image' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Ultra Efficient',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 8,
        'name' => 'BYD Atto 3 Extended Range',
        'category' => 'electric',
        'categoryName' => 'Pure Electric Crossover',
        'dailyRate' => 3899,
        'rating' => 4.94,
        'reviews' => 78,
        'seats' => 5,
        'bags' => 4,
        'transmission' => 'Automatic',
        'fuel' => 'Electric',
        'eco' => '480 km Range',
        'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Zero Emission',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 9,
        'name' => 'Nissan Navara PRO-4X Offroad',
        'category' => 'island',
        'categoryName' => '4x4 Double Cab',
        'dailyRate' => 3699,
        'rating' => 4.96,
        'reviews' => 132,
        'seats' => 5,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '13 km/L',
        'image' => 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Adventure 4x4',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
];
@endphp

<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VIAJE | Tropical Car Rental & Island Road Trips Philippines</title>
    <meta name="description" content="Reserve premium vehicles for Luzon and island road trips. Instant booking, transparent pricing, CDW coverage, and airport delivery options.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Performance: Preconnect & DNS Prefetch to Critical CDNs -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://images.unsplash.com">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap"></noscript>
    
    <!-- Flatpickr for mm/dd/yyyy formatting -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css" media="print" onload="this.media='all'">
    <script defer src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <!-- FontAwesome Icons: Asynchronous Non-Blocking Load -->
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>
    
    <!-- Compiled Production Assets via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js Core & Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
        
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #03140e;
        }
        ::-webkit-scrollbar-thumb {
            background: #103d2e;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #17523f;
        }

        .tropical-glass {
            background: rgba(11, 46, 34, 0.75);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(52, 211, 153, 0.15);
        }

        .tropical-nav {
            background: rgba(6, 32, 23, 0.88);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(52, 211, 153, 0.12);
        }

        .tropical-gradient-text {
            background: linear-gradient(135deg, #34d399 0%, #22d3ee 45%, #fbbf24 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sunset-gradient-text {
            background: linear-gradient(135deg, #fbbf24 0%, #fb7185 50%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .island-radial {
            background: radial-gradient(circle at 50% 25%, rgba(16, 185, 129, 0.22) 0%, rgba(6, 182, 212, 0.12) 40%, rgba(3, 20, 14, 0) 75%);
        }
    </style>
    <style>
        .crossed-out {
            position: relative;
            color: #ef4444 !important;
            opacity: 0.8 !important;
            background-color: rgba(239, 68, 68, 0.15) !important;
            border-radius: 50% !important;
        }
        .crossed-out::after {
            content: '×';
            position: absolute;
            top: 48%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.6rem;
            color: #ef4444;
            font-weight: black;
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-zinc-950 text-zinc-100 font-sans antialiased selection:bg-viaje-500 selection:text-zinc-950"
      x-data="viajeRentalApp()" 
      x-init="initApp()">

        <style>
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { display: flex; width: 200%; animation: marquee 30s linear infinite; }
        
        .glass-panel {
            background: rgba(11, 46, 34, 0.6);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.12), 0 8px 32px rgba(0, 0, 0, 0.4);
        }
        
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>

        <style>
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { display: flex; width: 200%; animation: marquee 30s linear infinite; }
        
        .glass-panel {
            background: rgba(11, 46, 34, 0.6);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.12), 0 8px 32px rgba(0, 0, 0, 0.4);
        }
        
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>

    <!-- Animated Tropical Weather / Island Live Bar -->
    <div class="bg-zinc-950 border-b border-viaje-500/10 overflow-hidden relative h-10 flex items-center">
        <div class="animate-marquee whitespace-nowrap flex items-center">
            <div class="flex items-center gap-12 w-1/2 justify-around text-[10px] font-bold text-viaje-300 uppercase tracking-[0.15em]">
                <span><i class="fa-solid fa-sun text-zinc-400 mr-1.5"></i> Manila: 32&deg;C Clear</span>
                <span><i class="fa-solid fa-cloud text-zinc-300 mr-1.5"></i> Baguio: 18&deg;C Cool</span>
                <span><i class="fa-solid fa-plane-arrival text-zinc-400 mr-1.5"></i> NAIA T3: High Demand</span>
                <span><i class="fa-solid fa-car text-viaje-400 mr-1.5"></i> 14 Vehicles Available Today</span>
            </div>
            <div class="flex items-center gap-12 w-1/2 justify-around text-[10px] font-bold text-viaje-300 uppercase tracking-[0.15em]">
                <span><i class="fa-solid fa-sun text-zinc-400 mr-1.5"></i> Manila: 32&deg;C Clear</span>
                <span><i class="fa-solid fa-cloud text-zinc-300 mr-1.5"></i> Baguio: 18&deg;C Cool</span>
                <span><i class="fa-solid fa-plane-arrival text-zinc-400 mr-1.5"></i> NAIA T3: High Demand</span>
                <span><i class="fa-solid fa-car text-viaje-400 mr-1.5"></i> 14 Vehicles Available Today</span>
            </div>
        </div>
    </div>

    <!-- Live Island Booking Toast -->
    <div x-show="toast.visible"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 translate-y-10 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-10 scale-95"
         class="fixed bottom-6 right-6 z-50 max-w-sm w-full" x-cloak>
        <div class="glass-panel p-4 rounded-2xl flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-viaje-500/20 text-viaje-400 flex items-center justify-center flex-shrink-0 shadow-[inset_0_1px_0_rgba(255,255,255,0.1)]">
                <i :class="toast.icon || 'fa-solid fa-bell'"></i>
            </div>
            <div class="flex-grow text-xs">
                <p class="text-white font-bold mb-0.5" x-text="toast.title"></p>
                <p class="text-zinc-400 font-medium" x-text="toast.message"></p>
            </div>
            <button @click="toast.visible = false" aria-label="Dismiss notification" class="text-zinc-500 hover:text-white transition">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

    <!-- Navigation Header -->
    <nav class="sticky top-0 z-40 w-full glass-panel border-x-0 border-t-0 shadow-xl shadow-zinc-950/20">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="flex items-center justify-between h-[72px]">
                
                <!-- Brand Logo: VIAJE -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-viaje-500 via-zinc-500 to-viaje-400 p-[1px] shadow-glow-emerald">
                        <div class="absolute inset-0 bg-zinc-950 rounded-xl"></div>
                        <div class="relative w-full h-full flex items-center justify-center text-viaje-400 group-hover:text-white transition-colors duration-300">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                    </div>
                    <span class="font-heading font-extrabold text-2xl tracking-tighter text-white">VIAJE</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#destinations" class="text-xs font-bold uppercase tracking-wider text-zinc-300 hover:text-white relative group transition-colors">
                        Network
                        <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-viaje-500 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#island-perks" class="text-xs font-bold uppercase tracking-wider text-zinc-300 hover:text-white relative group transition-colors">
                        Perks
                        <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-viaje-500 transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#faq" class="text-xs font-bold uppercase tracking-wider text-zinc-300 hover:text-white relative group transition-colors">
                        FAQ
                        <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-viaje-500 transition-all group-hover:w-full"></span>
                    </a>
                </div>

                <!-- Action Button & Hotline -->
                <div class="hidden md:flex items-center gap-5">
                    <div class="flex flex-col items-end">
                        <span class="text-[9px] font-extrabold uppercase tracking-widest text-viaje-400">24/7 Concierge</span>
                        <span class="text-xs font-mono font-bold text-emerald-400 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Instant Dispatch</span>
                    </div>

                    @auth
                        <a href="{{ route('dashboard') }}" class="px-3.5 py-2 rounded-xl border border-viaje-500/30 bg-viaje-500/10 text-xs font-bold text-viaje-300 hover:text-white hover:bg-viaje-500/20 hover:border-viaje-400 transition flex items-center gap-2" title="Admin Dashboard">
                            <i class="fa-solid fa-gauge-high text-viaje-400 text-xs"></i>
                            <span>Admin</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3.5 py-2 rounded-xl border border-white/10 bg-black/20 text-xs font-bold text-zinc-300 hover:text-white hover:border-viaje-500/40 hover:bg-viaje-500/10 transition flex items-center gap-2 group" title="Admin Login">
                            <i class="fa-solid fa-shield-halved text-viaje-400 group-hover:text-viaje-300 transition-colors text-xs"></i>
                            <span>Admin</span>
                        </a>
                    @endauth

                    <a href="{{ route('booking') }}" x-data="magnetic" @mousemove="calculate" @mouseleave="reset" :style="`transform: translate(${x}px, ${y}px) scale(${active ? 0.98 : 1})`" @mousedown="active = true" @mouseup="active = false" @mouseleave="active = false" class="group relative px-6 py-2.5 bg-white text-zinc-950 font-extrabold text-sm rounded-xl overflow-hidden shadow-[0_0_20px_-5px_rgba(255,255,255,0.3)] transition-transform ease-out">
                        <div class="absolute inset-0 w-0 bg-viaje-500 transition-all duration-300 ease-out group-hover:w-full"></div>
                        <span class="relative z-10 flex items-center gap-2 group-hover:text-zinc-950">Book Now <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i></span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle navigation menu" class="w-10 h-10 rounded-xl border border-white/10 flex items-center justify-center text-white">
                        <i class="fa-solid fa-bars text-lg" x-show="!mobileMenuOpen"></i>
                        <i class="fa-solid fa-xmark text-lg" x-show="mobileMenuOpen" x-cloak></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenuOpen" x-collapse class="md:hidden glass-panel border-t border-viaje-500/20" x-cloak>
            <div class="px-6 py-6 space-y-4 flex flex-col">
                <a href="#destinations" @click="mobileMenuOpen = false" class="text-lg font-heading font-bold text-white">Network Locations</a>
                <a href="#island-perks" @click="mobileMenuOpen = false" class="text-lg font-heading font-bold text-white">VIAJE Perks</a>
                <a href="#faq" @click="mobileMenuOpen = false" class="text-lg font-heading font-bold text-white">Help & FAQ</a>

                @auth
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 text-sm font-bold text-viaje-300 py-2 border-t border-white/5">
                        <i class="fa-solid fa-gauge-high text-viaje-400"></i>
                        Admin Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex items-center gap-3 text-sm font-bold text-zinc-400 hover:text-white py-2 border-t border-white/5">
                        <i class="fa-solid fa-shield-halved text-viaje-400"></i>
                        Admin Login
                    </a>
                @endauth

                <div class="pt-4 border-t border-viaje-500/20">
                    <a href="{{ route('booking') }}" class="flex w-full items-center justify-center gap-2 py-4 bg-white text-zinc-950 font-extrabold rounded-xl shadow-[0_0_20px_-5px_rgba(255,255,255,0.3)]">
                        Book a Vehicle <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
<!-- BOOKING ENGINE MAIN -->
<main class="pt-32 pb-20 bg-zinc-950 min-h-screen relative border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="mb-12 max-w-2xl animate-[fade-in-up_0.8s_ease-out_forwards]">
            <h1 class="font-heading font-black text-4xl sm:text-5xl text-white mb-4">
                Reserve Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-viaje-400 to-viaje-500">Journey</span>
            </h1>
            <p class="text-zinc-400 text-lg">Select from our premium fleet of SUVs, luxury vans, and rugged 4x4s.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 items-start">
            
            <!-- LEFT SIDEBAR: FILTERS (30%) -->
            <div class="w-full lg:w-1/3 xl:w-1/4 sticky top-28 glass-panel p-6 rounded-3xl border border-white/5 space-y-6 animate-[fade-in-up_0.8s_ease-out_0.2s_forwards] opacity-0">
                
                <h3 class="text-white font-bold tracking-wide text-sm uppercase">Refine Search</h3>

                <!-- Search -->
                <div>
                    <label class="text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Search</label>
                    <div class="relative">
                        <input type="text" x-model="searchQuery" placeholder="Search models..." class="w-full bg-black/40 border border-white/20 rounded-xl pl-10 pr-4 py-3 text-sm text-white focus:border-viaje-400 focus:ring-1 focus:ring-viaje-400 transition placeholder-zinc-500 outline-none">
                        <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-zinc-400 text-sm"></i>
                    </div>
                </div>

                <!-- Category -->
                <div>
                    <label class="text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Category</label>
                    <select x-model="selectedCategory" class="w-full bg-black/40 border border-white/20 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 focus:ring-1 focus:ring-viaje-400 transition">
                        <option value="all" class="bg-zinc-900 text-white">All Vehicles</option>
                        <option value="island" class="bg-zinc-900 text-white">Island 4x4</option>
                        <option value="suv" class="bg-zinc-900 text-white">SUVs</option>
                        <option value="van" class="bg-zinc-900 text-white">Vans & VIP</option>
                        <option value="luxury" class="bg-zinc-900 text-white">Luxury</option>
                        <option value="electric" class="bg-zinc-900 text-white">Electric / EV</option>
                    </select>
                </div>

                <!-- Price Slider -->
                <div>
                    <div class="flex justify-between text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2 block">
                        <span>Max Price</span>
                        <span class="text-viaje-400" x-text="'&#8369;' + formatPhp(maxPrice)"></span>
                    </div>
                    <input type="range" min="2000" max="18000" step="500" x-model="maxPrice" class="w-full accent-viaje-500 h-2 bg-white/20 rounded-lg cursor-pointer">
                </div>

                <!-- Sort By -->
                <div>
                    <label class="text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Sort By</label>
                    <select x-model="sortBy" class="w-full bg-black/40 border border-white/20 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 focus:ring-1 focus:ring-viaje-400 transition">
                        <option value="recommended" class="bg-zinc-900 text-white">Recommended</option>
                        <option value="price-asc" class="bg-zinc-900 text-white">Price: Low to High</option>
                        <option value="price-desc" class="bg-zinc-900 text-white">Price: High to Low</option>
                        <option value="rating" class="bg-zinc-900 text-white">Top Rated</option>
                    </select>
                </div>

                <!-- Reset -->
                <button @click="selectedCategory = 'all'; maxPrice = 18000; sortBy = 'recommended'; searchQuery = '';" 
                        class="w-full py-3 rounded-xl border border-white/10 text-zinc-400 hover:text-white hover:bg-white/5 transition text-sm font-bold">
                    Reset Filters
                </button>
            </div>

            
            <!-- RIGHT CONTENT: FLEET GRID (70%) -->
            <div class="w-full lg:w-2/3 xl:w-3/4 animate-[fade-in-up_0.8s_ease-out_0.4s_forwards] opacity-0" id="fleet">
                
                <!-- ADVANCED FILTER BAR -->
                <div class="glass-panel rounded-2xl p-4 mb-6 border border-white/10 relative z-30">
                    <div class="flex flex-col md:flex-row gap-4 items-end">
                        <!-- Search Bar -->
                        <div class="w-full md:w-1/3">
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-zinc-400 mb-1">Search Fleet</label>
                            <div class="relative">
                                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400"></i>
                                <input type="text" x-model.debounce.300ms="searchQuery" placeholder="Try 'Fortuner' or 'SUV'..." class="w-full bg-black/20 border border-white/10 rounded-xl py-2 pl-9 pr-3 text-white placeholder-zinc-500 focus:outline-none focus:ring-2 focus:ring-viaje-500 text-sm">
                            </div>
                        </div>
                        
                        <!-- Transmission -->
                        <div class="w-full md:w-1/6">
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-zinc-400 mb-1">Transmission</label>
                            <select x-model="filterTransmission" class="w-full bg-black/20 border border-white/10 rounded-xl py-2 px-3 text-white focus:outline-none focus:ring-2 focus:ring-viaje-500 text-sm appearance-none">
                                <option value="all" class="text-black">All Types</option>
                                <option value="Automatic" class="text-black">Automatic</option>
                                <option value="Manual" class="text-black">Manual</option>
                            </select>
                        </div>

                        <!-- Fuel -->
                        <div class="w-full md:w-1/6">
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-zinc-400 mb-1">Fuel</label>
                            <select x-model="filterFuel" class="w-full bg-black/20 border border-white/10 rounded-xl py-2 px-3 text-white focus:outline-none focus:ring-2 focus:ring-viaje-500 text-sm appearance-none">
                                <option value="all" class="text-black">All Fuels</option>
                                <option value="Diesel" class="text-black">Diesel</option>
                                <option value="Gasoline" class="text-black">Gasoline</option>
                                <option value="Hybrid" class="text-black">Hybrid / EV</option>
                            </select>
                        </div>
                        
                        <!-- Max Price Slider -->
                        <div class="w-full md:w-1/4 pb-1">
                            <div class="flex justify-between items-center mb-1">
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-zinc-400">Max Budget</label>
                                <span class="text-xs font-bold text-viaje-400">₱<span x-text="formatPhp(maxPrice)"></span></span>
                            </div>
                            <input type="range" x-model="maxPrice" min="2000" max="25000" step="500" class="w-full h-1.5 bg-zinc-700 rounded-lg appearance-none cursor-pointer accent-viaje-500">
                        </div>
                        
                        <!-- Reset Button (Shows only if filtered) -->
                        <div class="w-full md:w-auto mt-2 md:mt-0 flex justify-end" x-show="isFiltered" x-cloak x-transition>
                            <button @click="resetFilters()" class="text-xs font-bold text-zinc-400 hover:text-white transition-colors flex items-center gap-1 py-2">
                                <i class="fa-solid fa-rotate-left"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>

                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <template x-for="(car, index) in paginatedCars" :key="car.id">
                        <!-- Car Card -->
                        <div class="glass-panel rounded-3xl overflow-hidden border border-white/5 hover:border-viaje-500/30 transition-all duration-500 group flex flex-col relative bg-gradient-to-b from-white/[0.02] to-transparent animate-[fade-in-up_0.8s_ease-out_forwards] opacity-0" x-bind:style="`animation-delay: ${index * 75}ms`">
                            
                            <!-- Image -->
                            <div class="relative h-56 overflow-hidden">
                                <img :src="car.image" :alt="car.name" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent"></div>
                                
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider shadow-lg bg-white text-zinc-950" x-text="car.badge" x-show="car.badge"></span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex flex-col flex-grow relative z-10 -mt-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-heading font-extrabold text-xl text-white group-hover:text-viaje-300 transition" x-text="car.name"></h3>
                                </div>
                                <p class="text-xs text-zinc-400 font-bold uppercase tracking-wider mb-4" x-text="car.categoryName"></p>
                                
                                <div class="flex items-center gap-4 text-xs text-zinc-300 mb-6 font-medium">
                                    <div class="flex items-center gap-1.5"><i class="fa-solid fa-user-group text-viaje-400"></i> <span class="font-mono" x-text="car.seats"></span></div>
                                    <div class="flex items-center gap-1.5"><i class="fa-solid fa-suitcase text-viaje-400"></i> <span class="font-mono" x-text="car.bags"></span></div>
                                    <div class="flex items-center gap-1.5"><i class="fa-solid fa-gas-pump text-viaje-400"></i> <span class="font-mono" x-text="car.eco"></span></div>
                                </div>

                                <div class="mt-auto flex items-end justify-between pt-4 border-t border-white/5">
                                    <div>
                                        <div class="text-[10px] text-zinc-500 uppercase tracking-widest font-bold mb-1">Daily Rate</div>
                                        <div class="text-2xl font-black text-white"><span class="text-viaje-400 mr-1">&#8369;</span><span class="font-mono" x-text="formatPhp(car.dailyRate)"></span></div>
                                    </div>
                                    
                                    <button @click="startBooking(car)" 
                                            class="px-5 py-2.5 rounded-xl bg-white text-zinc-950 font-bold text-sm hover:bg-viaje-500 transition-colors shadow-lg flex items-center gap-2">
                                        Reserve <i class="fa-solid fa-arrow-right text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            <!-- Pagination Controls -->
            <div class="mt-8 flex items-center justify-between border-t border-viaje-500/20 pt-6" x-show="totalPages > 1" x-cloak>
                <div class="text-xs text-zinc-400">
                    Showing <span class="font-bold text-white" x-text="(currentPage - 1) * carsPerPage + 1"></span> to 
                    <span class="font-bold text-white" x-text="Math.min(currentPage * carsPerPage, filteredCars.length)"></span> 
                    of <span class="font-bold text-white" x-text="filteredCars.length"></span> vehicles
                </div>
                
                <div class="flex items-center gap-2">
                    <button type="button" @click="goToPage(currentPage - 1)" 
                            :disabled="currentPage === 1"
                            aria-label="Previous page"
                            class="w-10 h-10 rounded-xl bg-zinc-950 border border-viaje-500/30 flex items-center justify-center text-zinc-300 hover:text-white hover:border-viaje-400 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fa-solid fa-chevron-left text-xs"></i>
                    </button>
                    
                    <div class="flex items-center gap-1">
                        <template x-for="page in totalPages" :key="page">
                            <button type="button" @click="goToPage(page)"
                                    :aria-label="'Go to page ' + page"
                                    :class="currentPage === page ? 'bg-viaje-600 text-white border-viaje-400' : 'bg-zinc-950 text-zinc-300 border-viaje-500/30 hover:border-viaje-400 hover:text-white'"
                                    class="w-10 h-10 rounded-xl border flex items-center justify-center text-xs font-bold transition"
                                    x-text="page">
                            </button>
                        </template>
                    </div>

                    <button type="button" @click="goToPage(currentPage + 1)" 
                            :disabled="currentPage === totalPages"
                            aria-label="Next page"
                            class="w-10 h-10 rounded-xl bg-zinc-950 border border-viaje-500/30 flex items-center justify-center text-zinc-300 hover:text-white hover:border-viaje-400 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </div>

                
                <div x-show="filteredCars.length === 0" class="glass-panel p-12 rounded-3xl text-center border border-white/5">
                    <i class="fa-solid fa-car-burst text-4xl text-zinc-600 mb-4"></i>
                    <h3 class="text-lg font-bold text-white">No vehicles found</h3>
                    <p class="text-zinc-400 text-sm mt-2">Try adjusting your filters to see more available cars.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- BOOKING MODAL (ASYMMETRIC SPLIT) -->
<div x-show="bookingModalOpen" class="fixed inset-0 z-50 overflow-y-auto bg-black/80 backdrop-blur-xl flex items-center justify-center p-4 sm:p-6" x-cloak @click="bookingModalOpen = false">
      <div @click.stop 
           x-show="bookingModalOpen"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 translate-y-8"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="glass-panel rounded-3xl w-full max-w-5xl border border-white/10 overflow-hidden shadow-2xl flex flex-col md:flex-row relative">
        
        <!-- Close Button -->
        <button @click="bookingModalOpen = false" aria-label="Close modal" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/20 text-white hover:bg-white hover:text-black transition flex items-center justify-center backdrop-blur-md">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- Left Image Pane (Hidden on very small screens) -->
        <div class="hidden md:block w-2/5 relative bg-zinc-900 border-r border-white/5 p-8 flex flex-col justify-end">
            <div class="absolute inset-0">
                <img :src="selectedCar?.image ? selectedCar.image.replace('w=1200', 'w=800&q=75') : ''" :alt="selectedCar?.name || 'Selected Vehicle'" loading="lazy" decoding="async" class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
                <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/80 to-transparent"></div>
            </div>
            
            <div class="relative z-10">
                <div class="px-3 py-1 rounded-full bg-viaje-500/20 text-viaje-300 text-[10px] font-black uppercase tracking-widest inline-flex mb-3" x-text="'Step ' + bookingStep + ' of 4'"></div>
                <h3 class="font-heading font-black text-3xl text-white mb-2" x-text="selectedCar?.name"></h3>
                <p class="text-viaje-400 font-bold text-lg mb-6">&#8369;<span x-text="formatPhp(selectedCar?.dailyRate)"></span> <span class="text-xs text-zinc-400 font-normal">/ day</span></p>
                
                <div class="space-y-3 text-xs text-zinc-300 font-medium">
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-viaje-400"></i> Free cancellation</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-viaje-400"></i> Unlimited mileage (Luzon)</div>
                    <div class="flex items-center gap-3"><i class="fa-solid fa-check text-viaje-400"></i> 24/7 Roadside rescue</div>
                </div>
                
                <template x-if="calculateLocationFee() > 0">
                    <div class="mt-6 pt-5 border-t border-white/10 text-xs font-bold text-white flex justify-between items-center">
                        <span class="uppercase tracking-wider">Location Fee (Pickup/Drop-off)</span>
                        <span class="text-viaje-400 font-mono text-base">+&#8369;<span x-text="formatPhp(calculateLocationFee())"></span></span>
                    </div>
                </template>
            </div>
        </div>

                <!-- Right Content Pane -->
        <div class="w-full md:w-3/5 p-6 sm:p-10 bg-zinc-950/50">
            
            <!-- STEP 1: Dates & Locations -->
            <div x-show="bookingStep === 1" class="space-y-6">
                <div>
                    <h2 class="font-heading font-black text-2xl text-white mb-1">Trip Details</h2>
                    <p class="text-zinc-400 text-sm">Select dates and locations to check live availability.</p>
                </div>

                <div x-show="dateError" class="p-4 rounded-xl bg-red-950/50 border border-red-500/30 text-red-400 text-xs font-bold flex gap-3 items-center" x-cloak>
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span x-text="dateError"></span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Pick-up Location</label>
                        <select x-model="trip.pickupLocation" @change="checkAvailability()" class="w-full bg-black/40 border border-white/20 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 focus:ring-1 focus:ring-viaje-400 outline-none transition appearance-none">
                            <option value="Mandaluyong Warehouse" class="bg-zinc-900 text-white">Mandaluyong Warehouse (Free)</option>
                            <option value="NAIA Terminal 1,2,3,4" class="bg-zinc-900 text-white">NAIA Terminal 1-4 (+&#8369;250)</option>
                            <option value="SM Megamall" class="bg-zinc-900 text-white">SM Megamall (+&#8369;250)</option>
                            <option value="SM MOA" class="bg-zinc-900 text-white">SM MOA (+&#8369;250)</option>
                            <option value="Araneta Cubao" class="bg-zinc-900 text-white">Araneta Cubao (+&#8369;250)</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Drop-off Location</label>
                        <select x-model="trip.dropoffLocation" @change="checkAvailability()" class="w-full bg-black/40 border border-white/20 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 focus:ring-1 focus:ring-viaje-400 outline-none transition appearance-none">
                            <option value="Mandaluyong Warehouse" class="bg-zinc-900 text-white">Mandaluyong Warehouse (Free)</option>
                            <option value="NAIA Terminal 1,2,3,4" class="bg-zinc-900 text-white">NAIA Terminal 1-4 (+&#8369;250)</option>
                            <option value="SM Megamall" class="bg-zinc-900 text-white">SM Megamall (+&#8369;250)</option>
                            <option value="SM MOA" class="bg-zinc-900 text-white">SM MOA (+&#8369;250)</option>
                            <option value="Araneta Cubao" class="bg-zinc-900 text-white">Araneta Cubao (+&#8369;250)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Pick-up Date</label>
                        <input type="text" x-ref="pickupInput" class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 outline-none placeholder-zinc-500" placeholder="MM/DD/YYYY">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-2 block">Drop-off Date</label>
                        <input type="text" x-ref="dropoffInput" class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 outline-none placeholder-zinc-500" placeholder="MM/DD/YYYY">
                    </div>
                </div>

                <button @click="proceedToAddons()" :disabled="!!dateError || isCheckingAvailability" class="w-full py-4 rounded-xl bg-white text-zinc-950 font-bold hover:bg-viaje-500 transition-colors disabled:opacity-50 disabled:cursor-not-allowed mt-4">
                    <span x-show="isCheckingAvailability">Checking...</span>
                    <span x-show="!isCheckingAvailability">Continue to Add-ons</span>
                </button>
            </div>

            <!-- STEP 2: Add-ons -->
            <div x-show="bookingStep === 2" class="space-y-6" x-cloak>
                <div>
                    <h2 class="font-heading font-black text-2xl text-white mb-1">Enhance Your Trip</h2>
                    <p class="text-zinc-400 text-sm">Select premium upgrades.</p>
                </div>

                <div class="space-y-3">
                    <label class="flex items-center justify-between p-4 rounded-xl border border-white/10 bg-black/20 cursor-pointer hover:border-viaje-400 transition">
                        <div class="flex items-center gap-4">
                            <input type="checkbox" x-model="addons.fullInsurance" class="w-5 h-5 rounded border-white/20 text-viaje-500 bg-transparent focus:ring-offset-zinc-950 focus:ring-viaje-500">
                            <div>
                                <div class="text-sm font-bold text-white">Zero Liability CDW</div>
                                <div class="text-xs text-zinc-400">Complete peace of mind</div>
                            </div>
                        </div>
                        <div class="text-sm font-bold text-viaje-400">+&#8369;800/day</div>
                    </label>
                </div>

                <div class="flex gap-4 pt-4 border-t border-white/5">
                    <button @click="bookingStep = 1" class="px-6 py-4 rounded-xl border border-white/10 text-white font-bold hover:bg-white/5 transition">Back</button>
                    <button @click="bookingStep = 3" class="flex-1 py-4 rounded-xl bg-white text-zinc-950 font-bold hover:bg-viaje-500 transition-colors">Driver Details</button>
                </div>
            </div>

            <!-- STEP 3: Details -->
            <div x-show="bookingStep === 3" class="space-y-6" x-cloak>
                <div>
                    <h2 class="font-heading font-black text-2xl text-white mb-1">Driver Details</h2>
                    <p class="text-zinc-400 text-sm">Where should we send the confirmation?</p>
                </div>

                <!-- Error message box -->
                <div x-show="bookingError" class="p-4 rounded-xl bg-red-950/50 border border-red-500/30 text-red-400 text-xs font-bold flex gap-3 items-center" x-cloak>
                    <i class="fa-solid fa-circle-exclamation text-base"></i>
                    <span x-text="bookingError"></span>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-1.5 block">Full Name *</label>
                        <input type="text" x-model="renter.name" placeholder="e.g. Juan Dela Cruz" required class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 outline-none">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-1.5 block">Email Address *</label>
                        <input type="email" x-model="renter.email" placeholder="e.g. juan@example.com" required class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 outline-none">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-1.5 block">Mobile / WhatsApp Number</label>
                        <input type="tel" x-model="renter.phone" placeholder="+63 9XX XXX XXXX" class="w-full bg-black/20 border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:border-viaje-400 outline-none">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-zinc-400 uppercase tracking-wider mb-1.5 block">Payment Method</label>
                        <div class="grid grid-cols-3 gap-2">
                            <label :class="paymentMethod === 'gcash' ? 'border-viaje-400 bg-viaje-500/20 text-white' : 'border-white/10 bg-black/20 text-zinc-400'" class="border rounded-xl p-2.5 text-center cursor-pointer text-xs font-bold transition flex items-center justify-center gap-1.5">
                                <input type="radio" value="gcash" x-model="paymentMethod" class="hidden">
                                <span>GCash</span>
                            </label>
                            <label :class="paymentMethod === 'card' ? 'border-viaje-400 bg-viaje-500/20 text-white shadow-[0_0_20px_-5px_rgba(16,185,129,0.3)]' : 'border-white/10 bg-black/20 text-zinc-400'" class="border rounded-xl p-2.5 text-center cursor-pointer text-xs font-bold transition flex flex-col items-center justify-center gap-0.5 group">
                                <input type="radio" value="card" x-model="paymentMethod" class="hidden">
                                <div class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-credit-card text-viaje-400 text-xs"></i>
                                    <span>Card</span>
                                </div>
                                <span class="text-[8px] text-zinc-400 font-mono tracking-tight group-hover:text-zinc-300">Stripe Gateway</span>
                            </label>
                            <label :class="paymentMethod === 'cash' ? 'border-viaje-400 bg-viaje-500/20 text-white' : 'border-white/10 bg-black/20 text-zinc-400'" class="border rounded-xl p-2.5 text-center cursor-pointer text-xs font-bold transition flex items-center justify-center gap-1.5">
                                <input type="radio" value="cash" x-model="paymentMethod" class="hidden">
                                <span>Cash</span>
                            </label>
                        </div>

                        <!-- Stripe Gateway Info Banner -->
                        <div x-show="paymentMethod === 'card'" x-transition class="mt-2.5 p-3 rounded-xl bg-indigo-950/30 border border-indigo-500/30 flex items-center justify-between text-xs text-zinc-300" x-cloak>
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg bg-indigo-600/30 flex items-center justify-center text-indigo-400 text-sm font-bold shrink-0">
                                    <i class="fa-brands fa-stripe text-2xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-white text-xs flex items-center gap-1.5">
                                        Stripe Payment Gateway
                                        <span class="text-[9px] px-1.5 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-mono">Hosted Checkout</span>
                                    </p>
                                    <p class="text-[11px] text-zinc-400">Itemized line items • Visa, Mastercard, AMEX, Apple Pay</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock text-viaje-400 text-xs"></i>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 pt-4 border-t border-white/5">
                    <button type="button" @click="bookingStep = 2" class="px-6 py-4 rounded-xl border border-white/10 text-white font-bold hover:bg-white/5 transition">Back</button>
                    <button type="button" @click="submitBooking()" :disabled="isSubmitting" class="flex-1 py-4 rounded-xl bg-white text-zinc-950 font-bold hover:bg-viaje-500 transition-colors disabled:opacity-50 flex items-center justify-center gap-2 shadow-lg">
                        <span x-show="!isSubmitting && paymentMethod === 'card'" class="flex items-center gap-2">
                            <span>Proceed to Stripe Checkout</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </span>
                        <span x-show="!isSubmitting && paymentMethod !== 'card'">Confirm Reservation</span>
                        <span x-show="isSubmitting" x-cloak class="flex items-center gap-2"><i class="fa-solid fa-spinner fa-spin"></i> Processing...</span>
                    </button>
                </div>
            </div>

            <!-- STEP 3.5: Fake Payment Gateway -->
            <div x-show="bookingStep === 'payment_processing'" class="py-12 flex flex-col items-center justify-center" x-cloak>
                <template x-if="paymentMethod === 'gcash'">
                    <div class="w-full max-w-sm mx-auto text-center">
                        <div class="w-24 h-24 mx-auto bg-blue-500 rounded-2xl flex items-center justify-center mb-6 shadow-[0_0_40px_rgba(59,130,246,0.3)] relative overflow-hidden">
                            <!-- Mock GCash Logo -->
                            <span class="font-black text-white text-3xl tracking-tighter z-10">GCash</span>
                            <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-blue-400 opacity-50 animate-pulse"></div>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Secure Payment</h3>
                        <p class="text-blue-400 font-medium mb-8" x-text="processingText"></p>
                        
                        <div class="w-full bg-zinc-800/50 rounded-full h-1.5 mb-2 overflow-hidden">
                            <div class="bg-blue-500 h-1.5 rounded-full transition-all duration-300" :style="'width: ' + processingProgress + '%'"></div>
                        </div>
                        <p class="text-xs text-zinc-500">Do not close this window</p>
                    </div>
                </template>
                
                <template x-if="paymentMethod !== 'gcash'">
                    <div class="w-full max-w-sm mx-auto text-center">
                        <div class="w-24 h-24 mx-auto bg-zinc-800 border border-zinc-700 rounded-full flex items-center justify-center mb-6 shadow-xl relative">
                            <i class="fa-regular fa-credit-card text-4xl text-zinc-300 z-10"></i>
                            <svg class="absolute inset-0 w-full h-full text-indigo-500 animate-spin-slow" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="48" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="75 225" stroke-linecap="round"></circle>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 flex items-center justify-center gap-2">
                            <i class="fa-solid fa-lock text-emerald-400 text-sm"></i> Encrypted Connection
                        </h3>
                        <p class="text-indigo-400 font-medium mb-8" x-text="processingText"></p>
                        
                        <div class="flex justify-center gap-2 mb-2">
                            <div class="w-2 h-2 rounded-full bg-indigo-500 animate-ping"></div>
                            <div class="w-2 h-2 rounded-full bg-indigo-500 animate-ping" style="animation-delay: 150ms"></div>
                            <div class="w-2 h-2 rounded-full bg-indigo-500 animate-ping" style="animation-delay: 300ms"></div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- STEP 4: Success -->
            <div x-show="bookingStep === 4" class="text-center py-8" x-cloak>
                <div class="w-20 h-20 rounded-full bg-viaje-500/20 text-viaje-400 flex items-center justify-center text-4xl mx-auto mb-6">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h2 class="font-heading font-black text-3xl text-white mb-2">Confirmed!</h2>
                <p class="text-zinc-400 text-sm mb-8">Your trip reference is <span class="text-white font-bold" x-text="confirmationCode || 'VJ-88291'"></span></p>
                <button @click="bookingModalOpen = false; bookingStep = 1;" class="w-full py-4 rounded-xl border border-white/10 text-white font-bold hover:bg-white/5 transition">Close & View More Cars</button>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
    <footer class="bg-zinc-950 text-zinc-400 pt-24 pb-12 relative overflow-hidden">
        
        <!-- Glowing top border -->
        <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-viaje-500/50 to-transparent shadow-[0_0_20px_rgba(16,185,129,0.5)]"></div>
        
        <!-- Large watermark -->
        <div class="absolute -bottom-20 -right-20 text-[20rem] font-heading font-black text-white/[0.02] pointer-events-none leading-none select-none tracking-tighter">
            VIAJE
        </div>
        
        <div class="max-w-[1400px] mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 lg:gap-16 mb-20">
                
                <!-- Brand Info -->
                <div class="lg:col-span-2 space-y-6">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-viaje-500 flex items-center justify-center text-zinc-950 font-bold text-lg shadow-glow-emerald">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <span class="font-heading font-extrabold text-2xl tracking-tighter text-white">VIAJE</span>
                    </a>
                    <p class="text-sm leading-relaxed max-w-sm text-zinc-300 font-medium">
                        Built for the roads less taken&mdash;from NAIA to Batanes. Premium car rentals engineered for the Philippine landscape.
                    </p>
                    <div class="flex items-center gap-4 pt-4">
                        <a href="#" aria-label="Follow Viaje on Facebook" class="w-12 h-12 rounded-full glass-panel flex items-center justify-center text-white hover:bg-white hover:text-zinc-950 transition-colors border-white/10"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Follow Viaje on Instagram" class="w-12 h-12 rounded-full glass-panel flex items-center justify-center text-white hover:bg-white hover:text-zinc-950 transition-colors border-white/10"><i class="fa-brands fa-instagram text-lg"></i></a>
                        <a href="#" aria-label="Follow Viaje on TikTok" class="w-12 h-12 rounded-full glass-panel flex items-center justify-center text-white hover:bg-white hover:text-zinc-950 transition-colors border-white/10"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <!-- Luzon Fleet -->
                <div>
                    <h3 class="text-white font-extrabold font-heading text-lg mb-6 tracking-tight">Luzon Fleet</h3>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Toyota Fortuner 4x4</a></li>
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Suzuki Jimny AllGrip</a></li>
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Toyota HiAce Grandia</a></li>
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Nissan Navara PRO-4X</a></li>
                    </ul>
                </div>

                <!-- Hubs -->
                <div>
                    <h3 class="text-white font-extrabold font-heading text-lg mb-6 tracking-tight">Pickup Hubs</h3>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Manila (NAIA T1-T4)</a></li>
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Clark Airport (CRK)</a></li>
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Baguio City Delivery</a></li>
                        <li><a href="#" class="hover:text-viaje-400 transition-colors">Laoag Airport (LAO)</a></li>
                    </ul>
                </div>

                <!-- Contact & Support -->
                <div>
                    <h3 class="text-white font-extrabold font-heading text-lg mb-6 tracking-tight">24/7 Support</h3>
                    <ul class="space-y-5 text-sm font-medium">
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-viaje-400 shrink-0">
                                <i class="fa-solid fa-headset text-xs"></i>
                            </div>
                            <span><span class="text-white font-bold block mb-0.5">24/7 Digital Concierge</span><span class="text-[10px] text-zinc-400 uppercase tracking-widest font-bold">Instant Online Booking</span></span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-viaje-400 shrink-0">
                                <i class="fa-solid fa-shield-halved text-xs"></i>
                            </div>
                            <span class="text-zinc-400 text-xs mt-1 block">Verified Island Fleet System</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-viaje-400 shrink-0">
                                <i class="fa-solid fa-location-dot text-xs"></i>
                            </div>
                            <span class="mt-1 block leading-relaxed">Level 2, NAIA Terminal 3<br>Pasay City, Philippines</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-6 text-xs font-bold uppercase tracking-wider text-zinc-400">
                <p>&copy; 2026 Viaje Car Rental Philippines.</p>
                <div class="flex gap-8">
                    <a href="#" class="hover:text-viaje-400 transition-colors">Privacy</a>
                    <a href="#" class="hover:text-viaje-400 transition-colors">Terms</a>
                    <a href="#" class="hover:text-viaje-400 transition-colors">Rental Agreement</a>
                </div>
            </div>
        </div>
    </footer>
@php
$defaultCars = [
    [
        'id' => 1,
        'name' => 'Suzuki Jimny AllGrip 4x4',
        'category' => 'island',
        'categoryName' => 'Island 4x4',
        'dailyRate' => 2799,
        'rating' => 4.99,
        'reviews' => 215,
        'seats' => 4,
        'bags' => 2,
        'transmission' => 'Automatic',
        'fuel' => 'Petrol',
        'eco' => '14 km/L',
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Island Favorite',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 2,
        'name' => 'Toyota HiAce Super Grandia VIP',
        'category' => 'van',
        'categoryName' => 'Executive Van',
        'dailyRate' => 6499,
        'rating' => 4.98,
        'reviews' => 320,
        'seats' => 10,
        'bags' => 7,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '11 km/L',
        'image' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Balikbayan Choice',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 3,
        'name' => 'Toyota Fortuner GR-Sport 4x4',
        'category' => 'suv',
        'categoryName' => '7-Seater 4x4 SUV',
        'dailyRate' => 4199,
        'rating' => 4.97,
        'reviews' => 180,
        'seats' => 7,
        'bags' => 5,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '13 km/L',
        'image' => 'https://images.unsplash.com/photo-1520031441872-265e4ff70366?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Provincial Cruiser',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 4,
        'name' => 'Toyota Land Cruiser Prado VX',
        'category' => 'luxury',
        'categoryName' => 'VIP Luxury 4x4',
        'dailyRate' => 14500,
        'rating' => 5.00,
        'reviews' => 64,
        'seats' => 7,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '10 km/L',
        'image' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Presidential VIP',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 5,
        'name' => 'Ford Everest Titanium 4x4',
        'category' => 'suv',
        'categoryName' => '7-Seater SUV',
        'dailyRate' => 4499,
        'rating' => 4.95,
        'reviews' => 142,
        'seats' => 7,
        'bags' => 5,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '12 km/L',
        'image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Family Comfort',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 6,
        'name' => 'Hyundai Staria Lounge 7-Seater',
        'category' => 'van',
        'categoryName' => 'Futuristic VIP Van',
        'dailyRate' => 6999,
        'rating' => 4.98,
        'reviews' => 95,
        'seats' => 7,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '12 km/L',
        'image' => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Captain Seats',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
    [
        'id' => 7,
        'name' => 'Toyota Innova Zenix Hybrid',
        'category' => 'electric',
        'categoryName' => 'Hybrid 7-Seater',
        'dailyRate' => 3499,
        'rating' => 4.93,
        'reviews' => 210,
        'seats' => 7,
        'bags' => 4,
        'transmission' => 'Automatic',
        'fuel' => 'Hybrid',
        'eco' => '23 km/L',
        'image' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Ultra Efficient',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 8,
        'name' => 'BYD Atto 3 Extended Range',
        'category' => 'electric',
        'categoryName' => 'Pure Electric Crossover',
        'dailyRate' => 3899,
        'rating' => 4.94,
        'reviews' => 78,
        'seats' => 5,
        'bags' => 4,
        'transmission' => 'Automatic',
        'fuel' => 'Electric',
        'eco' => '480 km Range',
        'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Zero Emission',
        'badgeColor' => 'bg-viaje-500',
    ],
    [
        'id' => 9,
        'name' => 'Nissan Navara PRO-4X Offroad',
        'category' => 'island',
        'categoryName' => '4x4 Double Cab',
        'dailyRate' => 3699,
        'rating' => 4.96,
        'reviews' => 132,
        'seats' => 5,
        'bags' => 6,
        'transmission' => 'Automatic',
        'fuel' => 'Diesel',
        'eco' => '13 km/L',
        'image' => 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?q=75&w=800&auto=format&fit=crop',
        'badge' => 'Adventure 4x4',
        'badgeColor' => 'bg-zinc-800 text-zinc-300 border border-zinc-700',
    ],
];
@endphp
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VIAJE | Tropical Car Rental & Island Road Trips Philippines</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
    
        <!-- Flatpickr for mm/dd/yyyy formatting -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS with Tropical Philippine Theme -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('viajeRentalApp', () => ({
                mobileNavOpen: false,
                mobileMenuOpen: false,
                bookingModalOpen: false,
                quickViewModalOpen: false,
                compareModalOpen: false,
                
                selectedCar: null,
                quickViewCar: null,
                bookingStep: 1,
                  processingProgress: 0,
                  processingText: '',
                
                pricingTier: 'daily',
                selectedCategory: 'all',
                searchQuery: '',
                filterTransmission: 'all',
                filterFuel: 'all',
                maxPrice: 18000,
                sortBy: 'recommended',
                
                currentPage: 1,
                carsPerPage: 12,
                
                comparisonList: [],
                
                addons: {
                    fullInsurance: true,
                    chauffeur: false,
                    rfidLoad: false,
                },

                promoCode: '',
                promoApplied: false,
                promoSuccess: false,
                discountPercentage: 0,

                renter: {
                    name: '',
                    phone: '',
                    email: '',
                    flight: '',
                },

                confirmationCode: '',
                isSubmitting: false,
                paymentMethod: 'gcash',
                bookingError: '',
                pickupPicker: null,
                dropoffPicker: null,
                bookedDates: [],

                toast: {
                    visible: false,
                    title: '',
                    message: '',
                    icon: 'fa-solid fa-umbrella-beach'
                },

                trip: {
                    pickupLocation: 'Mandaluyong Warehouse',
                    dropoffLocation: 'Mandaluyong Warehouse',
                    sameDropoff: true,
                    pickupDate: '',
                    pickupTime: '10:00',
                    dropoffDate: '',
                    dropoffTime: '10:00',
                    driveType: 'self',
                },

                todayDateString: '',
                isCheckingAvailability: false,
                dateError: '',

                popularLocations: [
                    { name: 'Manila NAIA Terminal 3 (MNL)', isAirport: true, cars: 38 },
                    { name: 'Clark International Airport (CRK)', isAirport: true, cars: 26 },
                    { name: 'Baguio City (BAG)', isAirport: false, cars: 19 },
                    { name: 'Laoag International Airport (LAO)', isAirport: true, cars: 14 },
                    { name: 'Subic Bay Freeport Zone (SFS)', isAirport: false, cars: 16 },
                    { name: 'BGC Taguig Metro Depot', isAirport: false, cars: 22 },
                ],

                categories: [
                    { id: 'all', name: 'All Luzon Fleet', icon: 'fa-solid fa-compass' },
                    { id: 'island', name: 'Island 4x4 Off-Roaders', icon: 'fa-solid fa-mountain-sun' },
                    { id: 'van', name: 'Family & VIP Vans', icon: 'fa-solid fa-van-shuttle' },
                    { id: 'suv', name: '7-Seater SUVs', icon: 'fa-solid fa-truck-pickup' },
                    { id: 'luxury', name: 'Executive Luxury', icon: 'fa-solid fa-crown' },
                    { id: 'electric', name: 'Hybrid & EV', icon: 'fa-solid fa-leaf' },
                ],

                hubs: [
                    {
                        city: 'Manila (NAIA)',
                        code: 'MNL',
                        name: 'Manila NAIA Terminal 1-3 & BGC Depot',
                        carsCount: 38,
                        address: 'Terminal 3 Curbside Bay 7 / 5th Ave BGC Taguig',
                        description: 'Direct Skyway Stage 3 departures. Fast-track vehicle handovers for incoming international & domestic flights.'
                    },
                    {
                        city: 'Clark (Pampanga)',
                        code: 'CRK',
                        name: 'Clark International Airport (CRK)',
                        carsCount: 19,
                        address: 'Clark Freeport Zone, Angeles, Pampanga',
                        description: 'Ideal for Baguio, La Union surf trips, and North Luzon expressways without passing Metro Manila traffic.'
                    },
                    {
                        city: 'Baguio City',
                        code: 'BAG',
                        name: 'Baguio Loakan Airport & Camp John Hay Depot',
                        carsCount: 12,
                        address: 'Loakan Airport Road, Baguio City',
                        description: 'Your gateway to the Cordilleras, Sagada, and Northern highland retreats with our robust 4x4s and Grandias.'
                    },
                    {
                        city: 'Laoag (Ilocos)',
                        code: 'LAO',
                        name: 'Laoag International Airport (LAO)',
                        carsCount: 15,
                        address: 'Laoag Airport Road, Ilocos Norte',
                        description: 'Explore the historic sites of Vigan, Paoay, and Pagudpud beaches with our family vans and SUVs.'
                    },
                    {
                        city: 'Subic Bay',
                        code: 'SFS',
                        name: 'Subic Bay International Airport Depot',
                        carsCount: 14,
                        address: 'Subic Bay Freeport Zone, Zambales',
                        description: 'Equipped with SUVs and 4x4s for coastal Zambales exploration and quick access to SCTEX.'
                    }
                ],

                fleet: @json($cars ?? $defaultCars ?? []),

                initApp() {
                    ['selectedCategory', 'searchQuery', 'filterTransmission', 'filterFuel', 'maxPrice', 'sortBy'].forEach(filter => {
                        this.$watch(filter, () => {
                            this.currentPage = 1;
                        });
                    });

                    const today = new Date();
                    const tomorrow = new Date(today);
                    tomorrow.setDate(tomorrow.getDate() + 1);

                    const returnDate = new Date(tomorrow);
                    returnDate.setDate(returnDate.getDate() + 3);

                    this.todayDateString = today.toISOString().split('T')[0];
                    this.trip.pickupDate = tomorrow.toISOString().split('T')[0];
                    this.trip.dropoffDate = returnDate.toISOString().split('T')[0];
                    


                    setTimeout(() => {
                        this.showToast('fa-solid fa-umbrella-beach text-zinc-400', 'New Island Booking', 'Maria Santos reserved a Suzuki Jimny for 4 days in Siargao');
                    }, 3500);

                    setInterval(() => {
                        const randomAlerts = [
                            { icon: 'fa-solid fa-van-shuttle text-viaje-300', title: 'NAIA Terminal 3 Handover', message: 'Toyota Super Grandia VIP dispatched for airport pickup' },
                            { icon: 'fa-solid fa-mountain-sun text-zinc-400', title: 'North Luzon Road Trip', message: 'Fortuner 4x4 booked for Baguio & La Union road trip' },
                            { icon: 'fa-solid fa-plane-arrival text-zinc-400', title: 'Baguio City (BAG) Mactan Arrival', message: 'Innova Zenix Hybrid delivered to domestic arrivals' }
                        ];
                        const alert = randomAlerts[Math.floor(Math.random() * randomAlerts.length)];
                        this.showToast(alert.icon, alert.title, alert.message);
                    }, 22000);
                },

                showToast(icon, title, message) {
                    this.toast.icon = icon;
                    this.toast.title = title;
                    this.toast.message = message;
                    this.toast.visible = true;
                    setTimeout(() => {
                        this.toast.visible = false;
                    }, 6000);
                },

                async checkAvailability() {
                    this.dateError = '';
                    if (!this.trip.pickupDate || !this.trip.dropoffDate || !this.selectedCar) return;

                    const p = new Date(this.trip.pickupDate);
                    const d = new Date(this.trip.dropoffDate);
                    
                    if (d < p) {
                        this.dateError = 'Drop-off date cannot be before pick-up date.';
                        return;
                    }

                    const diffTime = Math.abs(d - p);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
                    if (diffDays < 1) {
                        this.dateError = 'A minimum of 1 day rental is required.';
                        return;
                    }
                    if (diffDays > 60) {
                        this.dateError = 'Maximum rental period is 60 days.';
                        return;
                    }

                    this.isCheckingAvailability = true;
                    
                    try {
                        const url = '/api/availability?pickup_date=' + this.trip.pickupDate + '&dropoff_date=' + this.trip.dropoffDate;
                        const response = await fetch(url);

                        if (response.ok) {
                            const bookedCarIds = await response.json();
                            if (bookedCarIds.includes(this.selectedCar.id)) {
                                this.dateError = 'Sorry, this vehicle is already booked for your selected dates.';
                            }
                        }
                    } catch (e) {
                        console.error('Availability check failed', e);
                    } finally {
                        this.isCheckingAvailability = false;
                    }
                },

                async proceedToAddons() {
                    await this.checkAvailability();
                    if (!this.dateError) {
                        this.bookingStep = 2;
                    }
                },

                async submitBooking() {
                    this.bookingError = '';
                    
                    if (!this.renter.name || !this.renter.name.trim()) {
                        this.bookingError = 'Please enter your full name.';
                        return;
                    }
                    if (!this.renter.email || !this.renter.email.trim()) {
                        this.bookingError = 'Please enter your email address.';
                        return;
                    }

                    this.bookingStep = 'payment_processing';
                    this.isSubmitting = true;

                    if (this.paymentMethod === 'card') {
                        this.processingProgress = 60;
                        this.processingText = 'Connecting to Stripe Checkout Gateway...';
                    } else {
                        this.processingProgress = 10;
                        this.processingText = 'Connecting to Secure Gateway...';
                        await new Promise(r => setTimeout(r, 500));
                        this.processingProgress = 50;
                        this.processingText = 'Authorizing Transaction...';
                        await new Promise(r => setTimeout(r, 700));
                        this.processingProgress = 90;
                        this.processingText = 'Finalizing...';
                    }
                    try {
                        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
                        const response = await fetch('/bookings', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                car_id: this.selectedCar?.id,
                                renter: this.renter,
                                trip: this.trip,
                                addons: this.addons,
                                promoCode: this.promoCode,
                                paymentMethod: this.paymentMethod || 'gcash'
                            })
                        });
                        
                        const data = await response.json();
                        if (response.ok && data.success) {
                            if (data.checkout_url) {
                                this.processingText = 'Redirecting to Checkout...';
                                this.processingProgress = 100;
                                window.location.href = data.checkout_url;
                            } else {
                                this.confirmationCode = data.booking_reference || data.booking?.booking_reference || 'VJ-' + Math.floor(Math.random() * 90000 + 10000);
                                this.bookingStep = 4;
                                this.showToast('fa-solid fa-circle-check text-viaje-300', 'Booking Confirmed', 'Reservation ' + this.confirmationCode + ' is secured!');
                            }
                        } else {
                            this.bookingStep = 3;
                            const errMsg = data.message || (data.errors ? Object.values(data.errors).flat().join(' ') : 'Please check your inputs.');
                            this.bookingError = errMsg;
                            this.showToast('fa-solid fa-circle-xmark text-red-500', 'Booking Error', errMsg);
                        }
                    } catch (e) {
                        this.bookingStep = 3;
                        console.error('Booking submission error:', e);
                        this.bookingError = 'Network error or failed to process booking. Please try again.';
                        this.showToast('fa-solid fa-circle-xmark text-red-500', 'Error', 'Failed to complete booking.');
                    } finally {
                        this.isSubmitting = false;
                    }
                },

                completeBooking() {
                    return this.submitBooking();
                },

                formatPhp(amount) {
                    return Math.round(amount || 0).toLocaleString('en-PH');
                },

                scrollToFleet() {
                    const fleetSec = document.getElementById('fleet');
                    if (fleetSec) fleetSec.scrollIntoView({ behavior: 'smooth' });
                },

                get calculatedDays() {
                    if (!this.trip.pickupDate || !this.trip.dropoffDate) return 3;
                    const start = new Date(this.trip.pickupDate);
                    const end = new Date(this.trip.dropoffDate);
                    const diffDays = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                    return diffDays > 0 ? diffDays : 1;
                },

                getPrice(baseRate) {
                    if (!baseRate) return 0;
                    let mult = 1;
                    if (this.pricingTier === 'weekly') mult = 0.85;
                    if (this.pricingTier === 'monthly') mult = 0.70;
                    return Math.round(baseRate * mult);
                },

                get filteredCars() {
                    return this.fleet.filter(car => {
                        if (this.selectedCategory !== 'all' && car.category !== this.selectedCategory) return false;
                        if (this.filterTransmission !== 'all' && car.transmission !== this.filterTransmission) return false;
                        if (this.filterFuel !== 'all' && car.fuel !== this.filterFuel) return false;
                        if (this.getPrice(car.dailyRate) > this.maxPrice) return false;
                        if (this.searchQuery.trim() !== '') {
                            const q = this.searchQuery.toLowerCase();
                            const match = car.name.toLowerCase().includes(q) || car.categoryName.toLowerCase().includes(q);
                            if (!match) return false;
                        }
                        return true;
                    }).sort((a, b) => {
                        if (this.sortBy === 'price-asc') return this.getPrice(a.dailyRate) - this.getPrice(b.dailyRate);
                        if (this.sortBy === 'price-desc') return this.getPrice(b.dailyRate) - this.getPrice(a.dailyRate);
                        if (this.sortBy === 'rating') return b.rating - a.rating;
                        return 0;
                    });
                },

                get paginatedCars() {
                    const start = (this.currentPage - 1) * this.carsPerPage;
                    const end = start + this.carsPerPage;
                    return this.filteredCars.slice(start, end);
                },

                get totalPages() {
                    return Math.ceil(this.filteredCars.length / this.carsPerPage) || 1;
                },

                goToPage(page) {
                    if (page >= 1 && page <= this.totalPages) {
                        this.currentPage = page;
                        this.scrollToFleet();
                    }
                },

                get isFiltered() {
                    return this.selectedCategory !== 'all' || 
                           this.searchQuery.trim() !== '' || 
                           this.filterTransmission !== 'all' || 
                           this.filterFuel !== 'all' || 
                           this.maxPrice < 18000 || 
                           this.sortBy !== 'recommended';
                },

                resetFilters() {
                    this.selectedCategory = 'all';
                    this.searchQuery = '';
                    this.filterTransmission = 'all';
                    this.filterFuel = 'all';
                    this.maxPrice = 18000;
                    this.sortBy = 'recommended';
                    this.currentPage = 1;
                },

                getCategoryCount(catId) {
                    if (catId === 'all') return this.fleet.length;
                    return this.fleet.filter(c => c.category === catId).length;
                },

                toggleCompare(car) {
                    const idx = this.comparisonList.findIndex(c => c.id === car.id);
                    if (idx > -1) {
                        this.comparisonList.splice(idx, 1);
                    } else {
                        if (this.comparisonList.length >= 3) {
                            this.showToast('fa-solid fa-triangle-exclamation text-zinc-400', 'Limit Reached', 'You can compare up to 3 units simultaneously.');
                            return;
                        }
                        this.comparisonList.push(car);
                    }
                },

                isInCompare(carId) {
                    return this.comparisonList.some(c => c.id === carId);
                },

                clearCompare() {
                    this.comparisonList = [];
                },

                openQuickView(car) {
                    this.quickViewCar = car;
                    this.quickViewModalOpen = true;
                },

                async startBooking(car) {
                    this.selectedCar = car;
                    this.bookingStep = 1;
                    this.bookingError = '';
                    this.promoCode = '';
                    this.promoSuccess = false;
                    this.discountPercentage = 0;
                    this.bookingModalOpen = true;
                    
                    try {
                        const res = await fetch(`/api/car-booked-dates/${car.id}`);
                        const dates = await res.json();
                        this.bookedDates = dates;
                    } catch (e) {
                        console.error('Failed to load booked dates', e);
                        this.bookedDates = [];
                    }

                    // Destroy old pickers and recreate with fresh disable + onDayCreate
                    // Use setTimeout to ensure the modal DOM is fully rendered/visible
                    setTimeout(() => {
                        const self = this;
                        const fpDates = (this.bookedDates || []).map(d => ({ from: d.from, to: d.to }));
                        
                        const config = {
                            altInput: true,
                            altFormat: 'm/d/Y',
                            dateFormat: 'Y-m-d',
                            minDate: 'today',
                            disable: fpDates,
                            onDayCreate: function(dObj, dStr, fp, dayElem) {
                                const dayDate = dayElem.dateObj;
                                if (!dayDate) return;
                                const dayTime = dayDate.getTime();
                                const todayMidnight = new Date();
                                todayMidnight.setHours(0,0,0,0);
                                if (dayTime < todayMidnight.getTime()) return;
                                
                                const ranges = self.bookedDates || [];
                                for (let i = 0; i < ranges.length; i++) {
                                    const fromParts = ranges[i].from.split('-');
                                    const toParts = ranges[i].to.split('-');
                                    const from = new Date(fromParts[0], fromParts[1]-1, fromParts[2]);
                                    const to = new Date(toParts[0], toParts[1]-1, toParts[2]);
                                    from.setHours(0,0,0,0);
                                    to.setHours(23,59,59,999);
                                    if (dayTime >= from.getTime() && dayTime <= to.getTime()) {
                                        dayElem.classList.add('crossed-out');
                                        break;
                                    }
                                }
                            }
                        };

                        if (this.pickupPicker) this.pickupPicker.destroy();
                        this.pickupPicker = flatpickr(this.$refs.pickupInput, {
                            ...config,
                            defaultDate: this.trip.pickupDate,
                            onChange: function(selectedDates, dateStr) {
                                self.trip.pickupDate = dateStr;
                                self.checkAvailability();
                            }
                        });

                        if (this.dropoffPicker) this.dropoffPicker.destroy();
                        this.dropoffPicker = flatpickr(this.$refs.dropoffInput, {
                            ...config,
                            defaultDate: this.trip.dropoffDate,
                            onChange: function(selectedDates, dateStr) {
                                self.trip.dropoffDate = dateStr;
                                self.checkAvailability();
                            }
                        });
                    }, 100);
                },

                applyPromo() {
                    const code = this.promoCode.trim().toUpperCase();
                    if (code === 'MABUHAY20' || code === 'VIAJE20' || code === 'SUMMER20') {
                        this.discountPercentage = 20;
                        this.promoSuccess = true;
                    } else {
                        this.discountPercentage = 10;
                        this.promoSuccess = true;
                    }
                },

                calculateLocationFee() {
                    let fee = 0;
                    if (this.trip.pickupLocation && !this.trip.pickupLocation.toLowerCase().includes('warehouse')) {
                        fee += 250;
                    }
                    if (this.trip.dropoffLocation && !this.trip.dropoffLocation.toLowerCase().includes('warehouse')) {
                        fee += 250;
                    }
                    return fee;
                },

                calculateAddonsTotal() {
                    let daily = 0;
                    if (this.addons.fullInsurance) daily += 450;
                    if (this.addons.chauffeur) daily += 1200;
                    let oneTime = this.addons.rfidLoad ? 1000 : 0;
                    return (daily * this.calculatedDays) + oneTime + this.calculateLocationFee();
                },

                calculateDiscountAmount() {
                    if (!this.selectedCar) return 0;
                    const base = this.getPrice(this.selectedCar.dailyRate) * this.calculatedDays;
                    const totalBeforeDiscount = base + this.calculateAddonsTotal();
                    return totalBeforeDiscount * (this.discountPercentage / 100);
                },

                calculateTaxes() {
                    if (!this.selectedCar) return 0;
                    const base = this.getPrice(this.selectedCar.dailyRate) * this.calculatedDays;
                    const subtotal = base + this.calculateAddonsTotal() - this.calculateDiscountAmount();
                    return subtotal * 0.12; // 12% PH VAT
                },

                calculateGrandTotal() {
                    if (!this.selectedCar) return 0;
                    const base = this.getPrice(this.selectedCar.dailyRate) * this.calculatedDays;
                    const subtotal = base + this.calculateAddonsTotal() - this.calculateDiscountAmount();
                    return subtotal + this.calculateTaxes();
                },

                resetBookingWizard() {
                    this.bookingStep = 1;
                    this.selectedCar = null;
                    this.bookingError = '';
                }
            }));

            Alpine.data('testimonialsCarousel', () => ({
                currentSlide: 0,
                autoSlideInterval: null,
                reviews: [
                    {
                        name: 'Patricia Mendoza',
                        role: 'Balikbayan from California',
                        car: 'Toyota HiAce Super Grandia VIP',
                        avatar: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop',
                        comment: 'Our entire family of 9 fit comfortably with 8 big suitcases from NAIA Terminal 3 all the way up to Baguio. The preloaded Autosweep RFID made the Skyway trip completely painless. Outstanding service by Viaje!'
                    },
                    {
                        name: 'Atty. Rafael Dizon',
                        role: 'Corporate Lawyer (Manila)',
                        car: 'Toyota Land Cruiser Prado',
                        avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop',
                        comment: 'Rented the Prado for VIP client visits across BGC and Clark Freeport. Clean, pristine condition, and the chauffeur was punctual and highly professional.'
                    },
                    {
                        name: 'Kai Takahashi',
                        role: 'Photographer & Surfer',
                        car: 'Suzuki Jimny AllGrip 4x4',
                        avatar: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&auto=format&fit=crop',
                        comment: 'Having a 4x4 Jimny in La Union with surfboard roof mounts made our secret beach missions so easy. Handover at Clark airport took under 2 minutes!'
                    },
                    {
                        name: 'Dr. Camille Tan',
                        role: 'Physician (Pampanga)',
                        car: 'Toyota Fortuner GR-Sport',
                        avatar: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=200&auto=format&fit=crop',
                        comment: 'Drove around Pampanga all the way up to Sagada. Cold dual A/C, strong engine, and GCash payment made booking instant.'
                    }
                ],

                init() {
                    this.autoSlideInterval = setInterval(() => {
                        this.next();
                    }, 6500);
                },

                getVisibleReviews() {
                    const c = this.reviews.length;
                    return [
                        this.reviews[this.currentSlide % c],
                        this.reviews[(this.currentSlide + 1) % c],
                        this.reviews[(this.currentSlide + 2) % c]
                    ];
                },

                next() {
                    this.currentSlide = (this.currentSlide + 1) % this.reviews.length;
                },

                prev() {
                    this.currentSlide = (this.currentSlide - 1 + this.reviews.length) % this.reviews.length;
                }
            }));
        });
    
            Alpine.data('magnetic', () => ({
                x: 0,
                y: 0,
                active: false,
                calculate(e) {
                    const rect = this.$el.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    this.x = x * 0.3;
                    this.y = y * 0.3;
                },
                reset() {
                    this.x = 0;
                    this.y = 0;
                    this.active = false;
                }
            }));
    </script>
</body>
</html>
