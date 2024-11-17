@extends('frontend.layouts.MainLayout')

@section('content')


<!-- account section start  -->
<section class="py-[50px] flex flex-col sm:flex-row justify-between gap-5 items-start p-5">
    <!-- sidebar start -->
    <!-- sidebar end -->
    <div class="bg-[#0F0F0F] border border-[#262626] p-5 w-full sm:w-2/12 ">
        <ul class="flex flex-col gap-7">
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/account-logo.svg') }}" alt="">Account</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/subscription-logo.svg') }}" alt="">Subscription</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/device-logo.svg') }}" alt="">Devices</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/setting-logo.svg') }}" alt="">Devices</a></li>
            <li><a href="" class="flex justify-start gap-4 text-white items-center text-lg"><img class="h-[38px] w-[38px]" src="{{ URL::asset('assets/frontend/images/logout-logo.svg') }}" alt="">Devices</a></li>
        </ul>
    </div>
     <!-- sidebar end-->
     {{-- content start --> --}}
      <div class="bg-[#0F0F0F] border border-[#262626] p-10 w-full sm:w-9/12">
          <h2 class="text-2xl font-semibold text-white mb-5">Settings</h2>
          <div>
            <h3 class="text-white opacity-50 mb-2">Preferences</h3>
            <div class="flex flex-col justify-start gap-7 w-full sm:w-1/5">
                <select name="" id="" class="bg-[#141414] border border-[#262626] px-10 py-3 text-[#999999]">
                    <option value="">About</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>
                <select name="" id="" class="bg-[#141414] border border-[#262626] px-10 py-3 text-[#999999]">
                    <option value="">Date & Time</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>
                <select name="" id="" class="bg-[#141414] border border-[#262626] px-10 py-3 text-[#999999]">
                    <option value="">Language</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>

                <select name="" id="" class="bg-[#141414] border border-[#262626] px-10 py-3 text-[#999999]">
                    <option value="">Notification Settings</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>
                <select name="" id="" class="bg-[#141414] border border-[#262626] px-10 py-3 text-[#999999]">
                    <option value="">Playback Settings</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>

            </div>
          </div>
      </div>
      <!-- content end -->
 </section>
<!-- account section end  -->


@endsection
