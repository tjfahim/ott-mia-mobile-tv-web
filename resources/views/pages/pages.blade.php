@extends('site_app')

@section('head_title', $page_info->page_title.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')

<section class="privacy__policies">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="policy__title text-uppercase">{{stripslashes($page_info->page_title)}}</h3>

                <span class="clt-content">{!!stripslashes($page_info->page_content)!!}</span>


            </div>
        </div>
    </div>
</section>

@endsection