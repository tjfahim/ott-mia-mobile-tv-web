@extends('site_app')
@section('head_title', trans('words.sports_text').' | '.getcong('site_name') )

@section('head_url', Request::url())
@section('content')

<section class="movies padding-x section-padding-y">

    <h2 class="section__title">{{trans('words.sports_text')}}</h2>

    <ul class="show__list py-2">
        @foreach($sports_video_list as $sports_video)
        <li class="show__item">
            <a href="{{ URL::to('sports/'.$sports_video->video_slug.'/'.$sports_video->id) }}" class="show__link"></a>
            <div class="show__type text-uppercase">{{Str::limit(stripslashes($sports_video->video_title),20)}}</div>

            @if($sports_video->video_image)
            <img class="show__img" src="{{URL::to('upload/source/'.$sports_video->video_image)}}" alt="{{$sports_video->video_title}}">
            @else
            <img class="show__img" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{$sports_video->video_title}}">
            @endif

            <a href="{{ URL::to('sports/'.$sports_video->video_slug.'/'.$sports_video->id) }}" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        @endforeach

    </ul>
    @include('_particles.pagination', ['paginator' => $sports_video_list])
</section>
@endsection