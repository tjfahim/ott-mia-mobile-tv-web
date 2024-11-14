@extends('site_app')
@section('head_title', getcong('site_name') )

@section('head_url', Request::url())

@section('content')
<!-- Trending shows starts -->


<section class="splide__fluid">
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="heroSplide">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="heroSplide-track" aria-label="Previous slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="heroSplide-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="heroSplide-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="heroSplide-list" style="transform: translateX(-9443px);">
                @foreach($slider as $slider_data)
                <li class="splide__slide is-next" id="heroSplide-slide{{$slider_data->id}}" style="width: calc(100%); height: 600px;" aria-hidden="true">
                    <a href="#" class="splide__overlay" tabindex="-1"></a>
                    <img src="{{URL::to('upload/source/'.$slider_data->slider_image)}}" data-small-src="{{URL::to('upload/source/'.$slider_data->slider_image)}}" alt="Slide" class="splide__img">
                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title">{{stripslashes($slider_data->slider_title)}}</h2>
                        </div>
                        <!-- <div class="splide__content">
                            <span class="type">ডার্ক কমেডি</span>
                            |
                            <span class="tag">NR</span>
                            |
                            <span class="duration">99 মিনিট</span>
                        </div> -->
                        <div class="splide__footer">
                            <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($slider_data->slider_post_id,'video_slug').'/'.$slider_data->slider_post_id) }}" class="cta-btn watch-btn" tabindex="-1">Play</a>
                        </div>
                        <!-- <div class="splide__icons">
                            <i class="fa-solid fa-share-nodes share-icon"></i>
                            <ul class="social__icons">
                                <li>
                                    <a href="#" class="icon" tabindex="-1">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon" tabindex="-1">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon" tabindex="-1">
                                        <i class="fa-regular fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <ul class="splide__pagination">
            @foreach($slider as $slider_data)
            <li><button class="splide__pagination__page" type="button" aria-controls="heroSplide-slide{{$slider_data->id}}" aria-label="Go to next"></button></li>
            @endforeach
        </ul>
    </div>
</section>
<!-- Trending shows ends -->









<section class="splide__shows">
    <h2 class="splide__heading">{{trans('words.latest_shows')}}</h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows-list" style="transform: translateX(-2626px);">

                @foreach(explode(",",$home_sections->section2_latest_series) as $latest_series)
                @if(App\Series::getSeriesInfo($latest_series,'status')==1)

                <li class="splide__slide splide__slide--clone0{{App\Series::getSeriesInfo($latest_series,'id')}} is-active" id="trendingShows-clone{{App\Series::getSeriesInfo($latest_series,'id')}}" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}" class="splide__overlay" tabindex="-1"></a>
                    <img src="{{URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))}}" alt="Slide" class="splide__img">

                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title">{{Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25) }}</h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}" class="cta-btn watch-btn" tabindex="-1">Watch</a>

                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{App\Series::getSeriesInfo($latest_series,'series_name')}}&amp;url={{url()->current()}}" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))}}&description={{App\Series::getSeriesInfo($latest_series,'series_name')}}" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>



<section class="splide__shows">
    <h2 class="splide__heading">{{trans('words.live_now')}}</h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="livetv">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="livetv-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="livetv-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="livetv-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="livetv-list" style="transform: translateX(-2626px);">

                @foreach(explode(",",$home_sections->section_live_now) as $live_now)
                @if(App\LiveTV::getLiveTvInfo($live_now,'status')==1)

                <li class="splide__slide splide__slide--clone0{{App\LiveTV::getLiveTvInfo($live_now,'id')}} is-active" id="livetv-clone{{App\LiveTV::getLiveTvInfo($live_now,'id')}}" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="{{ URL::to('live-tv/'.App\LiveTV::getLiveTvInfo($live_now,'channel_slug').'/'.App\LiveTV::getLiveTvInfo($live_now,'id')) }}" class="splide__overlay" tabindex="-1"></a>
                    <img src="{{URL::to('upload/source/'.App\LiveTV::getLiveTvInfo($live_now,'channel_thumb'))}}" alt="Slide" class="splide__img">

                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title">{{Str::limit(stripslashes(App\LiveTV::getLiveTvInfo($live_now,'series_name')),25) }}</h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="{{ URL::to('series/'.App\LiveTV::getLiveTvInfo($live_now,'series_slug').'/'.App\LiveTV::getLiveTvInfo($live_now,'id')) }}" class="cta-btn watch-btn" tabindex="-1">Watch</a>

                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{App\LiveTV::getLiveTvInfo($live_now,'series_name')}}&amp;url={{url()->current()}}" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.App\LiveTV::getLiveTvInfo($live_now,'series_poster'))}}&description={{App\LiveTV::getLiveTvInfo($live_now,'series_name')}}" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="splide__shows">
    <h2 class="splide__heading">{{trans('words.latest_movies')}}</h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows2">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows2-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows2-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows2-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows2-list" style="transform: translateX(-2626px);">

                @foreach(explode(",",$home_sections->section1_latest_movie) as $latest_movie)
                @if(App\Movies::getMoviesInfo($latest_movie,'status')==1)
                <li class="splide__slide splide__slide--clone{{App\Movies::getMoviesInfo($latest_movie,'id')}} is-active" id="superHitShows-clone{{App\Movies::getMoviesInfo($latest_movie,'id')}}" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id')) }}" class="splide__overlay" tabindex="-1"></a>
                    <img src="{{URL::to('upload/source/'.App\Movies::getMoviesInfo($latest_movie,'video_image_thumb'))}}" alt="Slide" class="splide__img">
                    @if(App\Movies::getMoviesInfo($latest_movie,'video_access')=='Paid')
                    <div class="show__quality">Premium</div>
                    @endif
                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title">{{ Str::limit(stripslashes(App\Movies::getMoviesInfo($latest_movie,'video_title')),12)}}</h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id')) }}" class="cta-btn watch-btn" tabindex="-1">Watch</a>
                                <a href="#" class="cta-btn trailler-btn" tabindex="-1"><i class="fa fa-clock-o"></i> {{App\Movies::getMoviesInfo($latest_movie,'duration')}}</a>
                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{App\Movies::getMoviesInfo($latest_movie,'video_title')}}&amp;url={{url()->current()}}" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.App\Movies::getMoviesInfo($latest_movie,'video_image_thumb'))}}&description={{App\Movies::getMoviesInfo($latest_movie,'video_title')}}" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach


            </ul>
        </div>
    </div>
