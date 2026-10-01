<div class="space-y-6">
    <!-- Flash Notification -->
    @if (session()->has('message'))
        <div class="flex items-center justify-between p-4 bg-emerald-50 border-l-4 border-emerald-500 rounded-xl shadow-sm text-emerald-800 animate-fade-in" role="alert">
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-medium">{{ session('message') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    @endif

    <!-- Fleet Inventory Header & Table Card -->
    <div class="bg-white dark:bg-zinc-950 rounded-2xl shadow-sm border border-gray-200 dark:border-viaje-500/20/80 overflow-hidden">
        <!-- Top Toolbar -->
        <div class="p-6 bg-gradient-to-r from-gray-50 to-white border-b border-gray-200 dark:border-viaje-500/20/80 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            <div>
                <div class="flex items-center gap-3">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white tracking-tight">Active Island Fleet</h2>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                        {{ $cars->total() }} Vehicles
                    </span>
                </div>
                <p class="text-xs text-gray-500 dark:text-zinc-400 mt-1">Manage vehicles visible across the VIAJE Philippine Car Rental platform.</p>
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-3">
                <div class="relative w-full sm:w-auto">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-search text-gray-400 text-sm"></i>
                    </div>
                    <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search vehicle name, specs..." class="pl-9 rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-indigo-500 focus:ring-indigo-500 w-full sm:w-60 bg-white dark:bg-zinc-900 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-zinc-500">
                </div>

                <select wire:model.live="filterCategory" class="rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-indigo-500 focus:ring-indigo-500 w-full sm:w-auto bg-white dark:bg-zinc-900 text-gray-900 dark:text-white">
                    <option value="">All Categories</option>
                    <option value="island">Island 4x4</option>
                    <option value="van">Executive & Family Van</option>
                    <option value="suv">7-Seater SUV</option>
                    <option value="luxury">VIP Luxury 4x4</option>
                    <option value="electric">Hybrid & EV</option>
                </select>

                <select wire:model.live="filterStatus" class="rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-indigo-500 focus:ring-indigo-500 w-full sm:w-auto bg-white dark:bg-zinc-900 text-gray-900 dark:text-white">
                    <option value="">All Statuses</option>
                    <option value="Available">Available</option>
                    <option value="Rented">Rented</option>
                    <option value="Maintenance">Maintenance</option>
                </select>

                <button type="button"
                        wire:click="openCreateModal"
                        class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-sm font-bold text-white bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 shadow-md shadow-emerald-500/20 hover:shadow-lg transition transform active:scale-95 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 w-full sm:w-auto whitespace-nowrap">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                    <span>Add New Vehicle</span>
                </button>
            </div>
        </div>

        <!-- Vehicles Data Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-viaje-500/20 text-left">
                <thead class="bg-gray-50 dark:bg-zinc-900/75 text-[11px] font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">
                    <tr>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('name')">
                            Vehicle Details @if($sortField === 'name') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('category')">
                            Category @if($sortField === 'category') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4">Specifications</th>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('dailyRate')">
                            Daily Rate @if($sortField === 'dailyRate') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('rating')">
                            Rating &amp; Reviews @if($sortField === 'rating') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-viaje-500/10 bg-white dark:bg-zinc-950 text-sm">
                    @forelse($cars as $car)
                        <tr class="hover:bg-zinc-50 dark:bg-zinc-900/80 transition group">
                            <!-- Vehicle & Image -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-4">
                                    <div class="relative h-14 w-20 flex-shrink-0 rounded-xl overflow-hidden bg-gray-100 dark:bg-zinc-900 border border-gray-200 dark:border-viaje-500/20 shadow-sm">
                                        <img class="h-full w-full object-cover group-hover:scale-105 transition duration-300" src="{{ $car->image }}" alt="{{ $car->name }}">
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-900 dark:text-white">{{ $car->name }}</div>
                                        @if($car->badge)
                                            <span class="inline-block mt-0.5 px-2 py-0.5 rounded text-[10px] font-bold text-white bg-zinc-800">
                                                {{ $car->badge }}
                                            </span>
                                        @endif
                                        <div class="mt-1">
                                            @php
                                                $statusColors = [
                                                    'Available' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400 border-emerald-200 dark:border-emerald-800',
                                                    'Rented' => 'bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400 border-amber-200 dark:border-amber-800',
                                                    'Maintenance' => 'bg-rose-100 text-rose-800 dark:bg-rose-900/30 dark:text-rose-400 border-rose-200 dark:border-rose-800',
                                                ];
                                                $statusVal = $car->status instanceof \BackedEnum ? $car->status->value : (string) ($car->status ?? 'Available');
                                                $statusColor = $statusColors[$statusVal] ?? $statusColors['Available'];
                                            @endphp
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider border {{ $statusColor }}">
                                                {{ $statusVal }}
                                            </span>
                                            @if($statusVal === 'Rented' && $car->bookings && $car->bookings->first())
                                                <div class="text-[9.5px] font-medium text-amber-600 dark:text-amber-400 mt-1 flex items-center gap-1">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    {{ \Carbon\Carbon::parse($car->bookings->first()->pickup_date)->format('M d') }} - 
                                                    {{ \Carbon\Carbon::parse($car->bookings->first()->dropoff_date)->format('M d') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Category -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-gray-100 dark:bg-zinc-900 text-gray-800 dark:text-zinc-100">
                                    {{ $car->categoryName }}
                                </span>
                                <span class="block text-[11px] text-gray-400 dark:text-zinc-500 mt-0.5 uppercase tracking-wide">
                                    ID: {{ $car->category }}
                                </span>
                            </td>

                            <!-- Specs -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-xs text-gray-900 dark:text-white font-medium flex items-center gap-2">
                                    <span><i class="fa-solid fa-gears mr-1"></i> {{ $car->transmission }}</span>
                                    <span><i class="fa-solid fa-suitcase mr-1"></i></span>
                                    <span><i class="fa-solid fa-gas-pump mr-1"></i> {{ $car->fuel }}</span>
                                </div>
                                <div class="text-[11px] text-gray-500 dark:text-zinc-400 mt-0.5">
                                    <i class="fa-solid fa-users text-gray-400 dark:text-zinc-500 mr-1"></i> {{ $car->seats }} Seats | <i class="fa-solid fa-suitcase text-gray-400 dark:text-zinc-500 mr-1"></i> {{ $car->bags }} Bags | <i class="fa-solid fa-leaf text-gray-400 dark:text-zinc-500 mr-1"></i> {{ $car->eco }}
                                </div>
                            </td>

                            <!-- Daily Rate -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-bold text-emerald-600 text-base">
                                    ₱{{ number_format($car->dailyRate) }}
                                    <span class="text-xs text-gray-400 dark:text-zinc-500 font-normal">/day</span>
                                </div>
                            </td>

                            <!-- Rating -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center text-amber-500 font-semibold text-xs">
                                    <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> {{ number_format($car->rating, 2) }}</span>
                                    <span class="text-gray-400 dark:text-zinc-500 font-normal ml-1">({{ $car->reviews }} trips)</span>
                                </div>
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="inline-flex items-center gap-2">
                                    <button type="button"
                                            wire:click="edit({{ $car->id }})"
                                            class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg text-xs font-bold text-indigo-700 bg-indigo-50 hover:bg-indigo-100 transition border border-indigo-200/60">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        <span>Edit</span>
                                    </button>

                                    <button type="button"
                                            wire:click="delete({{ $car->id }})"
                                            wire:confirm="Are you sure you want to remove {{ $car->name }} from the fleet?"
                                            class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg text-xs font-bold text-rose-700 bg-rose-50 hover:bg-rose-100 transition border border-rose-200/60">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-400 dark:text-zinc-500">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <p class="font-semibold text-gray-600 dark:text-zinc-300">No vehicles found in database</p>
                                    <p class="text-xs text-gray-400 dark:text-zinc-500">Click "+ Add New Vehicle" above to register a vehicle.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Pagination Links -->
        <div class="px-6 py-4 border-t border-gray-200 dark:border-viaje-500/20">
            {{ $cars->links() }}
        </div>
    </div>

    <!-- INTERACTIVE MODAL FOR ADDING & EDITING VEHICLES -->
    @if($showModal)
        <div class="fixed inset-0 z-50 overflow-y-auto bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6"
             x-data
             @keydown.escape.window="$wire.closeModal()">

            <!-- Modal Panel -->
            <div class="bg-white dark:bg-zinc-950 rounded-2xl shadow-2xl border border-gray-200 dark:border-viaje-500/20 w-full max-w-3xl overflow-hidden transform transition-all my-8 animate-scale-up"
                 @click.away="$wire.closeModal()">

                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-gray-900 to-slate-800 px-6 py-4 flex items-center justify-between text-white">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">
                            @if($isEditMode)
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            @else
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            @endif
                        </div>
                        <div>
                            <h3 class="text-base font-bold">{{ $isEditMode ? 'Edit Vehicle: ' . $name : 'Add New Vehicle to Fleet' }}</h3>
                            <p class="text-xs text-gray-400 dark:text-zinc-500">Fill in the specifications for frontend island rental listing.</p>
                        </div>
                    </div>

                    <button type="button" wire:click="closeModal" class="w-8 h-8 rounded-lg bg-white dark:bg-zinc-950/10 hover:bg-white dark:bg-zinc-950/20 text-gray-300 hover:text-white flex items-center justify-center transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <!-- Modal Form -->
                <form wire:submit.prevent="{{ $isEditMode ? 'update' : 'store' }}">
                    <div class="p-6 space-y-6 max-h-[75vh] overflow-y-auto">

                        <!-- Section 1: Basic Vehicle Identity -->
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span>Vehicle Identification</span>
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                                <div class="sm:col-span-6">
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Vehicle Model &amp; Trim *</label>
                                    <input type="text"
                                           wire:model="name"
                                           class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500"
                                           placeholder="e.g. Suzuki Jimny AllGrip 4x4">
                                    @error('name') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Category Code *</label>
                                    <select wire:model.live="category" class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                                        <option value="">Select ID...</option>
                                        <option value="island">island (Island 4x4)</option>
                                        <option value="van">van (VIP / Family Van)</option>
                                        <option value="suv">suv (7-Seater SUV)</option>
                                        <option value="luxury">luxury (Executive Luxury)</option>
                                        <option value="electric">electric (Hybrid / EV)</option>
                                    </select>
                                    @error('category') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div class="sm:col-span-3">
                                    <label class="block text-xs font-semibold text-gray-700 dark:text-zinc-300 mb-1">Category Label *</label>
                                    <input type="text"
                                           wire:model="categoryName"
                                           class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500 dark:bg-zinc-950 dark:text-white"
                                           placeholder="e.g. Island 4x4">
                                    @error('categoryName') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            
                            <!-- Fleet Status -->
                            <div class="mt-4">
                                <label class="block text-xs font-semibold text-gray-700 dark:text-zinc-300 mb-1">Fleet Status *</label>
                                <select wire:model="status" class="w-full sm:w-1/3 rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500 dark:bg-zinc-950 dark:text-white font-bold">
                                    <option value="Available">🟢 Available</option>
                                    <option value="Rented">🟡 Rented</option>
                                    <option value="Maintenance">🔴 Maintenance</option>
                                </select>
                                @error('status') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Section 2: Pricing, Rating, Reviews -->
                        <div class="pt-2 border-t border-gray-100 dark:border-viaje-500/10">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Pricing &amp; Ratings</span>
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Daily Rental Rate (₱) *</label>
                                    <div class="relative rounded-xl shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 dark:text-zinc-500 font-bold text-sm">₱</div>
                                        <input type="number"
                                               wire:model="dailyRate"
                                               class="w-full pl-7 rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500 font-semibold"
                                               placeholder="2799">
                                    </div>
                                    @error('dailyRate') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Customer Rating (0.00 - 5.00) *</label>
                                    <input type="number"
                                           step="0.01"
                                           wire:model="rating"
                                           class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500"
                                           placeholder="4.99">
                                    @error('rating') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Reviews Count *</label>
                                    <input type="number"
                                           wire:model="reviews"
                                           class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500"
                                           placeholder="215">
                                    @error('reviews') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Section 3: Specs & Capacities -->
                        <div class="pt-2 border-t border-gray-100 dark:border-viaje-500/10">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                <span>Capacities &amp; Powertrain</span>
                            </h4>
                            <div class="grid grid-cols-2 sm:grid-cols-5 gap-3">
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Seats *</label>
                                    <input type="number" wire:model="seats" class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500" placeholder="4">
                                    @error('seats') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Bags *</label>
                                    <input type="number" wire:model="bags" class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500" placeholder="2">
                                    @error('bags') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Transmission *</label>
                                    <select wire:model="transmission" class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                                        <option value="">Select...</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Manual">Manual</option>
                                    </select>
                                    @error('transmission') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Fuel Type *</label>
                                    <select wire:model="fuel" class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                                        <option value="">Select...</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Hybrid">Hybrid</option>
                                        <option value="Electric">Electric</option>
                                    </select>
                                    @error('fuel') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Eco / Range *</label>
                                    <input type="text" wire:model="eco" class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500" placeholder="14 km/L">
                                    @error('eco') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Section 4: Image & Badges -->
                        <div class="pt-2 border-t border-gray-100 dark:border-viaje-500/10">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span>Media &amp; Promo Badges</span>
                            </h4>

                            <div class="space-y-4">
                                <!-- Image URL -->
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Vehicle Image URL (HD Photo) *</label>
                                    <input type="url"
                                           wire:model.live.debounce.500ms="image"
                                           class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500 font-mono text-xs"
                                           placeholder="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200">
                                    @error('image') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror

                                    <!-- Image Live Preview -->
                                    @if($image)
                                        <div class="mt-2 flex items-center gap-3 p-2 bg-gray-50 dark:bg-zinc-900 rounded-xl border border-gray-200 dark:border-viaje-500/20 max-w-sm">
                                            <img src="{{ $image }}" class="w-16 h-12 rounded-lg object-cover bg-gray-200 dark:bg-zinc-800" alt="Preview">
                                            <div class="text-xs text-gray-600 dark:text-zinc-300">
                                                <span class="font-bold text-gray-800 dark:text-zinc-100">Image Preview</span>
                                                <span class="block text-[11px] text-emerald-600">URL loaded</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!-- Badges -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Badge Text (Optional)</label>
                                        <input type="text"
                                               wire:model="badge"
                                               class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500"
                                               placeholder="e.g. Island Favorite, Balikbayan Choice">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Badge Color Class (Optional)</label>
                                        <input type="text"
                                               wire:model="badgeColor"
                                               class="w-full rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-emerald-500 focus:ring-emerald-500 font-mono text-xs"
                                               placeholder="bg-zinc-800 text-zinc-300 border border-zinc-700, bg-viaje-500, bg-zinc-800 text-zinc-300 border border-zinc-700">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Modal Actions -->
                    <div class="bg-gray-50 dark:bg-zinc-900 px-6 py-4 border-t border-gray-200 dark:border-viaje-500/20 flex items-center justify-end gap-3">
                        <button type="button"
                                wire:click="closeModal"
                                class="px-4 py-2.5 rounded-xl border border-gray-300 dark:border-viaje-500/30 bg-white dark:bg-zinc-950 text-gray-700 hover:bg-gray-100 dark:bg-zinc-900 text-xs font-bold transition">
                            Cancel
                        </button>

                        <button type="submit"
                                wire:loading.attr="disabled"
                                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-extrabold shadow-md shadow-emerald-500/20 transition disabled:opacity-50">
                            <span wire:loading.remove>{{ $isEditMode ? 'Save Changes' : 'Add Vehicle to Fleet' }}</span>
                            <span wire:loading class="flex items-center gap-2">
                                <svg class="animate-spin h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                <span>Processing...</span>
                            </span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    @endif
</div>
