@extends('site_app')
@section('head_title', trans('words.movies_genres').' | '.getcong('site_name') )

@section('head_url', Request::url())
@section('content')

<section class="movies padding-x section-padding-y">

    <h2 class="section__title">{{trans('words.movies_genres')}}</h2>

    <ul class="show__list py-2">
        @foreach($genres_list as $genres_data)
        <li class="show__item">
            <a href="{{ URL::to('genres/movies/'.$genres_data->genre_slug) }}" class="show__link"></a>
            <div class="show__type text-uppercase">{{stripslashes($genres_data->genre_name)}}</div>

            @if($genres_data->genres_image)
            <img class="show__img" src="{{URL::to('upload/source/'.$genres_data->genres_image)}}" alt="{{stripslashes($genres_data->genre_name)}}">
            @else
            <img class="show__img" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{stripslashes($genres_data->genre_name)}}">
            @endif

            <a href="{{ URL::to('genres/movies/'.$genres_data->genre_slug) }}" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        @endforeach

    </ul>
    {{--@include('_particles.pagination', ['paginator' => $genres_list])--}}
</section>
@endsection