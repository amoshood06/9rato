<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>9rato Wallet</title>
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
    /* Transaction styles */
    .transaction-item {
        border-left: 4px solid transparent;
    }
    .transaction-deposit {
        border-left-color: #10B981;
    }
    .transaction-withdrawal {
        border-left-color: #EF4444;
    }
    .transaction-pending {
        border-left-color: #F59E0B;
    }
    /* Payment method selection */
    .payment-method {
        border: 2px solid #E5E7EB;
        transition: all 0.2s ease;
    }
    .payment-method.selected {
        border-color: #005B49;
        background-color: rgba(0, 91, 73, 0.05);
    }
    /* Form input focus */
    input:focus, select:focus {
        outline: none;
        border-color: #005B49;
        box-shadow: 0 0 0 1px #005B49;
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
                        <a href="" class="block p-3 bg-[#005B49] text-white rounded-lg">Wallet</a>
                        <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Chat</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Sell</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Bid</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Swap</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Trade</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Rent</a>
                        <a href="" class="block p-3 hover:bg-green-100 rounded-lg">Complain</a>
                        <a href="#" class="block p-3 hover:bg-green-100 rounded-lg">Profile</a>
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
                                <div>Withdraw</div>
                            </a>
                            <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <div>Swap</div>
                            </a>
                            <a href="#" class="bg-[#005B49] p-4 rounded-lg text-white text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                <div>History</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay for mobile -->
        <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden lg:hidden"></div>

        <!-- Wallet Content -->
        <div class="flex-1">
            <div class="max-w-3xl mx-auto">
                <!-- Page Title -->
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-[#005B49]">Wallet</h2>
                    <p class="text-gray-600">Manage your funds, make deposits and withdrawals</p>
                </div>

                <!-- Wallet Balance Card -->
                <div class="bg-[#005B49] text-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm opacity-80">Available Balance</p>
                            <p class="text-3xl font-bold mt-1">N 20,000.00</p>
                        </div>
                        <div class="bg-white/20 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex mt-6 space-x-3">
                        <button id="depositBtn" class="flex-1 bg-white text-[#005B49] py-2 rounded-md font-medium hover:bg-gray-100 transition-colors">
                            Deposit
                        </button>
                        <button id="withdrawBtn" class="flex-1 bg-white/20 text-white py-2 rounded-md font-medium hover:bg-white/30 transition-colors">
                            Withdraw
                        </button>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="flex border-b mb-6">
                    <button id="depositTab" class="flex-1 py-3 text-center tab-active">Deposit</button>
                    <button id="withdrawTab" class="flex-1 py-3 text-center tab-inactive">Withdraw</button>
                    <button id="historyTab" class="flex-1 py-3 text-center tab-inactive">History</button>
                </div>

                <!-- Deposit Section -->
                <div id="depositSection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-[#005B49] mb-4">Deposit Funds</h3>

                        <form id="depositForm" class="space-y-6">
                            <!-- Amount -->
                            <div class="space-y-2">
                                <label for="depositAmount" class="block text-sm font-medium text-gray-700">Amount (NGN)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500">N</span>
                                    </div>
                                    <input
                                        type="number"
                                        id="depositAmount"
                                        name="depositAmount"
                                        placeholder="0.00"
                                        min="100"
                                        class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                        required
                                    >
                                </div>
                                <p class="text-xs text-gray-500">Minimum deposit: N100</p>
                            </div>

                            <!-- Payment Method -->
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Payment Method</label>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                    <div class="payment-method rounded-lg p-4 cursor-pointer" data-method="card">
                                        <div class="flex items-center space-x-3">
                                            <div class="bg-gray-100 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium">Card</p>
                                                <p class="text-xs text-gray-500">Visa, Mastercard</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="payment-method rounded-lg p-4 cursor-pointer" data-method="bank">
                                        <div class="flex items-center space-x-3">
                                            <div class="bg-gray-100 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium">Bank Transfer</p>
                                                <p class="text-xs text-gray-500">Direct deposit</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="payment-method rounded-lg p-4 cursor-pointer" data-method="ussd">
                                        <div class="flex items-center space-x-3">
                                            <div class="bg-gray-100 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium">USSD</p>
                                                <p class="text-xs text-gray-500">Mobile banking</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="paymentMethod" name="paymentMethod" value="">
                            </div>

                            <!-- Card Details (shown conditionally) -->
                            <div id="cardDetails" class="space-y-4 hidden">
                                <div class="space-y-2">
                                    <label for="cardNumber" class="block text-sm font-medium text-gray-700">Card Number</label>
                                    <input
                                        type="text"
                                        id="cardNumber"
                                        name="cardNumber"
                                        placeholder="1234 5678 9012 3456"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    >
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label for="expiryDate" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                                        <input
                                            type="text"
                                            id="expiryDate"
                                            name="expiryDate"
                                            placeholder="MM/YY"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                        >
                                    </div>

                                    <div class="space-y-2">
                                        <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                                        <input
                                            type="text"
                                            id="cvv"
                                            name="cvv"
                                            placeholder="123"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                        >
                                    </div>
                                </div>
                            </div>

                            <!-- Bank Transfer Details (shown conditionally) -->
                            <div id="bankDetails" class="space-y-4 hidden">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-medium text-gray-700 mb-2">Bank Transfer Details</h4>
                                    <p class="text-sm text-gray-600 mb-1">Bank: First Bank</p>
                                    <p class="text-sm text-gray-600 mb-1">Account Number: 1234567890</p>
                                    <p class="text-sm text-gray-600 mb-1">Account Name: 9RATO LTD</p>
                                    <p class="text-sm text-gray-600 mt-3">Please use your email as reference when making the transfer.</p>
                                </div>

                                <div class="space-y-2">
                                    <label for="transferReference" class="block text-sm font-medium text-gray-700">Transfer Reference</label>
                                    <input
                                        type="text"
                                        id="transferReference"
                                        name="transferReference"
                                        placeholder="Enter your transfer reference"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    >
                                </div>
                            </div>

                            <!-- USSD Details (shown conditionally) -->
                            <div id="ussdDetails" class="space-y-4 hidden">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-medium text-gray-700 mb-2">USSD Instructions</h4>
                                    <p class="text-sm text-gray-600 mb-2">1. Dial *737*000*AMOUNT# on your mobile phone</p>
                                    <p class="text-sm text-gray-600 mb-2">2. Follow the prompts to complete the transaction</p>
                                    <p class="text-sm text-gray-600 mb-2">3. Enter the reference code provided after the transaction</p>
                                </div>

                                <div class="space-y-2">
                                    <label for="ussdReference" class="block text-sm font-medium text-gray-700">USSD Reference</label>
                                    <input
                                        type="text"
                                        id="ussdReference"
                                        name="ussdReference"
                                        placeholder="Enter the reference code"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    >
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button
                                    type="submit"
                                    class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                                >
                                    Proceed to Deposit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Withdraw Section -->
                <div id="withdrawSection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-[#005B49] mb-4">Withdraw Funds</h3>

                        <form id="withdrawForm" class="space-y-6">
                            <!-- Amount -->
                            <div class="space-y-2">
                                <label for="withdrawAmount" class="block text-sm font-medium text-gray-700">Amount (NGN)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500">N</span>
                                    </div>
                                    <input
                                        type="number"
                                        id="withdrawAmount"
                                        name="withdrawAmount"
                                        placeholder="0.00"
                                        min="500"
                                        max="20000"
                                        class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                        required
                                    >
                                </div>
                                <p class="text-xs text-gray-500">Minimum withdrawal: N500 | Maximum: N20,000</p>
                            </div>

                            <!-- Bank Account -->
                            <div class="space-y-2">
                                <label for="bankAccount" class="block text-sm font-medium text-gray-700">Select Bank Account</label>
                                <select
                                    id="bankAccount"
                                    name="bankAccount"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    required
                                >
                                    <option value="" selected disabled>Select your bank account</option>
                                    <option value="account1">First Bank - 1234567890</option>
                                    <option value="account2">GTBank - 0987654321</option>
                                    <option value="newAccount">+ Add New Bank Account</option>
                                </select>
                            </div>

                            <!-- New Bank Account Details (shown conditionally) -->
                            <div id="newBankDetails" class="space-y-4 hidden">
                                <div class="space-y-2">
                                    <label for="bankName" class="block text-sm font-medium text-gray-700">Bank Name</label>
                                    <select
                                        id="bankName"
                                        name="bankName"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    >
                                        <option value="" selected disabled>Select bank</option>
                                        <option value="firstbank">First Bank</option>
                                        <option value="gtbank">GTBank</option>
                                        <option value="zenithbank">Zenith Bank</option>
                                        <option value="accessbank">Access Bank</option>
                                        <option value="uba">UBA</option>
                                    </select>
                                </div>

                                <div class="space-y-2">
                                    <label for="accountNumber" class="block text-sm font-medium text-gray-700">Account Number</label>
                                    <input
                                        type="text"
                                        id="accountNumber"
                                        name="accountNumber"
                                        placeholder="Enter 10-digit account number"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                    >
                                </div>

                                <div class="space-y-2">
                                    <label for="accountName" class="block text-sm font-medium text-gray-700">Account Name</label>
                                    <input
                                        type="text"
                                        id="accountName"
                                        name="accountName"
                                        placeholder="Account name will appear here"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-50"
                                        readonly
                                    >
                                    <p class="text-xs text-gray-500">Account name will be verified automatically</p>
                                </div>

                                <div class="flex items-center">
                                    <input
                                        type="checkbox"
                                        id="saveAccount"
                                        name="saveAccount"
                                        class="h-4 w-4 text-[#005B49] focus:ring-[#005B49] border-gray-300 rounded"
                                    >
                                    <label for="saveAccount" class="ml-2 block text-sm text-gray-700">
                                        Save this account for future withdrawals
                                    </label>
                                </div>
                            </div>

                            <!-- Withdrawal Note -->
                            <div class="space-y-2">
                                <label for="withdrawalNote" class="block text-sm font-medium text-gray-700">Note (Optional)</label>
                                <textarea
                                    id="withdrawalNote"
                                    name="withdrawalNote"
                                    rows="2"
                                    placeholder="Add a note for this withdrawal"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button
                                    type="submit"
                                    class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                                >
                                    Withdraw Funds
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Transaction History Section -->
                <div id="historySection" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-[#005B49]">Transaction History</h3>

                            <div class="flex space-x-2">
                                <select id="historyFilter" class="text-sm border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-1 focus:ring-[#005B49] focus:border-[#005B49]">
                                    <option value="all">All Transactions</option>
                                    <option value="deposit">Deposits</option>
                                    <option value="withdrawal">Withdrawals</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <!-- Transaction Items -->
                            <div class="transaction-item transaction-deposit bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="font-medium">Deposit</p>
                                        <p class="text-xs text-gray-500">Apr 5, 2025 • 10:30 AM</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-medium text-green-600">+N 5,000.00</p>
                                        <p class="text-xs text-gray-500">Card Payment</p>
                                    </div>
                                </div>
                            </div>

                            <div class="transaction-item transaction-withdrawal bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="font-medium">Withdrawal</p>
                                        <p class="text-xs text-gray-500">Apr 3, 2025 • 2:15 PM</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-medium text-red-600">-N 2,000.00</p>
                                        <p class="text-xs text-gray-500">GTBank - 0987654321</p>
                                    </div>
                                </div>
                            </div>

                            <div class="transaction-item transaction-deposit bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="font-medium">Deposit</p>
                                        <p class="text-xs text-gray-500">Apr 1, 2025 • 9:45 AM</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-medium text-green-600">+N 10,000.00</p>
                                        <p class="text-xs text-gray-500">Bank Transfer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="transaction-item transaction-pending bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="font-medium">Deposit (Pending)</p>
                                        <p class="text-xs text-gray-500">Mar 28, 2025 • 4:20 PM</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-medium text-yellow-600">+N 7,000.00</p>
                                        <p class="text-xs text-gray-500">USSD Payment</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Load More Button -->
                        <div class="mt-6 text-center">
                            <button class="text-[#005B49] font-medium hover:underline focus:outline-none">
                                Load More Transactions
                            </button>
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
        <a href="#" class="flex flex-col items-center justify-center p-2 text-[#005B49]">
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
        <a href="#" class="flex flex-col items-center justify-center p-2">
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

    // Tab switching functionality
    const depositTab = document.getElementById('depositTab');
    const withdrawTab = document.getElementById('withdrawTab');
    const historyTab = document.getElementById('historyTab');
    const depositSection = document.getElementById('depositSection');
    const withdrawSection = document.getElementById('withdrawSection');
    const historySection = document.getElementById('historySection');
    const depositBtn = document.getElementById('depositBtn');
    const withdrawBtn = document.getElementById('withdrawBtn');

    function showTab(tab, section) {
        // Reset all tabs
        depositTab.className = 'flex-1 py-3 text-center tab-inactive';
        withdrawTab.className = 'flex-1 py-3 text-center tab-inactive';
        historyTab.className = 'flex-1 py-3 text-center tab-inactive';

        // Hide all sections
        depositSection.classList.add('hidden');
        withdrawSection.classList.add('hidden');
        historySection.classList.add('hidden');

        // Show selected tab and section
        tab.className = 'flex-1 py-3 text-center tab-active';
        section.classList.remove('hidden');
    }

    depositTab.addEventListener('click', () => showTab(depositTab, depositSection));
    withdrawTab.addEventListener('click', () => showTab(withdrawTab, withdrawSection));
    historyTab.addEventListener('click', () => showTab(historyTab, historySection));
    depositBtn.addEventListener('click', () => showTab(depositTab, depositSection));
    withdrawBtn.addEventListener('click', () => showTab(withdrawTab, withdrawSection));

    // Payment method selection
    const paymentMethods = document.querySelectorAll('.payment-method');
    const paymentMethodInput = document.getElementById('paymentMethod');
    const cardDetails = document.getElementById('cardDetails');
    const bankDetails = document.getElementById('bankDetails');
    const ussdDetails = document.getElementById('ussdDetails');

    paymentMethods.forEach(method => {
        method.addEventListener('click', () => {
            // Remove selected class from all methods
            paymentMethods.forEach(m => m.classList.remove('selected'));

            // Add selected class to clicked method
            method.classList.add('selected');

            // Set the payment method value
            const methodValue = method.getAttribute('data-method');
            paymentMethodInput.value = methodValue;

            // Show/hide relevant details
            cardDetails.classList.add('hidden');
            bankDetails.classList.add('hidden');
            ussdDetails.classList.add('hidden');

            if (methodValue === 'card') {
                cardDetails.classList.remove('hidden');
            } else if (methodValue === 'bank') {
                bankDetails.classList.remove('hidden');
            } else if (methodValue === 'ussd') {
                ussdDetails.classList.remove('hidden');
            }
        });
    });

    // Bank account selection
    const bankAccountSelect = document.getElementById('bankAccount');
    const newBankDetails = document.getElementById('newBankDetails');

    bankAccountSelect.addEventListener('change', function() {
        if (this.value === 'newAccount') {
            newBankDetails.classList.remove('hidden');
        } else {
            newBankDetails.classList.add('hidden');
        }
    });

    // Account number verification (simulated)
    const accountNumberInput = document.getElementById('accountNumber');
    const accountNameInput = document.getElementById('accountName');

    accountNumberInput.addEventListener('blur', function() {
        if (this.value.length === 10) {
            // Simulate API call to verify account
            setTimeout(() => {
                accountNameInput.value = 'JOHN DOE';
            }, 1000);
        }
    });

    // Form submissions
    document.getElementById('depositForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form values
        const amount = document.getElementById('depositAmount').value;
        const method = document.getElementById('paymentMethod').value;

        // In a real app, you would send this data to your server
        console.log('Deposit form submitted with:', {
            amount,
            method
        });

        // Show success message
        alert('Deposit initiated successfully!');

        // Reset form
        this.reset();
        paymentMethods.forEach(m => m.classList.remove('selected'));
        cardDetails.classList.add('hidden');
        bankDetails.classList.add('hidden');
        ussdDetails.classList.add('hidden');
    });

    document.getElementById('withdrawForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form values
        const amount = document.getElementById('withdrawAmount').value;
        const bankAccount = document.getElementById('bankAccount').value;

        // In a real app, you would send this data to your server
        console.log('Withdrawal form submitted with:', {
            amount,
            bankAccount
        });

        // Show success message
        alert('Withdrawal request submitted successfully!');

        // Reset form
        this.reset();
        newBankDetails.classList.add('hidden');
    });

    // Transaction history filter
    const historyFilter = document.getElementById('historyFilter');
    const transactionItems = document.querySelectorAll('.transaction-item');

    historyFilter.addEventListener('change', function() {
        const filterValue = this.value;

        transactionItems.forEach(item => {
            if (filterValue === 'all') {
                item.style.display = 'block';
            } else if (filterValue === 'deposit' && item.classList.contains('transaction-deposit')) {
                item.style.display = 'block';
            } else if (filterValue === 'withdrawal' && item.classList.contains('transaction-withdrawal')) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>

