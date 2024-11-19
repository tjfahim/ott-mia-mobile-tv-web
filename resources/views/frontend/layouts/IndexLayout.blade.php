
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/css/output.css') }}">
</head>
<body>
    <div class="" style="background-image:  linear-gradient(0deg, rgba(16,8,8,0.6587009803921569) 7%, rgba(8,8,8,0.07046568627450978) 100%), url({{ URL::asset('assets/frontend/images/SubContainer.png') }})">
        <!--  nav section start -->
        <div class="container mx-auto ">

            @include('frontend.components.navbar')

            <!--  nav section end -->

            <!-- hero section start -->
            <section class="flex justify-center align-center p-10">

                    <img src="{{ URL::asset('assets/frontend/images/Hero-logo.png') }}" alt="">

            </section>
            <!-- hero section end -->

            <!-- welcome section start -->
             <section class="py-10 flex justify-center">
                <div class="flex flex-col items-center justify-between gap-4 px-5 text-center  sm:w-1/3 ">
                    <h2 class="text-3xl text-white font-bold">Welcome To Silk Road Television</h2>
                    <p class="text-white text-center opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dicta amet eum beatae deserunt. Eaque inventore repudiandae quis amet dolorum ea sit, ex consectetur harum, distinctio dolores molestiae cupiditate deserunt aperiam blanditiis. Totam aliquid enim laboriosam sequi minima adipisci incidunt?</p>
                    <a href="" class="btn-red hover:opacity-50 flex items-center">
                        <img src="{{ URL::asset('assets/frontend/images/play-Icon.svg') }}" alt="">
                        Start Watching Now
                    </a>
                </div>
             </section>
        </div>
        <!-- welcome section end -->
    </div>

    @yield('content')

        <!-- footer section start -->
        <div class="bg-[#0F0F0F] w-full ">
            <div class="container mx-auto ">
                <footer class="">
                    <div class="px-10 text-white flex flex-col sm:flex-row justify-between items-start gap-8  py-5 border-b border-gray-500">
                        <div>
                            <h3 class="text-xl font-medium mb-2">Home</h3>
                            <div class="flex flex-col gap-2 opacity-75">
                                <a class="" href="">Category</a>
                                <a class="" href="">Devices</a>
                                <a class="" href="">Pricing</a>
                                <a class="" href="">FAQ</a>
                            </div>
                        </div>
                        <div class="">
                            <h3 class="text-xl font-medium mb-3">Movies</h3>
                            <div class="flex flex-col gap-2 opacity-75">
                                <a class="" href="">Games</a>
                                <a class="" href="">Trending</a>
                                <a class="" href="">New Release</a>
                                <a class="" href="">Popular</a>
                            </div>
                        </div>
                        <div class="col">
                            <h3 class="text-xl font-medium mb-2">Shows</h3>
                            <div class="flex flex-col gap-2 opacity-75">
                                <a class="" href="">Games</a>
                                <a class="" href="">Trending</a>
                                <a class="" href="">New Release</a>
                                <a class="" href="">Popular</a>
                            </div>
                        </div>
                        <div class="col">
                            <h3 class="text-xl font-medium mb-2">Support</h3>
                            <div class="flex flex-col gap-2 opacity-75 ">
                                <a class="" href="{{  URL::to('contact') }}">Contact Us</a>

                            </div>
                        </div>
                        <div class="col">
                            <h3 class="text-xl font-medium mb-2">Subscription</h3>
                            <div class="flex flex-col gap-2 opacity-75  ">
                                <a class="" href="">Plans</a>
                                <a class="" href="">Features</a>

                            </div>
                        </div>
                        <div class="col">
                            <h3 class="text-xl font-medium mb-2">Contact With Us</h3>
                            <div class="flex gap-2 opacity-75">
                                <a class=" bg-dark p-2 rounded" href="{{stripslashes(getcong('footer_fb_link'))}}" ><img style="height: 24px; width: 24px;" src="{{ URL::asset('assets/frontend/images/facebook-Icon.svg') }}" alt=""></a>
                                <a class=" bg-dark p-2 rounded"href="{{stripslashes(getcong('footer_twitter_link'))}}" ><img style="height: 24px; width: 24px;" src="{{ URL::asset('assets/frontend/images/x-Icon.svg') }}" alt=""></a>
                                <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="{{ URL::asset('assets/frontend/images/linkdin-icon.svg') }}" alt=""></a>
                            </div>
                        </div>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-5 text-center justify-between py-5 text-white opacity-50">
                            <div>
                                {{stripslashes(getcong('site_copyright'))}}
                            </div>
                            <div class="px-3">
                                <a class="px-2 border-r" href="">Terms of Use</a>
                                <a class="px-2 border-r" href="">Private Policy</a>
                                <a class="" href="">Cookie Policy</a>
                            </div>
                        </div>

                </footer>
            </div>
        </div>
        <!-- footer section end -->

    <script>
        $(document).ready(function(event){

            // $(document).click(function(event){
            //     if(event)
            //     $('#search_form').hide();
            // });

            // search button function start
            $('#search_form').hide();
            $(document).on('click', '#search_btn', function(){
                $('#search_form').show();
                $(this).hide()
            })

            $(document).on('click', '#search', function(){
                $('#search_form').hide();
                $('#search_btn').show();
            });
             // search button function end

            //  month and yarly plan section
            $('#monthly_plan').show();
            $('#yearly_plan').hide();
            $('#monthly_btn').addClass('bg-stone-700');
            $('#yearly_btn').removeClass('bg-stone-700');
            $('#monthly_btn').on('click', function(){
                $('#monthly_plan').show();
                $('#yearly_plan').hide();
                $('#yearly_btn').removeClass('bg-stone-700');
                $(this).addClass('bg-stone-700');
            });
            $('#yearly_btn').on('click', function(){
                $('#yearly_plan').show();
                $('#monthly_plan').hide();
                $('#monthly_btn').removeClass('bg-stone-700');
                $(this).addClass('bg-stone-700');
            });


            // qna section
            $(".ans").hide();
            $('.ans').attr('show', '0');
            $(document).on('click', '.showQ', function(){
                if($(this).parent('.question').children('.answer').children('.ans').attr('show') == '0'){
                    $(this).text('-');
                   $(this).parent('.question').children('.answer').children('.ans').attr('show', '1')
                    $(this).parent('.question').children('.answer').children('.ans').show();
                }else{
                    $(this).text('+');
                    $(this).parent('.question').children('.answer').children('.ans').hide()
                    $(this).parent('.question').children('.answer').children('.ans').attr('show', '0')
                }
            });




             // carasol section
             let carasol = $('.carasol_body');
            let carasal_items = carasol.children();
            let carasol_bar = $('.current_bar');

            carasal_items.hide();
            let length = carasal_items.length;
            let prvPage = carasal_items[0]
            let preBar = carasol_bar[0]
            $(preBar).addClass('bg-red-800')
            $(preBar).addClass('w-6')
            $(preBar).removeClass('bg-white')
            $(carasal_items[0]).show();
            let i = 0;


            $('.btn-next').on('click', function(){
                    i = i + 1
                    if(i == length) {
                        i = 0
                    }
                    console.log(i)
                    $(prvPage).hide();
                    let page  = carasal_items[i]
                    prvPage = carasal_items[i];
                    $(preBar).removeClass('bg-red-800')
                    $(preBar).removeClass('w-6')
                    $(preBar).addClass('bg-white')
                    preBar = carasol_bar[i]

                    $(preBar).removeClass('bg-white')
                    $(preBar).addClass('bg-red-800')
                    $(preBar).addClass('w-6')

                    $(page).show();
            })

            $('.btn-pre').on('click', function(){
                    i = i - 1
                    if(i == - 1 ) {
                        i = length - 1
                    }

                    $(prvPage).hide();
                    let page  = carasal_items[i]
                    prvPage = carasal_items[i];

                    $(preBar).removeClass('bg-red-800')
                    $(preBar).removeClass('w-6')
                    $(preBar).addClass('bg-white')
                    preBar = carasol_bar[i]

                    $(preBar).addClass('bg-red-800')
                    $(preBar).removeClass('bg-white')
                    $(preBar).addClass('w-6')

                    $(page).show();
            })
        });
    </script>
</body>
</html>
