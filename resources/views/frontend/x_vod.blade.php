@extends('frontend.layouts.MainLayout')

@section('content')



<!-- vod  content start -->
<div class="border border-[#262626] p-10 py-10" >

    <!-- Recently Added Shows start -->
    <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Recently Added Shows</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            @php
                $count = 0;
            @endphp
            @foreach($recent_shows as $show)
                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src="{{ URL::to('upload/source/'. $show->series_poster) }}" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/season-Icon.svg" alt=""><span>3 Season</span></button>
                    </div>
                </div>
                @php
                    $count++;
                @endphp
            @endforeach
            {{-- <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/season-Icon.svg" alt=""><span>3 Season</span></button>
                </div>
            </div>


            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/season-Icon.svg" alt=""><span>3 Season</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/season-Icon.svg" alt=""><span>3 Season</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/season-Icon.svg" alt=""><span>3 Season</span></button>
                </div>
            </div> --}}



        </div>
     </section>
    <!-- Recently Added Shows end -->

     <!-- Recently Added Movies session start -->
     <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Recently Added Movies</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            @php
                $count = 0;
            @endphp
            @foreach($recent_movies as $movie)
                @if($count === 5)
                    @break
                @endif
                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src="{{ URL::to( 'upload/source/'.$movie->video_image_thumb )}}" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">

                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>
                @php
                    $count++;
                @endphp
            @endforeach

            {{-- <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube2.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                        <div class="flex gap-1">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">

                        </div>
                        <span>2k</span>
                    </button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube2.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                        <div class="flex gap-1">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star-white.svg" alt="">

                        </div>
                        <span>2k</span>
                    </button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube2.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                        <div class="flex gap-1">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star-white.svg" alt="">
                            <img class="h-3 w-3" src="./images/star-white.svg" alt="">

                        </div>
                        <span>2k</span>
                    </button>
                </div>
            </div>     --}}


        </div>
     </section>
     <!-- Recently Added Movies session end -->


      <!-- Recently Added Lives session start -->
      <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Recently Added Lives</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            @php
                $count = 0;
            @endphp
            @foreach($recent_lives as $live)
                @if($count === 5)
                    @break
                @endif
                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md"src="{{URL::to( $live->image )}}" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">

                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>
                @php
                    $count++;
                @endphp
            @endforeach


            {{-- <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube2.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                        <div class="flex gap-1">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">

                        </div>
                        <span>2k</span>
                    </button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube2.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                        <div class="flex gap-1">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star-white.svg" alt="">

                        </div>
                        <span>2k</span>
                    </button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube2.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                        <div class="flex gap-1">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star-white.svg" alt="">
                            <img class="h-3 w-3" src="./images/star-white.svg" alt="">

                        </div>
                        <span>2k</span>
                    </button>
                </div>
            </div>     --}}


        </div>
     </section>
     <!-- Recently Added Lives session end -->

     <!-- movie card start -->
     <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Movies</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            @php
                $count = 0;
            @endphp
            @foreach ($movies as $movie)
                @if ($count == 5)
                    @break
                @endif
                <a href="{{ URL::to('movie/'.$movie->video_slug)}} ">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="{{ URL::to( 'upload/source/'.$movie->video_image_thumb )}}" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>{{ $movie->duration }}</span></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                        </div>
                    </div>
                </a>
                @php
                    $count++;
                @endphp
            @endforeach
            {{-- <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>


            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>      --}}


        </div>
     </section>
    <!-- movie card end -->

     <!-- show card start -->
     <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Show</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

            @php
                $count = 0;
            @endphp
            @foreach($series as $show)
                @if($count === 5)
                    @break
                @endif

                <a href="">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="{{ URL::to('upload/source/'. $show->series_poster)}}" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><span>{{ $show->series_info}}</span></button>
                        </div>
                    </div>
                </a>

                @php
                    $count++;
                @endphp
            @endforeach

            {{-- <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>


            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                    <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                </div>
            </div>      --}}


        </div>
     </section>
    <!-- show card end -->


     <!-- Live TV  card start -->
    <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Live TV</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

            @php
                $count = 0;
            @endphp
            @foreach($livetv as $tv)
                @if($count == 5)
                    @break
                @endif
                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src=" {{URL::to( 'upload/source/'.$tv->channel_thumb )}} " alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                    </div>
                </div>
                @php
                    $count++;
                @endphp
            @endforeach

            {{-- <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube3.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                </div>
            </div>
            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube3.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube3.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                </div>
            </div>

            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube3.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                </div>
            </div>
            <div class="border border-[#262626] p-3 rounded-md space-y-5">
                <img class="w-full  rounded-md" src="./images/youtube3.png" alt="">
                <div class="text-white flex justify-between items-center text-sm">
                    <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                </div>
            </div>             --}}


        </div>
     </section>
     <!-- Live TV card end -->



</div>
<!-- vod content end -->




@endsection
