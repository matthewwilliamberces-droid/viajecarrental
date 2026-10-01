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
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS with Tropical Philippine Theme -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        viaje: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                            950: '#022c22',
                        },
                        ocean: {
                            400: '#22d3ee',
                            500: '#06b6d4',
                            600: '#0891b2',
                            700: '#0e7490',
                        },
                        sunset: {
                            amber: '#f59e0b',
                            gold: '#fbbf24',
                            coral: '#fb7185',
                            hibiscus: '#f43f5e'
                        },
                        sand: {
                            50: '#fefdf8',
                            100: '#fcf9ed',
                            200: '#f8f2d5',
                            300: '#f3e6b2',
                        },
                        lagoon: {
                            950: '#03140e',
                            900: '#062017',
                            850: '#0b2e22',
                            800: '#103d2e',
                            700: '#17523f',
                            600: '#216b53'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    boxShadow: {
                        'glow-emerald': '0 0 40px -5px rgba(16, 185, 129, 0.35)',
                        'glow-ocean': '0 0 40px -5px rgba(6, 182, 212, 0.35)',
                        'glow-sunset': '0 0 35px -5px rgba(245, 158, 11, 0.3)',
                    },
                    animation: {
                        'float-slow': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 7s ease-in-out 2s infinite',
                        'wave-pulse': 'wavePulse 8s ease-in-out infinite',
                        'sun-spin': 'spin 30s linear infinite',
                        'shimmer': 'shimmer 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                            '50%': { transform: 'translateY(-12px) rotate(2deg)' },
                        },
                        wavePulse: {
                            '0%, 100%': { opacity: '0.4', transform: 'scale(1)' },
                            '50%': { opacity: '0.8', transform: 'scale(1.04)' },
                        },
                        shimmer: {
                            '0%, 100%': { opacity: '0.8' },
                            '50%': { opacity: '1', filter: 'brightness(1.2)' },
                        }
                    }
                }
            }
        }
    </script>
    
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

    <!-- Animated Tropical Weather / Island Live Bar -->
    <div class="bg-gradient-to-r from-zinc-900 via-zinc-900 to-zinc-900 border-b border-viaje-500/20 py-2 px-4 text-[11px] text-zinc-300 font-medium overflow-hidden">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3 overflow-x-auto whitespace-nowrap">
                <span class="flex items-center gap-1 text-zinc-400 font-bold">
                    <i class="fa-solid fa-sun animate-sun-spin"></i> Mabuhay! Island Road Conditions:
                </span>
                <span class="inline-flex items-center gap-1 bg-zinc-800/70 px-2.5 py-0.5 rounded-full border border-viaje-500/30">
                    ðŸŒ´ Siargao 29Â°C (Perfect Surf)
                </span>
                <span class="inline-flex items-center gap-1 bg-zinc-800/70 px-2.5 py-0.5 rounded-full border border-viaje-500/30">
                    ðŸŒŠ Boracay 30Â°C (Calm Seas)
                </span>
                <span class="inline-flex items-center gap-1 bg-zinc-800/70 px-2.5 py-0.5 rounded-full border border-viaje-500/30">
                    â›°ï¸ North Luzon / Baguio (Open)
                </span>
            </div>
            <div class="hidden md:flex items-center gap-4 text-viaje-300">
                <span><i class="fa-solid fa-shield-halved text-zinc-400"></i> Free Autosweep & Easytrip RFID</span>
                <span><i class="fa-solid fa-credit-card text-zinc-500"></i> GCash & Maya Accepted</span>
            </div>
        </div>
    </div>

    <!-- Live Island Booking Toast -->
    <div x-show="toast.visible"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 translate-y-4 md:translate-x-8"
         x-transition:enter-end="opacity-100 translate-y-0 md:translate-x-0"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="fixed bottom-6 right-6 z-50 max-w-sm tropical-glass rounded-2xl p-4 shadow-2xl border border-viaje-400/30 flex items-center gap-3.5"
         x-cloak>
        <div class="w-11 h-11 rounded-full bg-viaje-500/20 text-viaje-300 flex items-center justify-center flex-shrink-0 text-lg shadow-glow-emerald">
            <i :class="toast.icon || 'fa-solid fa-palm-tree'"></i>
        </div>
        <div class="flex-grow text-xs">
            <p class="font-bold text-white flex items-center gap-1.5">
                <span x-text="toast.title"></span>
                <span class="w-2 h-2 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700 animate-ping"></span>
            </p>
            <p class="text-zinc-300 mt-0.5" x-text="toast.message"></p>
        </div>
        <button @click="toast.visible = false" class="text-zinc-400 hover:text-white p-1">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- Navigation Header -->
    <header class="sticky top-0 w-full z-40 tropical-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo: VIAJE -->
                <a href="#" class="flex items-center gap-3 group">
                    <div class="relative w-12 h-12 rounded-2xl bg-gradient-to-br from-viaje-500 via-zinc-500 to-zinc-500 flex items-center justify-center shadow-glow-emerald transition-transform duration-500 group-hover:scale-105 group-hover:rotate-3">
                        <i class="fa-solid fa-compass text-zinc-950 text-2xl font-black"></i>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="font-heading font-extrabold text-2xl sm:text-3xl tracking-tight text-white">VIAJE</span>
                            <span class="text-xs px-2 py-0.5 rounded-md bg-zinc-800 text-zinc-300 border border-zinc-700/20 text-zinc-400 font-bold border border-zinc-500/40">PH</span>
                        </div>
                        <span class="text-[10px] tracking-widest text-viaje-300/80 uppercase font-semibold block -mt-0.5">Philippine Island Car Rentals</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center gap-8 text-sm font-medium">
                    <a href="#search-engine" class="text-zinc-200 hover:text-viaje-300 transition flex items-center gap-1.5">
                        <i class="fa-solid fa-magnifying-glass-location text-viaje-400"></i>
                        <span>Book a Car</span>
                    </a>
                    <a href="#fleet" class="text-zinc-200 hover:text-viaje-300 transition flex items-center gap-1.5">
                        <span>Island Fleet</span>
                        <span class="px-2 py-0.5 text-[10px] font-bold bg-viaje-500/20 text-viaje-300 rounded-full border border-viaje-400/30">9 Models</span>
                    </a>
                    <a href="#destinations" class="text-zinc-200 hover:text-viaje-300 transition">Destinations</a>
                    <a href="#island-perks" class="text-zinc-200 hover:text-viaje-300 transition">Why Viaje</a>
                    <a href="#testimonials" class="text-zinc-200 hover:text-viaje-300 transition">Reviews</a>
                    <a href="#faq" class="text-zinc-200 hover:text-viaje-300 transition">FAQs</a>
                </nav>

                <!-- Action Button & Hotline -->
                <div class="hidden sm:flex items-center gap-4">
                    <a href="tel:+639178888425" class="hidden xl:flex items-center gap-2 text-xs font-semibold text-viaje-200 hover:text-white">
                        <i class="fa-solid fa-headset text-zinc-400"></i>
                        <span>+63 (917) 888-VIAJE</span>
                    </a>
                    
                    <a href="#fleet" 
                       class="relative group overflow-hidden rounded-2xl bg-gradient-to-r from-viaje-500 via-zinc-400 to-zinc-500 p-px font-bold text-white shadow-glow-emerald transition duration-300 hover:shadow-glow-emerald">
                        <span class="inline-flex h-full w-full items-center gap-2 rounded-2xl bg-zinc-950/80 px-5 py-2.5 text-sm backdrop-blur-md group-hover:bg-transparent transition duration-300">
                            <i class="fa-solid fa-car-side text-viaje-300"></i>
                            <span>Explore Fleet</span>
                        </span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden gap-3">
                    <button @click="mobileNavOpen = !mobileNavOpen" 
                            class="w-11 h-11 rounded-2xl bg-zinc-900 border border-viaje-500/30 text-zinc-200 hover:text-white flex items-center justify-center focus:outline-none">
                        <i class="fa-solid text-lg" :class="mobileNavOpen ? 'fa-xmark' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileNavOpen" 
             x-collapse
             class="lg:hidden tropical-glass border-t border-viaje-500/20 px-4 pt-4 pb-6 space-y-3"
             x-cloak>
            <a @click="mobileNavOpen = false" href="#search-engine" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-zinc-200 hover:bg-zinc-800">
                <i class="fa-solid fa-calendar-check text-viaje-400 w-5"></i> Island Booking Engine
            </a>
            <a @click="mobileNavOpen = false" href="#fleet" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-zinc-200 hover:bg-zinc-800">
                <i class="fa-solid fa-car text-viaje-400 w-5"></i> Philippine Fleet (SUVs, 4x4, Vans)
            </a>
            <a @click="mobileNavOpen = false" href="#destinations" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-zinc-200 hover:bg-zinc-800">
                <i class="fa-solid fa-map-location-dot text-zinc-400 w-5"></i> Airport Hubs & Islands
            </a>
            <a @click="mobileNavOpen = false" href="#island-perks" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-zinc-200 hover:bg-zinc-800">
                <i class="fa-solid fa-shield-halved text-zinc-400 w-5"></i> RFID & Comprehensive Shield
            </a>
            <a @click="mobileNavOpen = false" href="#testimonials" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-zinc-200 hover:bg-zinc-800">
                <i class="fa-solid fa-star text-zinc-400 w-5"></i> Client Testimonials
            </a>
            <a @click="mobileNavOpen = false" href="#faq" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-zinc-200 hover:bg-zinc-800">
                <i class="fa-solid fa-circle-question text-viaje-400 w-5"></i> FAQs & Requirements
            </a>
            <div class="pt-3 border-t border-viaje-500/20">
                <a @click="mobileNavOpen = false" href="#fleet" class="w-full block text-center py-3 bg-gradient-to-r from-viaje-600 to-ocean-600 hover:from-viaje-500 hover:to-viaje-600 text-white font-bold rounded-2xl shadow-lg">
                    Reserve a Vehicle Now
                </a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION WITH TROPICAL ANIMATIONS & REAL-TIME BOOKING WIDGET -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-32 overflow-hidden island-radial">
        
        <!-- Floating Animated Tropical Foliage Accents -->
        <div class="absolute -top-10 -left-10 w-72 h-72 bg-viaje-500/15 rounded-full blur-3xl pointer-events-none animate-float-slow"></div>
        <div class="absolute top-1/2 -right-16 w-80 h-80 bg-zinc-500/15 rounded-full blur-3xl pointer-events-none animate-float-delayed"></div>
        <div class="absolute bottom-10 left-1/3 w-64 h-64 bg-zinc-800 text-zinc-300 border border-zinc-700/10 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Floating Decorative Tropical Palm Leaf SVGs -->
        <div class="absolute top-20 right-8 lg:right-24 opacity-20 pointer-events-none animate-float-slow hidden sm:block">
            <svg width="120" height="120" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 95C50 95 65 70 85 65C85 65 65 55 60 30C60 30 50 50 30 50C30 50 45 60 50 95Z" fill="#34d399"/>
                <path d="M50 95C50 95 35 70 15 65C15 65 35 55 40 30C40 30 50 50 70 50C70 50 55 60 50 95Z" fill="#22d3ee"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Hero Copy -->
                <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                    
                    <!-- Tropical Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-viaje-500/15 border border-viaje-400/30 text-viaje-300 text-xs font-bold uppercase tracking-wider shadow-inner">
                        <span class="w-2.5 h-2.5 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700 animate-ping"></span>
                        <span>Tara, Biyahe Na! • 7,641 Islands To Explore</span>
                    </div>

                    <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight leading-[1.12]">
                        Explore the <span class="tropical-gradient-text">Philippines</span> with Seamless Freedom
                    </h1>

                    <p class="text-zinc-300 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed">
                        Rent premium 4x4 off-roaders, spacious family Grandia vans, and sleek hybrid crossovers. Terminal pickup at NAIA, Cebu, Clark, Siargao, and Boracay with RFID express tags included.
                    </p>

                    <!-- Trust Stats Bar -->
                    <div class="pt-4 grid grid-cols-3 gap-4 border-t border-viaje-500/20 max-w-lg mx-auto lg:mx-0 text-left">
                        <div class="p-3 rounded-2xl bg-zinc-900/60 border border-viaje-500/20">
                            <p class="text-2xl font-extrabold text-white font-heading">7,600+</p>
                            <p class="text-[11px] text-viaje-300">Island Road Trips</p>
                        </div>
                        <div class="p-3 rounded-2xl bg-zinc-900/60 border border-viaje-500/20">
                            <p class="text-2xl font-extrabold text-zinc-400 font-heading">4.99<span class="text-xs ml-0.5">â˜…</span></p>
                            <p class="text-[11px] text-zinc-300">Verified Reviews</p>
                        </div>
                        <div class="p-3 rounded-2xl bg-zinc-900/60 border border-viaje-500/20">
                            <p class="text-2xl font-extrabold text-zinc-400 font-heading">100%</p>
                            <p class="text-[11px] text-zinc-300">Insured & Ready</p>
                        </div>
                    </div>
                </div>

                <!-- Right Tropical Interactive Search & Reservation Widget -->
                <div class="lg:col-span-6" id="search-engine">
                    <div class="tropical-glass rounded-3xl p-6 sm:p-8 shadow-2xl border border-viaje-400/30 relative overflow-hidden">
                        
                        <!-- Top Sunset Accent Wave -->
                        <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-viaje-400 via-zinc-400 to-zinc-500"></div>

                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <h3 class="font-heading text-xl sm:text-2xl font-extrabold text-white flex items-center gap-2">
                                    <span>Plan Your Island Viaje</span>
                                    <i class="fa-solid fa-umbrella-beach text-zinc-400 text-lg"></i>
                                </h3>
                                <p class="text-xs text-zinc-300 mt-0.5">Best rates guaranteed across all Philippine airport hubs</p>
                            </div>
                            <span class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-viaje-500/20 text-viaje-300 text-xs font-bold border border-viaje-400/40">
                                <i class="fa-solid fa-bolt"></i> Instant Pass
                            </span>
                        </div>

                        <!-- Drop-off Mode: Same vs Island Delivery -->
                        <div class="flex items-center gap-6 mb-4 text-xs font-semibold">
                            <label class="flex items-center gap-2 cursor-pointer text-zinc-200 hover:text-white">
                                <input type="radio" name="dropoffType" :value="true" x-model="trip.sameDropoff" class="accent-viaje-500">
                                <span>Same Return Hub</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer text-zinc-200 hover:text-white">
                                <input type="radio" name="dropoffType" :value="false" x-model="trip.sameDropoff" class="accent-viaje-500">
                                <span>Different Terminal / Island Depot</span>
                            </label>
                        </div>

                        <form @submit.prevent="scrollToFleet()" class="space-y-4">
                            
                            <!-- Pick-up Location Dropdown with Autocomplete -->
                            <div class="relative" x-data="{ open: false }">
                                <label class="block text-xs font-bold uppercase tracking-wider text-viaje-300 mb-1.5">
                                    <i class="fa-solid fa-plane-arrival text-zinc-400 mr-1"></i> Pick-up Airport / Hub
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           x-model="trip.pickupLocation" 
                                           @focus="open = true"
                                           @click.away="open = false"
                                           class="w-full bg-zinc-900/90 border border-viaje-500/30 focus:border-viaje-400 focus:ring-1 focus:ring-viaje-400 rounded-2xl px-4 py-3 text-sm text-white placeholder-zinc-400 outline-none transition font-medium" 
                                           placeholder="Select NAIA Manila, Cebu, Clark, Boracay...">
                                    <div class="absolute right-4 top-3.5 text-viaje-400 pointer-events-none">
                                        <i class="fa-solid fa-chevron-down text-xs"></i>
                                    </div>
                                </div>

                                <!-- Autocomplete Philippine Hubs -->
                                <div x-show="open" 
                                     x-transition 
                                     class="absolute left-0 right-0 mt-1 z-30 tropical-glass bg-zinc-900/95 rounded-2xl shadow-2xl p-2 max-h-52 overflow-y-auto space-y-1 border border-viaje-500/40"
                                     x-cloak>
                                    <template x-for="loc in popularLocations" :key="loc.name">
                                        <button type="button" 
                                                @click="trip.pickupLocation = loc.name; open = false"
                                                class="w-full text-left px-3 py-2.5 rounded-xl hover:bg-viaje-600/30 text-xs flex items-center justify-between text-zinc-200 transition">
                                            <div class="flex items-center gap-2.5">
                                                <i class="fa-solid text-viaje-400" :class="loc.isAirport ? 'fa-plane-departure' : 'fa-umbrella-beach'"></i>
                                                <span x-text="loc.name" class="font-medium"></span>
                                            </div>
                                            <span class="text-[10px] text-zinc-400 font-semibold" x-text="loc.cars + ' ready'"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <!-- Drop-off Location (Conditional) -->
                            <div class="relative" x-show="!trip.sameDropoff" x-collapse x-cloak>
                                <label class="block text-xs font-bold uppercase tracking-wider text-zinc-400 mb-1.5">
                                    <i class="fa-solid fa-location-dot text-zinc-400 mr-1"></i> Return Airport / City Hub
                                </label>
                                <input type="text" 
                                       x-model="trip.dropoffLocation" 
                                       class="w-full bg-zinc-900/90 border border-zinc-500/40 focus:border-zinc-400 rounded-2xl px-4 py-3 text-sm text-white placeholder-zinc-400 outline-none transition font-medium" 
                                       placeholder="Drop-off terminal or city hotel">
                            </div>

                            <!-- Dates & Times Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <!-- Pick-up Date & Time -->
                                <div class="bg-zinc-900/80 p-3 rounded-2xl border border-viaje-500/20">
                                    <label class="block text-[11px] font-bold uppercase tracking-wider text-viaje-300 mb-1">
                                        <i class="fa-regular fa-calendar-check text-viaje-400 mr-1"></i> Pick-up Date
                                    </label>
                                    <div class="grid grid-cols-3 gap-2">
                                        <input type="date" 
                                               x-model="trip.pickupDate" 
                                               :min="todayDateString"
                                               class="col-span-2 bg-zinc-950 border border-viaje-500/30 rounded-xl px-2.5 py-1.5 text-xs text-white outline-none focus:border-viaje-400 font-medium">
                                        <input type="time" 
                                               x-model="trip.pickupTime" 
                                               class="bg-zinc-950 border border-viaje-500/30 rounded-xl px-2 py-1.5 text-xs text-white outline-none focus:border-viaje-400 font-medium">
                                    </div>
                                </div>

                                <!-- Return Date & Time -->
                                <div class="bg-zinc-900/80 p-3 rounded-2xl border border-viaje-500/20">
                                    <label class="block text-[11px] font-bold uppercase tracking-wider text-ocean-300 mb-1">
                                        <i class="fa-regular fa-calendar-xmark text-zinc-400 mr-1"></i> Return Date
                                    </label>
                                    <div class="grid grid-cols-3 gap-2">
                                        <input type="date" 
                                               x-model="trip.dropoffDate" 
                                               :min="trip.pickupDate"
                                               class="col-span-2 bg-zinc-950 border border-viaje-500/30 rounded-xl px-2.5 py-1.5 text-xs text-white outline-none focus:border-zinc-400 font-medium">
                                        <input type="time" 
                                               x-model="trip.dropoffTime" 
                                               class="bg-zinc-950 border border-viaje-500/30 rounded-xl px-2 py-1.5 text-xs text-white outline-none focus:border-zinc-400 font-medium">
                                    </div>
                                </div>
                            </div>

                            <!-- Rental Type: Self-Drive vs With Chauffeur -->
                            <div class="flex items-center justify-between p-3 rounded-2xl bg-zinc-900/80 border border-viaje-500/20 text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="text-zinc-300">Service Mode:</span>
                                    <select x-model="trip.driveType" class="bg-zinc-950 text-viaje-300 font-bold border border-viaje-500/40 rounded-lg px-2.5 py-1 outline-none text-xs">
                                        <option value="self">ðŸš— Self-Drive (Standard)</option>
                                        <option value="chauffeur">ðŸ‘” With Uniformed Chauffeur (+₱1,200/day)</option>
                                    </select>
                                </div>
                                <div class="text-right">
                                    <span class="text-zinc-300">Trip Duration:</span>
                                    <span class="font-bold text-zinc-400 ml-1" x-text="calculatedDays + ' Day' + (calculatedDays > 1 ? 's' : '')"></span>
                                </div>
                            </div>

                            <!-- Submit Search Button -->
                            <button type="submit" 
                                    class="w-full py-4 rounded-2xl font-heading font-extrabold text-base text-zinc-950 bg-gradient-to-r from-viaje-400 via-zinc-400 to-zinc-500 hover:from-viaje-300 hover:to-zinc-400 shadow-glow-emerald transition-all duration-300 transform active:scale-[0.99] flex items-center justify-center gap-2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <span>Find Available Island Fleet</span>
                                <span class="text-xs bg-zinc-950/20 text-zinc-950 px-2.5 py-0.5 rounded-full font-bold" x-text="'(' + filteredCars.length + ' Units Ready)'"></span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- LIVE ISLAND FLEET SHOWCASE & REAL-TIME FILTER ENGINE -->
    <section id="fleet" class="py-20 bg-zinc-900 relative border-t border-viaje-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-viaje-500/15 text-viaje-300 text-xs font-bold mb-3 border border-viaje-400/30">
                        <i class="fa-solid fa-compass"></i> Philippine Ready Fleet
                    </div>
                    <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Our Island & Highway Vehicles
                    </h2>
                    <p class="text-zinc-300 text-sm sm:text-base mt-2 max-w-xl">
                        Equipped for Philippine expressways (SLEX, NLEX, SCTEX) and rugged island terrain. Includes RFID toll tags, full A/C, and comprehensive coverage.
                    </p>
                </div>

                <!-- Billing Duration Switcher (Daily vs Weekly vs Monthly) -->
                <div class="bg-zinc-950 p-1.5 rounded-2xl border border-viaje-500/30 inline-flex items-center gap-1 self-start md:self-auto shadow-inner">
                    <button @click="pricingTier = 'daily'" 
                            :class="pricingTier === 'daily' • 'bg-viaje-600 text-white shadow-md' : 'text-zinc-300 hover:text-white'"
                            class="px-4 py-2 rounded-xl text-xs font-bold transition">
                        Daily Rate
                    </button>
                    <button @click="pricingTier = 'weekly'" 
                            :class="pricingTier === 'weekly' • 'bg-viaje-600 text-white shadow-md' : 'text-zinc-300 hover:text-white'"
                            class="px-4 py-2 rounded-xl text-xs font-bold transition flex items-center gap-1">
                        <span>Weekly</span>
                        <span class="bg-zinc-800 text-zinc-300 border border-zinc-700/20 text-zinc-400 text-[10px] px-1.5 py-0.2 rounded font-extrabold">-15%</span>
                    </button>
                    <button @click="pricingTier = 'monthly'" 
                            :class="pricingTier === 'monthly' • 'bg-viaje-600 text-white shadow-md' : 'text-zinc-300 hover:text-white'"
                            class="px-4 py-2 rounded-xl text-xs font-bold transition flex items-center gap-1">
                        <span>Monthly</span>
                        <span class="bg-sunset-coral/20 text-sunset-coral text-[10px] px-1.5 py-0.2 rounded font-extrabold">-30%</span>
                    </button>
                </div>
            </div>

            <!-- Interactive Filters Bar -->
            <div class="tropical-glass rounded-3xl p-5 mb-8 border border-viaje-500/30 space-y-4">
                
                <!-- Category Pills -->
                <div class="flex items-center gap-2 overflow-x-auto pb-2 sm:pb-0 scrollbar-none">
                    <template x-for="cat in categories" :key="cat.id">
                        <button @click="selectedCategory = cat.id"
                                :class="selectedCategory === cat.id ? 'bg-gradient-to-r from-viaje-600 to-ocean-600 text-white shadow-glow-emerald border-viaje-400' : 'bg-zinc-900 text-zinc-200 hover:bg-zinc-800 border-viaje-500/20'"
                                class="px-4 py-2 rounded-xl text-xs font-bold transition border whitespace-nowrap flex items-center gap-2">
                            <i :class="cat.icon"></i>
                            <span x-text="cat.name"></span>
                            <span class="text-[10px] opacity-80" x-text="'(' + getCategoryCount(cat.id) + ')'"></span>
                        </button>
                    </template>
                </div>

                <!-- Secondary Filters Row -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3 pt-3 border-t border-viaje-500/20">
                    
                    <!-- Search Input -->
                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-xs text-viaje-400"></i>
                        <input type="text" 
                               x-model="searchQuery" 
                               placeholder="Search Jimny, Grandia, Fortuner..."
                               class="w-full bg-zinc-950 border border-viaje-500/30 rounded-xl pl-8 pr-3 py-2 text-xs text-white placeholder-zinc-400 outline-none focus:border-viaje-400 font-medium">
                        <button x-show="searchQuery" @click="searchQuery = ''" class="absolute right-3 top-2.5 text-xs text-zinc-400 hover:text-white" x-cloak>
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <!-- Transmission Filter -->
                    <div>
                        <select x-model="filterTransmission" class="w-full bg-zinc-950 border border-viaje-500/30 rounded-xl px-3 py-2 text-xs text-zinc-200 outline-none focus:border-viaje-400 font-medium">
                            <option value="all">âš¡ All Transmissions</option>
                            <option value="Automatic">Automatic (AT)</option>
                            <option value="Manual">Manual (MT)</option>
                        </select>
                    </div>

                    <!-- Fuel Type Filter -->
                    <div>
                        <select x-model="filterFuel" class="w-full bg-zinc-950 border border-viaje-500/30 rounded-xl px-3 py-2 text-xs text-zinc-200 outline-none focus:border-viaje-400 font-medium">
                            <option value="all">â›½ All Powertrains</option>
                            <option value="Diesel">Diesel Turbo (Efficient)</option>
                            <option value="Petrol">Gasoline</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Electric">Pure Electric (EV)</option>
                        </select>
                    </div>

                    <!-- Sort By -->
                    <div>
                        <select x-model="sortBy" class="w-full bg-zinc-950 border border-viaje-500/30 rounded-xl px-3 py-2 text-xs text-zinc-200 outline-none focus:border-viaje-400 font-medium">
                            <option value="recommended">âœ¨ Sort: Recommended</option>
                            <option value="price-asc">ðŸ’µ Price: Low to High</option>
                            <option value="price-desc">ðŸ’Ž Price: High to Low</option>
                            <option value="rating">â­ Highest Rated</option>
                        </select>
                    </div>

                    <!-- Price Range Slider (PHP) -->
                    <div class="bg-zinc-950 px-3 py-1.5 rounded-xl border border-viaje-500/30 flex flex-col justify-center">
                        <div class="flex justify-between text-[11px] font-bold text-zinc-300 mb-1">
                            <span>Max Rate:</span>
                            <span class="text-zinc-400 font-mono font-bold" x-text="'₱' + formatPhp(maxPrice) + '/day'"></span>
                        </div>
                        <input type="range" min="2000" max="18000" step="500" x-model="maxPrice" class="w-full accent-viaje-400 h-1.5 bg-zinc-800 rounded-lg cursor-pointer">
                    </div>
                </div>

                <!-- Active Filters Count & Reset -->
                <div class="flex items-center justify-between text-xs text-zinc-300 pt-1">
                    <div>
                        Showing <span class="font-bold text-white" x-text="filteredCars.length"></span> of <span class="font-bold text-white" x-text="fleet.length"></span> vehicles available for dispatch
                    </div>
                    <button @click="resetFilters()" 
                            x-show="isFiltered" 
                            class="text-zinc-400 hover:text-zinc-500 font-semibold flex items-center gap-1 transition"
                            x-cloak>
                        <i class="fa-solid fa-arrow-rotate-left"></i> Reset filters
                    </button>
                </div>
            </div>

            <!-- VEHICLES GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <template x-for="car in filteredCars" :key="car.id">
                    <div class="tropical-glass rounded-3xl overflow-hidden border border-viaje-500/30 hover:border-viaje-400/70 hover:shadow-glow-emerald transition-all duration-300 group flex flex-col">
                        
                        <!-- Card Image Container -->
                        <div class="relative h-60 overflow-hidden bg-zinc-950">
                            <img :src="car.image" 
                                 :alt="car.name" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-black/40"></div>

                            <!-- Badges -->
                            <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-full text-xs font-bold text-zinc-950 shadow-md"
                                      :class="car.badgeColor || 'bg-viaje-500'"
                                      x-text="car.badge"></span>
                                <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-zinc-950/80 backdrop-blur-md text-viaje-300 border border-viaje-400/40">
                                    <i class="fa-solid fa-shield text-viaje-400"></i> RFID Ready
                                </span>
                            </div>

                            <!-- Compare Button -->
                            <button @click="toggleCompare(car)"
                                    :class="isInCompare(car.id) ? 'bg-viaje-500 text-white' : 'bg-zinc-950/80 text-zinc-300 hover:text-white'"
                                    class="absolute top-4 right-4 w-9 h-9 rounded-full backdrop-blur-md flex items-center justify-center border border-white/20 transition shadow-lg"
                                    title="Compare Vehicle">
                                <i class="fa-solid fa-code-compare text-xs"></i>
                            </button>

                            <!-- Bottom Category & Fuel Eco -->
                            <div class="absolute bottom-3 left-4 right-4 flex items-center justify-between text-xs">
                                <span class="px-2.5 py-1 rounded-lg bg-zinc-950/90 text-zinc-200 backdrop-blur-sm border border-viaje-500/30 font-semibold uppercase tracking-wider text-[10px]" x-text="car.categoryName"></span>
                                <span class="text-white font-bold bg-black/60 px-2.5 py-1 rounded-lg backdrop-blur-sm flex items-center gap-1.5 text-[11px]">
                                    <i class="fa-solid fa-gas-pump text-zinc-400"></i> <span x-text="car.eco"></span>
                                </span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 flex-grow flex flex-col justify-between space-y-5">
                            
                            <!-- Title & Pricing in Philippine Pesos (₱) -->
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-1">
                                    <h3 class="font-heading font-extrabold text-xl text-white group-hover:text-viaje-300 transition" x-text="car.name"></h3>
                                    <div class="text-right flex-shrink-0">
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-heading font-black text-2xl text-zinc-400" x-text="'₱' + formatPhp(getPrice(car.dailyRate))"></span>
                                            <span class="text-xs text-zinc-400">/day</span>
                                        </div>
                                        <span x-show="pricingTier !== 'daily'" class="text-[10px] text-viaje-300 font-bold" x-text="pricingTier === 'weekly' • 'Weekly Rate (-15%)' : 'Monthly Rate (-30%)'"></span>
                                    </div>
                                </div>

                                <!-- Rating & Reviews -->
                                <div class="flex items-center gap-2 text-xs text-zinc-300">
                                    <div class="flex items-center text-zinc-400 text-xs">
                                        <i class="fa-solid fa-star"></i>
                                        <span class="font-bold text-white ml-1" x-text="car.rating"></span>
                                    </div>
                                    <span>•</span>
                                    <span x-text="car.reviews + ' completed island trips'"></span>
                                </div>
                            </div>

                            <!-- Vehicle Specifications Mini-Grid -->
                            <div class="grid grid-cols-4 gap-2 py-3 px-3 rounded-2xl bg-zinc-950/80 border border-viaje-500/20 text-center text-xs">
                                <div>
                                    <i class="fa-solid fa-users text-viaje-300 text-sm"></i>
                                    <p class="text-[11px] font-semibold text-zinc-200 mt-1" x-text="car.seats + ' Seats'"></p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-suitcase-rolling text-viaje-300 text-sm"></i>
                                    <p class="text-[11px] font-semibold text-zinc-200 mt-1" x-text="car.bags + ' Bags'"></p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-gears text-viaje-300 text-sm"></i>
                                    <p class="text-[11px] font-semibold text-zinc-200 mt-1" x-text="car.transmission"></p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-oil-can text-viaje-300 text-sm"></i>
                                    <p class="text-[11px] font-semibold text-zinc-200 mt-1" x-text="car.fuel"></p>
                                </div>
                            </div>

                            <!-- Perks Included -->
                            <div class="flex flex-wrap gap-2 text-[11px] text-zinc-300">
                                <span class="flex items-center gap-1 bg-zinc-900 px-2 py-0.5 rounded-lg border border-viaje-500/20">
                                    <i class="fa-solid fa-check text-viaje-400 text-[10px]"></i> Autosweep & Easytrip
                                </span>
                                <span class="flex items-center gap-1 bg-zinc-900 px-2 py-0.5 rounded-lg border border-viaje-500/20">
                                    <i class="fa-solid fa-snowflake text-zinc-400 text-[10px]"></i> Dual Cold A/C
                                </span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="grid grid-cols-2 gap-3 pt-2">
                                <button @click="openQuickView(car)"
                                        class="w-full py-2.5 rounded-xl border border-viaje-500/30 bg-zinc-900 text-zinc-200 hover:bg-zinc-800 text-xs font-bold transition flex items-center justify-center gap-1.5">
                                    <i class="fa-regular fa-eye"></i>
                                    <span>Specs</span>
                                </button>
                                
                                <button @click="startBooking(car)"
                                        class="w-full py-2.5 rounded-xl bg-gradient-to-r from-viaje-500 to-viaje-600 hover:from-viaje-400 hover:to-viaje-500 text-zinc-950 text-xs font-extrabold transition shadow-glow-emerald flex items-center justify-center gap-1.5">
                                    <span>Book Now</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </template>

            </div>

        </div>
    </section>

    <!-- FLOATING VEHICLE COMPARISON DRAWER -->
    <div x-show="comparisonList.length > 0"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="translate-y-full opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="translate-y-full opacity-0"
         class="fixed bottom-0 left-0 right-0 z-40 bg-zinc-950/95 border-t border-viaje-400/40 backdrop-blur-2xl shadow-2xl py-4 px-4 sm:px-8"
         x-cloak>
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-viaje-500/20 text-viaje-300 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-code-compare"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-white">Compare Units (<span x-text="comparisonList.length"></span>/3)</h4>
                    <p class="text-xs text-zinc-300 hidden sm:block">Evaluate passenger capacity, fuel type, and daily rental rates</p>
                </div>
            </div>

            <!-- Thumbnail Pills -->
            <div class="flex items-center gap-3 overflow-x-auto max-w-full">
                <template x-for="car in comparisonList" :key="car.id">
                    <div class="flex items-center gap-2 bg-zinc-900 border border-viaje-500/30 rounded-xl px-3 py-1.5 text-xs text-white">
                        <img :src="car.image" class="w-8 h-8 rounded-lg object-cover">
                        <span class="font-semibold text-xs truncate max-w-[120px]" x-text="car.name"></span>
                        <button @click="toggleCompare(car)" class="text-zinc-400 hover:text-sunset-coral ml-1">
                            <i class="fa-solid fa-xmark text-xs"></i>
                        </button>
                    </div>
                </template>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-3">
                <button @click="clearCompare()" class="text-xs text-zinc-300 hover:text-white px-3 py-2">
                    Clear
                </button>
                <button @click="compareModalOpen = true" 
                        class="px-5 py-2 rounded-xl bg-gradient-to-r from-viaje-400 to-viaje-500 text-zinc-950 font-extrabold text-xs shadow-glow-emerald transition">
                    Compare Now
                </button>
            </div>

        </div>
    </div>

    <!-- PHILIPPINE DESTINATIONS & AIRPORT HUBS -->
    <section id="destinations" class="py-20 bg-zinc-950 relative border-t border-viaje-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ selectedHub: 0 }">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-zinc-500/15 text-zinc-400 text-xs font-bold mb-3 border border-zinc-400/30">
                        <i class="fa-solid fa-location-dot"></i> Airport Hubs & Island Depots
                    </div>
                    <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Pick Up Directly At Major Philippine Airports
                    </h2>
                </div>
                <p class="text-zinc-300 text-xs sm:text-sm max-w-md">
                    Seamless tarmac meet-and-greet. Flight tracking guarantees your vehicle is cooled and waiting when you step out of baggage claim.
                </p>
            </div>

            <!-- Hub Buttons -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-8">
                <template x-for="(hub, idx) in hubs" :key="hub.city">
                    <button @click="selectedHub = idx"
                            :class="selectedHub === idx ? 'bg-gradient-to-r from-viaje-600 to-ocean-600 text-white shadow-glow-emerald border-viaje-400' : 'tropical-glass text-zinc-300 hover:text-white border-viaje-500/20'"
                            class="p-4 rounded-2xl border text-left transition duration-200">
                        <p class="text-xs font-bold uppercase tracking-wider text-zinc-400" x-text="hub.code"></p>
                        <p class="font-heading font-extrabold text-base sm:text-lg text-white mt-0.5" x-text="hub.city"></p>
                        <span class="text-[11px] opacity-80 mt-1 block" x-text="hub.carsCount + ' Units Available'"></span>
                    </button>
                </template>
            </div>

            <!-- Hub Details Card -->
            <div class="tropical-glass rounded-3xl p-6 sm:p-8 border border-viaje-500/30 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700/20 text-zinc-400 font-bold text-xs" x-text="hubs[selectedHub].code"></span>
                        <h3 class="font-heading text-2xl font-bold text-white" x-text="hubs[selectedHub].name"></h3>
                    </div>
                    <p class="text-zinc-200 text-sm leading-relaxed" x-text="hubs[selectedHub].description"></p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-zinc-300 pt-2">
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-location-dot text-viaje-400 mt-1"></i>
                            <div>
                                <span class="font-bold text-white block">Depot Location</span>
                                <span class="text-zinc-300" x-text="hubs[selectedHub].address"></span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-clock text-zinc-400 mt-1"></i>
                            <div>
                                <span class="font-bold text-white block">Airport Handover Hours</span>
                                <span class="text-zinc-300">24/7 Red-eye Flight Delivery Ready</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 flex flex-col justify-center items-center p-6 bg-zinc-950/80 rounded-2xl border border-viaje-500/20 text-center">
                    <i class="fa-solid fa-car-side text-4xl text-zinc-400 mb-3"></i>
                    <p class="text-sm font-bold text-white mb-1">Renting in <span x-text="hubs[selectedHub].city"></span>?</p>
                    <p class="text-xs text-zinc-300 mb-4">Express dispatch ready with Easytrip & Autosweep RFID</p>
                    <button @click="trip.pickupLocation = hubs[selectedHub].name; scrollToFleet()" 
                            class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-viaje-500 to-viaje-600 text-zinc-950 font-extrabold text-xs shadow-glow-emerald transition flex items-center gap-2">
                        <span>Select Hub & Pick Car</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- WHY VIAJE / ISLAND PERKS -->
    <section id="island-perks" class="py-20 bg-zinc-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-viaje-500/15 text-viaje-300 text-xs font-bold mb-3 border border-viaje-400/30">
                    <i class="fa-solid fa-shield-heart"></i> The Viaje Guarantee
                </div>
                <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    Hassle-Free Philippine Car Rentals
                </h2>
                <p class="text-zinc-300 text-sm sm:text-base mt-3">
                    No long queue lines, no surprise security deposit deductions, and zero hidden cleaning fees.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="tropical-glass rounded-3xl p-6 border border-viaje-500/30 hover:border-viaje-400/60 transition group">
                    <div class="w-14 h-14 rounded-2xl bg-viaje-500/20 text-viaje-300 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 group-hover:bg-viaje-500 group-hover:text-zinc-950 transition duration-300 shadow-glow-emerald">
                        <i class="fa-solid fa-barcode"></i>
                    </div>
                    <h3 class="font-heading font-bold text-lg text-white mb-2">Pre-Loaded RFID Tags</h3>
                    <p class="text-zinc-300 text-xs leading-relaxed">
                        Breeze through SLEX, NLEX, Skyway Stage 3, and SCTEX toll gates with active Autosweep & Easytrip tags.
                    </p>
                </div>

                <div class="tropical-glass rounded-3xl p-6 border border-viaje-500/30 hover:border-zinc-400/60 transition group">
                    <div class="w-14 h-14 rounded-2xl bg-zinc-500/20 text-ocean-300 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 group-hover:bg-zinc-500 group-hover:text-zinc-950 transition duration-300 shadow-glow-emerald">
                        <i class="fa-solid fa-ferry"></i>
                    </div>
                    <h3 class="font-heading font-bold text-lg text-white mb-2">Ro-Ro Ferry Permitted</h3>
                    <p class="text-zinc-300 text-xs leading-relaxed">
                        Planning a Batangas-to-Mindoro or Panay-to-Guimaras road trip? Our vehicles are authorized for Ro-Ro vessel crossings.
                    </p>
                </div>

                <div class="tropical-glass rounded-3xl p-6 border border-viaje-500/30 hover:border-zinc-500/60 transition group">
                    <div class="w-14 h-14 rounded-2xl bg-zinc-800 text-zinc-300 border border-zinc-700/20 text-zinc-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 group-hover:bg-zinc-800 text-zinc-300 border border-zinc-700 group-hover:text-zinc-950 transition duration-300 shadow-glow-emerald">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="font-heading font-bold text-lg text-white mb-2">Comprehensive CDW Shield</h3>
                    <p class="text-zinc-300 text-xs leading-relaxed">
                        Zero deductible collision damage waiver with 24/7 nationwide roadside towing across Luzon, Visayas, and Mindanao.
                    </p>
                </div>

                <div class="tropical-glass rounded-3xl p-6 border border-viaje-500/30 hover:border-viaje-400/60 transition group">
                    <div class="w-14 h-14 rounded-2xl bg-viaje-500/20 text-viaje-300 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 group-hover:bg-viaje-500 group-hover:text-zinc-950 transition duration-300 shadow-glow-emerald">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    <h3 class="font-heading font-bold text-lg text-white mb-2">GCash & Maya Accepted</h3>
                    <p class="text-zinc-300 text-xs leading-relaxed">
                        Pay effortlessly using your favorite local e-wallets, credit cards, or cash upon airport vehicle handover.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- TESTIMONIALS CAROUSEL -->
    <section id="testimonials" class="py-20 bg-zinc-950 relative overflow-hidden" x-data="testimonialsCarousel()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700/15 text-zinc-400 text-xs font-bold mb-3 border border-zinc-500/30">
                        <i class="fa-solid fa-star"></i> 4.99 / 5.0 Rating Across 7,600+ Trips
                    </div>
                    <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        What Fellow Travelers Say About Viaje
                    </h2>
                </div>

                <!-- Controls -->
                <div class="flex items-center gap-3">
                    <button @click="prev()" class="w-10 h-10 rounded-2xl tropical-glass border border-viaje-500/30 text-zinc-200 hover:text-white flex items-center justify-center transition">
                        <i class="fa-solid fa-chevron-left text-sm"></i>
                    </button>
                    <button @click="next()" class="w-10 h-10 rounded-2xl tropical-glass border border-viaje-500/30 text-zinc-200 hover:text-white flex items-center justify-center transition">
                        <i class="fa-solid fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <template x-for="(review, index) in getVisibleReviews()" :key="index">
                    <div class="tropical-glass rounded-3xl p-6 border border-viaje-500/30 flex flex-col justify-between hover:border-viaje-400/50 transition">
                        <div>
                            <!-- Star Rating -->
                            <div class="flex items-center gap-1 text-zinc-400 text-sm mb-4">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-zinc-200 text-xs sm:text-sm leading-relaxed mb-6 italic" x-text="'•' + review.comment + 'â€'"></p>
                        </div>

                        <div class="flex items-center gap-3 pt-4 border-t border-viaje-500/20">
                            <img :src="review.avatar" class="w-11 h-11 rounded-full object-cover border-2 border-viaje-400/40">
                            <div>
                                <h4 class="font-heading font-bold text-sm text-white" x-text="review.name"></h4>
                                <p class="text-[11px] text-viaje-300" x-text="review.role + ' • ' + review.car"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </section>

    <!-- FAQ ACCORDION -->
    <section id="faq" class="py-20 bg-zinc-900 border-t border-viaje-500/20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeAccordion: 1 }">
            
            <div class="text-center mb-14">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-viaje-500/15 text-viaje-300 text-xs font-bold mb-3 border border-viaje-400/30">
                    <i class="fa-solid fa-circle-question"></i> Help & Requirements
                </div>
                <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-zinc-300 text-sm mt-2">
                    Requirements for Philippine residents, Balikbayans, and international tourists.
                </p>
            </div>

            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="tropical-glass rounded-2xl border border-viaje-500/30 overflow-hidden">
                    <button @click="activeAccordion = activeAccordion === 1 ? null : 1"
                            class="w-full p-5 text-left flex items-center justify-between font-heading font-bold text-sm sm:text-base text-white hover:text-viaje-300 transition">
                        <span>What valid IDs and documents are required to rent with Viaje?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"
                           :class="activeAccordion === 1 ? 'rotate-180 text-viaje-300' : 'text-zinc-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 1" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-zinc-300 leading-relaxed border-t border-viaje-500/20 pt-3" x-cloak>
                        For Philippine citizens: 1 valid PH Driver's License and 1 secondary government ID (Passport, UMID, National ID). For Balikbayans and Foreign Tourists: Valid Foreign Driver's License (honored for up to 90 days in the Philippines under LTO regulations) or International Driving Permit (IDP), and Passport.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="tropical-glass rounded-2xl border border-viaje-500/30 overflow-hidden">
                    <button @click="activeAccordion = activeAccordion === 2 ? null : 2"
                            class="w-full p-5 text-left flex items-center justify-between font-heading font-bold text-sm sm:text-base text-white hover:text-viaje-300 transition">
                        <span>How does the NAIA / Mactan Airport terminal pickup work?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"
                           :class="activeAccordion === 2 ? 'rotate-180 text-viaje-300' : 'text-zinc-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 2" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-zinc-300 leading-relaxed border-t border-viaje-500/20 pt-3" x-cloak>
                        Our concierge tracks your flight in real time. Once you claim your bags at Terminal 1, 2, or 3, we meet you directly at the Arrival Curbside Bay. We verify your IDs, do a quick 2-minute digital check-around, hand you the keys with pre-loaded toll tags, and you're good to drive!
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="tropical-glass rounded-2xl border border-viaje-500/30 overflow-hidden">
                    <button @click="activeAccordion = activeAccordion === 3 ? null : 3"
                            class="w-full p-5 text-left flex items-center justify-between font-heading font-bold text-sm sm:text-base text-white hover:text-viaje-300 transition">
                        <span>Can I hire a professional chauffeur instead of self-driving?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"
                           :class="activeAccordion === 3 ? 'rotate-180 text-viaje-300' : 'text-zinc-400'"></i>
                    </button>
                    <div x-show="activeAccordion === 3" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-zinc-300 leading-relaxed border-t border-viaje-500/20 pt-3" x-cloak>
                        Yes! You can add a DOT-accredited professional chauffeur for just +₱1,200/day. Our drivers are courteous, knowledgeable in optimal provincial shortcuts, and handle express toll lanes and parking for you.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-zinc-950 text-zinc-400 pt-16 pb-12 border-t border-viaje-500/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
                
                <!-- Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="#" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-viaje-500 to-viaje-600 flex items-center justify-center text-zinc-950 font-bold text-lg">
                            <i class="fa-solid fa-compass"></i>
                        </div>
                        <span class="font-heading font-extrabold text-2xl tracking-tight text-white">VIAJE PH</span>
                    </a>
                    <p class="text-xs leading-relaxed max-w-sm text-zinc-300">
                        The Philippines' premier tropical automotive rental and island overland transport platform. Connecting Luzon, Visayas, and Mindanao.
                    </p>
                    <div class="flex space-x-3 pt-2">
                        <a href="#" class="w-9 h-9 rounded-xl bg-zinc-900 text-viaje-300 hover:text-white hover:bg-viaje-600 flex items-center justify-center transition"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-zinc-900 text-viaje-300 hover:text-white hover:bg-viaje-600 flex items-center justify-center transition"><i class="fa-brands fa-instagram text-xs"></i></a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-zinc-900 text-viaje-300 hover:text-white hover:bg-viaje-600 flex items-center justify-center transition"><i class="fa-brands fa-tiktok text-xs"></i></a>
                    </div>
                </div>

                <!-- Island Fleet -->
                <div>
                    <h4 class="font-heading font-bold text-white text-xs uppercase tracking-wider mb-4">Philippine Fleet</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="#fleet" @click="selectedCategory = 'van'" class="hover:text-viaje-300 transition">Grandia & Staria Vans</a></li>
                        <li><a href="#fleet" @click="selectedCategory = 'suv'" class="hover:text-viaje-300 transition">Fortuner & Everest 4x4</a></li>
                        <li><a href="#fleet" @click="selectedCategory = 'island'" class="hover:text-viaje-300 transition">Suzuki Jimny 4x4</a></li>
                        <li><a href="#fleet" @click="selectedCategory = 'luxury'" class="hover:text-viaje-300 transition">Land Cruiser Prado</a></li>
                        <li><a href="#fleet" @click="selectedCategory = 'electric'" class="hover:text-viaje-300 transition">BYD & Tesla EVs</a></li>
                    </ul>
                </div>

                <!-- Hubs -->
                <div>
                    <h4 class="font-heading font-bold text-white text-xs uppercase tracking-wider mb-4">Major Depots</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="#destinations" class="hover:text-viaje-300 transition">Manila NAIA (MNL)</a></li>
                        <li><a href="#destinations" class="hover:text-viaje-300 transition">Mactan Cebu (CEB)</a></li>
                        <li><a href="#destinations" class="hover:text-viaje-300 transition">Clark Pampanga (CRK)</a></li>
                        <li><a href="#destinations" class="hover:text-viaje-300 transition">Siargao Island (IAO)</a></li>
                        <li><a href="#destinations" class="hover:text-viaje-300 transition">Caticlan Boracay (MPH)</a></li>
                    </ul>
                </div>

                <!-- Contact & Support -->
                <div>
                    <h4 class="font-heading font-bold text-white text-xs uppercase tracking-wider mb-4">Concierge Support</h4>
                    <ul class="space-y-3 text-xs text-zinc-300">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone text-viaje-400"></i>
                            <span>+63 (917) 888-8425</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-viaje-400"></i>
                            <span>booking@viaje.ph</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-shield-halved text-zinc-400"></i>
                            <span>24/7 Roadside Rescue</span>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-viaje-500/20 pt-8 flex flex-col sm:flex-row items-center justify-between text-xs gap-4">
                <p>Â© 2026 VIAJE Philippines Mobility Inc. Registered LTO & DOT Accredited.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition">Rental Terms & Agreement</a>
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Toll & Fuel Guide</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE MULTI-STEP BOOKING & CHECKOUT MODAL -->
    <div x-show="bookingModalOpen" 
         class="fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4"
         x-cloak>
        
        <div @click.away="bookingModalOpen = false"
             x-show="bookingModalOpen"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="tropical-glass bg-zinc-950 rounded-3xl w-full max-w-4xl border border-viaje-400/40 overflow-hidden shadow-2xl my-8">
            
            <!-- Header -->
            <div class="bg-zinc-900 px-6 py-5 border-b border-viaje-500/20 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-viaje-500/20 text-viaje-300 flex items-center justify-center">
                        <i class="fa-solid fa-car-side text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-heading font-extrabold text-lg text-white" x-text="bookingStep === 3 ? 'ðŸŒ´ Mabuhay! Reservation Confirmed!' : 'Reserve ' + (selectedCar ? selectedCar.name : '')"></h3>
                        <p class="text-xs text-viaje-300" x-text="'Step ' + bookingStep + ' of 3 • ' + (bookingStep === 1 ? 'Add-ons & Toll Perks' : bookingStep === 2 ? 'Driver Details & Payment' : 'Confirmation')"></p>
                    </div>
                </div>

                <button @click="bookingModalOpen = false" class="w-9 h-9 rounded-xl bg-zinc-900 text-zinc-300 hover:text-white flex items-center justify-center transition">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="p-6 sm:p-8">
                
                <!-- STEP 1 -->
                <div x-show="bookingStep === 1" class="space-y-6" x-cloak>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                        
                        <div class="lg:col-span-7 space-y-4">
                            <h4 class="font-heading font-bold text-sm text-white uppercase tracking-wider">Philippine Roadtrip Options</h4>

                            <!-- Addon: Full Island CDW -->
                            <label class="flex items-start justify-between p-4 rounded-2xl bg-zinc-900/80 border border-viaje-500/30 cursor-pointer hover:border-viaje-400 transition">
                                <div class="flex items-start gap-3">
                                    <input type="checkbox" x-model="addons.fullInsurance" class="mt-1 accent-viaje-500 w-4 h-4 rounded">
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-bold text-sm text-white">Full CDW Island Shield</span>
                                            <span class="bg-viaje-500/20 text-viaje-300 text-[10px] px-1.5 py-0.5 rounded font-bold">Zero Deductible</span>
                                        </div>
                                        <p class="text-xs text-zinc-300 mt-0.5">Comprehensive protection against scratches, dents, and accidental damages.</p>
                                    </div>
                                </div>
                                <span class="font-bold text-sm text-zinc-400 whitespace-nowrap ml-2">+₱450<span class="text-[10px] text-zinc-400">/day</span></span>
                            </label>

                            <!-- Addon: Chauffeur Service -->
                            <label class="flex items-start justify-between p-4 rounded-2xl bg-zinc-900/80 border border-viaje-500/30 cursor-pointer hover:border-viaje-400 transition">
                                <div class="flex items-start gap-3">
                                    <input type="checkbox" x-model="addons.chauffeur" class="mt-1 accent-viaje-500 w-4 h-4 rounded">
                                    <div>
                                        <span class="font-bold text-sm text-white">DOT-Accredited Professional Driver</span>
                                        <p class="text-xs text-zinc-300 mt-0.5">Uniformed driver for city navigation or provincial road trips.</p>
                                    </div>
                                </div>
                                <span class="font-bold text-sm text-zinc-400 whitespace-nowrap ml-2">+₱1,200<span class="text-[10px] text-zinc-400">/day</span></span>
                            </label>

                            <!-- Addon: Preloaded RFID -->
                            <label class="flex items-start justify-between p-4 rounded-2xl bg-zinc-900/80 border border-viaje-500/30 cursor-pointer hover:border-viaje-400 transition">
                                <div class="flex items-start gap-3">
                                    <input type="checkbox" x-model="addons.rfidLoad" class="mt-1 accent-viaje-500 w-4 h-4 rounded">
                                    <div>
                                        <span class="font-bold text-sm text-white">₱1,000 Pre-loaded Expressway Toll Credits</span>
                                        <p class="text-xs text-zinc-300 mt-0.5">Autosweep (SLEX/Skyway) + Easytrip (NLEX/SCTEX) credits.</p>
                                    </div>
                                </div>
                                <span class="font-bold text-sm text-zinc-400 whitespace-nowrap ml-2">+₱1,000<span class="text-[10px] text-zinc-400"> (one-time)</span></span>
                            </label>

                            <!-- Coupon -->
                            <div class="pt-2">
                                <label class="block text-xs font-bold text-viaje-300 uppercase tracking-wider mb-1.5">Have a Promo Coupon Code?</label>
                                <div class="flex gap-2">
                                    <input type="text" 
                                           x-model="promoCode" 
                                           placeholder="Enter coupon (e.g. MABUHAY20)" 
                                           class="flex-grow bg-zinc-950 border border-viaje-500/30 rounded-xl px-4 py-2.5 text-xs text-white uppercase outline-none focus:border-viaje-400">
                                    <button type="button" 
                                            @click="applyPromo()" 
                                            class="px-5 py-2.5 bg-viaje-600 hover:bg-viaje-500 text-white font-bold text-xs rounded-xl transition">
                                        Apply
                                    </button>
                                </div>
                                <p x-show="promoSuccess" class="text-xs text-viaje-300 mt-1.5 flex items-center gap-1 font-semibold" x-cloak>
                                    <i class="fa-solid fa-check"></i> Code applied: 20% discount granted!
                                </p>
                            </div>
                        </div>

                        <!-- Cost Breakdown in PHP -->
                        <div class="lg:col-span-5 bg-zinc-900/90 p-5 rounded-3xl border border-viaje-500/20 flex flex-col justify-between" x-show="selectedCar">
                            <div>
                                <h4 class="font-heading font-bold text-sm text-white uppercase tracking-wider mb-4 pb-2 border-b border-viaje-500/20">Trip Cost Summary</h4>
                                
                                <div class="flex items-center gap-3 mb-4">
                                    <img :src="selectedCar?.image" class="w-16 h-12 rounded-xl object-cover">
                                    <div>
                                        <p class="font-bold text-white text-sm" x-text="selectedCar?.name"></p>
                                        <p class="text-[11px] text-viaje-300" x-text="calculatedDays + ' Day' + (calculatedDays > 1 ? 's' : '') + ' • ' + trip.pickupLocation"></p>
                                    </div>
                                </div>

                                <div class="space-y-2.5 text-xs border-t border-viaje-500/20 pt-3">
                                    <div class="flex justify-between text-zinc-300">
                                        <span>Base Vehicle Rate (<span x-text="'₱' + formatPhp(getPrice(selectedCar?.dailyRate)) + ' Ã— ' + calculatedDays + 'd'"></span>)</span>
                                        <span class="text-white font-semibold" x-text="'₱' + formatPhp(getPrice(selectedCar?.dailyRate) * calculatedDays)"></span>
                                    </div>

                                    <div class="flex justify-between text-zinc-300" x-show="calculateAddonsTotal() > 0">
                                        <span>Selected Add-ons</span>
                                        <span class="text-white font-semibold" x-text="'₱' + formatPhp(calculateAddonsTotal())"></span>
                                    </div>

                                    <div class="flex justify-between text-viaje-300" x-show="discountPercentage > 0">
                                        <span>Promo Discount (<span x-text="discountPercentage"></span>%)</span>
                                        <span class="font-semibold" x-text="'-₱' + formatPhp(calculateDiscountAmount())"></span>
                                    </div>

                                    <div class="flex justify-between text-zinc-300">
                                        <span>Comprehensive VAT & Airport Surcharge (12%)</span>
                                        <span class="text-white font-semibold" x-text="'₱' + formatPhp(calculateTaxes())"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-viaje-500/20 pt-4 mt-4">
                                <div class="flex justify-between items-baseline mb-4">
                                    <span class="font-heading font-bold text-sm text-white">Estimated Total:</span>
                                    <span class="font-heading font-black text-2xl text-zinc-400" x-text="'₱' + formatPhp(calculateGrandTotal())"></span>
                                </div>

                                <button @click="bookingStep = 2" 
                                        class="w-full py-3.5 rounded-2xl bg-gradient-to-r from-viaje-400 via-zinc-400 to-zinc-500 text-zinc-950 font-extrabold text-sm shadow-glow-emerald transition flex items-center justify-center gap-2">
                                    <span>Proceed to Driver Details</span>
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- STEP 2 -->
                <div x-show="bookingStep === 2" class="space-y-6" x-cloak>
                    <form @submit.prevent="completeBooking()" class="space-y-5">
                        <h4 class="font-heading font-bold text-sm text-white uppercase tracking-wider">Primary Renter Contact Info</h4>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-viaje-300 uppercase mb-1">Full Name (Matching ID) *</label>
                                <input type="text" x-model="renter.name" required class="w-full bg-zinc-900 border border-viaje-500/30 rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-viaje-400 font-medium" placeholder="Juan Dela Cruz">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-viaje-300 uppercase mb-1">Philippine Mobile / WhatsApp *</label>
                                <input type="tel" x-model="renter.phone" required class="w-full bg-zinc-900 border border-viaje-500/30 rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-viaje-400 font-medium" placeholder="+63 917 123 4567">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-viaje-300 uppercase mb-1">Email Address (for voucher confirmation) *</label>
                                <input type="email" x-model="renter.email" required class="w-full bg-zinc-900 border border-viaje-500/30 rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-viaje-400 font-medium" placeholder="juandelacruz@gmail.com">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-viaje-300 uppercase mb-1">Arriving Flight Number (optional)</label>
                                <input type="text" x-model="renter.flight" class="w-full bg-zinc-900 border border-viaje-500/30 rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-viaje-400 font-medium" placeholder="e.g. PR 102 / 5J 560">
                            </div>
                        </div>

                        <h4 class="font-heading font-bold text-sm text-white uppercase tracking-wider pt-2">Preferred Payment Method</h4>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <label class="p-3.5 rounded-2xl bg-zinc-900 border border-viaje-500/30 cursor-pointer flex items-center gap-3">
                                <input type="radio" name="paymethod" value="gcash" checked class="accent-viaje-500">
                                <span class="text-xs font-bold text-white">GCash / Maya QR</span>
                            </label>
                            <label class="p-3.5 rounded-2xl bg-zinc-900 border border-viaje-500/30 cursor-pointer flex items-center gap-3">
                                <input type="radio" name="paymethod" value="card" class="accent-viaje-500">
                                <span class="text-xs font-bold text-white">Credit / Debit Card</span>
                            </label>
                            <label class="p-3.5 rounded-2xl bg-zinc-900 border border-viaje-500/30 cursor-pointer flex items-center gap-3">
                                <input type="radio" name="paymethod" value="cash" class="accent-viaje-500">
                                <span class="text-xs font-bold text-white">Cash on Delivery</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-viaje-500/20">
                            <button type="button" @click="bookingStep = 1" class="text-xs text-zinc-300 hover:text-white font-semibold flex items-center gap-1.5">
                                <i class="fa-solid fa-arrow-left"></i> Back to Step 1
                            </button>

                            <button type="submit" 
                                    class="px-8 py-3.5 rounded-2xl bg-gradient-to-r from-viaje-400 via-zinc-400 to-zinc-500 text-zinc-950 font-extrabold text-sm shadow-glow-emerald transition">
                                Confirm & Book (<span x-text="'₱' + formatPhp(calculateGrandTotal())"></span>)
                            </button>
                        </div>
                    </form>
                </div>

                <!-- STEP 3 -->
                <div x-show="bookingStep === 3" class="text-center py-6 space-y-5" x-cloak>
                    <div class="w-20 h-20 rounded-full bg-viaje-500/20 text-viaje-300 flex items-center justify-center mx-auto text-4xl shadow-glow-emerald animate-bounce">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <div>
                        <h3 class="font-heading font-extrabold text-2xl text-white">Mabuhay! Your Trip Is Confirmed!</h3>
                        <p class="text-zinc-300 text-xs sm:text-sm mt-1 max-w-md mx-auto">
                            Your reservation voucher and curbside driver contact details have been sent to <span class="text-zinc-400 font-bold" x-text="renter.email"></span>.
                        </p>
                    </div>

                    <div class="bg-zinc-900 p-6 rounded-3xl border border-viaje-500/30 max-w-md mx-auto text-left space-y-3 text-xs">
                        <div class="flex justify-between items-center pb-3 border-b border-viaje-500/20">
                            <span class="text-zinc-400">Booking Reference:</span>
                            <span class="font-mono font-bold text-zinc-950 bg-zinc-800 text-zinc-300 border border-zinc-700 px-2.5 py-1 rounded-lg" x-text="confirmationCode"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-zinc-400">Reserved Vehicle:</span>
                            <span class="font-bold text-white" x-text="selectedCar?.name"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-zinc-400">Pick-up Location:</span>
                            <span class="font-bold text-white" x-text="trip.pickupLocation"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-zinc-400">Dates:</span>
                            <span class="font-bold text-white" x-text="trip.pickupDate + ' to ' + trip.dropoffDate + ' (' + calculatedDays + ' days)'"></span>
                        </div>
                        <div class="flex justify-between pt-2 border-t border-viaje-500/20">
                            <span class="font-bold text-white">Total Amount:</span>
                            <span class="font-bold text-zinc-400 text-sm" x-text="'₱' + formatPhp(calculateGrandTotal())"></span>
                        </div>
                    </div>

                    <button @click="bookingModalOpen = false; resetBookingWizard()" class="px-8 py-3 rounded-2xl bg-viaje-600 hover:bg-viaje-500 text-white font-bold text-xs shadow-lg transition">
                        Done & Return to Viaje
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- QUICK-VIEW MODAL -->
    <div x-show="quickViewModalOpen" 
         class="fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4"
         x-cloak>
        <div @click.away="quickViewModalOpen = false"
             x-show="quickViewModalOpen"
             x-transition
             class="tropical-glass bg-zinc-950 rounded-3xl w-full max-w-3xl border border-viaje-400/40 overflow-hidden shadow-2xl">
            
            <div class="relative h-64 sm:h-80 bg-zinc-950">
                <img :src="quickViewCar?.image" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent"></div>
                <button @click="quickViewModalOpen = false" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-black/60 text-white flex items-center justify-center backdrop-blur-sm">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="absolute bottom-4 left-6 right-6 flex justify-between items-end">
                    <div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold text-zinc-950 bg-viaje-500" x-text="quickViewCar?.badge"></span>
                        <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-white mt-1" x-text="quickViewCar?.name"></h3>
                    </div>
                    <div class="text-right">
                        <span class="font-heading font-black text-2xl text-zinc-400" x-text="'₱' + formatPhp(getPrice(quickViewCar?.dailyRate))"></span>
                        <span class="text-xs text-zinc-300">/day</span>
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-8 space-y-6">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center">
                    <div class="bg-zinc-900 p-3 rounded-2xl border border-viaje-500/20">
                        <span class="text-[10px] uppercase font-bold text-viaje-300 block">Fuel / Engine</span>
                        <span class="font-heading font-bold text-sm text-white" x-text="quickViewCar?.fuel"></span>
                    </div>
                    <div class="bg-zinc-900 p-3 rounded-2xl border border-viaje-500/20">
                        <span class="text-[10px] uppercase font-bold text-viaje-300 block">Passenger Seats</span>
                        <span class="font-heading font-bold text-sm text-white" x-text="quickViewCar?.seats + ' Captain/Bench'"></span>
                    </div>
                    <div class="bg-zinc-900 p-3 rounded-2xl border border-viaje-500/20">
                        <span class="text-[10px] uppercase font-bold text-viaje-300 block">Luggage Space</span>
                        <span class="font-heading font-bold text-sm text-white" x-text="quickViewCar?.bags + ' Large Luggage'"></span>
                    </div>
                    <div class="bg-zinc-900 p-3 rounded-2xl border border-viaje-500/20">
                        <span class="text-[10px] uppercase font-bold text-viaje-300 block">Efficiency</span>
                        <span class="font-heading font-bold text-sm text-zinc-400" x-text="quickViewCar?.eco"></span>
                    </div>
                </div>

                <div>
                    <h4 class="font-heading font-bold text-xs uppercase tracking-wider text-viaje-300 mb-3">Philippine Travel Features</h4>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-xs text-zinc-200">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-viaje-400"></i> Autosweep & Easytrip RFID</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-viaje-400"></i> High Ground Clearance</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-viaje-400"></i> Heavy-Duty Dual A/C</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-viaje-400"></i> Apple CarPlay / GPS Nav</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-viaje-400"></i> 24/7 Roadside Assistance</div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-viaje-400"></i> Tinted UV Heat Shield Glass</div>
                    </div>
                </div>

                <div class="pt-4 border-t border-viaje-500/20 flex justify-end gap-3">
                    <button @click="quickViewModalOpen = false" class="px-5 py-2.5 rounded-xl bg-zinc-900 text-zinc-300 text-xs font-bold hover:bg-zinc-800 transition">
                        Close
                    </button>
                    <button @click="quickViewModalOpen = false; startBooking(quickViewCar)" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-viaje-400 to-viaje-500 text-zinc-950 font-extrabold text-xs shadow-lg transition">
                        Reserve This Unit
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- COMPARISON MODAL -->
    <div x-show="compareModalOpen" 
         class="fixed inset-0 z-50 overflow-y-auto bg-black/85 backdrop-blur-md flex items-center justify-center p-4"
         x-cloak>
        <div @click.away="compareModalOpen = false"
             x-show="compareModalOpen"
             x-transition
             class="tropical-glass bg-zinc-950 rounded-3xl w-full max-w-5xl border border-viaje-400/40 overflow-hidden shadow-2xl p-6 sm:p-8">
            
            <div class="flex justify-between items-center mb-6 pb-4 border-b border-viaje-500/20">
                <div>
                    <h3 class="font-heading font-extrabold text-xl text-white">Philippine Fleet Comparison Matrix</h3>
                    <p class="text-xs text-zinc-300">Comparing capacity, ground clearance, and daily rental rates</p>
                </div>
                <button @click="compareModalOpen = false" class="w-9 h-9 rounded-xl bg-zinc-900 text-zinc-300 hover:text-white flex items-center justify-center">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="border-b border-viaje-500/20">
                            <th class="p-3 text-viaje-300 font-bold uppercase w-1/4">Feature / Vehicle</th>
                            <template x-for="car in comparisonList" :key="car.id">
                                <th class="p-3 text-center">
                                    <img :src="car.image" class="w-24 h-16 rounded-xl object-cover mx-auto mb-2">
                                    <span class="font-heading font-bold text-white text-sm block" x-text="car.name"></span>
                                    <span class="text-zinc-400 font-bold" x-text="'₱' + formatPhp(getPrice(car.dailyRate)) + '/day'"></span>
                                </th>
                            </template>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-viaje-500/20">
                        <tr>
                            <td class="p-3 text-zinc-400 font-medium">Class / Category</td>
                            <template x-for="car in comparisonList" :key="car.id">
                                <td class="p-3 text-center text-zinc-200 font-semibold" x-text="car.categoryName"></td>
                            </template>
                        </tr>
                        <tr>
                            <td class="p-3 text-zinc-400 font-medium">Passenger Seats</td>
                            <template x-for="car in comparisonList" :key="car.id">
                                <td class="p-3 text-center text-zinc-400 font-bold" x-text="car.seats + ' Seats'"></td>
                            </template>
                        </tr>
                        <tr>
                            <td class="p-3 text-zinc-400 font-medium">Luggage Capacity</td>
                            <template x-for="car in comparisonList" :key="car.id">
                                <td class="p-3 text-center text-white font-bold" x-text="car.bags + ' Bags'"></td>
                            </template>
                        </tr>
                        <tr>
                            <td class="p-3 text-zinc-400 font-medium">Fuel & Powertrain</td>
                            <template x-for="car in comparisonList" :key="car.id">
                                <td class="p-3 text-center text-viaje-300" x-text="car.fuel"></td>
                            </template>
                        </tr>
                        <tr>
                            <td class="p-3 text-zinc-400 font-medium">Action</td>
                            <template x-for="car in comparisonList" :key="car.id">
                                <td class="p-3 text-center">
                                    <button @click="compareModalOpen = false; startBooking(car)" class="px-4 py-2 rounded-xl bg-gradient-to-r from-viaje-400 to-viaje-500 text-zinc-950 font-extrabold text-xs transition">
                                        Reserve
                                    </button>
                                </td>
                            </template>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

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
                    { name: 'Mactan-Cebu Intl Airport (CEB)', isAirport: true, cars: 26 },
                    { name: 'Clark International Airport (CRK)', isAirport: true, cars: 19 },
                    { name: 'Boracay / Caticlan Jetty (MPH)', isAirport: true, cars: 14 },
                    { name: 'Siargao Sayak Airport (IAO)', isAirport: true, cars: 16 },
                    { name: 'BGC Taguig Metro Depot', isAirport: false, cars: 22 },
                ],

                categories: [
                    { id: 'all', name: 'All Philippine Fleet', icon: 'fa-solid fa-compass' },
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
                        city: 'Cebu (Mactan)',
                        code: 'CEB',
                        name: 'Mactan-Cebu International Airport (CEB)',
                        carsCount: 26,
                        address: 'Terminal 2 Arrivals, Lapu-Lapu City, Cebu',
                        description: 'Your gateway to Cebu City, Oslob whale shark watching, and Moalboal diving coastlines with 4x4s and Grandias.'
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
                        city: 'Siargao Island',
                        code: 'IAO',
                        name: 'Siargao Sayak Airport & General Luna Depot',
                        carsCount: 16,
                        address: 'Tourism Road, General Luna, Siargao Island',
                        description: 'Equipped with Suzuki Jimny 4x4s with surfboard roof racks and open air island exploration capabilities.'
                    }
                ],

                // Full Philippine Fleet (Dynamic from Laravel Controller with fallback)
                fleet: @json($cars ?? $defaultCars ?? []),

                initApp() {
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
                            { icon: 'fa-solid fa-plane-arrival text-zinc-400', title: 'Cebu Mactan Arrival', message: 'Innova Zenix Hybrid delivered to domestic arrivals' }
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

                completeBooking() {
                    this.confirmationCode = 'VIAJE-' + Math.floor(100000 + Math.random() * 900000);
                    this.bookingStep = 3;
                    this.showToast('fa-solid fa-circle-check text-viaje-300', 'Booking Confirmed', 'Reservation ' + this.confirmationCode + ' is secured!');
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
                        comment: 'Having a 4x4 Jimny in Siargao with surfboard roof mounts made our secret beach missions so easy. Handover at Sayak airport took under 2 minutes!'
                    },
                    {
                        name: 'Dr. Camille Tan',
                        role: 'Physician (Cebu)',
                        car: 'Toyota Fortuner GR-Sport',
                        avatar: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=200&auto=format&fit=crop',
                        comment: 'Drove around Cebu down to Moalboal. Cold dual A/C, strong engine, and GCash payment made booking instant.'
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
    </script>
</body>
</html>
