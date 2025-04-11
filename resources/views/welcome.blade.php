<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('./asset/image/Frame.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./asset/css/home-moblie.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen bg-[#005B49]">
    <!--header-->
    <div class="header-banner flex justify-center items-center w-full">
        <img src="{{ asset('./asset/image/NEW-jumiagift.gif') }}" alt="" class="w-[800px]">
    </div>
    <div class="header-one flex items-center justify-center sm:gap-[400px] gap-[90px] bg-[#005B49] w-full h-[70px]">
        <div class="header-child-one flex items-center justiy-center gap-[10px]">
            <img src="{{ asset('./asset/image/Frame.svg') }}" alt="" class="w-[35px]">
            <p class="text-[#F5CB03] font-bold">Sell, Trade, Bid, Swap on 9rato</p>
        </div>
        <div class="header-child-two flex items-center justiy-center gap-[10px]">
            <div class="header-child-two-text flex items-center justiy-center gap-[5px]">
                <p class="hideOnMobile text-[#F5CB03] font-bold">9rato</p>
                <img src="./asset/image/Frame.svg" alt="" class="hideOnMobile w-[35px]">
                <p class="hideOnMobile text-[#F5CB03] font-bold">Wallet</p>
            </div>
            <!--Menu button-->
            <div class="Menu">
                <img src="{{ asset('./asset/image/icons8_menu_50px_1.png') }}" onclick="showSidebar()" alt=""
                    class="menu-button w-[40px]">
            </div>
            <nav class="sidebar">
                <ul class="flex flex-col gap-[5px] w-full ">
                    <li><img src="{{ asset('./asset/image/icons8_delete_26px.png') }}" alt=""
                            onclick="hideSidebar()" class="hover:bg-green-100 outline outline-1"></li>
                    <li class="font-bold hover:bg-gray-400 w-full"><a href="">Home</a></li>
                    <li class="font-bold hover:bg-gray-400 w-full"><a href="" class="font-bold">Wallet</a></li>
                    <li class="font-bold hover:bg-gray-400 w-full"><a href="{{ route('login') }}" class="font-bold">Account</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--header search-->
    <div
        class="header-search flex bg-[#D8D8D8] justify-center items-center h-[80px] sm:gap-[90px] gap-[30px] w-full z-40  top-0 sticky shadow-md">
        <a href="{{ url('index.php') }}">
            <div class="header-search-logo flex justify-center items-center gap-[5px]">
                <img src="{{ asset('./asset/image/Frame.svg') }}" alt="" class="w-[35px]">
                <p class="text-[#F5CB03] font-bold text-[20px]">9rato</p>
            </div>
        </a>
        <div class="header-search-section flex justify-center items-center gap-[6px]">
            <div
                class="search-input flex justify-center items-center outline outline-1 outline-gray-600 rounded-[10px] p-[5px] w-[400px]">
                <img src="{{ asset('./asset/image/icons8_search_48px_1.png') }}" alt="" class="w-[40px]">
                <input type="text" name="" id=""
                    class="outline-none text-black bg-[#D8D8D8] w-[400px] p-[10px]"
                    placeholder="Search products, brand and category">
            </div>
            <button class="text-center text-white bg-[#F5CB03] p-[15px] rounded-[10px] text-[15px] font-semibold">
                <p>Search</p>
            </button>
        </div>
        <div class=" hideOnMobile search-account-section flex jusfity-center items-center font-semibold gap-[20px]">
            <a href="{{ route('login') }}" class="hideOnMobile">
                <div class="account-text text-black flex gap-[8px] justify-center items-center">
                    <img src="{{ asset('./asset/image/icons8_customer_64px.png') }}" alt="" class="w-[40px]">
                    <p>Acount</p>
                </div>
            </a>
            <a href="" class="hideOnMobile">
                <div class="account-help text-black flex gap-[8px] justify-center items-center">
                    <img src="{{ asset('./asset/image/icons8_help_100px.png') }}" alt="" class="w-[40px]">
                    <p>Help</p>
                </div>
            </a>
        </div>
    </div>

    <!--slider-->
    <div class="slider-full p-[30px] flex justify-center items-center gap-[15px] mb-[90px] mt-[30px]">
        <div class="slider-menu hideOnMobile w-[285px] bg-white p-[10px] rounded-[30px]">
            <div class="slider-menu-link w-full hover:bg-gray-400 hover:text-white p-[20px] rounded-[20px]">
                <a href="" class="flex gap-3 font-bold">
                    <img src="{{ asset('./asset/image/icons8_home_30px.png') }}" alt="" class="w-[26px]">
                    <p class="">Home</p>
                </a>
            </div>
            <div class="slider-menu-link w-full hover:bg-gray-400 hover:text-white p-[20px] rounded-[20px]">
                <a href="" class="flex gap-3 font-bold">
                    <img src="{{ asset('./asset/image/icons8_iphone_26px.png') }}" alt="">
                    <p class="">Phone</p>
                </a>
            </div>
            <div class="slider-menu-link w-full hover:bg-gray-400 hover:text-white p-[20px] rounded-[20px]">
                <a href="">
                    <img src="{{ asset('asset/image/') }}" alt="">
                    <p class="">Home</p>
                </a>
            </div>
            <div class="slider-menu-link w-full hover:bg-gray-400 hover:text-white p-[20px] rounded-[20px]">
                <a href="">
                    <img src="{{ asset('asset/image/') }}" alt="">
                    <p class="">Home</p>
                </a>
            </div>
            <div class="slider-menu-link w-full hover:bg-gray-400 hover:text-white p-[20px] rounded-[20px]">
                <a href="">
                    <img src="{{ asset('asset/image/') }}" alt="">
                    <p class="">Home</p>
                </a>
            </div>
        </div>
        <div class="slider-banner-one w-[400px]">
            <img src="{{ asset('./asset/image/giftsmmm.gif') }}" alt=""
                class="rounded-[20px] w-[400px] h-[340px]">
        </div>
        <div class="slider-profile flex flex-col w-[200px] gap-[15px]">
            <div
                class="profile-image  p-[26px] bg-white rounded-[20px] flex flex-col justify-center items-center gap-[5px]">
                <img src="{{ asset('./asset/image/icons8_male_user_50px.png') }}" alt="">
                <p class="p1 font-bold">Hi Trillionairas</p>
                <p class="p2 font-semibold">Get Started ?</p>
            </div>
            <div class="slider-banner-two">
                <img src="{{ asset('./asset/image/BSB.gif') }}" alt="" class="w-[200px] rounded-[20px]">
            </div>
        </div>
    </div>

    <!--ads section-->
    <div
        class="back-for-ads w-full flex flex-col justify-center items-center bg-[#EBF2F7] rounded-t-[30px] px-2 sm:px-4">
        <div
            class="advert-promote-section w-full max-w-[1075px] bg-white p-3 sm:p-5 md:p-[30px] mt-[-70px] rounded-[20px]">
            <div class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-5">

                <!-- Ad Item 1 (with swap button and item name) -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Ad Item 2 (with swap button and item name) -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>


                <!-- Ad Item 3 (with swap button and item name) -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>


                <!-- Ad Item 4 (with swap button and item name) -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Ad Item 5 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Ad Item 6 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Ad Item 7 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Ad Item 8 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Ad Item 9 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>
                <!-- Ad Item 9 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>
                <!-- Ad Item 9 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>
                <!-- Ad Item 9 -->
                <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                    <div class="relative w-full">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                        <div class="absolute inset-x-0 bottom-2 text-center">
                            <p
                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                ₦1000
                            </p>
                        </div>
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 w-full">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                        <div class="mt-1 flex justify-center">
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Swap</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of ads section-->
        <!--line-green-->
        <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
            <div
                class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                <!-- Content goes here -->
            </div>
        </div>

        <!--swap section-->
        <div class="swapsection bg-white pt-0 rounded-[20px] w-full max-w-[1075px] mx-auto">
            <div
                class="swapmoresecton flex justify-between items-center p-2 sm:p-3 md:px-[10px] md:py-4 rounded-t-[20px] bg-[#F5CB03]">
                <div class="text-base sm:text-lg font-medium">Swap</div>
                <div>
                    <a href="#">
                        <button
                            class="px-2 py-1 sm:px-3 sm:py-1.5 text-sm sm:text-base hover:bg-[#e6be03] rounded transition-colors">
                            See All
                        </button>
                    </a>
                </div>
            </div>

            <!--swap items list-->
            <div
                class="swapitems w-full grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 p-2 sm:p-3">
                <!-- Swap Item 1 -->
                <div
                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/image/swap-item1.jpg') }}" alt="Swap Item"
                            class="w-full aspect-square object-cover" />
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">iPhone 13 Pro</h3>
                        <div class="flex items-center mt-1">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-bold text-sm sm:text-base">₦120,000</p>
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Swap Item 2 -->
                <div
                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/image/swap-item2.jpg') }}" alt="Swap Item"
                            class="w-full aspect-square object-cover" />
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">PlayStation 5</h3>
                        <div class="flex items-center mt-1">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-bold text-sm sm:text-base">₦250,000</p>
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Swap Item 3 -->
                <div
                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/image/swap-item3.jpg') }}" alt="Swap Item"
                            class="w-full aspect-square object-cover" />
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="currentColor"
                                viewBox="0 0 24 24" stroke="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">MacBook Air M2</h3>
                        <div class="flex items-center mt-1">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-bold text-sm sm:text-base">₦450,000</p>
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Swap Item 4 -->
                <div
                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/image/swap-item4.jpg') }}" alt="Swap Item"
                            class="w-full aspect-square object-cover" />
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">Nike Air Jordan</h3>
                        <div class="flex items-center mt-1">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-bold text-sm sm:text-base">₦45,000</p>
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Swap Item 5 -->
                <div
                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/image/swap-item5.jpg') }}" alt="Swap Item"
                            class="w-full aspect-square object-cover" />
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">Canon EOS R5</h3>
                        <div class="flex items-center mt-1">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-bold text-sm sm:text-base">₦850,000</p>
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Swap</button>
                        </div>
                    </div>
                </div>

                <!-- Swap Item 6 -->
                <div
                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/image/swap-item6.jpg') }}" alt="Swap Item"
                            class="w-full aspect-square object-cover" />
                        <button class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="currentColor"
                                viewBox="0 0 24 24" stroke="none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">Apple Watch Ultra</h3>
                        <div class="flex items-center mt-1">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-bold text-sm sm:text-base">₦350,000</p>
                            <button
                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Swap</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--line-green-->
        <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
            <div
                class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                <!-- Content goes here -->
            </div>
        </div>
        <!-- Bid ads section-->
        <div
            class="back-for-ads w-full flex flex-col justify-center items-center bg-[#EBF2F7] rounded-t-[30px] px-2 sm:px-4">
            <div class="advert-promote-section w-full max-w-[1075px] bg-white p-3 sm:p-5 md:p-[30px] rounded-[20px]">
                <div class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-5">
                    <!-- Ad Item 1 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>
                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>
                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>
                    <!-- Ad Item 9 -->
                    <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                        <div class="relative w-full">
                            <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                            <div class="absolute inset-x-0 bottom-2 text-center">
                                <p
                                    class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                    ₦1000
                                </p>
                            </div>
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2 w-full">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name</h3>
                            <div class="mt-1 flex justify-center">
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of ads section-->

            <!--line-green-->
            <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                <div
                    class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                    <!-- Content goes here -->
                </div>
            </div>
            <!--bid section-->
            <div class="Bidsection bg-white pt-0 p-2 sm:p-3 md:p-[5px] rounded-[20px] w-full max-w-[1075px] mx-auto">
                <div
                    class="Bidmoresecton flex justify-between items-center p-2 sm:p-3 md:px-[10px] md:py-4 rounded-t-[20px] bg-[#F5CB03]">
                    <div class="text-base sm:text-lg font-medium">Bid</div>
                    <div>
                        <a href="#">
                            <button
                                class="px-2 py-1 sm:px-3 sm:py-1.5 text-sm sm:text-base hover:bg-[#e6be03] rounded transition-colors">
                                See All
                            </button>
                        </a>
                    </div>
                </div>

                <!--swap items list-->
                <div
                    class="Biditems w-full grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 p-2 sm:p-3">
                    <!-- Bid Item 1 -->
                    <div
                        class="Bid-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('asset/image/swap-item1.jpg') }}" alt="Swap Item"
                                class="w-full aspect-square object-cover" />
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1">iPhone 13 Pro</h3>
                            <div class="flex items-center mt-1">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="font-bold text-sm sm:text-base">₦120,000</p>
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Bid Item 2 -->
                    <div
                        class="Bid-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('asset/image/swap-item2.jpg') }}" alt="Bid Item"
                                class="w-full aspect-square object-cover" />
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1">PlayStation 5</h3>
                            <div class="flex items-center mt-1">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="font-bold text-sm sm:text-base">₦250,000</p>
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Bid Item 3 -->
                    <div
                        class="bid-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('asset/image/swap-item3.jpg') }}" alt="Bid Item"
                                class="w-full aspect-square object-cover" />
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                    fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1">MacBook Air M2</h3>
                            <div class="flex items-center mt-1">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="font-bold text-sm sm:text-base">₦450,000</p>
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Bid Item 4 -->
                    <div
                        class="Bid-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('asset/image/swap-item4.jpg') }}" alt="Bid Item"
                                class="w-full aspect-square object-cover" />
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1">Nike Air Jordan</h3>
                            <div class="flex items-center mt-1">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="font-bold text-sm sm:text-base">₦45,000</p>
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Bid Item 5 -->
                    <div
                        class="Bid-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('asset/image/swap-item5.jpg') }}" alt="Bid Item"
                                class="w-full aspect-square object-cover" />
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1">Canon EOS R5</h3>
                            <div class="flex items-center mt-1">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="font-bold text-sm sm:text-base">₦850,000</p>
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Bid</button>
                            </div>
                        </div>
                    </div>

                    <!-- Bid Item 6 -->
                    <div
                        class="Bid-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('asset/image/swap-item6.jpg') }}" alt="Bid Item"
                                class="w-full aspect-square object-cover" />
                            <button
                                class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                    fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="p-2">
                            <h3 class="font-medium text-sm sm:text-base line-clamp-1">Apple Watch Ultra</h3>
                            <div class="flex items-center mt-1">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <p class="font-bold text-sm sm:text-base">₦350,000</p>
                                <button
                                    class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--line-green-->
            <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                <div
                    class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                    <!-- Content goes here -->
                </div>
            </div>
            <!-- Trade ads section-->
            <div
                class="back-for-ads w-full flex flex-col justify-center items-center bg-[#EBF2F7] rounded-t-[30px] px-2 sm:px-4">
                <div
                    class="advert-promote-section w-full max-w-[1075px] bg-white p-3 sm:p-5 md:p-[30px] rounded-[20px]">
                    <div
                        class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-5">
                        <!-- Ad Item 1 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>
                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>
                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>
                        <!-- Ad Item 9 -->
                        <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                            <div class="relative w-full">
                                <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                    class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                <div class="absolute inset-x-0 bottom-2 text-center">
                                    <p
                                        class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                        ₦1000
                                    </p>
                                </div>
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2 w-full">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                </h3>
                                <div class="mt-1 flex justify-center">
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Trade</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of ads section-->
                <!--line-green-->
                <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                    <div
                        class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                        <!-- Content goes here -->
                    </div>
                </div>
                <!--swap section-->
                <div
                    class="swapsection bg-white pt-0 p-2 sm:p-3 md:p-[5px] rounded-[20px] w-full max-w-[1075px] mx-auto">
                    <div
                        class="swapmoresecton flex justify-between items-center p-2 sm:p-3 md:px-[10px] md:py-4 rounded-t-[20px] bg-[#F5CB03]">
                        <div class="text-base sm:text-lg font-medium">Trade</div>
                        <div>
                            <a href="#">
                                <button
                                    class="px-2 py-1 sm:px-3 sm:py-1.5 text-sm sm:text-base hover:bg-[#e6be03] rounded transition-colors">
                                    See All
                                </button>
                            </a>
                        </div>
                    </div>

                    <!--swap items list-->
                    <div
                        class="Tradeitems w-full grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 p-2 sm:p-3">
                        <!-- Swap Item 1 -->
                        <div
                            class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="{{ asset('asset/image/swap-item1.jpg') }}" alt="Trade Item"
                                    class="w-full aspect-square object-cover" />
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1">iPhone 13 Pro</h3>
                                <div class="flex items-center mt-1">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="font-bold text-sm sm:text-base">₦120,000</p>
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Trade Item 2 -->
                        <div
                            class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="{{ asset('asset/image/swap-item2.jpg') }}" alt="Trade Item"
                                    class="w-full aspect-square object-cover" />
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1">PlayStation 5</h3>
                                <div class="flex items-center mt-1">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="font-bold text-sm sm:text-base">₦250,000</p>
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Trade Item 3 -->
                        <div
                            class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="{{ asset('asset/image/swap-item3.jpg') }}" alt="Swap Item"
                                    class="w-full aspect-square object-cover" />
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                        fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1">MacBook Air M2</h3>
                                <div class="flex items-center mt-1">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="font-bold text-sm sm:text-base">₦450,000</p>
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Trade Item 4 -->
                        <div
                            class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="{{ asset('asset/image/swap-item4.jpg') }}" alt="Swap Item"
                                    class="w-full aspect-square object-cover" />
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1">Nike Air Jordan</h3>
                                <div class="flex items-center mt-1">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="font-bold text-sm sm:text-base">₦45,000</p>
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Trade Item 5 -->
                        <div
                            class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="{{ asset('asset/image/swap-item5.jpg') }}" alt="Swap Item"
                                    class="w-full aspect-square object-cover" />
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1">Canon EOS R5</h3>
                                <div class="flex items-center mt-1">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="font-bold text-sm sm:text-base">₦850,000</p>
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Trade</button>
                                </div>
                            </div>
                        </div>

                        <!-- Trade Item 6 -->
                        <div
                            class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="{{ asset('asset/image/swap-item6.jpg') }}" alt="Swap Item"
                                    class="w-full aspect-square object-cover" />
                                <button
                                    class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                        fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <h3 class="font-medium text-sm sm:text-base line-clamp-1">Apple Watch Ultra</h3>
                                <div class="flex items-center mt-1">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="font-bold text-sm sm:text-base">₦350,000</p>
                                    <button
                                        class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Trade</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--line-green-->
                <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                    <div
                        class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                        <!-- Content goes here -->
                    </div>
                </div>
                <!-- Buy ads section-->
                <div
                    class="back-for-ads w-full flex flex-col justify-center items-center bg-[#EBF2F7] rounded-t-[30px] px-2 sm:px-4">
                    <div
                        class="advert-promote-section w-full max-w-[1075px] bg-white p-3 sm:p-5 md:p-[30px] rounded-[20px]">
                        <div
                            class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-5">
                            <!-- Ad Item 1 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Ad Item 9 -->
                            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                <div class="relative w-full">
                                    <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                        class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                    <div class="absolute inset-x-0 bottom-2 text-center">
                                        <p
                                            class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                            ₦1000
                                        </p>
                                    </div>
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2 w-full">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product Name
                                    </h3>
                                    <div class="mt-1 flex justify-center">
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of ads section-->

                    <!--line-green-->
                    <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                        <div
                            class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                            <!-- Content goes here -->
                        </div>
                    </div>
                    <!--Buy section-->
                    <div class="buysection bg-white pt-0 rounded-[20px] w-full max-w-[1075px] mx-auto">
                        <div
                            class="buymoresecton flex justify-between items-center p-2 sm:p-3 md:px-[10px] md:py-4 rounded-t-[20px] bg-[#F5CB03]">
                            <div class="text-base sm:text-lg font-medium">Buy</div>
                            <div>
                                <a href="#">
                                    <button
                                        class="px-2 py-1 sm:px-3 sm:py-1.5 text-sm sm:text-base hover:bg-[#e6be03] rounded transition-colors">
                                        See All
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!--swap items list-->
                        <div
                            class="buyitems w-full grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 p-2 sm:p-3">
                            <!-- Swap Item 1 -->
                            <div
                                class="buy-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                <div class="relative">
                                    <img src="{{ asset('asset/image/56.jpg') }}" alt="Trade Item"
                                        class="w-full aspect-square object-cover" />
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1">iPhone 13 Pro</h3>
                                    <div class="flex items-center mt-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-1">
                                        <p class="font-bold text-sm sm:text-base">₦120,000</p>
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Trade Item 2 -->
                            <div
                                class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                <div class="relative">
                                    <img src="{{ asset('asset/image/56.jpg') }}" alt="Trade Item"
                                        class="w-full aspect-square object-cover" />
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1">PlayStation 5</h3>
                                    <div class="flex items-center mt-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-1">
                                        <p class="font-bold text-sm sm:text-base">₦250,000</p>
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Trade Item 3 -->
                            <div
                                class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                <div class="relative">
                                    <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                        class="w-full aspect-square object-cover" />
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1">MacBook Air M2</h3>
                                    <div class="flex items-center mt-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-1">
                                        <p class="font-bold text-sm sm:text-base">₦450,000</p>
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Trade Item 4 -->
                            <div
                                class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                <div class="relative">
                                    <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                        class="w-full aspect-square object-cover" />
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1">Nike Air Jordan</h3>
                                    <div class="flex items-center mt-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-1">
                                        <p class="font-bold text-sm sm:text-base">₦45,000</p>
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Trade Item 5 -->
                            <div
                                class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                <div class="relative">
                                    <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                        class="w-full aspect-square object-cover" />
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1">Canon EOS R5</h3>
                                    <div class="flex items-center mt-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-1">
                                        <p class="font-bold text-sm sm:text-base">₦850,000</p>
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Buy</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Trade Item 6 -->
                            <div
                                class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                <div class="relative">
                                    <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                        class="w-full aspect-square object-cover" />
                                    <button
                                        class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-2">
                                    <h3 class="font-medium text-sm sm:text-base line-clamp-1">Apple Watch Ultra</h3>
                                    <div class="flex items-center mt-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-1">
                                        <p class="font-bold text-sm sm:text-base">₦350,000</p>
                                        <button
                                            class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--line-green-->
                    <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                        <div
                            class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                            <!-- Content goes here -->
                        </div>
                    </div>
                    <!-- Rent ads section-->
                    <div
                        class="back-for-ads w-full flex flex-col justify-center items-center bg-[#EBF2F7] rounded-t-[30px] px-2 sm:px-4">
                        <div
                            class="advert-promote-section w-full max-w-[1075px] bg-white p-3 sm:p-5 md:p-[30px] rounded-[20px]">
                            <div
                                class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-5">
                                <!-- Ad Item 1 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ad Item 9 -->
                                <div
                                    class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                                    <div class="relative w-full">
                                        <img src="{{ asset('asset/image/BSB.gif') }}" alt="Advertisement"
                                            class="rounded-[20px] w-full aspect-square object-cover min-w-[80px]" />
                                        <div class="absolute inset-x-0 bottom-2 text-center">
                                            <p
                                                class="font-bold text-white text-[16px] xs:text-[18px] sm:text-[20px] md:text-[24px] lg:text-[30px] shadow-md inline-block px-2 bg-black/30 rounded-lg">
                                                ₦1000
                                            </p>
                                        </div>
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2 w-full">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1 text-center">Product
                                            Name
                                        </h3>
                                        <div class="mt-1 flex justify-center">
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90 w-full max-w-[100px]">Rent</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end of ads section-->
                        <div class="green-line flex justify-center items-center w-full px-4 sm:px-6">
                            <div
                                class="green-line-main p-3 sm:p-4 md:p-[20px] bg-[#005B49] w-full max-w-[700px] min-h-[60px] sm:min-h-[80px] md:min-h-[100px]">
                                <!-- Content goes here -->
                            </div>
                        </div>
                        <!--Buy section-->
                        <div class="buysection bg-white pt-0 rounded-[20px] w-full max-w-[1075px] mx-auto">
                            <div
                                class="buymoresecton flex justify-between items-center p-2 sm:p-3 md:px-[10px] md:py-4 rounded-t-[20px] bg-[#F5CB03]">
                                <div class="text-base sm:text-lg font-medium">Rent</div>
                                <div>
                                    <a href="#">
                                        <button
                                            class="px-2 py-1 sm:px-3 sm:py-1.5 text-sm sm:text-base hover:bg-[#e6be03] rounded transition-colors">
                                            See All
                                        </button>
                                    </a>
                                </div>
                            </div>

                            <!--swap items list-->
                            <div
                                class="buyitems w-full grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 p-2 sm:p-3">
                                <!-- Swap Item 1 -->
                                <div
                                    class="buy-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                    <div class="relative">
                                        <img src="{{ asset('asset/image/56.jpg') }}" alt="Trade Item"
                                            class="w-full aspect-square object-cover" />
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">iPhone 13 Pro</h3>
                                        <div class="flex items-center mt-1">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-gray-300" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <p class="font-bold text-sm sm:text-base">₦120,000</p>
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trade Item 2 -->
                                <div
                                    class="swap-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                    <div class="relative">
                                        <img src="{{ asset('asset/image/56.jpg') }}" alt="Trade Item"
                                            class="w-full aspect-square object-cover" />
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">PlayStation 5</h3>
                                        <div class="flex items-center mt-1">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <p class="font-bold text-sm sm:text-base">₦250,000</p>
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trade Item 3 -->
                                <div
                                    class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                    <div class="relative">
                                        <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                            class="w-full aspect-square object-cover" />
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                                fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">MacBook Air M2</h3>
                                        <div class="flex items-center mt-1">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-gray-300" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-gray-300" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <p class="font-bold text-sm sm:text-base">₦450,000</p>
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trade Item 4 -->
                                <div
                                    class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                    <div class="relative">
                                        <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                            class="w-full aspect-square object-cover" />
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">Nike Air Jordan</h3>
                                        <div class="flex items-center mt-1">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <p class="font-bold text-sm sm:text-base">₦45,000</p>
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trade Item 5 -->
                                <div
                                    class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                    <div class="relative">
                                        <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                            class="w-full aspect-square object-cover" />
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">Canon EOS R5</h3>
                                        <div class="flex items-center mt-1">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-gray-300" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <p class="font-bold text-sm sm:text-base">₦850,000</p>
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Rent</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trade Item 6 -->
                                <div
                                    class="Trade-item flex flex-col rounded-lg overflow-hidden border border-gray-200 hover:shadow-md transition-shadow">
                                    <div class="relative">
                                        <img src="{{ asset('asset/image/56.jpg') }}" alt="Swap Item"
                                            class="w-full aspect-square object-cover" />
                                        <button
                                            class="absolute top-2 right-2 bg-white p-1.5 rounded-full shadow-sm hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500"
                                                fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="font-medium text-sm sm:text-base line-clamp-1">Apple Watch Ultra
                                        </h3>
                                        <div class="flex items-center mt-1">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1">
                                            <p class="font-bold text-sm sm:text-base">₦350,000</p>
                                            <button
                                                class="bg-[#005B49] text-white text-xs px-2 py-1 rounded hover:bg-opacity-90">Rent</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2 mt-2 mb-2">
                            <div class="flex gap-2">
                                <div class="bg-white md:rounded-[20px] rounded-[5px] p-[5px]"> <img src="{{ asset('asset/image/Magic-deals-female-572X250.jpg') }}" class="object-cover md:rounded-[20px] rounded-[5px]"/> </div>
                                <div class="bg-white md:rounded-[20px] rounded-[5px] p-[5px]"> <img src="{{ asset('asset/image/Magic-deals-female-572X250.jpg') }}" class="object-cover md:rounded-[20px] rounded-[5px]"/> </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="bg-white md:rounded-[20px] rounded-[5px] p-[5px]"> <img src="{{ asset('asset/image/Magic-deals-female-572X250.jpg') }}" class="object-cover md:rounded-[20px] rounded-[5px]" /> </div>
                                <div class="bg-white md:rounded-[20px] rounded-[5px] p-[5px]"> <img src="{{ asset('asset/image/Magic-deals-female-572X250.jpg') }}" class="object-cover md:rounded-[20px] rounded-[5px]"/> </div>
                            </div>
                        </div>

                        <!--ship icon-->
                        <div>
                            <img src="{{ asset('asset/image/footer-nigeria-new.svg') }}" alt="Swap Item"
                                class="w-full" />

                        </div>
                        <!--end ship icon-->

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--footer-->

    <footer class="main-footer bg-[#005C48] pb-[20px]">
        <!-- Your footer content -->
        <div class="footer md:flex grid justify-between md:h-[200px] pt-8 min-h-fit w-[80%] mx-auto">
            <div class="md:p-0 p-4 text-[14px] gap-[8px]">
                <div>
                    <img class="w-[56px] h-[67px]" src="asset/image/frame.svg" alt="">
                </div>
                <p class="text-white opacity-50 mt-2"> We can be your sure <br> market plug and more...
                </p>
                <ul class="flex items-center gap-[22px] mt-2">
                    <i class="fa-solid fa-user text-white"></i> <!-- Solid user icon -->
                    <i class="fa-brands fa-twitter text-white"></i> <!-- Twitter brand icon -->
                    <i class="fa-solid fa-house text-white"></i> <!-- Home icon -->
                </ul>
            </div>

            <div class="md:p-0 p-4 text-[14px] gap-[8px]">
                <h5 class="text-[#E6C407]">Quick Link</h5>
                <ul class="leading-[24px] gap-[8px]">
                    <li><a href="index.php" class="text-white hover:text-gray-200">Home</a></li>
                    <li>
                        <re href="#" class="text-white hover:text-gray-200">Login</re>
                    </li>
                    <li><a href="#" class="text-white hover:text-gray-200">Register</a></li>
                    <li><a href="#" class="text-white hover:text-gray-200">Vendor</a></li>
                    <li><a href="#" class="text-white hover:text-gray-200">Store</a></li>
                </ul>
            </div>

            <div class="md:p-0 p-4 text-[14px] gap-[8px]">
                <h5 class="text-[#E6C407]">Resources</h5>
                <ul class="leading-[24px] gap-[8px]">
                    <li><a href="#" class="text-white hover:text-gray-200">FAQ</a></li>
                    <li><a href="#" class="text-white hover:text-gray-200">Team & Condition</a></li>
                    <li><a href="#" class="text-white hover:text-gray-200">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="md:p-0 p-4 text-[14px] gap-[8px]">
                <h5 class="text-[#E6C407]">Country</h5>
                <div class="gap-[2px] grid grid-cols-3">
                    <div class="w-12 h-12 overflow-hidden rounded-full">
                        <img src="asset/image/icons8_nigeria_flag_48px.png" class="w-full h-full object-cover"
                            alt="Nigeria Flag">
                    </div>
                    <div><img src="" alt=""></div>
                    <div><img src="" alt=""></div>
                    <div><img src="" alt=""></div>
                    <div><img src="" alt=""></div>
                    <div><img src="" alt=""></div>
                </div>
            </div>
            <div class="md:p-0 p-4 md:mb-0 mb-6 gap-[8px]">
                <h5 class="text-[#E6C407] text-[14px]">Join our Newletter</h5>
                <br>
                <div class="relative flex flex-col gap-4">
                    <input type="text" placeholder="Enter your email"
                        class="md:w-[99%] w-[100%] rounded-[10px] p-3">
                    <img class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                        src="{{ asset('assets/image/search.svg') }}" alt="">

                    <div class="flex flex-col gap-4">
                        <a href="#" class="inline-block">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-lg flex items-center hover:bg-gray-800 transition duration-300">
                                <i class="fab fa-apple text-2xl mr-2"></i>
                                <div class="text-left">
                                    <p class="text-xs">Download on the</p>
                                    <p class="text-sm font-semibold">App Store</p>
                                </div>
                            </button>
                        </a>
                        <a href="#" class="inline-block">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-lg flex items-center hover:bg-gray-800 transition duration-300">
                                <i class="fab fa-google-play text-2xl mr-2"></i>
                                <div class="text-left">
                                    <p class="text-xs">GET IT ON</p>
                                    <p class="text-sm font-semibold">Google Play</p>
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
                <br>
                <p class="text-white opacity-50">
                    Receive weekly updates directly to your email about <br> our products and services.
                </p>
            </div>
        </div>
    </footer>
    <!--end footer-->
</body>

<script src="./asset/js/app.js"></script>

</html>