</section>



<section class="splide__shows">
    <h2 class="splide__heading">{{trans('words.popular_shows')}}</h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows3">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows3-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows3-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows3-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows3-list" style="transform: translateX(-2626px);">
                @foreach(explode(",",$home_sections->section3_popular_series) as $popular_series)
                @if(App\Series::getSeriesInfo($popular_series,'status')==1)

                <li class="splide__slide splide__slide--clone{{App\Series::getSeriesInfo($latest_series,'id')}} is-active" id="trendingShows3-clone{{App\Series::getSeriesInfo($latest_series,'id')}}" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}" class="splide__overlay" tabindex="-1"></a>
                    <img src="{{URL::to('upload/source/'.App\Series::getSeriesInfo($popular_series,'series_poster'))}}" alt="Slide" class="splide__img">

                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title">{{Str::limit(stripslashes(App\Series::getSeriesInfo($popular_series,'series_name')),25) }}</h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}" class="cta-btn watch-btn" tabindex="-1">Watch</a>

                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{App\Series::getSeriesInfo($latest_series,'series_name')}}&amp;url={{url()->current()}}" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))}}&description={{App\Series::getSeriesInfo($latest_series,'series_name')}}" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>


<section class="splide__shows">
    <h2 class="splide__heading">{{trans('words.popular_movies')}}</h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows4">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows4-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows4-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows4-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows4-list" style="transform: translateX(-2626px);">

                @foreach(explode(",",$home_sections->section3_popular_movie) as $popular_movie)
                @if(App\Movies::getMoviesInfo($popular_movie,'status')==1)

                <li class="splide__slide splide__slide--clone{{App\Movies::getMoviesInfo($popular_movie,'id')}} is-active" id="trendingShows4-clone{{App\Movies::getMoviesInfo($popular_movie,'id')}}" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    @if(Auth::check())
                    <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id')) }}" class="splide__overlay" tabindex="-1"></a>
                    @else
                    @if(App\Movies::getMoviesInfo($popular_movie,'video_access')=='Paid')
                    <a class="show__link" class="icon" href="Javascript::void();" data-bs-toggle="modal" data-bs-target="#loginRegiModal">
                        @else
                        <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id')) }}" class="splide__overlay" tabindex="-1"></a>
                        @endif
                        @endif
                        <img src="{{URL::to('upload/source/'.App\Movies::getMoviesInfo($popular_movie,'video_image_thumb'))}}" alt="Slide" class="splide__img">

                        <div class="splide__inner">
                            <div class="splide__header">
                                <h2 class="title">{{ Str::limit(stripslashes(App\Movies::getMoviesInfo($popular_movie,'video_title')),12)}}</h2>
                            </div>
                            <div class="bottom">
                                <div class="splide__footer">
                                    @if(Auth::check())
                                    <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id')) }}" class="cta-btn watch-btn" tabindex="-1">Watch</a>
                                    @else
                                    @if(App\Movies::getMoviesInfo($popular_movie,'video_access')=='Paid')
                                    <a class="show__link" class="icon" href="Javascript::void();" data-bs-toggle="modal" data-bs-target="#loginRegiModal">
                                        @else
                                        <a href="{{ URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id')) }}" class="cta-btn watch-btn" tabindex="-1">Watch</a>
                                        @endif
                                        @endif




                                </div>
                                <div class="splide__icons">
                                    <i class="fa-solid fa-share-nodes share-icon"></i>
                                    <ul class="social__icons">

                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?text={{App\Movies::getMoviesInfo($popular_movie,'video_title')}}&amp;url={{url()->current()}}" class="icon">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.App\Movies::getMoviesInfo($popular_movie,'video_image_thumb'))}}&description={{App\Movies::getMoviesInfo($popular_movie,'video_title')}}" class="icon">
                                                <i class="fa-brands fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                </li>
                @endif
                @endforeach

            </ul>
        </div>
    </div>
</section>



@endsection