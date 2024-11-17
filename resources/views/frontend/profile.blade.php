@extends('frontend.layouts.MainLayout')

@section('content')


<!-- account section start  -->
<section class="py-[50px] flex flex-col sm:flex-row justify-between gap-5 items-start p-5">
    <div class="bg-black border border-cardborder p-5 w-full sm:w-2/12 ">
        <ul class="flex flex-col gap-7">
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/account-logo.svg') }}" alt="">Account</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/subscription-logo.svg') }}" alt="">Subscription</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/device-logo.svg') }}" alt="">Devices</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/setting-logo.svg') }}" alt="">Devices</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/logout-logo.svg') }}" alt="">Devices</a></li>
        </ul>
    </div>
    <div class="bg-[#0F0F0F] border border-[#262626] p-10 w-full sm:w-9/12 ">
        <h2 class="text-2xl font-semibold text-white mb-5">Account</h2>
        <div class="flex flex-col gap-3 justify-start">
            <h3 class="text-white opacity-50">Account Details</h3>
            <div class="rounded-full h-[200px] w-[200px]">
                <img class="w-full" src="{{  URL::asset('assets/frontend/images/profile-pic.png') }}" alt="">
            </div>
            <div>
                <a href="# " class="px-10 py-2 border text-white  text-sm rounded border-[#FFFFFF]">Cancel Membership</a>
            </div>
        </div>
        <form action="" class="flex flex-col gap-5 my-10">
            <div class="flex gap-5 justify-between">
                <div class="flex flex-col gap-3 text-white w-full">
                    <label for="" class="text-lg font-normal">First Name</label>
                    <input type="text" name="firstname" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone">
                </div>

                <div class="flex flex-col gap-3 text-white w-full">
                    <label for="" class="text-lg font-normal">First Name</label>
                    <input type="text" name="firstname" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone">
                </div>
            </div>

            <div class="flex flex-col gap-3 text-white w-full">
                <label for="" class="text-lg font-normal">Email</label>
                <input type="text" name="firstname" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="jone.doe@gmail.com">
            </div>

            <div class="flex flex-col gap-3 text-white w-full">
                <label for="" class="text-lg font-normal">Password</label>
                <input type="password" name="firstname" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone">
            </div>

            <div class="flex flex-col gap-3 text-white w-full">
                <label for="" class="text-lg font-normal">Phone Number</label>
                <div class="flex gap-2">
                    <select name="color" id="color" class="bg-black">
                        <option value=""><img class="h-[20px] w-[20px]" src="./images/f-ind.svg" alt="" /></option>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                    </select>
                    <input type="password" name="firstname" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone">
                </div>
            </div>

            <div>
                <button class="bg-[#E50000] px-3 py-2 rounded text-white hover:opacity-50">Edit</button>
            </div>
        </form>
    </div>

 </section>
<!-- account section end  -->


@endsection
