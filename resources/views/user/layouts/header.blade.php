<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/image/logo.svg') }}" type="image/x-icon"/>
    @vite('resources/css/app.css')
    <title> {{$title}} </title>
</head>
<body class="font-inter">
    <header class="main-header bg-[#005C48]">
        <nav class="flex justify-between items-center w-[92%] h-[99px] mx-auto">
          <div>
            <img class="md:pl-[55px] pl-[0px]" src="{{ asset('assets/image/logo.svg') }}" alt="">
          </div>
          <div class="nav-links duration-500 md:static absolute bg-[#005C48] md:min-h-fit min-h-[16vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 font-medium">
              <li><a href="{{url('/')}}" class="text-[#F3DE49] hover:text-gray-200">Home</a></li>
              <li><a href="{{url('/product')}}" class="text-[#F3DE49] hover:text-gray-200">Product</a></li>
              <li><a href="{{url('/marketplace')}}" class="text-[#F3DE49] hover:text-gray-200">Market Place</a></li>
              <li><a href="#" class="text-[#F3DE49] hover:text-gray-200">Blogs</a></li>
              <li><a href="#" class="text-[#F3DE49] hover:text-gray-200">Pricing</a></li>
              
            </ul>
          </div>
          <div class="flex items-center gap-6 font-medium">
            <a href="{{url('/login')}}">
            <button class="text-[#F3DE49] hover:text-gray-200">
                <span class="inline-flex items-center">
                <img class="mr-2" src="{{ asset('assets/image/Vector.svg') }}" alt="">
                Login
                </span>
            </button>
            </a>
            <a href="{{url('/signup')}}">
            <button class="bg-[#F3DE49] px-5 py-2 rounded-[10px] text-[#005C48] md:text-[16px] text-[15px]">Sign Up</button>
            </a>
            <img name="menu" onclick="onToggleMenu(this)" class="text-3xl cursor-pointer md:hidden w-[30px] h-[30px]" src="{{ asset('assets/image/icons8-menu.svg') }}" alt="">
          </div>
        </nav>
      </header>

      <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
      </script>