<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>9rato Complaints</title>
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
    /* Tab styles */
    .tab-active {
        color: #005B49;
        border-bottom: 2px solid #005B49;
        font-weight: 600;
    }
    .tab-inactive {
        color: #6B7280;
        border-bottom: 2px solid transparent;
    }
    /* Complaint status badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    .status-pending {
        background-color: #FEF3C7;
        color: #D97706;
    }
    .status-inprogress {
        background-color: #DBEAFE;
        color: #2563EB;
    }
    .status-resolved {
        background-color: #D1FAE5;
        color: #059669;
    }
    .status-closed {
        background-color: #F3F4F6;
        color: #6B7280;
    }
    /* File upload styles */
    .file-upload {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }
    .file-upload input[type=file] {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
    .file-upload-label {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1rem;
        background-color: #F3F4F6;
        color: #374151;
        border-radius: 0.375rem;
        font-size: 0.875rem;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .file-upload-label:hover {
        background-color: #E5E7EB;
    }
    /* Form input focus */
    input:focus, select:focus, textarea:focus {
        outline: none;
        border-color: #005B49;
        box-shadow: 0 0 0 1px #005B49;
    }
    /* Complaint message styles */
    .message-bubble {
        border-radius: 0.75rem;
        padding: 1rem;
        max-width: 80%;
    }
    .message-user {
        background-color: #F3F4F6;
        margin-left: auto;
        border-bottom-right-radius: 0;
    }
    .message-admin {
        background-color: #ECFDF5;
        margin-right: auto;
        border-bottom-left-radius: 0;
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
                        <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Wallet</a>
                        <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Chat</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Sell</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Bid</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Swap</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Trade</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Rent</a>
                        <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Withdrawal</a>
                        <a href="" class="block p-3 bg-[#005B49] text-white rounded-lg">Complain</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Profile</a>
                    </nav>

                    <!-- Quick Action Items - visible only on mobile -->
                    <div class="lg:hidden mt-8 px-4">
                        <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <div>New Complaint</div>
                            </a>
                            <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                <div>My Complaints</div>
                            </a>
                            <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>FAQs</div>
                            </a>
                            <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div>Contact</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay for mobile -->
        <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden lg:hidden"></div>

        <!-- Complaint Content -->
        <div class="flex-1">
            <div class="max-w-3xl mx-auto">
                <!-- Page Title -->
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-[#005B49]">Complaints</h2>
                    <p class="text-gray-600">Submit and track your complaints</p>
                </div>

                <!-- Tabs -->
                <div class="flex border-b mb-6">
                    <button id="newComplaintTab" class="flex-1 py-3 text-center tab-active">New Complaint</button>
                    <button id="myComplaintsTab" class="flex-1 py-3 text-center tab-inactive">My Complaints</button>
                    <button id="faqTab" class="flex-1 py-3 text-center tab-inactive">FAQs</button>
                </div>

                <!-- New Complaint Section -->
                <div id="newComplaintSection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-[#005B49] mb-4">Submit a New Complaint</h3>

                        <form id="complaintForm" class="space-y-6">
                            <!-- Complaint Type -->
                            <div class="space-y-2">
                                <label for="complaintType" class="block text-sm font-medium text-gray-700">Complaint Type</label>
                                <select
                                    id="complaintType"
                                    name="complaintType"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    required
                                >
                                    <option value="" selected disabled>Select complaint type</option>
                                    <option value="transaction">Transaction Issue</option>
                                    <option value="account">Account Problem</option>
                                    <option value="service">Service Quality</option>
                                    <option value="technical">Technical Issue</option>
                                    <option value="security">Security Concern</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- Subject -->
                            <div class="space-y-2">
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    placeholder="Brief description of your complaint"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    required
                                >
                            </div>

                            <!-- Related Transaction (Optional) -->
                            <div class="space-y-2">
                                <label for="transactionId" class="block text-sm font-medium text-gray-700">Related Transaction ID (Optional)</label>
                                <input
                                    type="text"
                                    id="transactionId"
                                    name="transactionId"
                                    placeholder="Enter transaction ID if applicable"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                >
                                <p class="text-xs text-gray-500">If your complaint is about a specific transaction, please provide the ID</p>
                            </div>

                            <!-- Description -->
                            <div class="space-y-2">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea
                                    id="description"
                                    name="description"
                                    rows="5"
                                    placeholder="Please provide detailed information about your complaint"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    required
                                ></textarea>
                                <p class="text-xs text-gray-500">Please include all relevant details to help us resolve your issue quickly</p>
                            </div>

                            <!-- Attachments -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Attachments (Optional)</label>
                                <div class="file-upload">
                                    <input type="file" id="attachments" name="attachments" multiple>
                                    <label for="attachments" class="file-upload-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                        </svg>
                                        Choose Files
                                    </label>
                                </div>
                                <div id="fileList" class="text-sm text-gray-600 mt-2"></div>
                                <p class="text-xs text-gray-500">You can attach screenshots or other relevant files (max 5MB each)</p>
                            </div>

                            <!-- Priority -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Priority</label>
                                <div class="flex space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="priority" value="low" class="h-4 w-4 text-[#005B49] focus:ring-[#005B49]">
                                        <span class="ml-2 text-sm text-gray-700">Low</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="priority" value="medium" class="h-4 w-4 text-[#005B49] focus:ring-[#005B49]" checked>
                                        <span class="ml-2 text-sm text-gray-700">Medium</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="priority" value="high" class="h-4 w-4 text-[#005B49] focus:ring-[#005B49]">
                                        <span class="ml-2 text-sm text-gray-700">High</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button
                                    type="submit"
                                    class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                                >
                                    Submit Complaint
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- My Complaints Section -->
                <div id="myComplaintsSection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-[#005B49]">My Complaints</h3>

                            <div class="flex space-x-2">
                                <select id="statusFilter" class="text-sm border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-1 focus:ring-[#005B49] focus:border-[#005B49]">
                                    <option value="all">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="inprogress">In Progress</option>
                                    <option value="resolved">Resolved</option>
                                    <option value="closed">Closed</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <!-- Complaint Items -->
                            <div class="complaint-item bg-gray-50 p-4 rounded-lg border-l-4 border-yellow-400">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-medium">Transaction not reflecting in my wallet</h4>
                                        <p class="text-sm text-gray-600 mt-1">I made a deposit of N5,000 but it's not showing in my wallet after 24 hours.</p>
                                        <p class="text-xs text-gray-500 mt-2">Submitted: Apr 5, 2025 • Complaint ID: #C12345</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="status-badge status-pending">Pending</span>
                                        <button class="text-[#005B49] text-sm font-medium hover:underline mt-2 view-complaint" data-id="C12345">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="complaint-item bg-gray-50 p-4 rounded-lg border-l-4 border-blue-400">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-medium">Unable to complete swap transaction</h4>
                                        <p class="text-sm text-gray-600 mt-1">I'm trying to swap items but keep getting an error message.</p>
                                        <p class="text-xs text-gray-500 mt-2">Submitted: Apr 3, 2025 • Complaint ID: #C12344</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="status-badge status-inprogress">In Progress</span>
                                        <button class="text-[#005B49] text-sm font-medium hover:underline mt-2 view-complaint" data-id="C12344">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="complaint-item bg-gray-50 p-4 rounded-lg border-l-4 border-green-400">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-medium">Account verification issue</h4>
                                        <p class="text-sm text-gray-600 mt-1">My account verification has been pending for over a week.</p>
                                        <p class="text-xs text-gray-500 mt-2">Submitted: Mar 28, 2025 • Complaint ID: #C12340</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="status-badge status-resolved">Resolved</span>
                                        <button class="text-[#005B49] text-sm font-medium hover:underline mt-2 view-complaint" data-id="C12340">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="complaint-item bg-gray-50 p-4 rounded-lg border-l-4 border-gray-400">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-medium">App crashing on login</h4>
                                        <p class="text-sm text-gray-600 mt-1">The mobile app crashes whenever I try to log in.</p>
                                        <p class="text-xs text-gray-500 mt-2">Submitted: Mar 20, 2025 • Complaint ID: #C12335</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="status-badge status-closed">Closed</span>
                                        <button class="text-[#005B49] text-sm font-medium hover:underline mt-2 view-complaint" data-id="C12335">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Load More Button -->
                        <div class="mt-6 text-center">
                            <button class="text-[#005B49] font-medium hover:underline focus:outline-none">
                                Load More Complaints
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Complaint Detail Modal -->
                <div id="complaintDetailModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
                    <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto mx-4">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-lg font-semibold text-[#005B49]" id="modalTitle">Complaint Details</h3>
                                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-gray-500">Complaint ID: <span id="modalComplaintId" class="font-medium text-gray-700">#C12345</span></p>
                                        <p class="text-sm text-gray-500">Submitted: <span id="modalSubmitDate" class="font-medium text-gray-700">April 5, 2025</span></p>
                                    </div>
                                    <span id="modalStatus" class="status-badge status-inprogress">In Progress</span>
                                </div>

                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-medium text-[#005B49]" id="modalSubject">Transaction not reflecting in my wallet</h4>
                                    <p class="text-sm mt-2" id="modalDescription">I made a deposit of N5,000 but it's not showing in my wallet after 24 hours. I have confirmed that the transaction was successful from my bank statement. Please help resolve this issue as soon as possible.</p>

                                    <div class="mt-3" id="modalAttachments">
                                        <p class="text-sm font-medium text-gray-700">Attachments:</p>
                                        <div class="flex flex-wrap gap-2 mt-1">
                                            <a href="#" class="text-sm text-[#005B49] hover:underline flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                                </svg>
                                                transaction_receipt.pdf
                                            </a>
                                            <a href="#" class="text-sm text-[#005B49] hover:underline flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                screenshot.png
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Conversation Thread -->
                                <div class="space-y-4">
                                    <h4 class="font-medium text-gray-700">Conversation</h4>

                                    <div class="space-y-4">
                                        <div class="flex flex-col">
                                            <div class="message-bubble message-user">
                                                <p class="text-sm">I made a deposit of N5,000 but it's not showing in my wallet after 24 hours. I have confirmed that the transaction was successful from my bank statement. Please help resolve this issue as soon as possible.</p>
                                                <p class="text-xs text-gray-500 mt-1 text-right">Apr 5, 2025 • 10:30 AM</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <div class="message-bubble message-admin">
                                                <p class="text-sm">Hello John, thank you for reaching out. We're sorry for the inconvenience. We'll investigate this issue right away. Could you please provide your transaction reference number from your bank statement?</p>
                                                <p class="text-xs text-gray-500 mt-1">Apr 5, 2025 • 11:45 AM • Support Agent</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <div class="message-bubble message-user">
                                                <p class="text-sm">Thank you for your quick response. The transaction reference number is TRF123456789.</p>
                                                <p class="text-xs text-gray-500 mt-1 text-right">Apr 5, 2025 • 12:15 PM</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <div class="message-bubble message-admin">
                                                <p class="text-sm">Thank you for providing the reference number. We've located your transaction and confirmed it was successful. The issue appears to be with our payment processor's delay in notifying our system. We've manually credited your wallet with N5,000. Please refresh your app or website to see the updated balance. We apologize for the inconvenience.</p>
                                                <p class="text-xs text-gray-500 mt-1">Apr 5, 2025 • 2:30 PM • Support Agent</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reply Form -->
                                    <div class="mt-4">
                                        <textarea
                                            id="replyMessage"
                                            rows="3"
                                            placeholder="Type your reply here..."
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                        ></textarea>
                                        <div class="flex justify-between items-center mt-2">
                                            <div class="file-upload">
                                                <input type="file" id="replyAttachment" name="replyAttachment">
                                                <label for="replyAttachment" class="file-upload-label text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                                    </svg>
                                                    Attach
                                                </label>
                                            </div>
                                            <button
                                                id="sendReply"
                                                class="py-1.5 px-4 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49] text-sm"
                                            >
                                                Send Reply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQs Section -->
                <div id="faqSection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-[#005B49] mb-4">Frequently Asked Questions</h3>

                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <button class="faq-question w-full flex justify-between items-center p-4 text-left focus:outline-none" data-target="faq1">
                                    <span class="font-medium">How long does it take to process a complaint?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="faq1" class="faq-answer px-4 pb-4 hidden">
                                    <p class="text-sm text-gray-600">We aim to respond to all complaints within 24-48 hours. Complex issues may take longer to resolve, but we'll keep you updated throughout the process. Our support team works 7 days a week to ensure timely resolution of all customer issues.</p>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <button class="faq-question w-full flex justify-between items-center p-4 text-left focus:outline-none" data-target="faq2">
                                    <span class="font-medium">What information should I include in my complaint?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="faq2" class="faq-answer px-4 pb-4 hidden">
                                    <p class="text-sm text-gray-600">To help us resolve your complaint quickly, please include:</p>
                                    <ul class="list-disc list-inside text-sm text-gray-600 mt-2 space-y-1">
                                        <li>A clear description of the issue</li>
                                        <li>Date and time when the issue occurred</li>
                                        <li>Transaction ID or reference number (if applicable)</li>
                                        <li>Screenshots or other evidence (if available)</li>
                                        <li>Steps you've already taken to resolve the issue</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <button class="faq-question w-full flex justify-between items-center p-4 text-left focus:outline-none" data-target="faq3">
                                    <span class="font-medium">How can I check the status of my complaint?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="faq3" class="faq-answer px-4 pb-4 hidden">
                                    <p class="text-sm text-gray-600">You can check the status of your complaint in the "My Complaints" section. Each complaint will show its current status (Pending, In Progress, Resolved, or Closed). You can also click on "View Details" to see the full conversation history and updates.</p>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <button class="faq-question w-full flex justify-between items-center p-4 text-left focus:outline-none" data-target="faq4">
                                    <span class="font-medium">What if I'm not satisfied with the resolution?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="faq4" class="faq-answer px-4 pb-4 hidden">
                                    <p class="text-sm text-gray-600">If you're not satisfied with the resolution provided, you can respond to the complaint thread explaining why the issue hasn't been resolved to your satisfaction. Alternatively, you can submit a new complaint and reference your previous complaint ID. You can also contact our customer support team directly at support@9rato.com or call our helpline at +234 800 9RATO (97286).</p>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <button class="faq-question w-full flex justify-between items-center p-4 text-left focus:outline-none" data-target="faq5">
                                    <span class="font-medium">Can I reopen a closed complaint?</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="faq5" class="faq-answer px-4 pb-4 hidden">
                                    <p class="text-sm text-gray-600">Closed complaints cannot be reopened after 7 days. If the issue persists or reoccurs after a complaint has been closed, please submit a new complaint and reference your previous complaint ID in the description.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <h4 class="font-medium text-[#005B49] mb-2">Still need help?</h4>
                            <p class="text-sm text-gray-600 mb-3">If you couldn't find the answer to your question, you can contact us directly:</p>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="mailto:support@9rato.com" class="flex items-center text-[#005B49] hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    support@9rato.com
                                </a>
                                <a href="tel:+2348009RATO" class="flex items-center text-[#005B49] hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 800 9RATO (97286)
                                </a>
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            <span class="text-xs mt-1">Wallet</span>
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
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

    // Tab switching functionality
    const newComplaintTab = document.getElementById('newComplaintTab');
    const myComplaintsTab = document.getElementById('myComplaintsTab');
    const faqTab = document.getElementById('faqTab');
    const newComplaintSection = document.getElementById('newComplaintSection');
    const myComplaintsSection = document.getElementById('myComplaintsSection');
    const faqSection = document.getElementById('faqSection');

    function showTab(tab, section) {
        // Reset all tabs
        newComplaintTab.className = 'flex-1 py-3 text-center tab-inactive';
        myComplaintsTab.className = 'flex-1 py-3 text-center tab-inactive';
        faqTab.className = 'flex-1 py-3 text-center tab-inactive';

        // Hide all sections
        newComplaintSection.classList.add('hidden');
        myComplaintsSection.classList.add('hidden');
        faqSection.classList.add('hidden');

        // Show selected tab and section
        tab.className = 'flex-1 py-3 text-center tab-active';
        section.classList.remove('hidden');
    }

    newComplaintTab.addEventListener('click', () => showTab(newComplaintTab, newComplaintSection));
    myComplaintsTab.addEventListener('click', () => showTab(myComplaintsTab, myComplaintsSection));
    faqTab.addEventListener('click', () => showTab(faqTab, faqSection));

    // File upload preview
    const fileInput = document.getElementById('attachments');
    const fileList = document.getElementById('fileList');

    fileInput.addEventListener('change', function() {
        fileList.innerHTML = '';
        if (this.files.length > 0) {
            for (let i = 0; i < this.files.length; i++) {
                const file = this.files[i];
                const fileItem = document.createElement('div');
                fileItem.className = 'flex items-center space-x-2';
                fileItem.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                    <span>${file.name}</span>
                    <span class="text-xs text-gray-500">(${(file.size / 1024).toFixed(2)} KB)</span>
                `;
                fileList.appendChild(fileItem);
            }
        }
    });

    // Complaint form submission
    document.getElementById('complaintForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form values
        const complaintType = document.getElementById('complaintType').value;
        const subject = document.getElementById('subject').value;
        const description = document.getElementById('description').value;

        // In a real app, you would send this data to your server
        console.log('Complaint form submitted with:', {
            complaintType,
            subject,
            description
        });

        // Show success message
        alert('Your complaint has been submitted successfully! We will review it and get back to you soon.');

        // Reset form
        this.reset();
        fileList.innerHTML = '';

        // Switch to My Complaints tab
        showTab(myComplaintsTab, myComplaintsSection);
    });

    // Complaint detail modal
    const viewButtons = document.querySelectorAll('.view-complaint');
    const complaintDetailModal = document.getElementById('complaintDetailModal');
    const closeModal = document.getElementById('closeModal');

    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const complaintId = this.getAttribute('data-id');
            document.getElementById('modalComplaintId').textContent = '#' + complaintId;

            // In a real app, you would fetch the complaint details from your server
            // For now, we'll just show the modal with sample data
            complaintDetailModal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });
    });

    closeModal.addEventListener('click', function() {
        complaintDetailModal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    });

    // Close modal when clicking outside
    complaintDetailModal.addEventListener('click', function(e) {
        if (e.target === complaintDetailModal) {
            complaintDetailModal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    });

    // Send reply in modal
    document.getElementById('sendReply').addEventListener('click', function() {
        const replyMessage = document.getElementById('replyMessage').value;
        if (replyMessage.trim() === '') {
            alert('Please enter a message before sending.');
            return;
        }

        // In a real app, you would send this reply to your server
        console.log('Reply sent:', replyMessage);

        // Add the reply to the conversation (for demo purposes)
        const conversationThread = document.querySelector('.space-y-4 .space-y-4');
        const newReply = document.createElement('div');
        newReply.className = 'flex flex-col';
        newReply.innerHTML = `
            <div class="message-bubble message-user">
                <p class="text-sm">${replyMessage}</p>
                <p class="text-xs text-gray-500 mt-1 text-right">Just now</p>
            </div>
        `;
        conversationThread.appendChild(newReply);

        // Clear the reply input
        document.getElementById('replyMessage').value = '';
    });

    // FAQ accordion functionality
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const answer = document.getElementById(target);
            const icon = this.querySelector('.faq-icon');

            // Toggle the answer visibility
            answer.classList.toggle('hidden');

            // Rotate the icon
            if (answer.classList.contains('hidden')) {
                icon.classList.remove('rotate-180');
            } else {
                icon.classList.add('rotate-180');
            }
        });
    });

    // Filter complaints by status
    const statusFilter = document.getElementById('statusFilter');
    const complaintItems = document.querySelectorAll('.complaint-item');

    statusFilter.addEventListener('change', function() {
        const filterValue = this.value;

        complaintItems.forEach(item => {
            const statusBadge = item.querySelector('.status-badge');
            const statusClass = Array.from(statusBadge.classList).find(cls => cls.startsWith('status-') && cls !== 'status-badge');
            const status = statusClass ? statusClass.replace('status-', '') : '';

            if (filterValue === 'all' || filterValue === status) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>

