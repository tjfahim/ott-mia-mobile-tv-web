@extends('client_site.layouts.app')

@section('content')

<!-- account section start  -->
<section class="py-[50px] flex flex-col sm:flex-row justify-between gap-5 items-start p-5">

    @include('frontend.user.components.sidebar')

    <div class="bg-first_black rounded-md p-10  flex-1">
        <h2 class="text-2xl font-semibold text-white mb-3">Devices</h2>
        <h3 class="text-white opacity-50 mb-10">Manage your Devices</h3>


        <div class="flex gap-5">
            <div class="p-10 bg-second_black w-full rounded-lg">
                <div class="flex flex-col gap-4 items-center">
                    <img class="size-20" src="./images/d-pc-icon.svg" alt="">
                    <div class="text-white text-center">
                        <h2 class="text-lg font-bold">Mac Chrome</h2>
                        <h3 class="opacity-50 text-sm">Web Browser</h3>
                    </div>
                    <div class="py-2 px-4 text-white text-sm font-semibold bg-third_black rounded-full">Current Device</div>
                </div>
                <div class="text-sm text-white pt-4 space-y-3">
                    <div class="flex justify-between items-center">
                        <div class="opacity-40">Profile</div>
                        <h2>JamesShown333</h2>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="opacity-40">Last Access</div>
                        <h2>02 Oct, 2024-12:23 PM</h2>
                    </div>
                </div>
            </div>
            <div class="p-10 bg-second_black w-full rounded-lg">
                <div class="flex flex-col gap-4 items-center">
                    <img class="size-20" src="./images/d-phoe-icon.svg" alt="">
                    <div class="text-white text-center">
                        <h2 class="text-lg font-bold">Apple</h2>
                        <h3 class="opacity-50 text-sm">Iphone</h3>
                    </div>
                    <div class="py-2 px-4 text-white text-sm font-semibold bg-redcolor rounded-full">Signout</div>
                </div>
                <div class="text-sm text-white pt-4 space-y-3">
                    <div class="flex justify-between items-center">
                        <div class="opacity-40">Profile</div>
                        <h2>JamesShown333</h2>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="opacity-40">Last Access</div>
                        <h2>02 Oct, 2024-12:23 PM</h2>
                    </div>
                </div>
            </div>
        </div>


    </div>

 </section>
<!-- account section end  -->


@endsection
