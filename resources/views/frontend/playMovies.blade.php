<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{  URL::asset('assets/frontend/css/output.css') }}">
        <!-- Include Video.js CSS -->
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="bg-[#141414] h-screen">
        <div class="container max-w-[1580px] mx-auto ">

            <!--  nav section start -->
            @include('frontend.components.navbar')
            <!--  nav section end -->

            <!-- video play section start -->
            <section class="py-2 sm:py-10 relative h-[400px] sm:h-[800px]  w-full">
                <video class="h-[400px] sm:h-[800px] w-full" controls>
                    <source src="{{ URL::to( $video->video_url) }}" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <div class=" absolute w-full sm:w-2/3 mt-[200px]  sm:mt-0 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 p-5 xl:p-20  popup">
                    <div class="w-full relative bg-red-500   rounded-md p-5 xl:p-10" style=" background: rgb(20,20,20);
        background: linear-gradient(0deg, rgba(20,20,20,0.695098107602416) 0%, rgba(20,20,20,0.7539216370141807) 100%); ">
                        <form action="" class="flex gap-5 flex-col justify-between ">
                            <div class="space-y-3">
                                <h2 class="text-xl font-semibold text-white opacity-100">Upgrate to Premium</h2>
                                <p class="text-[#FFFFFF66] text-sm">Make the choice now to upgrade your plan to get full features of Silk Road TV.</p>
                            </div>
                            <div>
                                <h3 class="text-md text-white opactiy-70">What does premium include?</h3>
                                <div class="flex gap-5  flex-col sm:flex-row">
                                    <div>
                                        <input type="checkbox" class="rounded-lg border-2 border-gray-500 p-2" />
                                        <label for="" class="text-white opacity-50 text-sm">Watch any movie and show.</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="rounded-lg border-2 border-gray-500 p-2" />
                                        <label for="" class="text-white opacity-50 text-sm">Watch any movie and show.</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="rounded-lg border-2 border-gray-500 p-2" />
                                        <label for="" class="text-white opacity-50 text-sm">Watch any movie and show.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-10 w-full justify-between mb-[100px]">
                                <div class="bg-black rounded-md w-full">
                                    <div class="flex justify-between items-center rounded-t-md  bg-[#282b2b] checkbox_warp   py-2 px-3">
                                        <h2 class="text-md text-gray-400"><span class="text-white">Weekly</span> - Best for Weekly Entertainment</h2>
                                        <label class="inline-flex items-center space-x-2">
                                            <input type="radio" name="plan" class="hidden peer checkbox" active="0"/>
                                            <span class="w-6 h-6 bg-gray-200 rounded-full peer-checked:bg-gray-500 peer-checked:border-transparent border-2 border-gray-500"></span>
                                          </label>
                                    </div>
                                    <div class="text-white flex justify-between items-center p-4">
                                        <div>
                                            <div class="text-2xl font-bold">$19.99</div>
                                            <div class="text-sm opacity-50">Before - per week</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold">$19.99</div>
                                            <div class="text-sm opacity-50">Now - per week</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-black rounded-md w-full">
                                    <div class="flex justify-between items-center bg-[#282b2b] checkbox_warp rounded-t-md py-2 px-3">
                                        <h2 class="text-md text-gray-400"><span class="text-white">Weekly</span> - Best for Weekly Entertainment</h2>
                                        <label class="inline-flex items-center space-x-2">
                                            <input type="radio" name="plan"  class="hidden peer checkbox" status="0"/>
                                            <span class="w-6 h-6 bg-gray-200 rounded-full peer-checked:bg-gray-500 peer-checked:border-transparent border-2 border-gray-500"></span>
                                          </label>
                                    </div>
                                    <div class="text-white flex justify-between items-center p-4">
                                        <div>
                                            <div class="text-2xl font-bold">$19.99</div>
                                            <div class="text-sm opacity-50">Before - per week</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold">$19.99</div>
                                            <div class="text-sm opacity-50">Now - per week</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="bg-[#ED2024] py-3 rounded-full text-white">Upgrate Now</button>
                        </form>
                        <div class="mt-5 flex justify-center items-center">
                            <button class="skip py-2 px-3 text-white flex items-center justify-center border gap-2"><span>Skip</span> <img src="{{  URL::asset('assets/frontend/images/pause-play.svg') }}" alt=""></button>
                        </div>

                        <button class="bg-[#ED2024] hover:opacity-50 p-3 rounded-full absolute top-5 right-5 btn-popup hover:space-x-110 duration-300"><img src="{{  URL::asset('assets/frontend/images/x.svg') }}" alt=""></button>
                    </div>
                </div>

             </section>


            <!-- video play section end -->
        </div>
    </div>




    <script src="https://vjs.zencdn.net/7.10.2/video.js"></script>
   <script>

        $(document).ready(function(){
            $('.popup').hide();
        });


        $(document).ready(function(){
            let active = 0;
            let ele = $('.checkbox_warp');
            $(ele[active]).addClass('bg-[#ED2024]');
            $(ele[active]).attr('active', 1);


            $(document).on('click', '.checkbox', function(){
                let activeCheck = $(this).parent().parent().attr('active');

                if(activeCheck !== '1'){
                    $(ele[active]).removeClass('bg-[#ED2024]');
                    $(ele[active]).attr('active', 0);
                    active ? active = 0 : active = 1;

                    $(ele[active]).addClass('bg-[#ED2024]');
                    $(ele[active]).attr('active', 1);
                }
            })
        });


        $(document).ready(function(){
            $('.btn-popup').on('click', function(){
                console.log('working');
                $('.popup').hide();
            });

            $('.skip').on('click', function(){
                $('.popup').hide();
            });
        });
   </script>

</body>
</html>
