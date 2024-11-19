@extends('frontend.layouts.MainLayout')
@section('content')


<!-- register section start -->
<section class=" p-10 w-full md:w-2/4 sm:w-1/4 mx-auto flex flex-col gap-10 mt-[10px]">
    <div class="text-center text-white space-y-5">
        <h2 class="text-2xl font-normal ">Create A New Account</h2>
        <p class="opacity-50 text-sm">Enter following details to Signup.</p>
    </div>
    <form action="{{ URL::to('signup') }}" class="flex gap-5 flex-col" method="post">
        @csrf
        <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
            <div class=" border-r pr-3  border-[#FFFFFF1A]">
                <img class="text-black" src="./images/user.svg" alt="">
            </div>
            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                <label for="" class=" text-md">User</label>
                <input type="text" name="name" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="Name" >
                @error('name')
                    <small class="text-[#ED2024]">{{ $message }}</small>
                @enderror
            </div>
            <div>

            </div>
        </div>

        <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
            <div class=" border-r pr-3 border-[#FFFFFF1A]">
                <img src="./images/email.svg" alt="">
            </div>
            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                <label for="" class=" text-md">Email</label>
                <input type="email" name="email" class="border-none  bg-[#141414] p-2 w-full focus:outline-none" placeholder="example@gmail.com" >
                @error('email')
                    <small class="text-[#ED2024]">{{ $message }}</small>
                 @enderror
            </div>
            <div>

            </div>
        </div>

        <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
            <div class=" border-r pr-3 border-[#FFFFFF1A]">
                <img src="./images/lock-white.svg" alt="">
            </div>
            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                <label for="" class=" text-md">Password</label>
                <input type="passwrod" name="password" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                @error('password')
                    <small class="text-[#ED2024]">{{ $message }}</small>
                 @enderror
            </div>
            <div>
                <img src="./images/eye-off.svg" alt="">
            </div>
        </div>

        <div class="border  rounded-md p-3 border-[#FFFFFF1A]    gap-3 flex items-center justify-start hover:border-[#ED2024]" >
            <div class=" border-r pr-3 border-[#FFFFFF1A]">
                <img src="./images/lock-white.svg" alt="">
            </div>
            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                <label for="" class=" text-md">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                @error('password_confirmation')
                    <small class="text-[#ED2024]">{{ $message }}</small>
                 @enderror
            </div>
            <div>
                <img src="./images/eye-off.svg" alt="">
            </div>
        </div>
        <div  class="flex gap-5 flex-col md:flex-row justify-between text-sm text-[#999999]">
            <div>
                <input type="checkbox" name="" value="" class="bg-red-500" >
                <label for="" class="text-sm text-[#999999]">By clicking register you agree to our <a href="" class="text-white">Terms and Conditions</a> of Use</label>
            </div>

        </div>
        <button class="bg-red-500 py-3 hover:bg-red-400 px-2 rounded-full text-white font-normal ">Singup</button>
        <a href="" class="text-white text-center hover:underline hover:underline-offset-2 decoration-red-500">Singup With</a>
    </form>
    <div class="flex gap-2 opacity-70 mx-auto">
        <a class=" bg-gray-300 opacity-90 p-2 rounded-full" href="">
            <img style="height: 24px; width: 24px;" src="{{ URL::asset('assets/frontend/images/facebook-Icon.svg')  }}" alt="">
        </a>
        <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="{{ URL::asset('assets/frontend/images/x-Icon.svg') }}" alt=""></a>
        <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="{{ URL::asset('assets/frontend/images/linkdin-icon.svg') }}" alt=""></a>
    </div>

</section>
    <!-- register  section end -->



@endsection
