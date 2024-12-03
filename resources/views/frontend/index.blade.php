@extends('frontend.layouts.IndexLayout')
@section('')
@section('content')


<div class="bg-[#141414] w-full py-[100px]">
    <div class="container mx-auto ">





        <!-- category list start -->
        <section class="space-y-10 py-10">
            <div class=" flex flex-col md:flex-row p-10  gap-5 justify-between items-center">
                <div class="text-white text-center md:text-left">
                    <h2 class="font-bold text-3xl mb-3">Explore our wide variety of categories</h2>
                    <div class="text-sm opacity-50">Whether you're looking for a comedy to make you laugh, a drama to make you think, or a documentary to learn something new</div>
                </div>
                <div>
                    <div class="flex gap-2 items-center justify-center border border-stone-500 rounded p-2 bg-stone-900">
                        <button class="p-3 bg-stone-800 rounded btn-pre" ><img src="{{ URL::asset('assets/frontend/images/left-arow.png') }}" alt=""></button>
                        <div class="h-1 w-4 bg-white current_bar"></div>
                        <div class="h-1 w-4 bg-white current_bar" ></div>
                        <div class="h-1 w-4 bg-white current_bar"></div>
                        <button class="p-3 bg-stone-800 rounded btn-next" page="0"><img src="{{ URL::asset('assets/frontend/images/right-arow.png') }}" alt=""></button>
                    </div>
                </div>
            </div>

            <div class="carasol_body">
                @php
                $genresLength = count($genres);
                $pageCount = ceil($genresLength / 5);
                $item = 0;
                @endphp

                @for ($i = 0; $i < $pageCount; $i++)
                    <div class="grid grid-cols-1 place-items-center sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-[80px] carasol first_carasol p-10" page="{{ $i }}">
                        @for ($j = 0; $j < 5; $j++)
                            @if ($item < $genresLength)
                                <div class="card w-full sm:min-w-[280px] h-full sm:min-h-[400px]">
                                    <img class="flex-1" src="{{URL::to('upload/source/'.$genres[$item]->genres_image )}}" alt="Product 1" class="w-full h-48 object-cover">
                                    <div class="flex justify-between items-center w-full text-white mt-3">
                                        <div>{{ $genres[$item]->genre_name }}</div>
                                        <button>
                                            <img src="{{  URL::asset('assets/frontend/images/right-arow.png') }}" alt="">
                                        </button>
                                    </div>
                                </div>
                                @php
                                    $item++;
                                @endphp
                            @endif
                        @endfor
                    </div>
                @endfor



            </div>

        </section>
        <!-- category list end -->

        <!-- experience section start -->
        <section class="space-y-10 py-10">
            <div class="text-center sm:text-left flex gap-5 justify-between items-center">
                <div class="text-white ">
                    <h2 class="font-bold text-3xl mb-3">We Provide you streaming experience across various devices.</h2>
                    <div class="text-center sm:text-left text-sm opacity-50 w-4/5 mx-auto sm:mx-0">With StreamVibe, you can enjoy your favorite movies and TV shows anytime, anywhere. Our platform is designed to be compatible with a wide range of devices, ensuring that you never miss a moment of entertainment.</div>
                </div>

            </div>
            <div class="p-10 sm:p-0">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-10">
                    <div class="flex items-center text-white gap-2 bg-red-300 justify-center py-10 rounded" style="background: rgb(16,8,8);
background: linear-gradient(59deg, rgba(16,8,8,0.9136029411764706) 31%, rgba(8,8,8,0.7679446778711485) 69%, rgba(241,4,4,0.21332282913165268) 100%);">
                        <div class="bg-stone-800 rounded py-2 px-2  ">
                            <img class="h-8 w-8" src="{{ URL::asset('assets/frontend/images/smartphone-Icon.svg') }}" alt="">
                        </div>
                        <span>SmartPhones</span>
                    </div>

                    <div class="flex items-center text-white gap-2 bg-red-300 justify-center py-10 rounded" style="background: rgb(16,8,8);
background: linear-gradient(59deg, rgba(16,8,8,0.9136029411764706) 31%, rgba(8,8,8,0.7679446778711485) 69%, rgba(241,4,4,0.21332282913165268) 100%);">
                        <div class="bg-stone-800 rounded py-2 px-2  ">
                            <img class="h-8 w-8" src="{{ URL::asset('assets/frontend/images/pc-Icon.svg') }}" alt="">
                        </div>
                        <span>Computer</span>
                    </div>

                    <div class="flex items-center text-white gap-2 bg-red-300 justify-center py-10 rounded" style="background: rgb(16,8,8);
