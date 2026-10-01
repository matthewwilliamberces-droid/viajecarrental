<div x-data="featuredShowcase(@js($featuredCars))" class="relative w-full h-[600px] sm:h-[700px] overflow-hidden bg-zinc-950 group border-b border-viaje-500/20">
    
    <!-- Background Images (Fading & Blurred) -->
    <template x-for="(car, index) in cars" :key="'bg-'+car.id">
        <div x-show="activeSlide === index" 
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-105"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-1000"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="absolute inset-0 z-0">
            <img :src="car.image" :alt="car.name" class="w-full h-full object-cover opacity-20 blur-2xl">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-zinc-950 via-zinc-950/50 to-transparent"></div>
        </div>
    </template>

    <!-- Content HUD -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center pt-24 pb-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center h-full">
            
            <!-- Left Side: Vehicle Info -->
            <div class="lg:col-span-5 space-y-6 relative h-[350px] flex flex-col justify-center">
                <template x-for="(car, index) in cars" :key="'info-'+car.id">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-700 delay-300"
                         x-transition:enter-start="opacity-0 translate-y-8"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-8"
                         class="absolute inset-0 flex flex-col justify-center">
                        
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700 text-zinc-950 text-xs font-bold uppercase tracking-wider mb-4">
                                <i class="fa-solid fa-star text-[10px]"></i> Featured Model
                            </div>
                            
                            <h2 class="text-4xl sm:text-5xl font-heading font-black text-white mb-2 leading-tight" x-text="car.name"></h2>
                            
                            <div class="flex items-center gap-4 text-viaje-300 font-bold mb-6">
                                <span x-text="car.categoryName"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-zinc-500"></span>
                                <span><i class="fa-solid fa-star text-zinc-400 mr-1"></i> <span x-text="car.rating"></span> (<span x-text="car.reviews"></span> reviews)</span>
                            </div>
                            
                            <div class="grid grid-cols-3 gap-4 border-t border-white/10 pt-6">
                                <div>
                                    <p class="text-[10px] text-zinc-400 uppercase tracking-wider mb-1">Seats</p>
                                    <p class="text-lg font-bold text-white"><i class="fa-solid fa-users mr-2 text-viaje-400"></i><span x-text="car.seats"></span></p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-zinc-400 uppercase tracking-wider mb-1">Transmission</p>
                                    <p class="text-lg font-bold text-white"><i class="fa-solid fa-gears mr-2 text-viaje-400"></i><span x-text="car.transmission"></span></p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-zinc-400 uppercase tracking-wider mb-1">Daily Rate</p>
                                    <p class="text-lg font-bold text-zinc-400">₱<span x-text="formatNumber(car.dailyRate)"></span></p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <a :href="'/fleet/' + car.slug" class="inline-flex items-center justify-center px-8 py-3.5 rounded-2xl bg-gradient-to-r from-viaje-400 to-viaje-600 text-zinc-950 font-bold hover:shadow-glow-emerald transition-all transform hover:-translate-y-1">
                                    Book This Vehicle <i class="fa-solid fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Right Side: Car Image -->
            <div class="lg:col-span-7 relative h-[300px] lg:h-[450px] w-full hidden sm:block">
                <template x-for="(car, index) in cars" :key="'img-'+car.id">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out duration-1000 delay-200"
                         x-transition:enter-start="opacity-0 translate-x-12 scale-95"
                         x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                         x-transition:leave="transition ease-in duration-500"
                         x-transition:leave-start="opacity-100 translate-x-0 scale-100"
                         x-transition:leave-end="opacity-0 -translate-x-12 scale-105"
                         class="absolute inset-0 flex items-center justify-center">
                        <div class="relative w-full h-full rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-white/10 group-hover:border-viaje-500/30 transition-colors duration-700">
                            <img :src="car.image" :alt="car.name" class="w-full h-full object-cover transition-transform duration-10000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/80 via-transparent to-transparent"></div>
                            
                            <!-- Badges overlay -->
                            <div class="absolute top-4 right-4 flex gap-2">
                                <span class="px-3 py-1 bg-zinc-950/80 backdrop-blur-md rounded-full border border-white/10 text-[10px] font-bold text-zinc-400 uppercase tracking-wider flex items-center gap-1.5 shadow-lg">
                                    <i class="fa-solid fa-gas-pump"></i> <span x-text="car.fuel"></span>
                                </span>
                                <span class="px-3 py-1 bg-zinc-950/80 backdrop-blur-md rounded-full border border-white/10 text-[10px] font-bold text-viaje-400 uppercase tracking-wider flex items-center gap-1.5 shadow-lg">
                                    <i class="fa-solid fa-leaf"></i> <span x-text="car.eco"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-8 left-0 right-0 z-20 flex justify-center gap-3">
        <template x-for="(car, index) in cars" :key="'dot-'+car.id">
            <button @click="goToSlide(index)" 
                    class="w-3 h-3 rounded-full transition-all duration-300"
                    :class="activeSlide === index ? 'bg-viaje-500 scale-125 shadow-glow-emerald' : 'bg-white/30 hover:bg-white/50'">
            </button>
        </template>
    </div>

</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('featuredShowcase', (cars) => ({
            cars: cars,
            activeSlide: 0,
            interval: null,

            init() {
                this.startAutoPlay();
            },

            startAutoPlay() {
                this.interval = setInterval(() => {
                    this.activeSlide = (this.activeSlide + 1) % this.cars.length;
                }, 6000);
            },

            goToSlide(index) {
                this.activeSlide = index;
                clearInterval(this.interval);
                this.startAutoPlay();
            },

            formatNumber(num) {
                return new Intl.NumberFormat('en-PH').format(num);
            }
        }));
    });
</script>
