<nav class="flex justify-between py-3 items-center px-2 " >
    <div class="">
        <a href="{{ URL::to('/') }}">
            <img style="width: 60p; height: 60px" src="{{ URL::asset('upload/source/'.getcong('site_logo')) }}" alt="Brand Logo">
        </a>
    </div>

    <ul class="hidden   sm:flex gap-3 bg-[#0F0F0F]   border-2 p-1.5 rounded-md  border-[#1F1F1F]  text-white ">
        <li class="{{ request()->is('/') ? 'hover:opacity-100 bg-[#1A1A1A] border-[#1A1A1A] ' : '' }} rounded-md  hover:bg-[#1A1A1A] px-3 py-2 opacity-75">
            <a href="{{ URL::to('/') }}">Home</a>
        </li>
        <li class="{{ request()->is('tvstation') ? 'hover:opacity-100 bg-[#1A1A1A] border-[#1A1A1A] ' : '' }} rounded-md  hover:bg-[#1A1A1A] px-3 py-2 opacity-75">
            <a href="{{ URL::to('tvstation') }}">TV Station</a>
        </li>

        <li class="px-3 py-2 opacity-75 hover:opacity-100  hover:bg-[#1A1A1A] hover:border-[#1A1A1A] hover:rounded-md"><a href="">Notification</a></li>
        <li class="{{ request()->is('vod') ? 'hover:opacity-100 bg-[#1A1A1A] border-[#1A1A1A] ' : '' }} rounded-md  hover:bg-[#1A1A1A] px-3 py-2 opacity-75" >
            <a href="{{ URL::to('vod') }}">VDO</a>
        </li>


        <li class="{{ request()->is('settings') ? 'hover:opacity-100 bg-[#1A1A1A] border-[#1A1A1A] ' : '' }} rounded-md  hover:bg-[#1A1A1A] px-3 py-2 opacity-75">
            <a href="{{ URL::to('settings') }}">Settings</a>
        </li>

        <li class="{{ request()->is('profile') ? 'hover:opacity-100 bg-[#1A1A1A] border-[#1A1A1A] ' : '' }} rounded-md  hover:bg-[#1A1A1A] px-3 py-2 opacity-75">
            <a href="{{ URL::to('profile') }}">Account</a>
        </li>
    </ul>


    <div class="flex gap-5 items-center">
        <div class=" flex justify-between items-center">
            <button id="search_btn"><img class="size-6" src="{{ URL::asset('assets/frontend/images/search-Icon.svg') }}" alt=""></button>
            <form action="" id="search_form" class="bg-black flex justify-center items-center relative">
                <input type="text" class="border bg-black border-redColor text-white opacity-50 focus:border-redColor  py-2 px-3">
                <button id="search" class="absolute right-2"><img class="size-6" src="{{ URL::asset('assets/frontend/images/search-Icon.svg') }}" alt=""></button>
            </form>
        </div>

        <div class="flex justify-between items-center relative">
            <button class=""><img class="size-6" src="{{ URL::asset('assets/frontend/images/notify-Icon.svg') }}" alt=""></button>
            <div class="bg-black border p-10 absolute hidden"></div>
        </div>
    </div>

</nav>
