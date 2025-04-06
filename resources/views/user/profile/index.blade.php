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
    /* Profile image styles */
    .profile-image {
        width: 96px;
        height: 96px;
        position: relative;
        border-radius: 100%;
        border: 4px solid white;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        overflow: hidden;
        background-color: #E5E7EB;
        margin: 0 auto;
    }
    .profile-image > div {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .profile-image .avatar-default {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #005B49;
        color: white;
    }
    /* Info card styles */
    .info-card {
        background-color: #f9f9f9;
        border-radius: 0.5rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .info-label {
        font-size: 0.875rem;
        color: #6b7280;
        margin-bottom: 0.25rem;
    }
    .info-value {
        font-size: 1rem;
        color: #111827;
        font-weight: 500;
    }
    .business-badge {
        display: inline-flex;
        align-items: center;
        background-color: #005B49;
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
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
                <div class="mb-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-[#005B49]">Profile</h2>
                        <p class="text-gray-600">View your profile information</p>
                    </div>
                    <a href="profile-edit.html" class="py-2 px-4 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]">
                        Edit Profile
                    </a>
                </div>

                <!-- Profile Display -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                    <div class="p-6">
                        <!-- Profile Image -->
                        <div class="flex flex-col items-center space-y-4 mb-8">
                            <div class="profile-image">
                                <div id="profileImage" class="avatar-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-[#005B49]" id="profileName">John Doe</h3>
                            <div id="businessBadge" class="business-badge">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Business Account
                            </div>
                        </div>

                        <!-- Personal Information Section -->
                        <div class="info-card mb-6">
                            <h3 class="text-lg font-semibold text-[#005B49] mb-4">Personal Information</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Email -->
                                <div>
                                    <div class="info-label">Email Address</div>
                                    <div class="info-value" id="profileEmail">johndoe@example.com</div>
                                </div>

                                <!-- Phone Number -->
                                <div>
                                    <div class="info-label">Phone Number</div>
                                    <div class="info-value" id="profilePhone">+234 812 345 6789</div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Section -->
                        <div class="info-card mb-6">
                            <h3 class="text-lg font-semibold text-[#005B49] mb-4">Location</h3>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Country -->
                                <div>
                                    <div class="info-label">Country</div>
                                    <div class="info-value" id="profileCountry">Nigeria</div>
                                </div>

                                <!-- State/Province -->
                                <div>
                                    <div class="info-label">State/Province</div>
                                    <div class="info-value" id="profileState">Lagos</div>
                                </div>

                                <!-- City -->
                                <div>
                                    <div class="info-label">City</div>
                                    <div class="info-value" id="profileCity">Ikeja</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Information Section -->
                        <div id="businessSection" class="info-card">
                            <h3 class="text-lg font-semibold text-[#005B49] mb-4">Business Information</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Business Name -->
                                <div>
                                    <div class="info-label">Business Name</div>
                                    <div class="info-value" id="businessName">Doe Enterprises</div>
                                </div>

                                <!-- Business Type -->
                                <div>
                                    <div class="info-label">Business Type</div>
                                    <div class="info-value" id="businessType">Retail</div>
                                </div>

                                <!-- Tax ID -->
                                <div>
                                    <div class="info-label">Tax ID / Business Registration Number</div>
                                    <div class="info-value" id="taxId">BN-12345678</div>
                                </div>
                            </div>
                        </div>
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

    // In a real application, you would fetch this data from your backend
    // For demonstration purposes, we're using mock data
    document.addEventListener('DOMContentLoaded', function() {
        // Check if user has a profile image
        const hasProfileImage = false; // This would be determined by your backend

        if (hasProfileImage) {
            const profileImage = document.getElementById('profileImage');
            profileImage.className = '';
            profileImage.style.backgroundImage = 'url(/placeholder.svg?height=96&width=96)';
        }

        // Check if user has a business account
        const isBusinessAccount = true; // This would be determined by your backend

        if (!isBusinessAccount) {
            document.getElementById('businessBadge').style.display = 'none';
            document.getElementById('businessSection').style.display = 'none';
        }

        // Load user data
        // In a real application, this would come from your backend
        const userData = {
            name: 'John Doe',
            email: 'johndoe@example.com',
            phone: '+234 812 345 6789',
            country: 'Nigeria',
            state: 'Lagos',
            city: 'Ikeja',
            business: {
                name: 'Doe Enterprises',
                type: 'Retail',
                taxId: 'BN-12345678'
            }
        };

        // Populate the profile information
        document.getElementById('profileName').textContent = userData.name;
        document.getElementById('profileEmail').textContent = userData.email;
        document.getElementById('profilePhone').textContent = userData.phone;
        document.getElementById('profileCountry').textContent = userData.country;
        document.getElementById('profileState').textContent = userData.state;
        document.getElementById('profileCity').textContent = userData.city;

        if (isBusinessAccount) {
            document.getElementById('businessName').textContent = userData.business.name;
            document.getElementById('businessType').textContent = userData.business.type;
            document.getElementById('taxId').textContent = userData.business.taxId;
        }
    });
</script>
</body>
</html>

