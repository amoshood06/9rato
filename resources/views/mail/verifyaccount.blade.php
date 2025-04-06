<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>9rato - Email Verification</title>
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
    /* Verification code input */
    .verification-input {
        width: 50px;
        height: 60px;
        font-size: 24px;
        text-align: center;
        border: 2px solid #E5E7EB;
        border-radius: 8px;
        margin: 0 4px;
    }
    .verification-input:focus {
        border-color: #005B49;
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
        <!-- Success State -->
        <div id="successState" class="hidden">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#005B49]">Email Verified!</h2>
                <p class="text-gray-600 mt-2">Your email has been successfully verified. You can now access all features of your 9rato account.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-[#005B49] mb-4">What would you like to do next?</h3>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{url('login')}}" class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] inline-block">
                            Login to Your Account
                        </a>
                        <a href="{{url('user/index')}}" class="py-2 px-6 bg-white border border-[#005B49] text-[#005B49] rounded-md hover:bg-gray-50 inline-block">
                            Go to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Verification Form -->
        <div id="verificationForm">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-[#005B49]">Verify Your Email</h2>
                <p class="text-gray-600 mt-2">We've sent a verification code to your email. Please enter the code below to verify your account.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                <div class="p-6">
                    <form id="emailVerificationForm" class="space-y-6">
                        <div class="space-y-4">
                            <label class="block text-sm font-medium text-gray-700 text-center">Enter Verification Code</label>
                            <div class="flex justify-center space-x-2">
                                <input type="text" maxlength="1" class="verification-input" data-index="0" required>
                                <input type="text" maxlength="1" class="verification-input" data-index="1" required>
                                <input type="text" maxlength="1" class="verification-input" data-index="2" required>
                                <input type="text" maxlength="1" class="verification-input" data-index="3" required>
                                <input type="text" maxlength="1" class="verification-input" data-index="4" required>
                                <input type="text" maxlength="1" class="verification-input" data-index="5" required>
                            </div>
                            <p class="text-sm text-gray-600 text-center">Didn't receive the code? <button type="button" id="resendCode" class="text-[#005B49] font-medium hover:underline">Resend Code</button></p>
                            <p class="text-sm text-gray-600 text-center">Code expires in <span id="countdown">10:00</span></p>
                        </div>

                        <div class="flex justify-center">
                            <button
                                type="submit"
                                class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                            >
                                Verify Email
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center text-sm text-gray-600">
                <p>If you're having trouble, please contact our <a href="mailto:support@9rato.com" class="text-[#005B49] hover:underline">support team</a>.</p>
            </div>
        </div>

        <!-- Error State -->
        <div id="errorState" class="hidden">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-red-600">Verification Failed</h2>
                <p class="text-gray-600 mt-2" id="errorMessage">The verification code is invalid or has expired. Please try again or request a new code.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                <div class="p-6 text-center">
                    <button
                        id="tryAgainButton"
                        class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                    >
                        Try Again
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Auto-focus and auto-tab for verification code inputs
    const verificationInputs = document.querySelectorAll('.verification-input');

    verificationInputs.forEach((input, index) => {
        // Focus the first input on page load
        if (index === 0) {
            input.focus();
        }

        input.addEventListener('input', function() {
            if (this.value.length === this.maxLength) {
                // Move to the next input
                if (index < verificationInputs.length - 1) {
                    verificationInputs[index + 1].focus();
                }
            }
        });

        input.addEventListener('keydown', function(e) {
            // Handle backspace
            if (e.key === 'Backspace' && this.value.length === 0) {
                if (index > 0) {
                    verificationInputs[index - 1].focus();
                }
            }
        });
    });

    // Form submission
    document.getElementById('emailVerificationForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Collect verification code
        let verificationCode = '';
        verificationInputs.forEach(input => {
            verificationCode += input.value;
        });

        // In a real app, you would send this data to your server
        console.log('Verification form submitted with code:', verificationCode);

        // Show loading state
        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'Verifying...';

        // Simulate API call
        setTimeout(() => {
            // For demo purposes, show success if code is "123456", otherwise show error
            if (verificationCode === '123456') {
                document.getElementById('verificationForm').classList.add('hidden');
                document.getElementById('successState').classList.remove('hidden');
            } else {
                document.getElementById('verificationForm').classList.add('hidden');
                document.getElementById('errorState').classList.remove('hidden');
                document.getElementById('errorMessage').textContent = 'The verification code you entered is incorrect. Please try again.';
            }

            // Reset button state
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        }, 1500);
    });

    // Try again button
    document.getElementById('tryAgainButton').addEventListener('click', function() {
        document.getElementById('errorState').classList.add('hidden');
        document.getElementById('verificationForm').classList.remove('hidden');

        // Clear inputs
        verificationInputs.forEach(input => {
            input.value = '';
        });

        // Focus the first input
        verificationInputs[0].focus();
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

    // Start countdown on page load
    startCountdown();

    // Check URL parameters to determine which state to show
    // This would be used when the user clicks the verification link in their email
    function checkUrlParams() {
        const urlParams = new URLSearchParams(window.location.search);
        const token = urlParams.get('token');
        const verified = urlParams.get('verified');

        if (token) {
            // In a real app, you would verify the token with your server
            console.log('Verifying token:', token);

            // For demo purposes, show success if verified=true, otherwise show the form
            if (verified === 'true') {
                document.getElementById('verificationForm').classList.add('hidden');
                document.getElementById('successState').classList.remove('hidden');
            }
        }
    }

    // Check URL parameters on page load
    checkUrlParams();
</script>
</body>
</html>

