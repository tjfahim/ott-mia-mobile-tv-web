@extends('site_app')
@if($series_info->seo_title)
@section('head_title', stripslashes($series_info->seo_title).' | '.getcong('site_name'))
@else
@section('head_title', stripslashes($series_info->series_name).' | '.getcong('site_name'))
@endif

@if($series_info->seo_description)
@section('head_description', stripslashes($series_info->seo_description))
@else
@section('head_description', Str::limit(stripslashes($series_info->series_info),160))
@endif

@if($series_info->seo_keyword)
@section('head_keywords', stripslashes($series_info->seo_keyword))
@endif


@section('head_image', URL::to('upload/source/'.$series_info->series_poster))

@section('head_url', Request::url())

@section('content')


<section class="single__movie padding-top-70 single__page">
    <div class="single__header">
        <div class="wrapper">

            <h2 class="single__title">{{stripslashes($series_info->series_name)}}</h2>
            <div class="time__duration">
                <span class="count">{{\App\Series::getSeriesTotalSeason($series_info->id)}} Seasons</span>
            </div>
            |
            <div class="type">{{\App\Series::getSeriesTotalEpisodes($series_info->id)}} Episodes</div>|

            <div class="type">{{\App\Language::getLanguageInfo($series_info->series_lang_id,'language_name')}}</div>|

            @foreach(explode(',',$series_info->series_genres) as $genres_ids)

            <div class="type">{{App\Genres::getGenresInfo($genres_ids,'genre_name')}}</div>|

            @endforeach

            @if($series_info->imdb_rating)
            <div class="type">IMDb Rating {{$series_info->imdb_rating}}</div>
            @endif
            <!-- <div class="tag">NR</div> -->
        </div>
    </div>
    <div class="single__body mb-5">
        <div class="wrapper">
            <div class="mb-4">
                
                <img src="{{URL::to('upload/source/'.$series_info->series_poster)}}" alt="{{$series_info->series_name}}" width="100%" height="auto">

            </div>
            <div class="video__desc">
                <div class="row">
                    <div class="col-lg-7 order-1 order-lg-0">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                                <h2 class="part__title"> {{stripslashes($series_info->series_name)}}</h2>
                                <p class="part__desc">
                                    {{Str::limit($series_info->series_info,180)}}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 mb-4 mb-lg-0">
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
                            <a href="https://twitter.com/intent/tweet?text={{$series_info->video_title}}&amp;url={{url()->current()}}" class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.$series_info->video_image)}}&description={{$series_info->video_title}}" class="icon">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                            <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="splide__shows single__splider">
    <h2 class="splide__heading text-uppercase">{{trans('words.seasons_text')}}</h2>
    <div class="splide" id="recommendedShows">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach($season_list as $season_data)
                <li class="splide__slide">

                    <a href="{{ URL::to('series/'.$series_info->series_slug.'/seasons/'.$season_data->season_slug.'/'.$season_data->id) }}" class="splide__overlay"></a>
                    <img src="{{URL::to('upload/source/'.$season_data->season_poster)}}" alt="{{$season_data->season_name}}" class="splide__img" />
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