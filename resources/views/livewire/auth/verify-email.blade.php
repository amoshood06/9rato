<div class="max-w-md mx-auto">
    <!-- Success State -->
    <div id="successState" class="{{ $verified ? '' : 'hidden' }}">
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
                    <a href="{{route('user.profile')}}" class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] inline-block">
                        Visit Profile
                    </a>
                    <a href="{{route('home')}}" class="py-2 px-6 bg-white border border-[#005B49] text-[#005B49] rounded-md hover:bg-gray-50 inline-block">
                        Go to Homepage
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Verification Form -->
    <div id="verificationForm" class="{{ $verified ? 'hidden' : '' }} {{ $invalid ? 'hidden' : '' }}">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-[#005B49]">Verify Your Email</h2>
            <p class="text-gray-600 mt-2">We've sent a verification code to your email. Please enter the code below to verify your account.</p>
        </div>

        <x-error-message />
        <x-success-message />
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
            <div class="p-6">
                <form id="emailVerificationForm" wire:submit="verify" class="space-y-6">
                    <div class="space-y-4">
                        <label class="block text-sm font-medium text-gray-700 text-center">Enter Verification Code</label>
                        <div class="flex justify-center space-x-2">
                            <input type="text" wire:model="otp1" maxlength="1" class="verification-input" data-index="0" required>
                            <input type="text" wire:model="otp2" maxlength="1" class="verification-input" data-index="1" required>
                            <input type="text" wire:model="otp3" maxlength="1" class="verification-input" data-index="2" required>
                            <input type="text" wire:model="otp4" maxlength="1" class="verification-input" data-index="3" required>
                            <input type="text" wire:model="otp5" maxlength="1" class="verification-input" data-index="4" required>
                            <input type="text" wire:model="otp6" maxlength="1" class="verification-input" data-index="5" required>
                        </div>
                        <p class="text-sm text-gray-600 text-center">Didn't receive the code? <button type="button" wire:click="resend" id="resendCode" class="text-[#005B49] font-medium hover:underline">Resend Code</button></p>
                        <p class="text-sm text-gray-600 text-center">Code expires in <span id="countdown">{{ gmdate('i:s', $timeLeft) }}</span></p>
                    </div>

                    <div class="flex justify-center">
                        <button
                            type="submit" wire:loading.remove
                            class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                        >
                            Verify Email
                        </button>
                        <button
                            type="button" disabled wire:loading
                            class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                        >
                            Verifing Code
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
    <div id="errorState" class="{{ $invalid ? '' : 'hidden' }}">
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
                    id="tryAgainButton" wire:click="retry"
                    class="py-2 px-6 bg-[#005B49] text-white rounded-md hover:bg-[#004a3b] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#005B49]"
                >
                    Try Again
                </button>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            document.addEventListener('livewire:load', function () {
                let countdownEl = document.getElementById('countdown');
                let timeLeft = @this.timeLeft;

                function updateCountdown() {
                    if (timeLeft > 0) {
                        timeLeft--;
                        countdownEl.textContent = new Date(timeLeft * 1000).toISOString().substr(14, 5);
                    }
                }

                // Sync Livewire with JavaScript countdown every second
                setInterval(() => {
                    if (timeLeft > 0) {
                        updateCountdown();
                        @this.call('updateTimer'); // Update the server-side Livewire timeLeft
                    }
                }, 1000);
            });
        </script>
    @endpush
</div>