@extends('site_app')
@section('head_title', $genres_info->genre_name.' '.trans('words.movies_text').' | '.getcong('site_name') )

@section('head_url', Request::url())
@section('content')

<section class="movies padding-x section-padding-y">

    <h2 class="section__title">{{trans('words.popular_in')}} {{$genres_info->genre_name}}</h2>

    <ul class="show__list py-2">
        @foreach($movies_list as $movies_data)
        <li class="show__item">



            <a href="{{ URL::to('movies/'.$movies_data->video_slug.'/'.$movies_data->id) }}" class="show__link"></a>






            <div class="show__type text-uppercase">{{Str::limit(stripslashes($movies_data->video_title),12)}}</div>

            @if($movies_data->video_image_thumb)
            <img class="show__img__big" src="{{URL::to('upload/source/'.$movies_data->video_image_thumb)}}" alt="{{$movies_data->video_title}}">
            @else
            <img class="show__img__big" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{$movies_data->video_title}}">
            @endif

            <a href="{{ URL::to('movies/'.$movies_data->video_slug.'/'.$movies_data->id) }}" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>



            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        @endforeach

    </ul>



</section>
@endsection