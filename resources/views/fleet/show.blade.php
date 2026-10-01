<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent {{ $car->name }} - Viaje Car Rental</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Rent the {{ $car->name }} ({{ $car->categoryName }}) for your next road trip. Features {{ $car->seats }} seats, {{ $car->transmission }} transmission. Starting at ₱{{ number_format($car->dailyRate) }}/day.">
    <meta property="og:title" content="Rent {{ $car->name }} - Viaje Car Rental">
    <meta property="og:description" content="Rent the {{ $car->name }} ({{ $car->categoryName }}) for your next road trip. Features {{ $car->seats }} seats, {{ $car->transmission }} transmission. Starting at ₱{{ number_format($car->dailyRate) }}/day.">
    <meta property="og:image" content="{{ $car->image }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d87f547963.js" crossorigin="anonymous"></script>
    <style>
        .font-heading { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif-heading { font-family: 'Playfair Display', serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-900 font-sans" x-data="{ mobileNavOpen: false }">

    <!-- Navigation -->
    <nav class="absolute top-0 w-full z-50 transition-all duration-300">
        <div class="absolute inset-0 bg-zinc-950/80 backdrop-blur-md border-b border-viaje-500/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-viaje-400 to-viaje-600 flex items-center justify-center shadow-lg shadow-viaje-500/30">
                            <i class="fa-solid fa-compass text-zinc-950 text-xl"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-heading font-black text-xl text-white tracking-tight leading-none">VIAJE <span class="text-[10px] bg-zinc-800 text-zinc-300 border border-zinc-700 text-zinc-950 px-1.5 py-0.5 rounded uppercase tracking-wider ml-1">PH</span></span>
                            <span class="text-[9px] font-bold text-viaje-300 uppercase tracking-widest leading-none mt-1">Philippine Island Car Rentals</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="{{ route('home') }}" class="text-sm font-bold text-zinc-300 hover:text-white transition-colors">Home</a>
                    <a href="{{ route('booking') }}" class="text-sm font-bold text-zinc-300 hover:text-white transition-colors">Book Now</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="px-3.5 py-1.5 rounded-xl border border-viaje-500/30 bg-viaje-500/10 text-xs font-bold text-viaje-300 hover:text-white hover:bg-viaje-500/20 transition flex items-center gap-2">
                            <i class="fa-solid fa-gauge-high text-viaje-400 text-xs"></i>
                            <span>Admin</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3.5 py-1.5 rounded-xl border border-white/10 bg-black/20 text-xs font-bold text-zinc-300 hover:text-white hover:border-viaje-500/40 hover:bg-viaje-500/10 transition flex items-center gap-2">
                            <i class="fa-solid fa-shield-halved text-viaje-400 text-xs"></i>
                            <span>Admin</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        <!-- Hero Image -->
        <div class="relative w-full h-[50vh] sm:h-[60vh] bg-zinc-950">
            <img src="{{ $car->image }}" alt="{{ $car->name }}" class="w-full h-full object-cover opacity-80 mix-blend-overlay">
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/40 to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 w-full">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
                    <div class="max-w-3xl">
                        @if($car->badge)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-zinc-800 text-zinc-300 border border-zinc-700 text-zinc-950 mb-4 shadow-lg shadow-zinc-400/20">
                                <i class="fa-solid fa-star mr-1.5"></i> {{ $car->badge }}
                            </span>
                        @endif
                        <h1 class="font-heading font-black text-4xl sm:text-5xl lg:text-6xl text-white mb-2 tracking-tight">{{ $car->name }}</h1>
                        <p class="text-lg sm:text-xl text-viaje-300 font-medium">{{ $car->categoryName }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Details Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Info -->
                <div class="lg:col-span-2 space-y-10">
                    <!-- Key Specs -->
                    <div>
                        <h2 class="text-2xl font-bold font-heading mb-6">Vehicle Specifications</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center text-center">
                                <i class="fa-solid fa-users text-2xl text-viaje-500 mb-2"></i>
                                <span class="text-xs text-gray-500 font-bold uppercase tracking-wider">Seats</span>
                                <span class="font-bold text-gray-900">{{ $car->seats }} Passengers</span>
                            </div>
                            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center text-center">
                                <i class="fa-solid fa-suitcase text-2xl text-viaje-500 mb-2"></i>
                                <span class="text-xs text-gray-500 font-bold uppercase tracking-wider">Luggage</span>
                                <span class="font-bold text-gray-900">{{ $car->bags }} Bags</span>
                            </div>
                            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center text-center">
                                <i class="fa-solid fa-gears text-2xl text-viaje-500 mb-2"></i>
                                <span class="text-xs text-gray-500 font-bold uppercase tracking-wider">Transmission</span>
                                <span class="font-bold text-gray-900">{{ $car->transmission }}</span>
                            </div>
                            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center text-center">
                                <i class="fa-solid fa-gas-pump text-2xl text-viaje-500 mb-2"></i>
                                <span class="text-xs text-gray-500 font-bold uppercase tracking-wider">Fuel</span>
                                <span class="font-bold text-gray-900">{{ $car->fuel }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <h2 class="text-2xl font-bold font-heading mb-4">About the {{ $car->name }}</h2>
                        <p class="text-gray-600 leading-relaxed">
                            The {{ $car->name }} is the perfect {{ $car->categoryName }} for your Philippine road trip. Featuring {{ $car->seats }} seats and space for {{ $car->bags }} bags, it offers exceptional comfort and reliability. With its {{ $car->transmission }} transmission and impressive {{ $car->eco }} fuel efficiency, you can explore the islands effortlessly and economically.
                        </p>
                    </div>

                    <!-- Reviews -->
                    <div>
                        <h2 class="text-2xl font-bold font-heading mb-4">Customer Ratings</h2>
                        <div class="flex items-center gap-4 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                            <div class="text-4xl font-black text-gray-900">{{ number_format($car->rating, 1) }}</div>
                            <div>
                                <div class="flex text-zinc-400 mb-1 text-sm">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                                <div class="text-sm font-bold text-gray-500">Based on {{ $car->reviews }} reviews</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Card (Sidebar) -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-200 p-6 sm:p-8">
                        <div class="flex justify-between items-end mb-6">
                            <div>
                                <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Daily Rate</p>
                                <div class="flex items-end gap-1">
                                    <span class="font-heading font-black text-3xl sm:text-4xl text-gray-900">₱{{ number_format($car->dailyRate) }}</span>
                                    <span class="text-gray-500 font-medium mb-1">/day</span>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-3 text-sm font-medium text-emerald-700 bg-emerald-50 p-3 rounded-xl">
                                <i class="fa-solid fa-check-circle"></i> Free Cancellation (48hrs)
                            </div>
                            <div class="flex items-center gap-3 text-sm font-medium text-emerald-700 bg-emerald-50 p-3 rounded-xl">
                                <i class="fa-solid fa-check-circle"></i> Unlimited Mileage included
                            </div>
                        </div>

                        <a href="{{ route('booking', ['car' => $car->slug]) }}" class="block w-full bg-gradient-to-r from-viaje-600 to-ocean-600 hover:from-viaje-500 hover:to-viaje-600 text-white font-bold text-lg text-center py-4 rounded-xl shadow-lg shadow-viaje-600/30 transition-all hover:-translate-y-0.5">
                            Check Availability
                        </a>

                        <p class="text-xs text-center text-gray-400 mt-4 font-medium">No credit card required to reserve.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
