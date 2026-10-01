<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <!-- Pending Action -->
    <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 shadow-sm dark:shadow-glow-emerald border border-gray-100 dark:border-viaje-500/20 transition-colors duration-300 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-orange-100 dark:bg-zinc-800 text-zinc-300 border border-zinc-700/20 text-orange-600 dark:text-zinc-500 flex items-center justify-center text-xl shadow-inner shrink-0">
            <i class="fa-solid fa-bell"></i>
        </div>
        <div>
            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">Pending Action</p>
            <p class="font-heading font-extrabold text-2xl text-gray-900 dark:text-white mt-1">{{ $pendingAction }}</p>
        </div>
    </div>

    <!-- Active Today -->
    <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 shadow-sm dark:shadow-glow-emerald border border-gray-100 dark:border-viaje-500/20 transition-colors duration-300 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-viaje-500/20 text-emerald-600 dark:text-viaje-400 flex items-center justify-center text-xl shadow-inner shrink-0">
            <i class="fa-solid fa-car-side"></i>
        </div>
        <div>
            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">Active Today</p>
            <p class="font-heading font-extrabold text-2xl text-gray-900 dark:text-white mt-1">{{ $activeToday }}</p>
        </div>
    </div>

    <!-- Upcoming Pickups -->
    <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 shadow-sm dark:shadow-glow-emerald border border-gray-100 dark:border-viaje-500/20 transition-colors duration-300 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-cyan-100 dark:bg-zinc-500/20 text-cyan-600 dark:text-zinc-400 flex items-center justify-center text-xl shadow-inner shrink-0">
            <i class="fa-solid fa-calendar-day"></i>
        </div>
        <div>
            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">Upcoming Pickups</p>
            <p class="font-heading font-extrabold text-2xl text-gray-900 dark:text-white mt-1">{{ $upcomingPickups }}</p>
        </div>
    </div>

    <!-- Monthly Revenue -->
    <div class="bg-white dark:bg-zinc-900 rounded-2xl p-6 shadow-sm dark:shadow-glow-emerald border border-gray-100 dark:border-viaje-500/20 transition-colors duration-300 flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-yellow-100 dark:bg-zinc-800 text-zinc-300 border border-zinc-700/20 text-yellow-600 dark:text-zinc-400 flex items-center justify-center text-xl shadow-inner shrink-0">
            <i class="fa-solid fa-peso-sign"></i>
        </div>
        <div>
            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">Monthly Revenue</p>
            <p class="font-heading font-extrabold text-2xl text-gray-900 dark:text-white mt-1">₱{{ number_format($monthlyRevenue, 0) }}</p>
        </div>
    </div>
</div>
