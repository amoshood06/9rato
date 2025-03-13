<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9rato Dashboard</title>
    @vite('resources/css/app.css')

    <style>
        @media (max-width: 1023px) {
            .sidebar-open {
                transform: translateX(0);
            }
            .sidebar-closed {
                transform: translateX(-100%);
            }
        }
        /* Custom scrollbar for better mobile experience */
        .custom-scrollbar::-webkit-scrollbar {
            height: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #005B49;
            border-radius: 10px;
        }
        /* Prevent content from being hidden behind bottom nav */
        .pb-safe {
            padding-bottom: calc(env(safe-area-inset-bottom) + 4rem);
        }
        /* Advertisement animation */
        @keyframes fadeInOut {
            0%, 100% { opacity: 0.9; }
            50% { opacity: 1; }
        }
        .ad-animation {
            animation: fadeInOut 5s infinite;
        }
    </style>
</head>
<body class="bg-[#005B49]">
    <!-- Header -->
    <header class="flex justify-between items-center p-4">
        <!-- Mobile Menu Button -->
        <button id="menuButton" class="lg:hidden text-white p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Logo - hidden on mobile, visible on desktop -->
        <div class="flex gap-[5px] items-center hidden lg:flex">
            <img src="{{asset('./asset/image/Frame.svg')}}" alt="" class="w-[20px]">
            <h1 class="text-[20px] md:text-[20px] font-bold text-white">9RATO</h1>
        </div>

        <div class="text-white">
            <p class="text-sm">Wallet</p>
            <p class="text-2xl font-bold">
                <span id="currencySymbol">N</span>
                <span id="currentBalance">20,000</span>
            </p>
        </div>

        <a href="#">
            <button class="bg-gray-200 px-4 py-2 rounded-full font-bold text-sm md:text-base">Logout</button>
        </a>
    </header>

    <!-- Main Content -->
    <main class="bg-white rounded-t-[2rem] min-h-screen p-4 lg:p-6 lg:ml-0 pb-safe">
        <div class="flex gap-6 relative">
            <!-- Sidebar - Mobile Responsive -->
            <div id="sidebar" class="fixed inset-y-0 left-0 lg:relative lg:block bg-white z-50 w-64 h-screen overflow-y-auto transition-transform duration-300 ease-in-out transform -translate-x-full lg:translate-x-0">
                <div class="flex flex-col h-full">
                    <!-- Mobile nav header -->
                    <div class="lg:hidden flex justify-between items-center p-4 border-b">
                        <h1 class="text-xl font-bold text-[#005B49]">9RATO</h1>
                        <button id="closeMenu" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-grow overflow-y-auto">
                        <!-- User Profile -->
                        <div class="flex flex-col items-center my-6">
                            <div class="w-20 h-20 rounded-full overflow-hidden border-4 border-white shadow-lg">
                                <img src="/placeholder.svg?height=80&width=80" alt="Profile" class="w-full h-full object-cover" />
                            </div>
                        </div>

                        <nav class="space-y-2 px-4">
                            <a href="{{url('user/index')}}" class="block p-3 bg-[#005B49] text-white rounded-lg">Home</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Deposit</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Chat</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Sell</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Bid</a>
                            <a href="#" class="block p-3 hover:bg-gree-100 rounded-lg">Swap</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Trade</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Rent</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Withdrawal</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Complain</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Setting</a>
                        </nav>

                        <!-- Quick Action Items - visible only on mobile -->
                        <div class="lg:hidden mt-8 px-4">
                            <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                    </svg>
                                    <div>Deposit</div>
                                </a>
                                <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                    <div>Bid</div>
                                </a>
                                <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <div>Swap</div>
                                </a>
                                <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                    <div class="text-2xl font-bold mb-1">5</div>
                                    <div>Rent</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay for mobile -->
            <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden lg:hidden"></div>

            <!-- Dashboard Content -->
            <div class="flex-1">
                <!-- Advertisement Banner - Top -->
                <div class="mb-6 rounded-lg overflow-hidden shadow-md">
                    <div class="relative bg-gradient-to-r from-[#005B49] to-green-700 p-4 text-white ad-animation">
                        <div class="absolute top-2 right-2 bg-white text-xs text-gray-600 px-1 rounded">Ad</div>
                        <div class="flex items-center">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold mb-1">Special Offer!</h3>
                                <p class="text-sm mb-2">Get 20% off on your first transaction. Limited time offer.</p>
                                <button class="bg-white text-[#005B49] px-4 py-1 rounded-full text-sm font-bold">Learn More</button>
                            </div>
                            <div class="hidden sm:block">
                                <img src="/placeholder.svg?height=80&width=80" alt="Promo" class="h-20 w-20 object-cover rounded-lg" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Cards - visible on all devices -->
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                        <div class="text-sm font-bold">Deposit</div>
                    </div>
                    <div class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <div class="text-sm font-bold">Upload Items</div>
                    </div>
                    <div class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m-8 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <div class="text-sm font-bold">Trade</div>
                    </div>
                    <div class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <div class="text-sm font-bold">Bid</div>
                    </div>
                    <div class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                        <div class="text-3xl font-bold mb-1">5</div>
                        <div class="text-sm font-bold">Swap</div>
                    </div>
                    <div class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                        <div class="text-3xl font-bold mb-1">5</div>
                        <div class="text-sm font-bold">Rent</div>
                    </div>
                </div>

                <!-- Advertisement - Middle (Responsive) -->
                <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-100 rounded-lg p-4 shadow-md">
                        <div class="flex items-center">
                            <div class="mr-4 flex-shrink-0">
                                <img src="/placeholder.svg?height=60&width=60" alt="Featured Item" class="w-16 h-16 rounded-lg object-cover" />
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Featured Item</div>
                                <h4 class="font-bold text-[#005B49]">Premium Product</h4>
                                <p class="text-sm text-gray-600">Check out this exclusive listing</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 shadow-md">
                        <div class="flex items-center">
                            <div class="mr-4 flex-shrink-0">
                                <img src="/placeholder.svg?height=60&width=60" alt="Partner" class="w-16 h-16 rounded-lg object-cover" />
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Sponsored</div>
                                <h4 class="font-bold text-[#005B49]">Partner Services</h4>
                                <p class="text-sm text-gray-600">Exclusive deals from our partners</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transaction Table for Desktop -->
                <div class="hidden sm:block bg-gray-200 rounded-lg overflow-x-auto custom-scrollbar">
                    <table class="w-full">
                        <thead class="bg-[#005B49] text-white">
                            <tr>
                                <th class="p-2 lg:p-4 text-left">Type</th>
                                <th class="p-2 lg:p-4 text-left">Amount</th>
                                <th class="p-2 lg:p-4 text-left">Transaction ID</th>
                                <th class="p-2 lg:p-4 text-left">Date / Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-300">
                                <td class="p-2 lg:p-4">Deposit</td>
                                <td class="p-2 lg:p-4">N5000</td>
                                <td class="p-2 lg:p-4">TNX129309E</td>
                                <td class="p-2 lg:p-4">May, 17/12:00AM</td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="p-2 lg:p-4">Deposit</td>
                                <td class="p-2 lg:p-4">N5000</td>
                                <td class="p-2 lg:p-4">TNX129309E</td>
                                <td class="p-2 lg:p-4">May, 17/12:00AM</td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="p-2 lg:p-4">Deposit</td>
                                <td class="p-2 lg:p-4">N5000</td>
                                <td class="p-2 lg:p-4">TNX129309E</td>
                                <td class="p-2 lg:p-4">May, 17/12:00AM</td>
                            </tr>
                            <tr>
                                <td class="p-2 lg:p-4">Deposit</td>
                                <td class="p-2 lg:p-4">N5000</td>
                                <td class="p-2 lg:p-4">TNX129309E</td>
                                <td class="p-2 lg:p-4">May, 17/12:00AM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Transaction Cards -->
                <div class="block sm:hidden">
                    <div class="bg-[#005B49] rounded-lg p-3 text-white font-bold text-center mb-3">
                        Transaction History
                    </div>
                    <div class="space-y-3">
                        <!-- Mobile Transaction Card 1 -->
                        <div class="bg-gray-100 rounded-lg p-3 shadow-sm">
                            <div class="flex justify-between mb-1">
                                <span class="font-bold">Deposit</span>
                                <span class="font-bold text-[#005B49]">N5000</span>
                            </div>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>TNX129309E</span>
                                <span>May, 17/12:00AM</span>
                            </div>
                        </div>

                        <!-- Mobile Transaction Card 2 -->
                        <div class="bg-gray-100 rounded-lg p-3 shadow-sm">
                            <div class="flex justify-between mb-1">
                                <span class="font-bold">1kg</span>
                                <span class="font-bold text-[#005B49]">N5000</span>
                            </div>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>TNX129309E</span>
                                <span>May, 17/12:00AM</span>
                            </div>
                        </div>

                        <!-- Mobile Transaction Card 3 -->
                        <div class="bg-gray-100 rounded-lg p-3 shadow-sm">
                            <div class="flex justify-between mb-1">
                                <span class="font-bold">5kg</span>
                                <span class="font-bold text-[#005B49]">N5000</span>
                            </div>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>TNX129309E</span>
                                <span>May, 17/12:00AM</span>
                            </div>
                        </div>

                        <!-- Mobile Transaction Card 4 -->
                        <div class="bg-gray-100 rounded-lg p-3 shadow-sm">
                            <div class="flex justify-between mb-1">
                                <span class="font-bold">Cylinder - 1kg</span>
                                <span class="font-bold text-[#005B49]">N5000</span>
                            </div>
                            <div class="flex justify-between text-xs text-gray-600">
                                <span>TNX129309E</span>
                                <span>May, 17/12:00AM</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advertisement - Bottom Banner -->
                <div class="mt-6 rounded-lg overflow-hidden shadow-md">
                    <div class="bg-gray-100 p-4">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div class="mb-3 sm:mb-0 sm:mr-4">
                                <img src="/placeholder.svg?height=100&width=100" alt="App Download" class="w-24 h-24 object-cover rounded-lg" />
                            </div>
                            <div class="text-center sm:text-left sm:flex-1">
                                <div class="text-xs text-gray-500 mb-1">Advertisement</div>
                                <h3 class="text-lg font-bold text-[#005B49] mb-1">Download Our Mobile App</h3>
                                <p class="text-sm text-gray-600 mb-2">Get exclusive mobile-only features and deals</p>
                                <div class="flex justify-center sm:justify-start space-x-2">
                                    <button class="bg-[#005B49] text-white px-4 py-1 rounded-full text-sm">App Store</button>
                                    <button class="bg-[#005B49] text-white px-4 py-1 rounded-full text-sm">Google Play</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination Controls -->
                <div class="flex justify-center mt-4 space-x-4">
                    <button class="bg-[#005B49] text-white px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="bg-[#005B49] text-white px-4 py-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Mobile Navigation Bar -->
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-10 pb-0">
        <div class="grid grid-cols-5 gap-1">
            <a href="#" class="flex flex-col items-center justify-center p-2 text-[#005B49]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-xs mt-1">Home</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-xs mt-1">Deposit</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <span class="text-xs mt-1">Chat</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="text-xs mt-1">Sell</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                </svg>
                <span class="text-xs mt-1">Complain</span>
            </a>
        </div>
    </nav>

    <script>
        // Mobile menu functionality
        const menuButton = document.getElementById('menuButton');
        const closeButton = document.getElementById('closeMenu');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        function toggleMenu() {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        menuButton.addEventListener('click', toggleMenu);
        closeButton.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);

        // Close menu when clicking a link (mobile)
        const navLinks = sidebar.getElementsByTagName('a');
        for (const link of navLinks) {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) { // lg breakpoint
                    toggleMenu();
                }
            });
        }

        // Handle resize events
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) { // lg breakpoint
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            } else {
                if (!sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            }
        });
    </script>
</body>
</html>
