@extends('site_app')

@section('head_title', trans('words.dashboard_text').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')

<section class="movies padding-x section-padding-y">


    <div class="module    ">
        <div class="user-page04">
            <h2>{{trans('words.dashboard_text')}}</h2>
            <div class="settingColumn">
                <section class="accountInfo">
                    <div class="title site-color">Account Info</div>




                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{ Session::get('flash_message') }}
                    </div>
                    @endif


                    <div class="sectionDetails">
                        <div class="planDetails">

                            <div class="img-profile">
                                @if(Auth::User()->user_image)
                                <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" class="img-rounded" alt="profile_img">
                                @else
                                <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" class="img-rounded" alt="profile_img">
                                @endif
                            </div>


                            <div class="title">
                                <h5>{{Auth::User()->name}}</h5>
                                <p>{{Auth::User()->email}}</p>
                                <a href="{{ URL::to('profile') }}" class="button cta">{{trans('words.edit')}}</a>
                            </div>

                        </div>
                    </div>



                </section>


            </div>
            <div class="settingColumn">


                <section class="noSubscription purchaseInfo">
                    <div class="title site-color">{{trans('words.my_subscription')}}</div>
                    <div class="sectionDetails">
                        <div class="planDetails">
                            <div class="title">
                                @if($user->plan_id!=0)
                                <p class="premuim-memplan"><b>{{trans('words.current_plan')}}:</b> {{\App\SubscriptionPlan::getSubscriptionPlanInfo($user->plan_id,'plan_name')}}</p>
                                @if($user->exp_date)<p>{{trans('words.subscription_expires_on')}} <b>{{date('F, d, Y',$user->exp_date)}}</b></p>@endif
                                <div>
                                    <a href="{{ URL::to('membership_plan') }}" class="button cta">{{trans('words.upgrade_plan')}} </a>
                                </div>
                                @else
                                <div>
                                    <a href="{{ URL::to('membership_plan') }}" class="button cta">{{trans('words.select_plan')}} </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>


                <section class="noSubscription purchaseInfo">
                    <div class="title site-color">{{trans('words.last_invoice')}}</div>
                    <div class="sectionDetails">
                        <div class="planDetails">
                            <div class="title">
                                <p class="premuim-memplan"><b>{{trans('words.date')}}:</b> <span class="mem-span">@if($user->start_date){{date('F, d, Y',$user->start_date)}}@endif</span></p>
                                <p class="premuim-memplan"><b>{{trans('words.plan')}}:</b> <span class="mem-span">{{\App\SubscriptionPlan::getSubscriptionPlanInfo($user->plan_id,'plan_name')}}</span></p>
                                <p class="premuim-memplan"><b>{{trans('words.amount')}}:</b> <span class="mem-span">@if($user->plan_amount){{number_format($user->plan_amount,2,'.', '') }}@endif</span></p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>



<style>
    .modules .module {
        grid-column: 1/-1;
        max-width: 100%;
        background: inherit;
    }

    .user-page04 {
        padding: 40px;
        display: flex;
        max-width: 930px;
        margin: 20px auto;
        flex-wrap: wrap;
        justify-content: space-between;
        background: #fff;
        border-radius: 10px;
    }

    .user-page04 h2 {
        flex-basis: 100%;
        font-size: 28px;
        margin-bottom: 30px;
        color: #000;
        font-weight: 700;
    }

    .user-page04 .settingColumn {
        display: flex;
        flex-direction: column;
        flex-basis: 49%;
    }

    .user-page04 .settingColumn section {
        padding: 20px;
        background: #f7f8f9;
        border-radius: 8px;
        margin-bottom: 20px;
        color: #000;
    }

    .user-page04 .settingColumn section.accountInfo .title {
        margin-bottom: 30px;
        text-align: center;
    }

    .user-page04 .settingColumn section>.title {
        text-align: left;
        font-size: 20px;
        font-weight: 700;
    }

    .user-page04 .site-color {
        color: #ed1f52;
    }

    .user-page04 .settingColumn section.accountInfo .field {
        padding: 10px;
        position: relative;
        border: 1px solid #000;
        border-radius: 4px;
        margin-bottom: 20px;
        font-size: 14px;
        background: #fff;
        width: -webkit-fill-available;
    }

    .user-page04 .settingColumn section.accountInfo .field .fieldName {
        position: absolute;
        top: -6px;
        left: 10px;
        background: #f7f8f9;
        padding: 0 3px;
        color: #000;
        font-size: 10px;
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .user-page04 .button {
        margin-top: 10px;
        text-align: center;
        font-size: 11px;
        border-radius: 3px;
    }

    .user-page04 .cta {
        background: #ed1f52;
        color: #ffffff;
        font-weight: bold;
        border-style: solid;
        border-radius: 0px;
        border-width: 1px;
        border-color: #ed1f52;
        padding: 6px 34px;
        font-size: 18px;
    }

    .img-profile img.img-rounded {
        border-radius: 80px;
        width: 150px;
        display: block;
        margin: 0 auto;
        text-align: center;
        height: auto;
    }
</style>
@endsection