<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/frontend/css/output.css')); ?>">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="bg-[#141414] h-screen">
        <div class="container max-w-[1580px] mx-auto ">

            <!--  nav section start -->
            <?php echo $__env->make('frontend.components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--  nav section end -->

            <!-- video play section start -->


                <div
                id="container"
                class="group   w-full mx-auto rounded-lg overflow-hidden relative"
            >

                <figure>
                    <video  class="w-full">
                        <source src="<?php echo e(URL::to( $video->video_url)); ?>" />
                        <!-- <source src="https://www.youtube.com/watch?v=jMcIE1hnaYw"> -->
                    </video>
                </figure>

                <!-- CONTROLS -->
                <div
                    id="controls"
                    class="opacity-0 p-5 absolute bottom-0 left-0 w-full transition-opacity duration-300 ease-linear group-hover:opacity-100"
                >
                <!-- PROGRESS BAR -->
                <div id="progress-bar" class="h-1 w-full bg-white cursor-pointer mb-4">
                    <div
                    id="progress-indicator"
                    class="h-full w-0 bg-indigo-800 transition-all duration-500 ease-in-out"
                    ></div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-between">
                        <!-- REWIND BUTTON -->
                        <button
                            id="rewind"
                            class="transition-all duration-100 ease-linear hover:scale-125"
                        >
                        <i class="material-icons text-white text-3xl w-12">replay_10 </i>
                        </button>

                        <!-- PLAY BUTTON -->
                        <button
                        id="play-pause"
                        class="transition-all duration-100 ease-linear hover:scale-125"
                        >
                        <i class="material-icons text-white text-5xl inline-block w-12">play_arrow</i>
                        </button>

                        <!-- FAST FORWARD BUTTON -->
                        <button
                            id="fast-forward"
                            class="transition-all duration-100 ease-linear hover:scale-125"
                        >
                        <i class="material-icons text-white text-3xl w-12">forward_10 </i>
                        </button>
                    </div>

                <div>
                    <!-- VOLUME BUTTON -->
                    <button
                        id="volume"
                        class="transition-all duration-100 ease-linear hover:scale-125"
                    >
                    <i class="material-icons text-white text-3xl">volume_up</i>
                    </button>
                </div>
                </div>
                    </div>
                </div>

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
                            <button class="skip py-2 px-3 text-white flex items-center justify-center border gap-2"><span>Skip</span> <img src="<?php echo e(URL::asset('assets/frontend/images/pause-play.svg')); ?>" alt=""></button>
                        </div>

                        <button class="bg-[#ED2024] hover:opacity-50 p-3 rounded-full absolute top-5 right-5 btn-popup hover:space-x-110 duration-300"><img src="<?php echo e(URL::asset('assets/frontend/images/x.svg')); ?>" alt=""></button>
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
    <script src="<?php echo e(URL::asset('assets/frontend/js/video.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/playMovies.blade.php ENDPATH**/ ?>