@extends('client_site.layouts.app')

@section('head_title', getcong('site_name') )

@section('head_url', Request::url())


@section('content')


{{-- head section  --}}
<div class="flex flex-col gap-10 justify-between items-center pt-10 ">
    <div class="text-white text-sm p-1 bg-second_black font-normal flex gap-2 rounded-full">

        <a href="{{ URL::to('vod/movies') }}" class="{{  request()->is('vod/movies') ? 'bg-redcolor' : 'hover:bg-redcolor'  }} px-10 py-3 text-sm rounded-full text-gray-200  hover:translate-x-1 duration-300 ">Movies</a>
        <a href="{{ URL::to('vod/shows') }}" class="{{  request()->is('vod/shows') ? 'bg-redcolor' : 'hover:bg-redcolor'  }} px-10 py-3 text-sm rounded-full text-gray-200 hover:bg-redcolor hover:translate-x-1 duration-300">TV Shows</a>
        <a href="{{ URL::to('vod/lives') }}" class="{{  request()->is('vod/lives') ? 'bg-redcolor' : 'hover:bg-redcolor'  }} px-10 py-3 text-sm rounded-full text-gray-200 hover:bg-redcolor hover:translate-x-1 duration-300">Live</a>
    </div>
    <div class="text-center">
        <h2 class="text-5xl font-bold text-white">Live TV</h2>
        <div class="text-md font-normal text-white opacity-50">Let's drive into entertainment</div>
    </div>
</div>

{{-- <div class="main-slider container mx-auto py-10">
    @foreach ($sliders as $slide)
        <img class="px-5 rounded-lg container mx-auto h-[600px]" src="{{ URL::to( 'upload/source/'.$slide->slider_image )}}" alt="">
    @endforeach

</div> --}}



{{-- content section  --}}

     <!-- search option add  -->
     <div class="flex items-center gap-3 justify-end py-5">
        <div>
            <form action="{{ route('lives.index') }}" method="get">
                <div class="relative  bg-second_black text-white p-1 border-0  rounded-full flex gap-2 items-center">
                    <img src="{{  URL::asset('frontend/images/search-icon.svg') }}" class="size-4 ml-2" alt="">
                    <input type="text" value="{{ request()->input('search') }}" name="search" class="w-[300px] flex-1 p-2 bg-second_black focus:border-0 focus:outline-none rounded-full" placeholder="search">
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 text-white font-normal px-5 py-1.5 bg-redcolor rounded-full  hover:scale-105 duration-200">Search</button>
                </div>
            </form>
        </div>
        <div>
            <div class="relative"  x-data="{open: false}" @click.away="open = false">
                <button @click="open = !open" class="p-4 bg-second_black rounded-full"><img  src="{{ URL::asset('frontend/images/filter-icon.svg')}}" class="size-5" alt=""></button>
                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"

                    class="bg-second_black p-5 absolute -right-0 mt-4 w-[250px] rounded-md flex flex-col gap-2 text-white">
                    <div class="size-4 bg-second_black absolute -top-2 right-5 rotate-45 rounded-sm"></div>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 1</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 2</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 3</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 4</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 5</a>
                </div>
            </div>

        </div>
     </div>

 <div class="border border-second_black p-10 " >


        <!-- all movies  -->
        <section class="py-[50px]">

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

             @foreach ($paginatedLives as $live)
                 <a href="{{ URL::to('movie/'.$live->id)}} ">
                     <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5">
                         <img class="w-full h-[300px] rounded-md" src="{{ $live->image }}" alt="">
                         <div class="text-white flex justify-between items-center text-sm">
                             {{-- <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>{{ $movie->duration }}</span></button>
                             <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button> --}}
                         </div>
                     </div>
                 </a>
             @endforeach
            </div>


            <!-- Pagination Links -->
            <!-- Pagination Links -->
@if ($paginatedLives->lastPage() > 1)
<div class="flex items-center justify-center py-20">
    <nav role="navigation" aria-label="Pagination Navigation" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px border border-black bg-first_black">
        <!-- Previous Page Link -->
        @if ($paginatedLives->onFirstPage())
            <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-bg-third_black bg-second_black text-sm font-medium text-gray-500 cursor-not-allowed">
                Previous
            </span>
        @else
            <a href="{{ $paginatedLives->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-bg-third_black bg-second_black text-sm font-medium text-gray-500 hover:bg-gray-50">
                Previous
            </a>
        @endif

        <!-- First Page Link -->
        @if ($paginatedLives->currentPage() > 3)
            <a href="{{ $paginatedLives->url(1) }}" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium text-gray-500 hover:bg-gray-50">
                First
            </a>
            <span class="px-2 py-2 text-sm">...</span>
        @endif

        <!-- Page Links -->
        @foreach ($paginatedLives->getUrlRange(max(1, $paginatedLives->currentPage() - 2), min($paginatedLives->lastPage(), $paginatedLives->currentPage() + 2)) as $page => $url)
            @if ($page == $paginatedLives->currentPage())
                <span class="bg-redcolor text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    {{ $page }}
                </span>
            @else
                <a href="{{ $url }}" class="bg-second_black border-bg-third_black text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    {{ $page }}
                </a>
            @endif
        @endforeach

        <!-- Last Page Link -->
        @if ($paginatedLives->currentPage() < $paginatedLives->lastPage() - 2)
            <span class="px-2 py-2 text-sm">...</span>
            <a href="{{ $paginatedLives->url($paginatedLives->lastPage()) }}" class="relative inline-flex items-center px-4 py-2 border text-sm font-medium text-gray-500 hover:bg-gray-50">
                Last
            </a>
        @endif

        <!-- Next Page Link -->
        @if ($paginatedLives->hasMorePages())
            <a href="{{ $paginatedLives->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border bg-second_black text-sm font-medium text-gray-500 hover:bg-gray-50">
                Next
            </a>
        @else
            <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border bg-second_black text-sm font-medium text-gray-500 cursor-not-allowed">
                Next
            </span>
        @endif
    </nav>
</div>
@endif




         </section>


 </div>
<!-- vod content end -->

@endsection

