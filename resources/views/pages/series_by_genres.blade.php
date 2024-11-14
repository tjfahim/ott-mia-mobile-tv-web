@extends('site_app')

@section('head_title', $genres_info->genre_name.' '.trans('words.tv_shows_text').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')

<section class="movies padding-x section-padding-y">

    <h2 class="section__title">{{$genres_info->genre_name}}</h2>

    <ul class="show__list py-2">
        @foreach($series_list as $series_data)
        <li class="show__item">
            <a href="{{ URL::to('series/'.$series_data->series_slug.'/'.$series_data->id) }}" class="show__link"></a>
            <div class="show__type text-uppercase">{{Str::limit(stripslashes($series_data->series_name),20)}}</div>

            @if($series_data->video_image_thumb)
            <img class="show__img__big" src="{{URL::to('upload/source/'.$series_data->video_image_thumb)}}" alt="{{$series_data->video_title}}">
            @else
            <img class="show__img__big" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{$series_data->video_title}}">
            @endif

            <a href="{{ URL::to('series/'.$series_data->series_slug.'/'.$series_data->id) }}" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        @endforeach

    </ul>

    @include('_particles.pagination', ['paginator' => $series_list])

</section>
@endsection