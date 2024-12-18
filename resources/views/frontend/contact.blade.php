
@extends('frontend.layouts.MainLayout')

@section('content')


        <div class="space-y-[100px] py-10">
            <!-- const form and description info  start -->
            <div class="flex flex-col md:flex-row justify-between h-full ">
                <section class="flex flex-col p-5 md:p-0 md:mr-10 md:w-1/3">
                    <div class="flex flex-col text-white gap-4">
                        <h2 class="text-2xl font-semibold">Contact Us</h2>
                        <p class="opacity-50 text-md">We're here to help you with any problems you may be having with our product.</p>
                        <img class="cover rounded-md border-3 border-[#262626]" src="{{  URL::asset('assets/frontend/images/contact.png') }}" alt="">
                    </div>
                </section>
                <section class=" flex-1  md:gap-10 rounded-md bg-[#0F0F0F] border border-[#262626] ">
                    <form action="{{ URL::to('contact') }}" class="flex flex-col gap-7  p-5" method="post">
                        @csrf
                        <div class="flex gap-5 flex-col md:flex-row justify-between">
                            <div class="flex flex-col gap-3 text-white w-full">
                                <label for="" class="text-lg font-normal">First Name</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone">
                                @error('first_name')
                                    <small class="text-[#ED2024]">{{  $message }}</small>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-3 text-white w-full">
                                <label for="" class="text-lg font-normal">Last Name</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone">
                                @error('last_name')
                                    <small class="text-[#ED2024]">{{  $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="flex gap-5 flex-col md:flex-row justify-between">

                            <div class="flex flex-col gap-3 text-white w-full">
                                <label for="" class="text-lg font-normal">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="jone.doe@gmail.com">
                                @error('email')
                                    <small class="text-[#ED2024]">{{  $message }}</small>
                                @enderror
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
                                    <input type="text" name="phone" class="opacity-50 bg-[#141414] border border-[#262626] p-2 w-full " placeholder="Jone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <small class="text-[#ED2024]">{{  $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 text-white w-full">
                            <label for="" class="text-lg font-normal">Messages</label>
                            <textarea name="message" id="" class="focus:outline-none  h-20 opacity-50 bg-[#141414] border border-[#262626] p-2 w-full">{{ old('message') }}</textarea>
                            @error('message')
                                        <small class="text-[#ED2024]">{{  $message }}</small>
                             @enderror
                        </div>

                        <div  class="flex gap-5 flex-col md:flex-row justify-between">
                            <div>
                                <input type="checkbox" name="" value="" class="" required>
                                <label for="" class="text-sm text-[#999999]">I agree with Terms of Use and Privacy Policy</label>
                            </div>
                            <button class="bg-[#E50000] px-3 py-2 rounded text-white hover:opacity-50">Send Message</button>
                        </div>
                    </form>
                </section>
            </div>
            <!-- const form and description info  end -->

            <!-- ask question section start  -->
            <section class="space-y-10 py-10 p-10 sm:p-0">
                <div class=" flex flex-col sm:flex-row gap-5 justify-between items-start sm:items-center ">
                    <div class="text-white">
                        <h2 class="font-bold text-3xl mb-2">Frequently Asked Questions</h2>
                        <div class="text-sm opacity-50">Got questions? We've got answers! Check out our FAQ section to find answers to the most common questions about StreamVibe.</div>
                    </div>
                    <a href="" class="btn-red hover:opacity-50">Ask a Question</a>
                </div>
                <div class="space-y-5 grid grid-cols-1  sm:grid-cols-2 gap-5">
                    <!-- single question  -->
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($faqs as $qu)
                        <div class="flex justify-between items-center gap-2 question border-b border-red-600 ">
                            <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                                {{ $count }}
                            </div>
                            <div class="text-white answer flex flex-col items-start justify-center flex-1">
                                <div class="">{{ $qu->title }}</div>
                                <p class="opacity-50 ans">{{ $qu->description }}</p>
                            </div>
                            <button class="text-white showQ text-3xl">+</button>
                        </div>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                    {{-- <div class="flex justify-between items-center gap-2 question border-b border-red-600 ">
                        <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                            01
                        </div>
                        <div class="text-white answer flex flex-col items-start justify-center flex-1">
                            <div class="">What is Silk Road TV?</div>
                            <p class="opacity-50 ans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam reprehenderit eaque, soluta dolores consequuntur impedit asperiores repellat? At, aspernatur.</p>
                        </div>
                        <button class="text-white showQ text-3xl">+</button>
                    </div>

                    <div class="flex justify-between items-center gap-2 question border-b border-red-600 ">
                        <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                            01
                        </div>
                        <div class="text-white answer flex flex-col items-start justify-center flex-1">
                            <div class="">What is Silk Road TV?</div>
                            <p class="opacity-50 ans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam reprehenderit eaque, soluta dolores consequuntur impedit asperiores repellat? At, aspernatur.</p>
                        </div>
                        <button class="text-white showQ text-3xl">+</button>
                    </div>

                    <div class="flex justify-between items-center gap-2 question border-b border-red-600 ">
                        <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                            01
                        </div>
                        <div class="text-white answer flex flex-col items-start justify-center flex-1">
                            <div class="">What is Silk Road TV?</div>
                            <p class="opacity-50 ans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam reprehenderit eaque, soluta dolores consequuntur impedit asperiores repellat? At, aspernatur.</p>
                        </div>
                        <button class="text-white showQ text-3xl">+</button>
                    </div>

                    <div class="flex justify-between items-center gap-2 question border-b border-red-600 ">
                        <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                            01
                        </div>
                        <div class="text-white answer flex flex-col items-start justify-center flex-1">
                            <div class="">What is Silk Road TV?</div>
                            <p class="opacity-50 ans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam reprehenderit eaque, soluta dolores consequuntur impedit asperiores repellat? At, aspernatur.</p>
                        </div>
                        <button class="text-white showQ text-3xl">+</button>
                    </div>

                    <div class="flex justify-between items-center gap-2 py-2 question border-b border-red-600 ">
                        <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                            01
                        </div>
                        <div class="text-white answer flex flex-col items-start justify-center flex-1">
                            <div class="">What is Silk Road TV?</div>
                            <p class="opacity-50 ans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam reprehenderit eaque, soluta dolores consequuntur impedit asperiores repellat? At, aspernatur.</p>
                        </div>
                        <button class="text-white showQ text-3xl">+</button>
                    </div> --}}



                </div>
            </section>
            <!-- ask question section end  -->

            <!-- free trail section  start  -->
            <section class=" rounded  h-[250px] flex  justify-center items-center" style="background-image: url({{ URL::asset('assets/frontend/images/BackgroundImages.png') }})" >
                <div class="flex flex-col sm:flex-row justify-between gap-10 items-center w-full p-10">
                    <div class="text-white text-center sm:text-left">
                        <h2 class="font-bold text-3xl mb-2">Start browsing for free today!</h2>
                        <p class=" opacity-50 text-sm">This is a clear and concise call to action that encourages users to sign up for a free trial of StreamVibe.</p>
                    </div>
                    <a href="" class="btn-red hover:opacity-50">Stat a free trail</a>
                </div>
            </section>
            <!-- free trail section  end  -->
        </div>


@endsection
