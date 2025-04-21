<div>
    <!-- Loading Indicator -->
    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50" wire:loading>
        <x-loading-spinner size="8" color="white">
            <span class="ml-2 text-white text-lg">Loading...</span>
        </x-loading-spinner>
    </div>

    <!-- Stat Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4 mb-4">
        @foreach ($statCards as $card)
            <x-stat-card :title="$card['title']" :count="$card['count']" :subtitle="$card['subtitle']" :icon="$card['icon']" :color="$card['color']"
                :link="$card['link']" />
        @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Views Section -->
        <div class="lg:col-span-2">
            <div class="bg-white shadow rounded-2xl overflow-hidden">
                <!-- Header with Title and Description -->
                <div class="px-6 py-5">
                    <h3 class="text-2xl font-semibold text-gray-900">Quick Views</h3>
                    <p class="mt-1 text-sm text-[#64748B]">Recent check results of the applicants.</p>
                </div>

                <!-- Data Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                    SL
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                    Applicant name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500">
                                    Package Type
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-sm font-medium text-gray-500 flex items-center gap-2">
                                    Status
                                    <button class="ml-1 inline-flex items-center">
                                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.307168 5.78698C0.250319 5.64995 0.235385 5.49914 0.264255 5.35362C0.293124 5.20811 0.3645 5.07442 0.469355 4.96948L4.96936 0.469477C5.03901 0.399744 5.12173 0.344425 5.21278 0.306682C5.30382 0.268939 5.40142 0.249512 5.49998 0.249512C5.59854 0.249512 5.69614 0.268939 5.78719 0.306682C5.87823 0.344425 5.96095 0.399744 6.03061 0.469477L10.5306 4.96948C10.6356 5.07437 10.7071 5.20806 10.7361 5.35362C10.7651 5.49919 10.7503 5.65008 10.6934 5.78719C10.6366 5.92431 10.5404 6.04149 10.417 6.12389C10.2935 6.2063 10.1484 6.25022 9.99998 6.2501H0.99998C0.851645 6.25007 0.70665 6.20606 0.583331 6.12362C0.460011 6.04118 0.363906 5.92403 0.307168 5.78698ZM9.99998 13.7501H0.99998C0.851559 13.75 0.706439 13.7939 0.582994 13.8763C0.459549 13.9587 0.363328 14.0759 0.306513 14.213C0.249699 14.3501 0.234846 14.501 0.263833 14.6466C0.292821 14.7921 0.364346 14.9258 0.469355 15.0307L4.96936 19.5307C5.03901 19.6005 5.12173 19.6558 5.21278 19.6935C5.30382 19.7313 5.40142 19.7507 5.49998 19.7507C5.59854 19.7507 5.69614 19.7313 5.78719 19.6935C5.87823 19.6558 5.96095 19.6005 6.03061 19.5307L10.5306 15.0307C10.6356 14.9258 10.7071 14.7921 10.7361 14.6466C10.7651 14.501 10.7503 14.3501 10.6934 14.213C10.6366 14.0759 10.5404 13.9587 10.417 13.8763C10.2935 13.7939 10.1484 13.75 9.99998 13.7501Z"
                                                fill="black" />
                                        </svg>
                                    </button>
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-sm font-medium text-gray-500">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Row 1 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    01
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Liam Johnson</div>
                                    <div class="text-sm text-gray-500">liam@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Basic
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-green-100 text-green-800">
                                        Approved
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    02
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Olivia Smith</div>
                                    <div class="text-sm text-gray-500">olivia@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Standard
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-red-100 text-red-800">
                                        Red Flag
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    03
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Noah Williams</div>
                                    <div class="text-sm text-gray-500">noah@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Individual
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-gray-100 text-gray-800">
                                        Archived
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    04
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Emma Brown</div>
                                    <div class="text-sm text-gray-500">emma@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Basic
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-green-100 text-green-800">
                                        Approved
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    05
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Liam Johnson</div>
                                    <div class="text-sm text-gray-500">liam@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Individual
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-green-100 text-green-800">
                                        Approved
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    06
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Liam Johnson</div>
                                    <div class="text-sm text-gray-500">liam@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Standard
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        Action Required
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>

                            <!-- Row 7 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    07
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Olivia Smith</div>
                                    <div class="text-sm text-gray-500">olivia@example.com</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Individual
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-red-100 text-red-800">
                                        Red Flag
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="#" class="text-sm font-medium text-blue-500 hover:text-blue-700">
                                        View Details
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Analytics Section -->
        <div class="lg:col-span-1">
            <div class="bg-white shadow rounded-lg overflow-hidden p-6">
                <h3 class="text-xl font-semibold text-gray-900">Analytics</h3>
                <p class="mt-1 text-sm text-gray-500">Recent check results of the applicants.</p>

                <div class="mt-6">
                    <div class="relative mx-auto" style="height: 220px; width: 220px;">
                        <canvas id="analyticsChart" height="220" width="220"></canvas>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div
                                class="absolute bg-white rounded-full w-32 h-32 shadow-sm flex items-center justify-center z-10">
                                <div class="flex flex-col items-center justify-center">
                                    <span class="text-sm text-gray-500">Total</span>
                                    <span class="text-3xl font-bold">573</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-wrap justify-center gap-x-6 gap-y-2">
                        <div class="flex items-center">
                            <span class="h-3 w-3 rounded-full bg-emerald-500 mr-2"></span>
                            <span class="text-sm">Approved</span>
                        </div>
                        <div class="flex items-center">
                            <span class="h-3 w-3 rounded-full bg-red-500 mr-2"></span>
                            <span class="text-sm">Red Flag</span>
                        </div>
                        <div class="flex items-center">
                            <span class="h-3 w-3 rounded-full bg-blue-500 mr-2"></span>
                            <span class="text-sm">Smart Hire</span>
                        </div>
                        <div class="flex items-center">
                            <span class="h-3 w-3 rounded-full bg-indigo-600 mr-2"></span>
                            <span class="text-sm">Active</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Required Alert -->
            <div class="mt-5 bg-yellow-50 shadow rounded-lg overflow-hidden border border-yellow-100">
                <div class="p-5">
                    <div class="ml-3 flex-shrink-0">
                        <svg width="51" height="45" viewBox="0 0 51 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M49.7249 36.8796L30.2537 3.06476C29.7671 2.23631 29.0725 1.5494 28.2386 1.07212C27.4048 0.594835 26.4607 0.34375 25.4999 0.34375C24.5392 0.34375 23.5951 0.594835 22.7613 1.07212C21.9274 1.5494 21.2328 2.23631 20.7462 3.06476L1.27495 36.8796C0.806781 37.6809 0.560059 38.5922 0.560059 39.5203C0.560059 40.4483 0.806781 41.3597 1.27495 42.161C1.75528 42.9944 2.44872 43.6851 3.28411 44.162C4.1195 44.639 5.06675 44.8851 6.02866 44.8751H44.9712C45.9324 44.8843 46.8787 44.6378 47.7133 44.1609C48.5478 43.684 49.2405 42.9938 49.7205 42.161C50.1893 41.3601 50.4368 40.4489 50.4376 39.5209C50.4384 38.5928 50.1924 37.6813 49.7249 36.8796ZM46.6367 40.3775C46.467 40.667 46.2233 40.9063 45.9306 41.0706C45.6379 41.2349 45.3068 41.3185 44.9712 41.3126H6.02866C5.69306 41.3185 5.36196 41.2349 5.0693 41.0706C4.77663 40.9063 4.53294 40.667 4.36319 40.3775C4.20943 40.1172 4.12833 39.8204 4.12833 39.518C4.12833 39.2157 4.20943 38.9189 4.36319 38.6586L23.8345 4.84378C24.0077 4.5556 24.2525 4.31714 24.5451 4.15159C24.8377 3.98604 25.1682 3.89903 25.5044 3.89903C25.8406 3.89903 26.1711 3.98604 26.4637 4.15159C26.7563 4.31714 27.0011 4.5556 27.1743 4.84378L46.6456 38.6586C46.798 38.9197 46.8776 39.2169 46.876 39.5193C46.8745 39.8216 46.7918 40.118 46.6367 40.3775ZM23.7187 27.0626V18.1564C23.7187 17.684 23.9064 17.2309 24.2404 16.8969C24.5745 16.5628 25.0275 16.3751 25.4999 16.3751C25.9724 16.3751 26.4254 16.5628 26.7595 16.8969C27.0935 17.2309 27.2812 17.684 27.2812 18.1564V27.0626C27.2812 27.5351 27.0935 27.9881 26.7595 28.3222C26.4254 28.6562 25.9724 28.8439 25.4999 28.8439C25.0275 28.8439 24.5745 28.6562 24.2404 28.3222C23.9064 27.9881 23.7187 27.5351 23.7187 27.0626ZM28.1718 35.0783C28.1718 35.6067 28.0151 36.1233 27.7215 36.5627C27.4279 37.0021 27.0106 37.3445 26.5224 37.5468C26.0342 37.749 25.497 37.8019 24.9787 37.6988C24.4604 37.5957 23.9843 37.3412 23.6106 36.9676C23.237 36.5939 22.9825 36.1178 22.8794 35.5995C22.7763 35.0812 22.8292 34.544 23.0315 34.0558C23.2337 33.5676 23.5761 33.1503 24.0155 32.8567C24.4549 32.5631 24.9715 32.4064 25.4999 32.4064C26.2086 32.4064 26.8882 32.6879 27.3892 33.189C27.8903 33.69 28.1718 34.3696 28.1718 35.0783Z"
                                fill="#EAB308" />
                        </svg>
                    </div>
                    <div class="ml-3 mt-2">
                        <h3 class="text-lg font-medium text-gray-900">Action Required</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-600">Some of the documents of 3 applicants has not been <br>
                                submitted yet. Please do check and take necessary <br> actions.</p>
                        </div>
                    </div>
                </div>

                <div class="px-5 py-3">
                    <div class="flex justify-between items-center">
                        <div class="ml-3">
                            <p class="text-2xl font-bold text-gray-900">03</p>
                            <p class="text-sm text-gray-600">Action Required</p>
                        </div>
                        <a href="#" class="text-gray-600">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.469375 12.4694L11.1897 1.75007H3.25C3.05109 1.75007 2.86032 1.67105 2.71967 1.5304C2.57902 1.38975 2.5 1.19898 2.5 1.00007C2.5 0.801158 2.57902 0.610393 2.71967 0.46974C2.86032 0.329087 3.05109 0.250071 3.25 0.250071H13C13.1989 0.250071 13.3897 0.329087 13.5303 0.46974C13.671 0.610393 13.75 0.801158 13.75 1.00007V10.7501C13.75 10.949 13.671 11.1397 13.5303 11.2804C13.3897 11.4211 13.1989 11.5001 13 11.5001C12.8011 11.5001 12.6103 11.4211 12.4697 11.2804C12.329 11.1397 12.25 10.949 12.25 10.7501V2.81038L1.53063 13.5307C1.46094 13.6004 1.37822 13.6557 1.28717 13.6934C1.19613 13.7311 1.09855 13.7505 1 13.7505C0.901454 13.7505 0.803872 13.7311 0.712828 13.6934C0.621783 13.6557 0.539058 13.6004 0.469375 13.5307C0.399692 13.461 0.344418 13.3783 0.306705 13.2872C0.268993 13.1962 0.249582 13.0986 0.249582 13.0001C0.249582 12.9015 0.268993 12.8039 0.306705 12.7129C0.344418 12.6219 0.399692 12.5391 0.469375 12.4694Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const chartData = [{
                        name: 'Approved',
                        value: 26,
                        color: '#10b981'
                    }, // Green
                    {
                        name: 'Red Flag',
                        value: 11,
                        color: '#ef4444'
                    }, // Red
                    {
                        name: 'Smart Hire',
                        value: 24,
                        color: '#3b82f6'
                    }, // Blue
                    {
                        name: 'Active',
                        value: 39,
                        color: '#6366f1'
                    } // Purple
                ];

                const doughnutLabel = {
                    id: 'doughnutLabel',
                    afterDatasetsDraw(chart) {
                        const {
                            ctx
                        } = chart;
                        ctx.save();

                        // Get chart dimensions
                        const chartArea = chart.chartArea;
                        const centerX = (chartArea.left + chartArea.right) / 2;
                        const centerY = (chartArea.top + chartArea.bottom) / 2;

                        // Custom angle and radius offsets per segment for precise positioning
                        const customPositions = [{
                                angleOffset: -0.05,
                                radiusFactor: 0.82
                            }, // Green (Approved)
                            {
                                angleOffset: 0.25,
                                radiusFactor: 0.80
                            }, // Red (Red Flag)
                            {
                                angleOffset: 0.05,
                                radiusFactor: 0.82
                            }, // Blue (Smart Hire)
                            {
                                angleOffset: 0,
                                radiusFactor: 0.82
                            } // Purple (Active)
                        ];

                        chart.getDatasetMeta(0).data.forEach((element, index) => {
                            // Get the angle of the segment center
                            const startAngle = element.startAngle;
                            const endAngle = element.endAngle;
                            const angle = startAngle + (endAngle - startAngle) / 2 + customPositions[index]
                                .angleOffset;
                            const radius = element.outerRadius * customPositions[index].radiusFactor;
                            const x = centerX + Math.cos(angle) * radius;
                            const y = centerY + Math.sin(angle) * radius;

                            // Draw the percentage label
                            ctx.font = 'bold 13px Arial';
                            ctx.fillStyle = 'white';
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'middle';
                            ctx.fillText(`${chartData[index].value}%`, x, y);
                        });

                        ctx.restore();
                    }
                };

                // Initialize Chart.js
                const ctx = document.getElementById('analyticsChart').getContext('2d');

                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: chartData.map(d => d.name),
                        datasets: [{
                            data: chartData.map(d => d.value),
                            backgroundColor: chartData.map(d => d.color),
                            borderWidth: 2,
                            borderColor: 'white',
                            borderRadius: 7,
                            spacing: 2,
                            weight: [1, 1, 1, 1]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        cutout: '65%',
                        rotation: 84 * Math.PI / 180,
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                enabled: false
                            }
                        }
                    },
                    plugins: [doughnutLabel]
                });
            });
        </script>
    @endpush
</div>
