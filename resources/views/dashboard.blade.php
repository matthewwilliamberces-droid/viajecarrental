<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading font-extrabold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ activeTab: 'bookings' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- KPI Metrics -->
            <livewire:admin.kpi-metrics />

            <!-- Interactive Revenue Chart -->
            <livewire:admin.revenue-chart />

            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm dark:shadow-glow-emerald sm:rounded-lg mb-6 border border-transparent dark:border-viaje-500/20 transition-colors duration-300">
                <div class="border-b border-gray-200 dark:border-viaje-500/20">
                    <nav class="-mb-px flex space-x-8 px-6" aria-label="Tabs">
                        <button @click="activeTab = 'bookings'" 
                                :class="{ 'border-viaje-500 text-viaje-600 dark:text-viaje-400': activeTab === 'bookings', 'border-transparent text-gray-500 dark:text-zinc-400 hover:border-gray-300 dark:hover:border-viaje-500/50 hover:text-gray-700 dark:hover:text-zinc-200': activeTab !== 'bookings' }"
                                class="whitespace-nowrap border-b-2 py-4 px-1 text-sm font-bold font-heading transition-colors">
                            <i class="fa-solid fa-calendar-check mr-2"></i>Bookings
                        </button>
                        <button @click="activeTab = 'cars'" 
                                :class="{ 'border-viaje-500 text-viaje-600 dark:text-viaje-400': activeTab === 'cars', 'border-transparent text-gray-500 dark:text-zinc-400 hover:border-gray-300 dark:hover:border-viaje-500/50 hover:text-gray-700 dark:hover:text-zinc-200': activeTab !== 'cars' }"
                                class="whitespace-nowrap border-b-2 py-4 px-1 text-sm font-bold font-heading transition-colors">
                            <i class="fa-solid fa-car mr-2"></i>Fleet Inventory
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Bookings Management -->
            <div x-show="activeTab === 'bookings'" x-cloak>
                <livewire:admin.booking-list />
            </div>

            <!-- Car Manager CRUD Component -->
            <div x-show="activeTab === 'cars'" x-cloak>
                <livewire:admin.car-manager />
            </div>
        </div>
    </div>
</x-app-layout>
