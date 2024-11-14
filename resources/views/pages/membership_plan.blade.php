@extends('site_app')

@section('head_title', trans('words.subscription_plan').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')


<section class="viewplans">
    <div class="container">
        <h2 class="title text-uppercase text-center mb-5">
            <strong>{{trans('words.subscription_plan')}}</strong>
        </h2>
        <div class="plans mb-5">
            <div class="row ">
                @foreach($plan_list as $plan_data)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" style="margin: 13px 0px 0px;">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card__title text-uppercase text-center">
                                {{$plan_data->plan_name}}
                            </h3>
                        </div>
                        <div class="card-body">
                            <h4 class="price">{{$plan_data->plan_price}} {{getcong('currency_code')}}</h4>
                            <ul class="features">

                                <li class="feature__item">For {{ App\SubscriptionPlan::getPlanDuration($plan_data->id) }}</li>
                                <li class="feature__item">Ad Free Premium Access</li>
                            </ul>
                            <a href="{{ URL::to('payment_method/'.$plan_data->id) }}"> <button type="button" class="subscribe__btn btn rounded-pill">
                                    {{trans('words.select_plan')}}
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>


    </div>
</section>

@endsection