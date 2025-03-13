
<footer class="main-footer bg-[#005C48] pb-[20px]">
    <!-- Your footer content -->
<div class="footer md:flex grid justify-between md:h-[200px] pt-8 min-h-fit w-[80%] mx-auto"> 
    <div class="md:p-0 p-4 text-[14px] gap-[8px]">
        <div>
            <img class="w-[56px] h-[67px]" src="{{ asset('assets/image/logo.svg') }}" alt="">
        </div>
        <p class="text-white opacity-50 mt-2"> We can be your sure <br> market plug and more...
        </p>
        <ul class="flex items-center gap-[22px] mt-2">
            <li><span><img class="" src="{{ asset('assets/image/facebook.svg') }}" alt=""> </span></li>
            <li><span><img class="" src="{{ asset('assets/image/twitter.svg') }}" alt=""> </span></li>
            <li><span><img class="" src="{{ asset('assets/image/linkin.svg') }}" alt=""></span></li>
        </ul>
    </div>

    <div class="md:p-0 p-4 text-[14px] gap-[8px]">
        <h5 class="text-[#E6C407]">Quick Link</h5>
        <ul class="leading-[24px] gap-[8px]">
            <li><a href="{{url('/')}}" class="text-white hover:text-gray-200">Home</a></li>
            <li><a href="{{url('/product')}}" class="text-white hover:text-gray-200">Product</a></li>
            <li><a href="{{url('/app')}}" class="text-white hover:text-gray-200">Apps</a></li>
            <li><a href="#" class="text-white hover:text-gray-200">Blogs</a></li>
            <li><a href="#" class="text-white hover:text-gray-200">Pricing</a></li>
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
    <div class="md:p-0 p-4 md:mb-0 mb-6 gap-[8px]">
        <h5 class="text-[#E6C407] text-[14px]">Join our Newletter</h5>
        <br>
        <div class="relative">
        <input type="text" placeholder="Enter your email" class="md:w-[99%] w-[100%] rounded-[10px] p-3">
        <img class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400" src="{{ asset('assets/image/search.svg') }}" alt="">
        </div>
        <br>
        <p class="text-white opacity-50">
            Receive weekly updates directly to your email about <br> our products and services.
        </p>
    </div>
</div>
</footer>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
