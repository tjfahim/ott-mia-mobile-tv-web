@extends('site_app')

@if($movies_info->seo_title)
@section('head_title', stripslashes($movies_info->seo_title).' | '.getcong('site_name'))
@else
@section('head_title', stripslashes($movies_info->video_title).' | '.getcong('site_name'))
@endif

@if($movies_info->seo_description)
@section('head_description', stripslashes($movies_info->seo_description))
@else
@section('head_description', Str::limit(stripslashes($movies_info->video_description),160))
@endif

@if($movies_info->seo_keyword)
@section('head_keywords', stripslashes($movies_info->seo_keyword))
@endif


@section('head_image', URL::to('upload/source/'.$movies_info->video_image))

@section('head_url', Request::url())

@section('content')

<!-- Plyr CSS -->



<section class="single__series padding-top-70 single__page">
    <div class="featured__area">
        <img src="{{URL::to('upload/source/'.$movies_info->video_image)}}" alt="{{stripslashes($movies_info->video_title)}}" class="cover__img">
    </div>
    <div class="single__header">
        <div class="show__credentials">
            <h2 class="single__title">{{stripslashes($movies_info->video_title)}}</h2>

            @if($movies_info->duration)
            <div class="time__duration">
                <span class="count">{{$movies_info->duration}}</span>
            </div>|
            @endif
            @if($movies_info->release_date)
            <div class="type"><i class="fa fa-calendar"></i> {{ isset($movies_info->release_date) ? date('M d Y',$movies_info->release_date) : null }}</div>|
            @endif



            @if($movies_info->imdb_rating)
            <div class="type">IMDb Rating {{$movies_info->imdb_rating}}</div>
            @endif


            <!-- <div class="tag">NR</div> -->
        </div>
        <div class="icons">
            <!--             
            <a href="#" class="icon">
                <i class="fa-solid fa-thumbs-up"></i>
            </a>
            <a href="#" class="icon">
                <i class="fa-solid fa-thumbs-down"></i>
            </a> -->
            <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?text={{$movies_info->video_title}}&amp;url={{url()->current()}}" class="icon">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.$movies_info->video_image)}}&description={{$movies_info->video_title}}" class="icon">
                <i class="fa-brands fa-pinterest"></i>
            </a>
            <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

        </div>
    </div>
    <div class="single__body mb-5">
        <div class="video__desc padding-x">
            <div class="row">
                <!-- <div class="col-md-6">
                    <div class="top">
                        <div class="titles">
                            <h3 class="directors__title">পরিচালক</h3>
                            <h3 class="actors__title">অভিনয়ে</h3>
                        </div>
                        <div class="descs">
                            <p class="directors__desc">সাইফুল ইসলাম মান্নু</p>
                            <p class="actors__desc">
                                মোনালিসা, চ্যালেঞ্জার, মাসুদ আলী খান
                            </p>
                        </div>
                    </div>
                    <p class="show__plot">
                        সারার বাবা মনে করেন, তার মেয়ে প্রান্ত নামের এক ছেলের প্রেমে
                        পড়েছে। এই প্রেম সারার বাবা মানতে নারাজ। তাই তিনি অন্য কোথাও
                        সারার বিয়ে ঠিক করার সিদ্ধান্ত নেন। পাত্র খোঁজার ইন্টারভিউয়ের
                        আয়োজন করেন। সারা কি তার বাবাকে বোঝাতে পারবে সে জীবনে কী চায়।
                    </p>
                </div> -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-4 mb-4 mb-sm-0">
                            <div class="show__preview">
                                <img src="{{URL::to('upload/source/'.$movies_info->video_image)}}" alt="{{stripslashes($movies_info->video_title)}}" width="100%" height="auto">
                                <i class="fa-solid fa-play play__btn"></i>
                            </div>
                            <button class="show__trigger">
                                Play
                            </button>
                        </div>
                        <div class="col-sm-8">
                            <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                            <h2 class="part__title"> {{trans('words.description')}}</h2>
                            <p class="part__desc">
                                @if(strlen($movies_info->video_description) > 500)

                                {!!stripslashes($movies_info->video_description)!!}

                                @else
                                {!!stripslashes($movies_info->video_description)!!}
                                @endif


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="splide__shows single__splider">
    <h2 class="splide__heading text-uppercase">{{trans('words.you_may_like')}}</h2>
    <div class="splide" id="recommendedShows">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach($related_movies_list as $movies_data)
                <li class="splide__slide">

                    <a href="{{ URL::to('movies/'.$movies_data->video_slug.'/'.$movies_data->id) }}" class="splide__overlay"></a>


                    <img src="{{URL::to('upload/source/'.$movies_data->video_image_thumb)}}" alt="Movie Thumb" class="splide__img" />
                    <div class="show__quality">Premium</div>
                    <button class="wishlist__btn">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</section>
<!-- Trending shows ends -->




@endsection