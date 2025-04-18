
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('./asset/toast/toastr.min.css')}}">
    @vite('resources/css/app.css')
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeOffIcon = document.getElementById('eyeOffIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.add('hidden');
                eyeOffIcon.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('hidden');
                eyeOffIcon.classList.add('hidden');
            }
        }
    </script>
</head>
<body>
    <div class="grid min-h-screen md:grid-cols-2">
        <!-- Left Column -->
        <div class="relative hidden bg-[#00372B] p-8 text-white md:block">
            <div class="space-y-1">
                <p class="text-sm text-zinc-400"><img src="{{asset('./asset/image/Frame.svg')}}" class="w-10" alt=""></p>
                
                <div class="relative h-80">
                    <img 
                        src="{{asset('./asset/image/loginpage.png')}}"
                        alt="Credit card preview"
                        class="object-contain w-full h-full"
                    />
                </div>

                <div class="space-y-4">
                    <h1 class="text-5xl font-semibold tracking-tight">
                        Access Your<br />Order
                    </h1>
                    <p class="text-white">
                        Log in to manage your personalized cards and access exclusive features.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <livewire:auth.login />
    </div>
    <script src="./asset/toast/jquery-3.7.1.min.js"></script>
    <script src="./asset/toast/toastr.min.js"></script>
</body>
</html>