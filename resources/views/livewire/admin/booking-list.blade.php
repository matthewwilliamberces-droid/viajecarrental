<div class="space-y-6">
    <!-- Flash Notification -->
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition class="fixed top-6 right-6 z-[100] flex items-center justify-between p-4 bg-emerald-50 border-l-4 border-emerald-500 rounded-xl shadow-2xl text-emerald-800 min-w-[300px]" role="alert">
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="text-sm font-medium">{{ session('message') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif
    @if (session()->has('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition class="fixed top-24 right-6 z-[100] flex items-center justify-between p-4 bg-rose-50 border-l-4 border-rose-500 rounded-xl shadow-2xl text-rose-800 min-w-[300px]" role="alert">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-circle-exclamation text-rose-600"></i>
                <span class="text-sm font-medium">{{ session('error') }}</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-700">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    @endif

    <div class="bg-white dark:bg-zinc-950 rounded-2xl shadow-sm border border-gray-200 dark:border-viaje-500/20/80 overflow-hidden">
        <!-- Header & Filters -->
        <div class="p-6 bg-gradient-to-r from-gray-50 to-white border-b border-gray-200 dark:border-viaje-500/20/80 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-gray-900 dark:text-white tracking-tight">Booking Reservations</h2>
                <p class="text-xs text-gray-500 dark:text-zinc-400 mt-1">Manage and update customer bookings.</p>
            </div>
                        <div class="flex flex-col sm:flex-row items-center gap-3">
                <div class="relative w-full sm:w-auto">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-search text-gray-400 text-sm"></i>
                    </div>
                    <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search names, ref #..." class="pl-9 rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-indigo-500 focus:ring-indigo-500 w-full sm:w-60 bg-white dark:bg-zinc-900 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-zinc-500">
                </div>
                
                <select wire:model.live="filterStatus" class="rounded-xl border-gray-300 dark:border-viaje-500/30 text-sm focus:border-indigo-500 focus:ring-indigo-500 w-full sm:w-auto bg-white dark:bg-zinc-900 text-gray-900 dark:text-white">
                    <option value="">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="paid">Paid</option>
                    <option value="finished">Finished</option>
                    <option value="cancelled">Cancelled</option>
                </select>

                <button wire:click="exportCsv" wire:loading.attr="disabled" class="px-4 py-2 bg-zinc-800 dark:bg-viaje-600 hover:bg-zinc-900 dark:hover:bg-viaje-500 text-white text-sm font-bold rounded-xl shadow-sm transition-colors flex items-center justify-center gap-2 w-full sm:w-auto">
                    <i class="fa-solid fa-file-csv" wire:loading.remove wire:target="exportCsv"></i>
                    <i class="fa-solid fa-circle-notch fa-spin" wire:loading wire:target="exportCsv"></i>
                    Export
                </button>
            </div>
        </div>

        <!-- Bookings Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-viaje-500/20 text-left">
                <thead class="bg-gray-50 dark:bg-zinc-900/75 text-[11px] font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">
                    <tr>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('booking_reference')">
                            Ref # @if($sortField === 'booking_reference') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('created_at')">
                            Date Booked @if($sortField === 'created_at') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4">Customer</th>
                        <th scope="col" class="px-6 py-4">Vehicle</th>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('pickup_date')">
                            Trip Dates @if($sortField === 'pickup_date') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4">Total Amount</th>
                        <th scope="col" class="px-6 py-4 cursor-pointer hover:bg-gray-100 dark:hover:bg-zinc-900" wire:click="sortBy('booking_status')">
                            Status @if($sortField === 'booking_status') <i class="fas fa-sort-{{ $sortAsc ? 'up' : 'down' }}"></i> @endif
                        </th>
                        <th scope="col" class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-viaje-500/10 bg-white dark:bg-zinc-950 text-sm">
                    @forelse($bookings as $booking)
                        <tr class="hover:bg-zinc-50 dark:bg-zinc-900/80 transition">
                            <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">{{ $booking->booking_reference }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-xs font-semibold text-gray-900 dark:text-white">
                                    {{ $booking->created_at ? $booking->created_at->format('M d, Y') : 'N/A' }}
                                </div>
                                <div class="text-[11px] text-gray-500 dark:text-zinc-400">
                                    {{ $booking->created_at ? $booking->created_at->format('h:i A') : '' }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-bold text-gray-900 dark:text-white">{{ $booking->customer_name }}</div>
                                <div class="text-[11px] text-gray-500 dark:text-zinc-400">{{ $booking->customer_phone }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-medium text-gray-900 dark:text-white">{{ $booking->car->name ?? 'N/A' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-xs text-gray-900 dark:text-white font-medium">
                                    {{ \Carbon\Carbon::parse($booking->pickup_date)->format('M d, Y') }} - 
                                    {{ \Carbon\Carbon::parse($booking->dropoff_date)->format('M d, Y') }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-bold text-emerald-600">₱{{ number_format($booking->total_amount, 2) }}</div>
                                <div class="text-[10px] text-gray-400 dark:text-zinc-500 uppercase">{{ $booking->payment_method }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $statusValue = $booking->booking_status instanceof \BackedEnum ? $booking->booking_status->value : (string) $booking->booking_status;
                                    $statusClasses = [
                                        'pending' => 'bg-yellow-100 text-yellow-800',
                                        'confirmed' => 'bg-blue-100 text-blue-800',
                                        'paid' => 'bg-green-100 text-green-800',
                                        'finished' => 'bg-gray-100 dark:bg-zinc-900 text-gray-800 dark:text-zinc-100',
                                        'cancelled' => 'bg-red-100 text-red-800',
                                    ];
                                    $class = $booking->booking_status instanceof \App\Enums\BookingStatus
                                        ? $booking->booking_status->badgeClasses()
                                        : ($statusClasses[$statusValue] ?? 'bg-gray-100 dark:bg-zinc-900 text-gray-800 dark:text-zinc-100');
                                    $statusLabel = $booking->booking_status instanceof \App\Enums\BookingStatus
                                        ? $booking->booking_status->label()
                                        : ucfirst($statusValue);
                                @endphp
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider {{ $class }}">
                                    {{ $statusLabel }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <button wire:click="viewDetails({{ $booking->id }})" class="text-indigo-600 hover:text-indigo-900 text-xs font-bold px-3 py-1.5 rounded-lg bg-indigo-50 hover:bg-indigo-100 transition">
                                    View
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-12 text-center text-gray-400 dark:text-zinc-500">
                                <p class="font-semibold text-gray-600 dark:text-zinc-300">No bookings found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 dark:border-viaje-500/20">
            {{ $bookings->links() }}
        </div>
    </div>

    <!-- Details Modal -->
    @if($showModal && $selectedBooking)
        <div class="fixed inset-0 z-50 overflow-y-auto bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4">
            <div class="bg-white dark:bg-zinc-950 rounded-2xl shadow-2xl border border-gray-200 dark:border-viaje-500/20 w-full max-w-2xl overflow-hidden">
                <div class="bg-gradient-to-r from-gray-900 to-slate-800 px-6 py-4 flex items-center justify-between text-white">
                    <h3 class="text-lg font-bold">Booking Details: {{ $selectedBooking->booking_reference }}</h3>
                    <button type="button" wire:click="closeModal" class="text-gray-300 hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Customer Info -->
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400 mb-2 border-b pb-1">Customer & Booking Info</h4>
                            <p class="text-xs text-gray-600 dark:text-zinc-300 mb-1"><span class="font-bold text-gray-700 dark:text-zinc-200">Date Booked:</span> {{ $selectedBooking->created_at ? $selectedBooking->created_at->format('M d, Y h:i A') : 'N/A' }} <span class="text-[10px] text-gray-400">({{ $selectedBooking->created_at ? $selectedBooking->created_at->diffForHumans() : '' }})</span></p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $selectedBooking->customer_name }}</p>
                            <p class="text-xs text-gray-600 dark:text-zinc-300">{{ $selectedBooking->customer_email }}</p>
                            <p class="text-xs text-gray-600 dark:text-zinc-300">{{ $selectedBooking->customer_phone }}</p>
                            @if($selectedBooking->flight_number)
                                <p class="text-xs text-gray-600 dark:text-zinc-300 mt-1">Flight: <span class="font-bold">{{ $selectedBooking->flight_number }}</span></p>
                            @endif
                        </div>

                        <!-- Trip Info -->
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400 mb-2 border-b pb-1">Trip Schedule</h4>
                            <p class="text-xs text-gray-600 dark:text-zinc-300"><span class="font-bold">Pickup:</span> {{ $selectedBooking->pickup_location }}</p>
                            <p class="text-xs text-gray-600 dark:text-zinc-300 mb-2">{{ \Carbon\Carbon::parse($selectedBooking->pickup_date)->format('M d, Y') }} at {{ $selectedBooking->pickup_time }}</p>
                            <p class="text-xs text-gray-600 dark:text-zinc-300"><span class="font-bold">Dropoff:</span> {{ $selectedBooking->dropoff_location }}</p>
                            <p class="text-xs text-gray-600 dark:text-zinc-300">{{ \Carbon\Carbon::parse($selectedBooking->dropoff_date)->format('M d, Y') }} at {{ $selectedBooking->dropoff_time }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Vehicle & Options -->
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400 mb-2 border-b pb-1">Vehicle & Add-ons</h4>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $selectedBooking->car->name ?? 'N/A' }}</p>
                            <ul class="text-xs text-gray-600 dark:text-zinc-300 mt-2 space-y-1">
                                <li>CDW Insurance: {{ $selectedBooking->addon_cdw ? 'Yes' : 'No' }}</li>
                                <li>Driver: {{ $selectedBooking->addon_driver ? 'Yes' : 'No' }}</li>
                                <li>Toll RFID: {{ $selectedBooking->addon_toll ? 'Yes' : 'No' }}</li>
                            </ul>
                        </div>

                        <!-- Financials -->
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400 mb-2 border-b pb-1">Payment Details</h4>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-gray-600 dark:text-zinc-300">Base Rate:</span>
                                <span>₱{{ number_format($selectedBooking->base_rate, 2) }}</span>
                            </div>
                            @if($selectedBooking->promo_code)
                            <div class="flex justify-between text-xs mb-1 text-emerald-600">
                                <span>Promo ({{ $selectedBooking->promo_code }}):</span>
                                <span>Applied</span>
                            </div>
                            @endif
                            <div class="flex justify-between text-xs mb-1 border-b pb-1">
                                <span class="text-gray-600 dark:text-zinc-300">Taxes/Fees:</span>
                                <span>₱{{ number_format($selectedBooking->tax_amount, 2) }}</span>
                            </div>
                            <div class="flex justify-between font-bold text-sm mt-2">
                                <span>Total:</span>
                                <span class="text-emerald-600">₱{{ number_format($selectedBooking->total_amount, 2) }}</span>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-zinc-400 mt-2">Method: <span class="uppercase font-bold">{{ $selectedBooking->payment_method }}</span></p>
                        </div>
                    </div>

                    <!-- Actions -->
                    @php
                        $selectedStatusValue = $selectedBooking->booking_status instanceof \BackedEnum ? $selectedBooking->booking_status->value : (string) $selectedBooking->booking_status;
                        $selectedStatusLabel = $selectedBooking->booking_status instanceof \App\Enums\BookingStatus ? $selectedBooking->booking_status->label() : ucfirst($selectedStatusValue);
                    @endphp
                    <div class="border-t pt-4">
                          <div class="flex items-center justify-between mb-3">
                              <h4 class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-zinc-400">Update Status</h4>
                              <div class="flex items-center gap-2">
                                  <button type="button" wire:click="resendEmail({{ $selectedBooking->id }})" class="px-3 py-1 rounded text-[10px] font-bold uppercase tracking-wider bg-sky-100 hover:bg-sky-200 text-sky-800 transition">
                                      <i class="fa-solid fa-envelope mr-1"></i> Resend Email
                                  </button>
                                  <span class="px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider bg-gray-100 dark:bg-zinc-900 text-gray-800 dark:text-zinc-100 border border-gray-300 dark:border-viaje-500/30">
                                      Current: <span class="text-indigo-600">{{ $selectedStatusLabel }}</span>
                                  </span>
                              </div>
                          </div>
                        <div class="flex flex-wrap gap-2">
                            <button type="button" wire:click="updateStatus({{ $selectedBooking->id }}, 'pending')" class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all {{ $selectedStatusValue === 'pending' ? 'bg-yellow-500 text-white shadow-md ring-2 ring-yellow-300 ring-offset-1' : 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200' }}">Set Pending</button>
                            
                            <button type="button" wire:click="updateStatus({{ $selectedBooking->id }}, 'confirmed')" class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all {{ $selectedStatusValue === 'confirmed' ? 'bg-blue-500 text-white shadow-md ring-2 ring-blue-300 ring-offset-1' : 'bg-blue-100 text-blue-800 hover:bg-blue-200' }}">Set Confirmed</button>
                            
                            <button type="button" wire:click="updateStatus({{ $selectedBooking->id }}, 'paid')" class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all {{ $selectedStatusValue === 'paid' ? 'bg-green-500 text-white shadow-md ring-2 ring-green-300 ring-offset-1' : 'bg-green-100 text-green-800 hover:bg-green-200' }}">Set Paid</button>
                            
                            <button type="button" wire:click="updateStatus({{ $selectedBooking->id }}, 'finished')" class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all {{ $selectedStatusValue === 'finished' ? 'bg-gray-600 text-white shadow-md ring-2 ring-gray-400 ring-offset-1' : 'bg-gray-200 dark:bg-zinc-800 text-gray-800 dark:text-zinc-100 hover:bg-gray-300' }}">Set Finished</button>
                            
                            <button type="button" wire:click="updateStatus({{ $selectedBooking->id }}, 'cancelled')" class="px-3 py-1.5 rounded-lg text-xs font-bold transition-all {{ $selectedStatusValue === 'cancelled' ? 'bg-red-500 text-white shadow-md ring-2 ring-red-300 ring-offset-1' : 'bg-red-100 text-red-800 hover:bg-red-200' }}">Set Cancelled</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
