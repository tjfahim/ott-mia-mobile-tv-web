@extends('site_app')

@if($season_info->seo_title)
@section('head_title', stripslashes($season_info->seo_title).' | '.getcong('site_name'))
@else
@section('head_title', $series_name.' '.stripslashes($season_info->season_name).' | '.getcong('site_name'))
@endif

@if($season_info->seo_description)
@section('head_description', stripslashes($season_info->seo_description))
@endif

@if($season_info->seo_keyword)
@section('head_keywords', stripslashes($season_info->seo_keyword))
@endif


@section('head_url', Request::url())

@section('head_title', trans('words.watch_popular_tv_shows').' | '.getcong('site_name') )

@section('content')

<section class="movies padding-x section-padding-y">

    <a href="{{ URL::to('series/'.$series_slug.'/'.$season_info->series_id) }}">
        <h2 class="section__title">{{$series_name}}-{{$season_info->season_name}}</h2>
    </a>

    <ul class="show__list py-2">
        @foreach($episode_list as $episode_data)
        <li class="show__item">
            <a href="{{ URL::to('series/'.$series_slug.'/'.$episode_data->video_slug.'/'.$episode_data->id) }}">

            <div class="show__type text-uppercase">{{Str::limit(stripslashes($episode_data->video_title),15)}}</div>

            @if($episode_data->video_image)
            <img class="show__img__big" src="{{URL::to('upload/source/'.$episode_data->video_image)}}" alt="{{$episode_data->video_title}}" >
            @else
            <img class="show__img__big" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{Str::limit(stripslashes($episode_data->video_title),15)}}">
            @endif



            <a href="{{ URL::to('series/'.$series_slug.'/'.$episode_data->video_slug.'/'.$episode_data->id) }}" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>

        </a>

        </li>
        @endforeach

    </ul>
    
</section>


@endsection