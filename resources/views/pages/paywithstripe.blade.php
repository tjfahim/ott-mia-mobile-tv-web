@extends('site_app')

@section('head_title', trans('words.payment_method') . ' | ' . getcong('site_name'))

@section('head_url', Request::url())

@section('content')

    

    <section class="my-5" id="pay">
        <div class="container bg-transparent"
            style="padding: 40px;
  max-width: 930px;
  margin: 20px auto;
  flex-wrap: wrap;
  justify-content: space-between;
  border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; margin: 5rem auto;">
            <div class="row">
                <div class="text-white bg-transparent">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table">
                            <div class="row display-tr">
                                <h3 class="panel-title display-td text-center">Payment Details</h3>
                                
                            </div>
                        </div>
                        <div class="panel-body">

                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif

                            <form role="form" action="/stripe" method="post" class="require-validation bg-transparent"
                                data-cc-on-file="false" data-stripe-publishable-key="{{ $setting->stripe_publishable_key }}"
                                id="payment-form">
                                @csrf

                                <div class='form-row row my-3'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Name on Card</label> <input class='form-control bg-transparent text-white mt-2'
                                            size='4' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row my-3'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Card Number</label> <input autocomplete='off'
                                            class='form-control card-number bg-transparent text-white  mt-2' size='20' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row my-3'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                            class='form-control card-cvc bg-transparent text-white  mt-2' placeholder='ex. 311' size='4'
                                            type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> <input
                                            class='form-control card-expiry-month bg-transparent text-white  mt-2' placeholder='MM' size='2'
                                            type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> <input
                                            class='form-control card-expiry-year bg-transparent text-white  mt-2' placeholder='YYYY' size='4'
                                            type='text'>
                                    </div>
                                </div>
                                @if (Session::has('error'))
                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>{{ Session::get('error') }}</div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row text-center">
                                    <div class="col-xs-12">
                                        <button class="btn btn-danger btn-lg btn-block" type="submit">Pay Now
                                            (${{ $plan_info->plan_price }})</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.append("<input type='hidden' name='amount' value='" + {{ $plan_info->plan_price }} +
                        "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endsection
