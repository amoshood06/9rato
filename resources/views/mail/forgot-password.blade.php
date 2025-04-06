<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>9rato - Forgot Password</title>
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
    /* Form input focus */
    input:focus {
        outline: none;
        border-color: #005B49;
        box-shadow: 0 0 0 1px #005B49;
    }
    /* Steps indicator */
    .step {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #E5E7EB;
        color: #6B7280;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        position: relative;
    }
    .step.active {
        background-color: #005B49;
        color: white;
    }
    .step.completed {
        background-color: #10B981;
        color: white;
    }
    .step-connector {
        flex: 1;
        height: 2px;
        background-color: #E5E7EB;
    }
    .step-connector.active {
        background-color: #10B981;
    }
</style>
</head>
<body class="bg-[#005B49]">
<!-- Header -->
<header class="flex justify-between items-center p-4">
    <!-- Logo -->
    <div class="flex gap-[5px] items-center">
        <img src="{{asset('./asset/image/Frame.svg')}}" alt="" class="w-[20px]">
        <h1 class="text-[20px] md:text-[20px] font-bold text-white">9RATO</h1>
    </div>

    <a href="{{url('login')}}">
        <button class="bg-gray-200 px-4 py-2 rounded-full font-bold text-sm md:text-base">Back to Login</button>
    </a>
</header>

