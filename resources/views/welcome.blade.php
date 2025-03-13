<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('./asset/image/Frame.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('./asset/css/home-moblie.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen bg-[#005B49]">
    <!--header-->
    <div class="header-banner flex justify-center items-center w-full">
        <img src="{{asset('./asset/image/NEW-jumiagift.gif')}}" alt="" class="w-[800px]">
    </div>
    <div class="header-one flex items-center justify-center sm:gap-[400px] gap-[90px] bg-[#005B49] w-full h-[70px]">
        <div class="header-child-one flex items-center justiy-center gap-[10px]">
            <img src="{{asset('./asset/image/Frame.svg')}}" alt="" class="w-[35px]">
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
                <img src="{{asset('./asset/image/icons8_menu_50px_1.png')}}" onclick="showSidebar()" alt=""
                    class="menu-button w-[40px]">
            </div>
            <nav class="sidebar">
                <ul class="flex flex-col gap-[5px] w-full ">
                    <li><img src="{{asset('./asset/image/icons8_delete_26px.png')}}" alt=""
                            onclick="hideSidebar()" class="hover:bg-green-100 outline outline-1"></li>
                    <li class="font-bold hover:bg-gray-400 w-full"><a href="">Home</a></li>
                    <li class="font-bold hover:bg-gray-400 w-full"><a href="" class="font-bold">Wallet</a></li>
                    <li class="font-bold hover:bg-gray-400 w-full"><a href="" class="font-bold">Account</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--header search-->
    <div
        class="header-search flex bg-[#D8D8D8] justify-center items-center h-[80px] sm:gap-[90px] gap-[30px] w-full z-40  top-0 sticky shadow-md">
        <a href="{{url('index.php')}}">
            <div class="header-search-logo flex justify-center items-center gap-[5px]">
                <img src="{{asset('./asset/image/Frame.svg')}}" alt="" class="w-[35px]">
                <p class="text-[#F5CB03] font-bold text-[20px]">9rato</p>
            </div>
        </a>
        <div class="header-search-section flex justify-center items-center gap-[6px]">
            <div
                class="search-input flex justify-center items-center outline outline-1 outline-gray-600 rounded-[10px] p-[5px] w-[400px]">
                <img src="{{asset('./asset/image/icons8_search_48px_1.png')}}" alt="" class="w-[40px]">
                <input type="text" name="" id=""
                    class="outline-none text-black bg-[#D8D8D8] w-[400px] p-[10px]"
                    placeholder="Search products, brand and category">
            </div>
            <button class="text-center text-white bg-[#F5CB03] p-[15px] rounded-[10px] text-[15px] font-semibold">
                <p>Search</p>
            </button>
        </div>
        <div class=" hideOnMobile search-account-section flex jusfity-center items-center font-semibold gap-[20px]">
            <a href="{{url('login.php')}}" class="hideOnMobile">
                <div class="account-text text-black flex gap-[8px] justify-center items-center">
                    <img src="{{asset('./asset/image/icons8_customer_64px.png')}}" alt="" class="w-[40px]">
                    <p>Acount</p>
                </div>
            </a>
            <a href="" class="hideOnMobile">
                <div class="account-help text-black flex gap-[8px] justify-center items-center">
                    <img src="{{asset('./asset/image/icons8_help_100px.png')}}" alt="" class="w-[40px]">
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
                    <img src="{{asset('./asset/image/icons8_home_30px.png')}}" alt="" class="w-[26px]">
                    <p class="">Home</p>
                </a>
            </div>
            <div class="slider-menu-link w-full hover:bg-gray-400 hover:text-white p-[20px] rounded-[20px]">
                <a href="" class="flex gap-3 font-bold">
                    <img src="{{asset('./asset/image/icons8_iphone_26px.png')}}" alt="">
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
            <img src="{{asset('./asset/image/giftsmmm.gif')}}" alt=""
                class="rounded-[20px] w-[400px] h-[340px]">
        </div>
        <div class="slider-profile flex flex-col w-[200px] gap-[15px]">
            <div
                class="profile-image  p-[26px] bg-white rounded-[20px] flex flex-col justify-center items-center gap-[5px]">
                <img src="{{asset('./asset/image/icons8_male_user_50px.png')}}" alt="">
                <p class="p1 font-bold">Hi Trillionairas</p>
                <p class="p2 font-semibold">Get Started ?</p>
            </div>
            <div class="slider-banner-two">
                <img src="{{asset('./asset/image/BSB.gif')}}" alt="" class="w-[200px] rounded-[20px]">
            </div>
        </div>
    </div>
    <!--ads section-->
    <div class="back-for-ads w-full flex flex-col justify-center items-center bg-[#EBF2F7] rounded-t-[30px]">
        <div
            class="advert-promote-section sm:w-[1075px] w-[300px] grid sm:grid-cols-6 grid-cols-3 bg-white p-[30px] mt-[-70px] gap-5 rounded-[20px]">
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{asset('./asset/image/BSB.gif')}}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('./asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
            <div class="ads-one rounded-[10px] flex flex-col relative justify-center items-center">
                <a href="">
                    <div class="relative">
                        <img src="{{ asset('asset/image/BSB.gif') }}" alt=""
                            class="rounded-[20px] w-[150px] h-[150px]">
                        <p
                            class="font-bold text-white sm:text-[30px] text-[20px] shadow-md absolute bottom-2 left-1/2 transform -translate-x-1/2">
                            ₦1000
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!--line-green-->
        <div class="green-line flex justify-center items-center w-full">
            <div class="green-line-main p-[20px] bg-[#005B49] w-[700px]">
            </div>
        </div>
        <img src="asset/image/footer-nigeria-new.svg" alt="">
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
        <i class="fa-solid fa-user text-white"></i>  <!-- Solid user icon -->
        <i class="fa-brands fa-twitter text-white"></i>  <!-- Twitter brand icon -->
        <i class="fa-solid fa-house text-white"></i>  <!-- Home icon -->
        </ul>
    </div>

    <div class="md:p-0 p-4 text-[14px] gap-[8px]">
        <h5 class="text-[#E6C407]">Quick Link</h5>
        <ul class="leading-[24px] gap-[8px]">
            <li><a href="index.php" class="text-white hover:text-gray-200">Home</a></li>
            <li><re href="#" class="text-white hover:text-gray-200">Login</re></li>
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
            <img src="asset/image/icons8_nigeria_flag_48px.png" class="w-full h-full object-cover" alt="Nigeria Flag">
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
        <input type="text" placeholder="Enter your email" class="md:w-[99%] w-[100%] rounded-[10px] p-3">
        <img class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" src="{{ asset('assets/image/search.svg') }}" alt="">

        <div class="flex flex-col gap-4">
        <a href="#" class="inline-block">
                            <button class="bg-black text-white px-6 py-2 rounded-lg flex items-center hover:bg-gray-800 transition duration-300">
                                <i class="fab fa-apple text-2xl mr-2"></i>
                                <div class="text-left">
                                    <p class="text-xs">Download on the</p>
                                    <p class="text-sm font-semibold">App Store</p>
                                </div>
                            </button>
                        </a>
                        <a href="#" class="inline-block">
                            <button class="bg-black text-white px-6 py-2 rounded-lg flex items-center hover:bg-gray-800 transition duration-300">
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
