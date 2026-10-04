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
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1520031441872-265e4ff70366?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=1200&auto=format&fit=crop',
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
        'image' => 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?q=80&w=1200&auto=format&fit=crop',
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
    <meta name="description" content="Premium car rental in the Philippines. Self-drive 4x4 SUVs, executive vans, and island road trip vehicles with instant booking, airport delivery, and comprehensive insurance.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph Metadata -->
    <meta property="og:title" content="VIAJE | Tropical Car Rental & Island Road Trips Philippines">
    <meta property="og:description" content="Premium car rental in the Philippines. Self-drive 4x4 SUVs, executive vans, and island road trip vehicles with instant booking and airport delivery.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Google Fonts: Plus Jakarta Sans for high-character modern typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
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
                <span><i class="fa-solid fa-sun text-zinc-400 mr-1.5"></i> Manila: 32°C Clear</span>
                <span><i class="fa-solid fa-cloud text-zinc-300 mr-1.5"></i> Baguio: 18°C Cool</span>
                <span><i class="fa-solid fa-plane-arrival text-zinc-400 mr-1.5"></i> NAIA T3: High Demand</span>
                <span><i class="fa-solid fa-car text-viaje-400 mr-1.5"></i> 14 Vehicles Available Today</span>
            </div>
            <div class="flex items-center gap-12 w-1/2 justify-around text-[10px] font-bold text-viaje-300 uppercase tracking-[0.15em]">
                <span><i class="fa-solid fa-sun text-zinc-400 mr-1.5"></i> Manila: 32°C Clear</span>
                <span><i class="fa-solid fa-cloud text-zinc-300 mr-1.5"></i> Baguio: 18°C Cool</span>
                <span><i class="fa-solid fa-plane-arrival text-zinc-400 mr-1.5"></i> NAIA T3: High Demand</span>
                <span><i class="fa-solid fa-car text-viaje-400 mr-1.5"></i> 14 Vehicles Available Today</span>
            </div>
        </div>
    </div>

    <!-- Live Island Booking Toast -->
    <div x-show="toastVisible"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 translate-y-10 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-10 scale-95"
         class="fixed bottom-6 right-6 z-50 max-w-sm w-full" x-cloak>
        <div class="glass-panel p-4 rounded-2xl flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-viaje-500/20 text-viaje-400 flex items-center justify-center flex-shrink-0 shadow-[inset_0_1px_0_rgba(255,255,255,0.1)]">
                <i class="fa-solid fa-bell"></i>
            </div>
            <div class="flex-grow text-xs">
                <p class="text-white font-bold mb-0.5" x-text="toastMessage"></p>
                <p class="text-zinc-400 font-medium" x-text="toastTime"></p>
            </div>
            <button @click="toastVisible = false" aria-label="Dismiss notification" class="text-zinc-400 hover:text-white transition">
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
                <div class="hidden md:flex items-center gap-4">
                    <div class="flex flex-col items-end">
                        <span class="text-[9px] font-extrabold uppercase tracking-widest text-viaje-400">24/7 Concierge</span>
                        <span class="text-xs font-mono font-bold text-emerald-400 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Instant Dispatch</span>
                    </div>

                    @auth
                        <a href="{{ route('dashboard') }}" class="px-3.5 py-2.5 rounded-xl border border-viaje-500/30 bg-viaje-500/10 text-xs font-bold text-viaje-300 hover:text-white hover:bg-viaje-500/20 hover:border-viaje-400 transition flex items-center gap-2" title="Admin Dashboard">
                            <i class="fa-solid fa-gauge-high text-viaje-400 text-xs"></i>
                            <span>Admin</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3.5 py-2.5 rounded-xl border border-white/10 bg-black/20 text-xs font-bold text-zinc-300 hover:text-white hover:border-viaje-500/40 hover:bg-viaje-500/10 transition flex items-center gap-2 group" title="Admin Login">
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

    <!-- HERO SECTION (SPLIT SCREEN) -->
    <section class="relative min-h-[100dvh] flex flex-col justify-center overflow-hidden bg-zinc-950 pb-16 md:pb-0 pt-10 md:pt-0">
        
        <!-- Background Gradient Layers -->
        <div class="absolute inset-0 island-radial opacity-60"></div>
        <div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-viaje-500/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-[1400px] mx-auto px-6 w-full relative z-10 flex-grow flex items-center pt-8 md:pt-0">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center w-full">
                
                <!-- Left: Typography & CTAs (55%) -->
                <div class="lg:col-span-7 space-y-8">
                    
                    <div class="inline-flex items-center gap-3 px-4 py-1.5 rounded-full glass-panel text-viaje-300 text-[10px] font-extrabold uppercase tracking-widest shadow-[0_4px_20px_-5px_rgba(16,185,129,0.2)]" style="animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; opacity:0;">
                        <span class="w-2 h-2 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700 shadow-[0_0_10px_#fbbf24] animate-pulse"></span>
                        Philippines Premier Fleet
                    </div>
                    
                    <h1 class="font-heading font-extrabold text-6xl md:text-7xl lg:text-[5.5rem] text-white tracking-tighter leading-[1.05]" style="animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.1s forwards; opacity:0;">
                        Drive the <span class="tropical-gradient-text">Islands.</span><br>
                        <span class="text-zinc-300/90 font-medium tracking-tight">Your Rhythm.</span>
                    </h1>
                    
                    <p class="text-zinc-400 text-lg md:text-xl max-w-lg leading-relaxed" style="animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.2s forwards; opacity:0;">
                        Premium 4x4 off-roaders and executive vans for your Luzon road trips. Terminal pickup at NAIA, Baguio, and Clark—equipped with RFID express tags.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-4 pt-6" style="animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards; opacity:0;">
                        <a href="{{ route('booking') }}" x-data="magnetic" @mousemove="calculate" @mouseleave="reset" :style="`transform: translate(${x}px, ${y}px) scale(${active ? 0.98 : 1})`" @mousedown="active = true" @mouseup="active = false" class="w-full sm:w-auto px-8 py-4 bg-white text-zinc-950 font-extrabold text-sm rounded-xl overflow-hidden shadow-glow-emerald transition-transform ease-out relative group flex items-center justify-center">
                            <div class="absolute inset-0 w-0 bg-viaje-500 transition-all duration-300 ease-out group-hover:w-full"></div>
                            <span class="relative z-10 flex items-center gap-2 group-hover:text-zinc-950">Book a Vehicle <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i></span>
                        </a>
                        <a href="#destinations" class="w-full sm:w-auto px-8 py-4 glass-panel text-white font-bold text-sm rounded-xl transition-all hover:bg-white/10 flex items-center justify-center gap-2 border-white/10">
                            Explore Hubs <i class="fa-solid fa-location-dot text-viaje-400 ml-1"></i>
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="pt-10 flex flex-wrap items-center gap-8 md:gap-12" style="animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.4s forwards; opacity:0;">
                        <div>
                            <p class="font-mono text-3xl font-extrabold text-white">7,614</p>
                            <p class="text-[10px] text-viaje-400 uppercase tracking-widest font-bold mt-1">Road Trips</p>
                        </div>
                        <div class="w-px h-10 bg-white/10 hidden sm:block"></div>
                        <div>
                            <p class="font-mono text-3xl font-extrabold text-zinc-400">4.97</p>
                            <p class="text-[10px] text-zinc-400 uppercase tracking-widest font-bold mt-1">Avg Rating</p>
                        </div>
                        <div class="w-px h-10 bg-white/10 hidden sm:block"></div>
                        <div>
                            <p class="font-mono text-3xl font-extrabold text-zinc-400">100%</p>
                            <p class="text-[10px] text-zinc-400 uppercase tracking-widest font-bold mt-1">Insured & Ready</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual Arrangement (45%) -->
                <div class="lg:col-span-5 relative hidden lg:block h-[600px] w-full" style="animation: fade-in 1.2s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards; opacity:0;">
                    
                    <!-- Floating Decorative SVG -->
                    <div class="absolute -top-10 -right-10 opacity-30 pointer-events-none animate-float-slow z-0">
                        <svg width="180" height="180" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50 95C50 95 65 70 85 65C85 65 65 55 60 30C60 30 50 50 30 50C30 50 45 60 50 95Z" fill="#34d399"/>
                            <path d="M50 95C50 95 35 70 15 65C15 65 35 55 40 30C40 30 50 50 70 50C70 50 55 60 50 95Z" fill="#22d3ee"/>
                        </svg>
                    </div>

                    <!-- Main Hero Image Box -->
                    <div class="absolute left-8 bottom-12 w-[85%] h-[75%] rounded-[2.5rem] overflow-hidden shadow-2xl z-10 transform -rotate-3 transition-transform duration-700 hover:-rotate-1 border border-white/10">
                        <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800&auto=format&fit=crop" alt="4x4 SUV in Philippines" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent opacity-80"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <p class="text-xs font-bold uppercase tracking-widest text-viaje-400 mb-1">Featured Class</p>
                            <p class="font-heading font-bold text-2xl text-white">Suzuki Jimny AllGrip 4x4</p>
                        </div>
                    </div>

                    <!-- Floating Glass Card (Live Status) -->
                    <div class="absolute right-0 top-32 w-72 glass-panel p-5 rounded-[2rem] transform rotate-3 shadow-2xl z-20 hover:rotate-0 transition-transform duration-500 backdrop-blur-2xl bg-zinc-900/70 border-t border-l border-white/20 border-b-0 border-r-0">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-zinc-500/20 flex items-center justify-center text-zinc-400 shadow-[inset_0_1px_0_rgba(255,255,255,0.1)]">
                                    <i class="fa-solid fa-plane-arrival"></i>
                                </div>
                                <div>
                                    <p class="text-[9px] text-zinc-400 font-extrabold uppercase tracking-widest">Live Status</p>
                                    <p class="text-sm font-bold text-white">NAIA Terminal 3</p>
                                </div>
                            </div>
                            <span class="relative flex h-2.5 w-2.5 mt-1">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-viaje-500 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-viaje-500"></span>
                            </span>
                        </div>
                        <div class="space-y-3">
                            <div class="flex justify-between text-[10px] text-zinc-400 font-bold uppercase tracking-wider mb-1">
                                <span>Capacity</span>
                                <span>85% Booked</span>
                            </div>
                            <div class="h-1.5 w-full bg-zinc-950 rounded-full overflow-hidden shadow-inner">
                                <div class="h-full bg-gradient-to-r from-viaje-500 to-zinc-500 w-[85%] rounded-full"></div>
                            </div>
                            <p class="text-xs text-zinc-300 font-medium">3 vehicles remaining for instant express pickup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FULL WIDTH FEATURED SHOWCASE CAROUSEL -->
        <div class="w-full relative z-20 mt-12 md:mt-24 border-t border-white/5">
            <livewire:featured-fleet-showcase />
        </div>
    </section>

    <!-- KINETIC TRUST MARQUEE -->
    <div class="bg-viaje-500 text-zinc-950 py-3.5 overflow-hidden flex items-center border-y border-viaje-400/30">
        <div class="animate-marquee whitespace-nowrap flex items-center">
            <div class="flex items-center gap-16 w-1/2 justify-around text-xs font-black uppercase tracking-[0.2em]">
                <span><i class="fa-solid fa-certificate mr-2"></i> LTO Accredited</span>
                <span><i class="fa-solid fa-shield-halved mr-2"></i> Premium CDW Shield</span>
                <span><i class="fa-solid fa-plane mr-2"></i> NAIA Express Pickup</span>
                <span><i class="fa-solid fa-star mr-2"></i> 4.97 Avg Rating</span>
                <span><i class="fa-solid fa-headset mr-2"></i> 24/7 Roadside Rescue</span>
            </div>
            <div class="flex items-center gap-16 w-1/2 justify-around text-xs font-black uppercase tracking-[0.2em]">
                <span><i class="fa-solid fa-certificate mr-2"></i> LTO Accredited</span>
                <span><i class="fa-solid fa-shield-halved mr-2"></i> Premium CDW Shield</span>
                <span><i class="fa-solid fa-plane mr-2"></i> NAIA Express Pickup</span>
                <span><i class="fa-solid fa-star mr-2"></i> 4.97 Avg Rating</span>
                <span><i class="fa-solid fa-headset mr-2"></i> 24/7 Roadside Rescue</span>
            </div>
        </div>
    </div>

    <!-- PHILIPPINE DESTINATIONS & AIRPORT HUBS -->
    <section id="destinations" class="py-24 md:py-32 bg-zinc-950 relative">
        <div class="max-w-[1400px] mx-auto px-6" x-data="{ selectedHub: 0 }">
            
            <div class="mb-16 md:mb-20 max-w-2xl">
                <span class="text-zinc-400 text-[10px] font-extrabold uppercase tracking-widest mb-4 block"><i class="fa-solid fa-map-location-dot mr-1"></i> The Viaje Network</span>
                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tighter leading-tight">Strategic Hubs Across Luzon.</h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-[340px_1fr] gap-8 lg:gap-16 items-start">
                
                <!-- Hub List (Sidebar) -->
                <div class="space-y-3">
                    <template x-for="(hub, index) in [
                        { name: 'Naia', icon: 'fa-plane' },
                        { name: 'SM Megamall', icon: 'fa-building' },
                        { name: 'SM Moa', icon: 'fa-store' },
                        { name: 'Araneta Cubao', icon: 'fa-ticket' },
                        { name: 'Our warehouse at Mandaluyong', icon: 'fa-warehouse' }
                    ]">
                        <button @click="selectedHub = index" :aria-label="hub.name"
                                class="w-full text-left px-6 py-5 rounded-[1.5rem] transition-all border font-bold flex items-center justify-between group"
                                :class="selectedHub === index ? 'bg-white text-zinc-950 border-white shadow-[0_10px_30px_-10px_rgba(255,255,255,0.3)]' : 'glass-panel text-zinc-400 border-white/5 hover:text-white hover:bg-white/5'">
                            <span class="flex items-center gap-4">
                                <i class="fa-solid text-lg" :class="[hub.icon, selectedHub === index ? 'text-viaje-500' : 'text-zinc-500']"></i> 
                                <span x-text="hub.name" class="tracking-tight text-sm sm:text-base"></span>
                            </span>
                            <i class="fa-solid fa-arrow-right text-xs transition-all" 
                               :class="selectedHub === index ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0'"></i>
                        </button>
                    </template>
                </div>

                <!-- Hub Details Card -->
                <div class="glass-panel rounded-[2.5rem] p-8 md:p-14 relative overflow-hidden flex flex-col justify-end min-h-[450px] md:min-h-[500px]">
                    
                    <!-- Background Images -->
                    <div class="absolute inset-0 z-0 bg-zinc-950">
                        <template x-for="(bg, index) in [
                            'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=1600&auto=format&fit=crop',
                            'https://mandaluyong.gov.ph/storage/2024/09/image_2024-09-04_113616899-1024x509.png',
                            'https://www.discoverthephilippines.com/wp-content/uploads/2022/05/article-cover-photo-mall-of-asia.jpg',
                            'https://i0.wp.com/live.staticflickr.com/65535/51137109742_02212fb996_b.jpg?w=960&ssl=1',
                            'https://img.peerspace.com/image/upload/f_auto,q_auto,dpr_auto,w_3840/t2vsni4dqxzdwmspq4y8'
                        ]">
                            <img :src="bg" 
                                 class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out mix-blend-luminosity" 
                                 :class="selectedHub === index ? 'opacity-80' : 'opacity-0'" 
                                 alt="Hub Background">
                        </template>
                        <!-- Dramatic Overlay for text readability -->
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/90 via-zinc-950/40 to-transparent"></div>
                    </div>

                    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-end">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-viaje-500 text-zinc-950 rounded-full text-[10px] font-extrabold uppercase tracking-widest shadow-glow-emerald">
                                <span class="w-1.5 h-1.5 bg-zinc-950 rounded-full animate-ping"></span> Live Operations
                            </div>
                            <h3 class="font-heading text-4xl md:text-5xl font-extrabold text-white tracking-tighter leading-none" x-text="['NAIA Terminal', 'SM Megamall', 'SM MOA', 'Araneta Cubao', 'Mandaluyong Warehouse'][selectedHub]"></h3>
                            <p class="text-zinc-300 text-sm leading-relaxed max-w-sm" x-text="['Terminal 1, 2, 3 & 4 Arrival Bay Pickup. Our concierge meets you curbside.', 'Convenient pickup and drop-off right at the heart of Ortigas Center.', 'Bay area dispatch ready. Meet our team near the iconic globe.', 'Your gateway to the North. Seamless handover in the bustling Quezon City center.', 'Our main staging area. Largest vehicle selection with immediate drive-out.'][selectedHub]"></p>
                        </div>
                        
                        <div class="flex flex-wrap gap-4 md:justify-end">
                            <div class="glass-panel px-6 py-4 rounded-2xl border-white/10 backdrop-blur-md bg-black/30">
                                <p class="text-[10px] text-viaje-400 uppercase tracking-widest font-extrabold mb-1">Fleet Ready</p>
                                <p class="font-mono text-3xl font-extrabold text-white" x-text="['45+', '20', '30', '25', '100+'][selectedHub]"></p>
                            </div>
                            <div class="glass-panel px-6 py-4 rounded-2xl border-white/10 backdrop-blur-md bg-black/30">
                                <p class="text-[10px] text-zinc-400 uppercase tracking-widest font-extrabold mb-1">Avg Dispatch</p>
                                <p class="font-mono text-3xl font-extrabold text-white" x-text="['< 5 min', '< 10 min', '< 8 min', '< 10 min', 'Instant'][selectedHub]"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- WHY VIAJE / ISLAND PERKS (BENTO GRID) -->
    <section id="island-perks" class="py-24 md:py-32 bg-zinc-950 relative border-t border-white/5 overflow-hidden">
        
        <!-- Large atmospheric glow -->
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-viaje-500/10 via-zinc-950/0 to-transparent pointer-events-none"></div>
        
        <div class="max-w-[1400px] mx-auto px-6 relative z-10">
            
            <div class="mb-16 md:mb-20 max-w-2xl">
                <span class="text-viaje-400 text-[10px] font-extrabold uppercase tracking-widest mb-4 block"><i class="fa-solid fa-gem mr-1"></i> The VIAJE Standard</span>
                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tighter leading-tight">Engineered for the Philippines.</h2>
            </div>

            <!-- Asymmetric Bento Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-[1.6fr_1fr_1fr] grid-rows-[auto_auto] gap-6">
                
                <!-- Main Feature (Spans 2 Rows on Desktop) -->
                <div class="glass-panel rounded-[2.5rem] p-10 md:p-12 lg:row-span-2 relative overflow-hidden group hover:border-viaje-500/30 transition-colors duration-500 bg-zinc-900/40">
                    <div class="absolute -right-20 -top-20 w-80 h-80 bg-viaje-500/20 rounded-full blur-[80px] transition-transform duration-700 group-hover:scale-150"></div>
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div class="w-16 h-16 rounded-[1.5rem] bg-gradient-to-br from-viaje-400 to-viaje-600 flex items-center justify-center text-zinc-950 text-3xl mb-12 shadow-glow-emerald">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h3 class="font-heading text-3xl font-extrabold text-white mb-4 tracking-tight">Premium CDW Shield</h3>
                            <p class="text-zinc-400 text-sm md:text-base leading-relaxed max-w-md">
                                Comprehensive Collision Damage Waiver designed specifically for Philippine road conditions. Zero deductibles on minor scratches, full tire and glass protection, and guaranteed vehicle replacement within 4 hours anywhere in Luzon. Drive with absolute peace of mind.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Minor Feature 1 -->
                <div class="glass-panel rounded-[2rem] p-8 group hover:bg-white/5 transition-colors border-white/5 hover:border-white/10">
                    <i class="fa-solid fa-user-tie text-zinc-400 text-2xl mb-6 block drop-shadow-[0_0_10px_rgba(16,185,129,0.3)]"></i>
                    <h4 class="font-heading text-xl font-bold text-white mb-3">Pro Chauffeurs</h4>
                    <p class="text-sm text-zinc-400 leading-relaxed">DOT-accredited drivers fluent in local routes, optimal shortcuts, and polite service.</p>
                </div>

                <!-- Minor Feature 2 -->
                <div class="glass-panel rounded-[2rem] p-8 group hover:bg-white/5 transition-colors border-white/5 hover:border-white/10">
                    <i class="fa-solid fa-bolt text-zinc-400 text-2xl mb-6 block drop-shadow-[0_0_10px_rgba(16,185,129,0.3)]"></i>
                    <h4 class="font-heading text-xl font-bold text-white mb-3">RFID Express</h4>
                    <p class="text-sm text-zinc-400 leading-relaxed">All vehicles pre-loaded with Autosweep and Easytrip tags. Bypass the cash lanes instantly.</p>
                </div>

                <!-- Minor Feature 3 -->
                <div class="glass-panel rounded-[2rem] p-8 group hover:bg-white/5 transition-colors border-white/5 hover:border-white/10">
                    <i class="fa-solid fa-plane text-viaje-400 text-2xl mb-6 block drop-shadow-[0_0_10px_rgba(52,211,153,0.3)]"></i>
                    <h4 class="font-heading text-xl font-bold text-white mb-3">VIP Terminal Meet</h4>
                    <p class="text-sm text-zinc-400 leading-relaxed">Live flight tracking integration. We wait at the curbside so you never have to stand in line.</p>
                </div>

                <!-- Minor Feature 4 -->
                <div class="glass-panel rounded-[2rem] p-8 group hover:bg-white/5 transition-colors border-white/5 hover:border-white/10">
                    <i class="fa-solid fa-headset text-zinc-300 text-2xl mb-6 block drop-shadow-[0_0_10px_rgba(203,213,225,0.3)]"></i>
                    <h4 class="font-heading text-xl font-bold text-white mb-3">24/7 Rescue Line</h4>
                    <p class="text-sm text-zinc-400 leading-relaxed">Direct hotline to our in-house mechanic team. Immediate dispatch for any roadside irregularities.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIALS (MASONRY/ZIGZAG) -->
    <section id="testimonials" class="py-24 md:py-32 bg-zinc-950 relative border-t border-white/5" x-data="testimonialsCarousel()">
        <div class="max-w-[1400px] mx-auto px-6">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-8">
                <div class="max-w-2xl">
                    <span class="text-zinc-400 text-[10px] font-extrabold uppercase tracking-widest mb-4 block"><i class="fa-solid fa-comment-dots mr-1"></i> Verified Reviews</span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tighter leading-tight">
                        Stories from the <span class="font-serif italic text-viaje-400 font-normal pr-2">Road.</span>
                    </h2>
                </div>
                
                <div class="flex items-center gap-3">
                    <button @click="prev()" aria-label="Previous review" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-white hover:text-zinc-950 transition-colors shadow-lg group border-white/10">
                        <i class="fa-solid fa-arrow-left transition-transform group-hover:-translate-x-1"></i>
                    </button>
                    <button @click="next()" aria-label="Next review" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-white hover:text-zinc-950 transition-colors shadow-lg group border-white/10">
                        <i class="fa-solid fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </button>
                </div>
            </div>

            <!-- 2-Column Masonry/Zig-Zag Grid -->
            <div class="columns-1 md:columns-2 gap-8 space-y-8">
                <template x-for="(review, index) in getVisibleReviews()" :key="index">
                    <div class="glass-panel rounded-[2.5rem] p-10 md:p-12 relative break-inside-avoid overflow-hidden border-white/5 hover:border-viaje-500/20 transition-colors">
                        
                        <!-- Large decorative quote mark -->
                        <i class="fa-solid fa-quote-left text-[8rem] text-viaje-500/[0.03] absolute -top-4 -right-4 pointer-events-none"></i>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-1 text-zinc-400 text-[10px] mb-8">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            
                            <p class="text-zinc-200 text-xl md:text-2xl font-serif italic leading-relaxed mb-10 tracking-wide" x-text="'“' + review.comment + '”'"></p>
                            
                            <div class="flex items-center gap-5 pt-6 border-t border-white/10">
                                <img :src="review.avatar" :alt="review.name" width="56" height="56" loading="lazy" decoding="async" class="w-14 h-14 rounded-full object-cover grayscale opacity-90 border-2 border-white/10">
                                <div>
                                    <h3 class="font-heading font-bold text-white text-base tracking-tight" x-text="review.name"></h3>
                                    <p class="text-[10px] text-viaje-400 uppercase tracking-widest font-extrabold mt-1" x-text="review.role + ' · ' + review.car"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

            </div>

            <!-- Pagination Controls -->
            <div class="mt-12 flex items-center justify-between border-t border-viaje-500/20 pt-6" x-show="totalPages > 1" x-cloak>
                <div class="text-xs text-zinc-400">
                    Showing <span class="font-bold text-white" x-text="(currentPage - 1) * carsPerPage + 1"></span> to 
                    <span class="font-bold text-white" x-text="Math.min(currentPage * carsPerPage, filteredCars.length)"></span> 
                    of <span class="font-bold text-white" x-text="filteredCars.length"></span> vehicles
                </div>
                
                <div class="flex items-center gap-2">
                    <button @click="goToPage(currentPage - 1)" 
                            :disabled="currentPage === 1"
                            aria-label="Previous page"
                            class="w-10 h-10 rounded-xl bg-zinc-950 border border-viaje-500/30 flex items-center justify-center text-zinc-300 hover:text-white hover:border-viaje-400 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fa-solid fa-chevron-left text-xs"></i>
                    </button>
                    
                    <div class="flex items-center gap-1">
                        <template x-for="page in totalPages" :key="page">
                            <button @click="goToPage(page)"
                                    :aria-label="'Go to page ' + page"
                                    :class="currentPage === page ? 'bg-viaje-600 text-white border-viaje-400' : 'bg-zinc-950 text-zinc-300 border-viaje-500/30 hover:border-viaje-400 hover:text-white'"
                                    class="w-10 h-10 rounded-xl border flex items-center justify-center text-xs font-bold transition"
                                    x-text="page">
                            </button>
                        </template>
                    </div>

                    <button @click="goToPage(currentPage + 1)" 
                            :disabled="currentPage === totalPages"
                            aria-label="Next page"
                            class="w-10 h-10 rounded-xl bg-zinc-950 border border-viaje-500/30 flex items-center justify-center text-zinc-300 hover:text-white hover:border-viaje-400 transition disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- FAQ ACCORDION -->
    <section id="faq" class="py-24 md:py-32 bg-zinc-950 border-t border-white/5">
        <div class="max-w-[1000px] mx-auto px-6" x-data="{ activeAccordion: 1 }">
            
            <div class="mb-16">
                <span class="text-zinc-400 text-[10px] font-extrabold uppercase tracking-widest mb-4 block"><i class="fa-solid fa-circle-question mr-1"></i> Help & Info</span>
                <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-white tracking-tighter leading-tight">Frequently Asked.</h2>
            </div>

            <div class="border-t border-white/10">
                
                <!-- FAQ 1 -->
                <div class="border-b border-white/10">
                    <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="w-full py-8 text-left flex items-center justify-between font-heading font-extrabold text-xl md:text-2xl text-white hover:text-viaje-400 transition-colors group">
                        <span>What valid IDs are required to rent?</span>
                        <i class="fa-solid fa-plus text-base transition-transform duration-300 text-zinc-600 group-hover:text-viaje-400" :class="activeAccordion === 1 ? 'rotate-45 text-viaje-400' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 1" x-collapse class="pb-10 text-zinc-400 leading-relaxed text-base max-w-3xl" x-cloak>
                        For Philippine citizens: 1 valid PH Driver's License and 1 secondary government ID. For Balikbayans and Foreign Tourists: Valid Foreign Driver's License (honored for up to 90 days in the Philippines under LTO regulations) or International Driving Permit (IDP), and Passport.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border-b border-white/10">
                    <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="w-full py-8 text-left flex items-center justify-between font-heading font-extrabold text-xl md:text-2xl text-white hover:text-viaje-400 transition-colors group">
                        <span>How does NAIA terminal pickup work?</span>
                        <i class="fa-solid fa-plus text-base transition-transform duration-300 text-zinc-600 group-hover:text-viaje-400" :class="activeAccordion === 2 ? 'rotate-45 text-viaje-400' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 2" x-collapse class="pb-10 text-zinc-400 leading-relaxed text-base max-w-3xl" x-cloak>
                        Our concierge tracks your flight in real time. Once you claim your bags at Terminal 1, 2, or 3, we meet you directly at the Arrival Curbside Bay. We verify your IDs, do a quick digital check-around, hand you the keys with pre-loaded toll tags, and you're good to drive.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border-b border-white/10">
                    <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="w-full py-8 text-left flex items-center justify-between font-heading font-extrabold text-xl md:text-2xl text-white hover:text-viaje-400 transition-colors group">
                        <span>Can I hire a professional chauffeur?</span>
                        <i class="fa-solid fa-plus text-base transition-transform duration-300 text-zinc-600 group-hover:text-viaje-400" :class="activeAccordion === 3 ? 'rotate-45 text-viaje-400' : ''"></i>
                    </button>
                    <div x-show="activeAccordion === 3" x-collapse class="pb-10 text-zinc-400 leading-relaxed text-base max-w-3xl" x-cloak>
                        Absolutely. You can add a DOT-accredited professional chauffeur to your booking. Our drivers are courteous, knowledgeable in optimal provincial shortcuts, and handle express toll lanes and parking for you so you can relax.
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        Built for the roads less taken—from NAIA to Batanes. Premium car rentals engineered for the Philippine landscape.
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

    <!-- JAVASCRIPT: ALPINE.JS DATA STORE -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('viajeRentalApp', () => ({
                mobileNavOpen: false,
                bookingModalOpen: false,
                quickViewModalOpen: false,
                compareModalOpen: false,
                
                selectedCar: null,
                quickViewCar: null,
                bookingStep: 1,
                
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

                toast: {
                    visible: false,
                    title: '',
                    message: '',
                    icon: 'fa-solid fa-umbrella-beach'
                },

                trip: {
                    pickupLocation: 'Manila NAIA Terminal 3 (MNL)',
                    dropoffLocation: 'Manila NAIA Terminal 3 (MNL)',
                    sameDropoff: true,
                    pickupDate: '',
                    pickupTime: '10:00',
                    dropoffDate: '',
                    dropoffTime: '10:00',
                    driveType: 'self',
                },

                todayDateString: '',

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

                // Full Luzon Fleet (Dynamic from Laravel Controller with fallback)
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

                formatPhp(amount) {
                    return Math.round(amount).toLocaleString('en-PH');
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
                    return Math.ceil(this.filteredCars.length / this.carsPerPage);
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

                startBooking(car) {
                    this.selectedCar = car;
                    this.bookingStep = 1;
                    this.promoCode = '';
                    this.promoSuccess = false;
                    this.discountPercentage = 0;
                    this.bookingModalOpen = true;
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

                calculateAddonsTotal() {
                    let daily = 0;
                    if (this.addons.fullInsurance) daily += 450;
                    if (this.addons.chauffeur) daily += 1200;
                    let oneTime = this.addons.rfidLoad ? 1000 : 0;
                    return (daily * this.calculatedDays) + oneTime;
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

                async completeBooking() {
                    this.isSubmitting = true;
                    try {
                        const response = await fetch('/bookings', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                car_id: this.selectedCar.id,
                                renter: this.renter,
                                trip: this.trip,
                                addons: this.addons,
                                promoCode: this.promoCode,
                                paymentMethod: this.paymentMethod
                            })
                        });
                        const data = await response.json();
                        if (response.ok && data.success) {
                            this.confirmationCode = data.booking_reference;
                            this.bookingStep = 3;
                            this.showToast('fa-solid fa-circle-check text-viaje-300', 'Booking Confirmed', 'Reservation ' + this.confirmationCode + ' is secured!');
                        } else {
                            this.showToast('fa-solid fa-circle-xmark text-red-500', 'Booking Error', data.message || 'Please check your inputs.');
                        }
                    } catch (e) {
                        this.showToast('fa-solid fa-circle-xmark text-red-500', 'Error', 'Failed to complete booking.');
                    } finally {
                        this.isSubmitting = false;
                    }
                },

                resetBookingWizard() {
                    this.bookingStep = 1;
                    this.selectedCar = null;
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
