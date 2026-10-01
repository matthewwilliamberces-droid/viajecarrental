<div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm dark:shadow-glow-emerald sm:rounded-lg mb-6 border border-transparent dark:border-viaje-500/20 p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-heading font-bold text-gray-900 dark:text-white">Revenue Overview</h3>
        <div class="px-3 py-1 bg-viaje-500/20 text-viaje-400 rounded-lg text-xs font-bold uppercase tracking-wider">
            Last 6 Months
        </div>
    </div>
    
    <div class="w-full h-72" 
         x-data="{
             labels: @entangle('chartLabels'),
             data: @entangle('chartData'),
             ...revenueChart()
         }" 
         x-init="initChart()">
        <canvas id="revenueCanvas"></canvas>
    </div>

    @push('scripts')
        <script>
            function revenueChart() {
                return {
                    chartInstance: null,
                    initChart() {
                        const ctx = document.getElementById('revenueCanvas').getContext('2d');
                        
                        // Create gradient
                        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
                        gradient.addColorStop(0, 'rgba(16, 185, 129, 0.4)'); // Emerald/Viaje 500
                        gradient.addColorStop(1, 'rgba(16, 185, 129, 0.0)');
                        
                        // Check if dark mode
                        const isDark = document.documentElement.classList.contains('dark');
                        const gridColor = isDark ? 'rgba(255, 255, 255, 0.05)' : 'rgba(0, 0, 0, 0.05)';
                        const textColor = isDark ? '#94a3b8' : '#64748b'; // slate-400 : slate-500

                        this.chartInstance = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: this.labels,
                                datasets: [{
                                    label: 'Revenue (PHP)',
                                    data: this.data,
                                    borderColor: '#10b981', // emerald-500
                                    backgroundColor: gradient,
                                    borderWidth: 3,
                                    pointBackgroundColor: '#0f172a', // zinc-950
                                    pointBorderColor: '#10b981',
                                    pointBorderWidth: 2,
                                    pointRadius: 4,
                                    pointHoverRadius: 6,
                                    fill: true,
                                    tension: 0.4
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: { display: false },
                                    tooltip: {
                                        backgroundColor: 'rgba(15, 23, 42, 0.9)',
                                        titleColor: '#fff',
                                        bodyColor: '#10b981',
                                        padding: 12,
                                        cornerRadius: 8,
                                        displayColors: false,
                                        callbacks: {
                                            label: function(context) {
                                                return '₱ ' + context.parsed.y.toLocaleString('en-PH', {minimumFractionDigits: 2});
                                            }
                                        }
                                    }
                                },
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: { color: gridColor, drawBorder: false },
                                        ticks: { 
                                            color: textColor,
                                            callback: function(value) {
                                                return '₱ ' + (value / 1000) + 'k';
                                            }
                                        }
                                    },
                                    x: {
                                        grid: { display: false, drawBorder: false },
                                        ticks: { color: textColor }
                                    }
                                }
                            }
                        });

                        this.$watch('data', (newData) => {
                            this.chartInstance.data.datasets[0].data = newData;
                            this.chartInstance.update();
                        });
                    }
                }
            }
        </script>
    @endpush
</div>
