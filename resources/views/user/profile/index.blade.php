<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9rato Profile</title>
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
        /* Avatar upload styles */
        .avatar-upload {
            position: relative;
            width: 96px;
            height: 96px;
            margin: 0 auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 1;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit label {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            background: #005B49;
            cursor: pointer;
            color: white;
        }
        .avatar-upload .avatar-preview {
            width: 96px;
            height: 96px;
            position: relative;
            border-radius: 100%;
            border: 4px solid white;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            overflow: hidden;
            background-color: #E5E7EB;
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .avatar-upload .avatar-preview .avatar-default {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #005B49;
            color: white;
        }
        /* Toggle switch for business account */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }
        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .toggle-slider {
            background-color: #005B49;
        }
        input:checked + .toggle-slider:before {
            transform: translateX(26px);
        }
        select:disabled, input:disabled {
            background-color: #F3F4F6;
            cursor: not-allowed;
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
                            <a href="{{url('user/index')}}" class="block p-3 hover:bg-green-100 rounded-lg">Home</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Deposit</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Chat</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Sell</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Bid</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Swap</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Trade</a>
                            <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Rent</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Withdrawal</a>
                            <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Complain</a>
                            <a href="#" class="block p-3 bg-[#005B49] text-white rounded-lg">Profile</a>
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

            <!-- Profile Content -->
            <div class="flex-1">
                <div class="max-w-3xl mx-auto">
                    <!-- Page Title -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-[#005B49]">Profile Settings</h2>
                        <p class="text-gray-600">Update your personal information and account settings</p>
                    </div>

                    <!-- Profile Form -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="p-6">
                            <form id="profileForm" class="space-y-6">
                                <!-- Profile Image Upload -->
                                <div class="flex flex-col items-center space-y-4 mb-8">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type="file" id="profileImageUpload" accept="image/*" />
                                            <label for="profileImageUpload">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" class="avatar-default">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-500">Click the icon to upload a profile picture</p>
                                </div>

                                <!-- Personal Information Section -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-[#005B49] mb-4">Personal Information</h3>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Full Name -->
                                        <div class="space-y-2">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                            <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                placeholder="Enter your full name"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                                required
                                            >
                                        </div>

                                        <!-- Email -->
                                        <div class="space-y-2">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                placeholder="Enter your email"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                                required
                                            >
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="space-y-2">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                            <input
                                                type="tel"
                                                id="phone"
                                                name="phone"
                                                placeholder="Enter your phone number"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                                required
                                            >
                                        </div>
                                    </div>
                                </div>

                                <!-- Location Section -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="text-lg font-semibold text-[#005B49] mb-4">Location</h3>

                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <!-- Country -->
                                        <div class="space-y-2">
                                            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                            <select
                                                id="country"
                                                name="country"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                                required
                                            >
                                                <option value="" selected disabled>Select your country</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Australia">Australia</option>
                                            </select>
                                        </div>

                                        <!-- State/Province -->
                                        <div class="space-y-2">
                                            <label for="state" class="block text-sm font-medium text-gray-700">State/Province</label>
                                            <select
                                                id="state"
                                                name="state"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                                disabled
                                                required
                                            >
                                                <option value="" selected disabled>Select a country first</option>
                                            </select>
                                        </div>

                                        <!-- City -->
                                        <div class="space-y-2">
                                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                            <select
                                                id="city"
                                                name="city"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                                disabled
                                                required
                                            >
                                                <option value="" selected disabled>Select a state first</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Business Account Section -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex justify-between items-center mb-4">
                                        <div>
                                            <h3 class="text-lg font-semibold text-[#005B49]">Business Account</h3>
                                            <p class="text-sm text-gray-600">Convert your personal account to a business account</p>
                                        </div>
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="businessAccountToggle">
                                            <span class="toggle-slider"></span>
                                        </label>
                                    </div>

                                    <div id="businessFields" class="hidden space-y-4">
                                        <div class="space-y-2">
                                            <label for="businessName" class="block text-sm font-medium text-gray-700">Business Name</label>
                                            <input
                                                type="text"
                                                id="businessName"
                                                name="businessName"
                                                placeholder="Enter your business name"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                            >
                                        </div>

                                        <div class="space-y-2">
                                            <label for="businessType" class="block text-sm font-medium text-gray-700">Business Type</label>
                                            <select
                                                id="businessType"
                                                name="businessType"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                            >
                                                <option value="" selected disabled>Select business type</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Wholesale">Wholesale</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Service">Service</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="space-y-2">
                                            <label for="taxId" class="block text-sm font-medium text-gray-700">Tax ID / Business Registration Number</label>
                                            <input
                                                type="text"
                                                id="taxId"
                                                name="taxId"
                                                placeholder="Enter your tax ID or registration number"
                                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-end">
                                    <button
                                        type="submit"
                                        class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                                    >
                                        Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Mobile Navigation Bar -->
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-10 pb-0">
        <div class="grid grid-cols-5 gap-1">
            <a href="#" class="flex flex-col items-center justify-center p-2">
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
            <a href="#" class="flex flex-col items-center justify-center p-2 text-[#005B49]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="text-xs mt-1">Profile</span>
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

        // Profile Image Upload
        document.getElementById('profileImageUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.className = '';
                    imagePreview.style.backgroundImage = `url(${e.target.result})`;
                }
                reader.readAsDataURL(file);
            }
        });

        // Location Data (in a real app, this would come from an API)
        const locationData = {
            countries: ["Nigeria", "Ghana", "United States", "United Kingdom", "Canada", "Australia"],
            states: {
                "Nigeria": ["Lagos", "Abuja", "Rivers", "Kano"],
                "Ghana": ["Greater Accra", "Ashanti", "Western", "Eastern"],
                "United States": ["California", "New York", "Texas", "Florida"],
                "United Kingdom": ["England", "Scotland", "Wales", "Northern Ireland"],
                "Canada": ["Ontario", "Quebec", "British Columbia", "Alberta"],
                "Australia": ["New South Wales", "Victoria", "Queensland", "Western Australia"],
                "default": ["State 1", "State 2", "State 3"]
            },
            cities: {
                "Lagos": ["Ikeja", "Lekki", "Yaba", "Surulere"],
                "Abuja": ["Central Area", "Garki", "Wuse", "Maitama"],
                "California": ["Los Angeles", "San Francisco", "San Diego", "Sacramento"],
                "New York": ["New York City", "Buffalo", "Rochester", "Syracuse"],
                "England": ["London", "Manchester", "Birmingham", "Liverpool"],
                "Ontario": ["Toronto", "Ottawa", "Mississauga", "Hamilton"],
                "default": ["City 1", "City 2", "City 3", "City 4"]
            }
        };

        // Country Change Handler
        document.getElementById('country').addEventListener('change', function() {
            const selectedCountry = this.value;
            const stateSelect = document.getElementById('state');
            const citySelect = document.getElementById('city');

            // Reset state and city
            stateSelect.innerHTML = '<option value="" selected disabled>Select your state</option>';
            citySelect.innerHTML = '<option value="" selected disabled>Select a state first</option>';
            citySelect.disabled = true;

            // Enable state and populate options
            stateSelect.disabled = false;

            const states = locationData.states[selectedCountry] || locationData.states.default;
            states.forEach(state => {
                const option = document.createElement('option');
                option.value = state;
                option.textContent = state;
                stateSelect.appendChild(option);
            });
        });

        // State Change Handler
        document.getElementById('state').addEventListener('change', function() {
            const selectedState = this.value;
            const citySelect = document.getElementById('city');

            // Reset city
            citySelect.innerHTML = '<option value="" selected disabled>Select your city</option>';

            // Enable city and populate options
            citySelect.disabled = false;

            const cities = locationData.cities[selectedState] || locationData.cities.default;
            cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });
        });

        // Business Account Toggle
        document.getElementById('businessAccountToggle').addEventListener('change', function() {
            const businessFields = document.getElementById('businessFields');
            if (this.checked) {
                businessFields.classList.remove('hidden');
            } else {
                businessFields.classList.add('hidden');
            }
        });

        // Form Submission
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const country = document.getElementById('country').value;
            const state = document.getElementById('state').value;
            const city = document.getElementById('city').value;
            const imageFile = document.getElementById('profileImageUpload').files[0];

            // Business account data
            const isBusinessAccount = document.getElementById('businessAccountToggle').checked;
            let businessData = null;

            if (isBusinessAccount) {
                businessData = {
                    businessName: document.getElementById('businessName').value,
                    businessType: document.getElementById('businessType').value,
                    taxId: document.getElementById('taxId').value
                };
            }

            // In a real app, you would send this data to your server
            console.log('Form submitted with:', {
                name,
                email,
                phone,
                country,
                state,
                city,
                imageFile: imageFile ? imageFile.name : null,
                isBusinessAccount,
                businessData
            });

            // Show success message
            alert('Profile updated successfully!');

            // In a real app, you might redirect the user
            // window.location.href = '/dashboard';
        });
    </script>
</body>
</html>
