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
    <a href="{{route('home')}}" class="flex gap-[5px] items-center">
        <img src="{{asset('./asset/image/Frame.svg')}}" alt="" class="w-[20px]">
        <h1 class="text-[20px] md:text-[20px] font-bold text-white">9RATO</h1>
    </a>

    <a href="{{route('home')}}">
        <button class="bg-gray-200 px-4 py-2 rounded-full font-bold text-sm md:text-base">Back to Home</button>
    </a>
</header>

<!-- Main Content -->
<main class="bg-white rounded-t-[2rem] min-h-screen p-4 lg:p-6 pb-safe">
    <livewire:auth.verify-email />
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
    // document.getElementById('emailVerificationForm').addEventListener('submit', function(e) {
    //     e.preventDefault();

    //     // Collect verification code
    //     let verificationCode = '';
    //     verificationInputs.forEach(input => {
    //         verificationCode += input.value;
    //     });

    //     // In a real app, you would send this data to your server
    //     console.log('Verification form submitted with code:', verificationCode);

    //     // Show loading state
    //     const submitButton = this.querySelector('button[type="submit"]');
    //     const originalText = submitButton.textContent;
    //     submitButton.disabled = true;
    //     submitButton.textContent = 'Verifying...';

    //     // Simulate API call
    //     setTimeout(() => {
    //         // For demo purposes, show success if code is "123456", otherwise show error
    //         if (verificationCode === '123456') {
    //             document.getElementById('verificationForm').classList.add('hidden');
    //             document.getElementById('successState').classList.remove('hidden');
    //         } else {
    //             document.getElementById('verificationForm').classList.add('hidden');
    //             document.getElementById('errorState').classList.remove('hidden');
    //             document.getElementById('errorMessage').textContent = 'The verification code you entered is incorrect. Please try again.';
    //         }

    //         // Reset button state
    //         submitButton.disabled = false;
    //         submitButton.textContent = originalText;
    //     }, 1500);
    // });

    // // Try again button
    // document.getElementById('tryAgainButton').addEventListener('click', function() {
    //     document.getElementById('errorState').classList.add('hidden');
    //     document.getElementById('verificationForm').classList.remove('hidden');

    //     // Clear inputs
    //     verificationInputs.forEach(input => {
    //         input.value = '';
    //     });

    //     // Focus the first input
    //     verificationInputs[0].focus();
    // });

    // // Resend code
    // document.getElementById('resendCode').addEventListener('click', function() {
    //     this.disabled = true;
    //     this.textContent = 'Sending...';

    //     // Simulate API call
    //     setTimeout(() => {
    //         // Reset countdown
    //         startCountdown();

    //         // Reset button state
    //         this.disabled = false;
    //         this.textContent = 'Resend Code';

    //         // Show message
    //         alert('A new verification code has been sent to your email.');
    //     }, 1500);
    // });

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
    // function checkUrlParams() {
    //     const urlParams = new URLSearchParams(window.location.search);
    //     const token = urlParams.get('token');
    //     const verified = urlParams.get('verified');

    //     if (token) {
    //         // In a real app, you would verify the token with your server
    //         console.log('Verifying token:', token);

    //         // For demo purposes, show success if verified=true, otherwise show the form
    //         if (verified === 'true') {
    //             document.getElementById('verificationForm').classList.add('hidden');
    //             document.getElementById('successState').classList.remove('hidden');
    //         }
    //     }
    // }

    // Check URL parameters on page load
    checkUrlParams();
</script>
</body>
</html>

