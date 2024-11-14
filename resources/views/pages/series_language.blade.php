@extends('site_app')
@section('head_title', trans('words.tv_show_languages').' | '.getcong('site_name') )
@section('head_url', Request::url())
@section('content')

<section class="movies padding-x section-padding-y">

    <h2 class="section__title">{{trans('words.tv_show_languages')}}</h2>

    <ul class="show__list py-2">
        @foreach($lang_list as $lang_data)
        <li class="show__item">
            <a href="{{ URL::to('language/series/'.$lang_data->language_slug) }}" class="show__link"></a>
            <div class="show__type text-uppercase">{{stripslashes($lang_data->language_name)}}</div>

            @if($lang_data->language_image)
            <img class="show__img" src="{{URL::to('upload/source/'.$lang_data->language_image)}}" alt="{{stripslashes($lang_data->language_name)}}">


            @else
            <img class="show__img" src="{{URL::to('site_assets/images/colored-painted.jpg')}}" alt="{{stripslashes($lang_data->language_name)}}">
            @endif



            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        @endforeach

    </ul>

    {{--@include('_particles.pagination', ['paginator' => $lang_list])--}}
</section>
@endsection