<!-- Main Content -->
<main class="bg-white rounded-t-[2rem] min-h-screen p-4 lg:p-6 pb-safe">
    <div class="max-w-md mx-auto">
        <!-- Page Title -->
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-[#005B49]">Forgot Password</h2>
            <p class="text-gray-600">Reset your password in a few easy steps</p>
        </div>

        <!-- Steps Indicator -->
        <div class="flex items-center justify-between mb-8 px-4">
            <div class="step active">1</div>
            <div class="step-connector" id="connector1"></div>
            <div class="step" id="step2">2</div>
            <div class="step-connector" id="connector2"></div>
            <div class="step" id="step3">3</div>
        </div>

        <!-- Step 1: Email Entry -->
        <div id="step1Content" class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-[#005B49] mb-4">Enter Your Email</h3>
                <p class="text-gray-600 mb-4">We'll send you a link to reset your password.</p>

                <form id="emailForm" class="space-y-4">
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email address"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                            required
                        >
                    </div>

                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                        >
                            Send Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Step 2: Verification Code -->
        <div id="step2Content" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-[#005B49] mb-4">Enter Verification Code</h3>
                <p class="text-gray-600 mb-4">We've sent a verification code to your email. Please check your inbox and enter the code below.</p>

                <form id="verificationForm" class="space-y-4">
                    <div class="space-y-2">
                        <label for="verificationCode" class="block text-sm font-medium text-gray-700">Verification Code</label>
                        <input
                            type="text"
                            id="verificationCode"
                            name="verificationCode"
                            placeholder="Enter 6-digit code"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                            required
                            maxlength="6"
                        >
                    </div>

                    <div class="text-sm text-gray-600">
                        <p>Didn't receive the code? <button type="button" id="resendCode" class="text-[#005B49] font-medium hover:underline">Resend Code</button></p>
                        <p class="mt-2">Code expires in <span id="countdown">10:00</span></p>
                    </div>

                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                        >
                            Verify Code
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Step 3: New Password -->
        <div id="step3Content" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-[#005B49] mb-4">Create New Password</h3>
                <p class="text-gray-600 mb-4">Please enter a new password for your account.</p>

                <form id="passwordForm" class="space-y-4">
                    <div class="space-y-2">
                        <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
                        <input
                            type="password"
                            id="newPassword"
                            name="newPassword"
                            placeholder="Enter new password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                            required
                        >
                        <div class="text-xs text-gray-500">Password must be at least 8 characters and include a mix of letters, numbers, and special characters.</div>
                    </div>

                    <div class="space-y-2">
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            placeholder="Confirm new password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#005B49] focus:border-[#005B49]"
                            required
                        >
                    </div>

                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                        >
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Success Message -->
        <div id="successMessage" class="bg-white rounded-lg shadow-md overflow-hidden mb-6 hidden">
            <div class="p-6 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-[#005B49] mb-2">Password Reset Successful!</h3>
                <p class="text-gray-600 mb-6">Your password has been reset successfully. You can now log in with your new password.</p>
                <a href="{{url('login')}}" class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] inline-block">
                    Go to Login
                </a>
            </div>
        </div>
    </div>
</main>

<script>
    // Form submissions
    document.getElementById('emailForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const email = document.getElementById('email').value;

        // In a real app, you would send this data to your server
        console.log('Email form submitted with:', email);

        // Show loading state
        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'Sending...';

        // Simulate API call
        setTimeout(() => {
            // Move to step 2
            document.getElementById('step1Content').classList.add('hidden');
            document.getElementById('step2Content').classList.remove('hidden');

            // Update steps indicator
            document.getElementById('step1').classList.add('completed');
            document.getElementById('connector1').classList.add('active');
            document.getElementById('step2').classList.add('active');

            // Start countdown
            startCountdown();

            // Reset button state
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        }, 1500);
    });

    document.getElementById('verificationForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const code = document.getElementById('verificationCode').value;

        // In a real app, you would send this data to your server
        console.log('Verification form submitted with:', code);

        // Show loading state
        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'Verifying...';

        // Simulate API call
        setTimeout(() => {
            // Move to step 3
            document.getElementById('step2Content').classList.add('hidden');
            document.getElementById('step3Content').classList.remove('hidden');

            // Update steps indicator
            document.getElementById('step2').classList.add('completed');
            document.getElementById('connector2').classList.add('active');
            document.getElementById('step3').classList.add('active');

            // Reset button state
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        }, 1500);
    });

    document.getElementById('passwordForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const newPassword = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        // Check if passwords match
        if (newPassword !== confirmPassword) {
            alert('Passwords do not match. Please try again.');
            return;
        }

        // In a real app, you would send this data to your server
        console.log('Password form submitted');

        // Show loading state
        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'Resetting...';

        // Simulate API call
        setTimeout(() => {
            // Show success message
            document.getElementById('step3Content').classList.add('hidden');
            document.getElementById('successMessage').classList.remove('hidden');

            // Update steps indicator
            document.getElementById('step3').classList.add('completed');

            // Reset button state
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        }, 1500);
    });

    // Resend code
    document.getElementById('resendCode').addEventListener('click', function() {
        this.disabled = true;
        this.textContent = 'Sending...';

        // Simulate API call
        setTimeout(() => {
            // Reset countdown
            startCountdown();

            // Reset button state
            this.disabled = false;
            this.textContent = 'Resend Code';

            // Show message
            alert('A new verification code has been sent to your email.');
        }, 1500);
    });

    // Countdown timer
    function startCountdown() {
        let minutes = 10;
        let seconds = 0;
        const countdownElement = document.getElementById('countdown');

        const interval = setInterval(() => {
            if (seconds === 0) {
                if (minutes === 0) {
                    clearInterval(interval);
                    countdownElement.textContent = '00:00';
                    document.getElementById('resendCode').disabled = false;
                    return;
                }
                minutes--;
                seconds = 59;
            } else {
                seconds--;
            }

            const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
            const formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;
            countdownElement.textContent = `${formattedMinutes}:${formattedSeconds}`;
        }, 1000);
    }

    // Password validation
    document.getElementById('newPassword').addEventListener('input', function() {
        const password = this.value;
        const hasMinLength = password.length >= 8;
        const hasLetter = /[a-zA-Z]/.test(password);
        const hasNumber = /\d/.test(password);
        const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);

        // In a real app, you would show validation feedback to the user
        console.log('Password validation:', {
            hasMinLength,
            hasLetter,
            hasNumber,
            hasSpecial,
            isValid: hasMinLength && hasLetter && hasNumber && hasSpecial
        });
    });
</script>
</body>
</html>

