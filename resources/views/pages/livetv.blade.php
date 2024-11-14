@extends('site_app')
@section('head_title', trans('words.live_tv').' | '.getcong('site_name') )

@section('head_url', Request::url())
@section('content')

<section class="movies padding-x section-padding-y">

    <h2 class="section__title">{{trans('words.live_tv')}}</h2>

    <ul class="show__list py-2">
        @foreach($live_tv_list as $live_tv_data)
        <li class="show__item">
            <a href="{{ URL::to('live-tv/'.$live_tv_data->channel_slug.'/'.$live_tv_data->id) }}" class="show__link"></a>
            <div class="show__type text-uppercase">{{Str::limit(stripslashes($live_tv_data->channel_name),20)}}</div>

            @if($live_tv_data->channel_thumb)
            <img class="show__img" src="{{URL::to('upload/source/'.$live_tv_data->channel_thumb)}}" alt="{{$live_tv_data->channel_name}}">
            @else
            <img class="show__img" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{$live_tv_data->channel_name}}">
            @endif

            <a href="{{ URL::to('live-tv/'.$live_tv_data->channel_slug.'/'.$live_tv_data->id) }}" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        @endforeach

    </ul>
    @include('_particles.pagination', ['paginator' => $live_tv_list])
</section>
@endsection