background: linear-gradient(59deg, rgba(16,8,8,0.9136029411764706) 31%, rgba(8,8,8,0.7679446778711485) 69%, rgba(241,4,4,0.21332282913165268) 100%);">
                        <div class="bg-stone-800 rounded py-2 px-2  ">
                            <img class="h-8 w-8" src="{{ URL::asset('assets/frontend/images/smart-tv-Icon.svg') }}" alt="">
                        </div>
                        <span>Smart TV</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- experience section end -->

        <!-- tv statation start -->
        <section class="space-y-10 py-10">
            <div class=" flex flex-col md:flex-row gap-5 justify-between items-center p-10 md:p-0">
                <div class="text-white text-center md:text-left">
                    <h2 class="font-bold text-3xl mb-2">Explore Our TV Station</h2>
                    <div class="text-sm opacity-50">Whether you're looking for a comedy to make you laugh, a drama to make you think, or a documentary to learn something new</div>
                </div>
            </div>



            <div class="bg-cardbg  grid  grid-cols-1 place-items-center  sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-[80px] carasol first_carasol  p-10">
                @php
                    $counter = 0;
                @endphp
                @foreach ($liveStrems as $strem)

                    @if ($counter == 5)
                        @break
                    @endif



                    <div class="">
                        <div class="bg-cover h-[270px] flex justify-between items-start  p-5 rounded w-full max-w-[230px]"  style="background-image: url({{URL::to( "upload/source/".$strem->channel_thumb )}});">
                            <div class="bg-gray-500 rounded-full px-3 py-1 text-sm text-white opacity-75 flex justify-between items-center gap-1 ">
                                <img src="./images/eye.svg" alt="">
                                420
                            </div>
                            <div class="bg-red-500 rounded-full px-3 py-1 text-sm text-white">live</div>
                        </div>
                        <div class="flex justify-between text-white text-md mt-3" style="width: 230px;">
                            <div>{{  $strem->channel_name }}</div>

                            <a href="{{ URL::to('tvstation?play='.$strem->channel_name) }}">
                                <img class="h-4.5 w-4.5" src="{{ URL::asset('assets/frontend/images/right-arow.png') }}" alt="">
                            </a>

                        </div>
                    </div>

                    @php
                        $counter++;
                    @endphp
                @endforeach
                {{-- <div class="">
                    <div class="bg-cover h-[270px] flex justify-between items-start  p-5 rounded w-full max-w-[230px]"  style="background-image: url('./images/explore-station_image_1.png');">
                        <div class="bg-gray-500 rounded-full px-3 py-1 text-sm text-white opacity-75 flex justify-between items-center gap-1 ">
                            <img src="./images/eye.svg" alt="">
                            420
                        </div>
                        <div class="bg-red-500 rounded-full px-3 py-1 text-sm text-white">live</div>
                    </div>
                    <div class="flex justify-between text-white text-md mt-3" style="width: 230px;">
                        <div>LIVE</div>
                        <div><img class="h-4.5 w-4.5" src="./images/right-arow.png" alt=""></div>
                    </div>
                </div> --}}






            </div>
        </section>
        <!-- tv statation end -->

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

        <!-- plan section start  -->
         <section class="space-y-10 py-[100px]">
            <div class=" flex flex-col sm:flex-row gap-5 justify-between items-center">
                <div class="text-white text-center sm:text-left px-5 sm:px-0">
                    <h2 class="font-bold text-3xl mb-2">Choose the plan that's right for you</h2>
                    <div class="text-sm opacity-50">Join StreamVibe and select from our flexible subscription options tailored to suit your viewing preferences. Get ready for non-stop entertainment!</div>
                </div>
                <div class="flex text-white border-2 border-stone-500 p-1 rounded gap-2">
                    <button id="monthly_btn" class="p-2 rounded ">Monthly</button>
                    <button id="yearly_btn" class="p-3 rounded ">Yearly</button>
                </div>
            </div>
            <!-- monthly plan -->
            <div class="flex flex-col md:flex-row flex-wrap  p-10 sm:p-0 gap-6 w-full justify-between" id="monthly_plan">
                @foreach ($monthly_plan as $plan)
                    <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded w-full sm:w-[450px]  ">
                        <h2 class="text-2xl">{{ $plan->plan_name }}</h2>
                        <p class="opacity-50">{{  $plan->description }}</p>
                        <div class="">
                            <span class="text-3xl ">{{  $plan->plan_price }}</span><span class="opacity-50">/month</span>
                        </div>
                        <div class="flex justify-between">
                            <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                            <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                        <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                        <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                        <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                    </div>
                </div> --}}
            </div>
            <!-- yearly plan -->
            <div class="flex flex-col md:flex-row flex-wrap  p-10 sm:p-0 gap-6 w-full justify-between " id="yearly_plan">
                @foreach ($yearly_plan as $plan)
                    <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded w-full sm:w-[450px] ">
                        <h2 class="text-2xl">{{ $plan->plan_name }}</h2>
                        <p class="opacity-50">{{  $plan->description }}</p>
                        <div class="">
                            <span class="text-3xl ">{{  $plan->plan_price }}</span><span class="opacity-50">/month</span>
                        </div>
                        <div class="flex justify-between">
                            <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                            <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$70.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                        <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$100.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                        <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-stone-800 p-5 flex flex-col text-white gap-5 rounded">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$150.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="" class="py-2 px-2 bg-slate-900 rounded">Start Free Trail</a>
                        <a href="" class="btn-red hover:opacity-50">Choose Plan</a>
                    </div>
                </div> --}}
            </div>
         </section>
        <!-- plan section end -->

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
</div>

@endsection
