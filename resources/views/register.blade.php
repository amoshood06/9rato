<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('./asset/image/Frame.svg') }}" type="image/x-icon">
    <title>9rato - Registration</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .card {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-radius: 0.5rem;
            background-color: white;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="grid min-h-screen md:grid-cols-2">
        <!-- Left Column - Marketing Content -->
        <div class="relative hidden bg-[#005B49] p-8 text-white md:block">
            <div class="space-y-8 flex flex-col h-full">
                <div>
                    <p class="text-sm">
                        <div class="w-24 h-24 bg-white/10 rounded-lg flex items-center justify-center text-2xl font-bold"><img src="{{ asset('./asset/image/Frame.svg') }}" alt=""></div>
                    </p>
                </div>
                
                <div class="relative flex-grow flex items-center justify-center">
                    <div class="w-80 h-80 bg-white/10 rounded-lg flex items-center justify-center text-white/50 text-lg">
                        <img 
                        src="{{asset('./asset/image/slider.svg')}}"
                        alt="Credit card preview"
                        class="object-contain w-full h-full"
                    />
                    </div>
                </div>

                <div class="space-y-4">
                    <h1 class="text-3xl font-semibold tracking-tight">
                        Join 9rato –<br />The Ultimate Platform for Trading, Bidding, Rent & Swapping!
                    </h1>
                    <p class="text-white leading-relaxed">
                        Sign up now to explore seamless item trading, bidding, swapping, and selling. With 9rato, you get secure transactions, a user-friendly marketplace, and admin-approved deals.
                        <br /><br />
                        🔹 Easy registration<br />
                        🔹 Secure wallet payments<br />
                        🔹 Transparent & verified transactions<br />
                        <br />
                        ✅ Create your account now and start trading with confidence! 🚀
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Column - Registration Form -->
        <div class="flex items-center justify-center p-8">
            <div class="w-full max-w-lg space-y-8">
                <!-- Logo and Welcome -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-[#005B49] p-2">
                            <span class="block text-center text-sm font-bold text-white">9</span>
                        </div>
                        <h2 class="text-xl font-semibold">9rato</h2>
                    </div>
                    <h1 class="text-3xl font-semibold tracking-tight">
                        Hi! Welcome to<br />9rato 👋
                    </h1>
                </div>

                <!-- Registration Form -->
                <div class="card p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">Create an account</h2>
                        <p class="text-gray-500 text-sm">Enter your email below to create your account</p>
                    </div>
                    
                    <form id="registrationForm" class="space-y-4">
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <input 
                                id="name" name="name"
                                type="name" 
                                placeholder="John Doe"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                                required
                            />
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-medium">Email</label>
                            <input 
                                id="email" name="email"
                                type="email" 
                                placeholder="johndoe@example.com"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                                required
                            />
                        </div>

                        <div class="space-y-2">
                            <label for="password" class="block text-sm font-medium">Password</label>
                            <div class="relative">
                                <input 
                                    id="password" name="password"
                                    type="password"
                                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                                    required
                                />
                                <button 
                                    type="button" 
                                    id="togglePassword"
                                    class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 bg-[#005B49]:text-gray-700"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeIcon" style="display: none;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeOffIcon">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="confirm_password" class="block text-sm font-medium">Confirm Password</label>
                            <div class="relative">
                                <input 
                                    id="confirm_password" name="password_confirmation"
                                    type="password"
                                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/20"
                                    required
                                />
                                <button 
                                    type="button" 
                                    id="togglePassword"
                                    class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 bg-[#005B49]:text-gray-700"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeIcon" style="display: none;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeOffIcon">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full py-2 px-4 bg-[#005B49] text-white font-medium rounded-md transition-colors"
                            id="submitButton"
                        >
                            Create account
                        </button>
                    </form>

                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-xs uppercase">
                            <span class="bg-white px-2 text-gray-500">
                                Or continue with
                            </span>
                        </div>
                    </div>

                    <button 
                        type="button" 
                        class="w-full py-2 px-4 border border-gray-300 rounded-md flex items-center justify-center text-sm font-medium #004A3B:bg-gray-50 transition-colors"
                        id="googleSignIn"
                    >
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        Google
                    </button>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-500">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-primary #004A3B:underline ml-1">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="fixed top-4 right-4 bg-[#005B49] text-white px-4 py-2 rounded-lg shadow-lg transform transition-transform duration-300 translate-x-full">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span id="toastMessage">Success message here</span>
        </div>
    </div>

    <script>
        // Password Toggle
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeOffIcon = document.getElementById('eyeOffIcon');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            if (type === 'text') {
                eyeIcon.style.display = 'block';
                eyeOffIcon.style.display = 'none';
            } else {
                eyeIcon.style.display = 'none';
                eyeOffIcon.style.display = 'block';
            }
        });

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const form = document.getElementById('registrationForm');
        const submitButton = document.getElementById('submitButton');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');

        form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        submitButton.textContent = 'Creating account...';
        submitButton.disabled = true;

        fetch('/register', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'X-Requested-With': 'XMLHttpRequest', // Laravel expects this
                'Accept': 'application/json',
            },
        })
        .then(async (response) => {
            if (!response.ok) {
                // Extract error message
                const errorData = await response.json();
                throw new Error(errorData.message || 'An error occurred');
            }

            // Handle success
            return response.json();
        })
        .then((data) => {
            // Show success toast
            showToast(data.message, 'success');

            // Reset form
            form.reset();
        })
        .catch((error) => {
            // Show error toast
            showToast(error.message, 'error');
        })
        .finally(() => {
            // Reset button state
            submitButton.textContent = 'Create account';
            submitButton.disabled = false;
        });
    });

        // Google Sign In
        const googleButton = document.getElementById('googleSignIn');
        
        googleButton.addEventListener('click', function() {
            // Show loading state
            googleButton.textContent = 'Signing in with Google...';
            googleButton.disabled = true;
            
            // Simulate API call
            setTimeout(function() {
                // Show success message
                showToast('You\'ve successfully signed in with Google!', 'success');
                
                // Reset button
                googleButton.innerHTML = '<svg class="w-5 h-5 mr-2" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>Google';
                googleButton.disabled = false;
                
                // Redirect (uncomment to enable)
                // window.location.href = 'dashboard.html';
            }, 1500);
        });

        // Toast Function
        function showToast(message, type = 'success') {
            toastMessage.textContent = message;
            
            // Set color based on type
            if (type === 'success') {
                toast.classList.remove('bg-red-500');
                toast.classList.add('bg-green-500');
            } else {
                toast.classList.remove('bg-green-500');
                toast.classList.add('bg-red-500');
            }
            
            // Show toast
            toast.classList.remove('translate-x-full');
            
            // Hide toast after 3 seconds
            setTimeout(function() {
                toast.classList.add('translate-x-full');
            }, 3000);
        }
    </script>
</body>
</html>