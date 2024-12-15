<?php $__env->startSection('content'); ?>


<?php if(auth()->guard()->guest()): ?>



<!-- hero section start -->
<div class="h-[calc(100vh-90px)]"
style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo e(URL::asset('frontend/images/bg-hero.png')); ?>'); background-size: cover; background-position: center;">
    <div class="h-full w-3/4 mx-auto flex flex-col gap-5 justify-center items-center">
        <img class="w-[450px]" src="<?php echo e(URL::asset('frontend/images/logo-hero.svg')); ?>" alt="">
        <h1 class="font-manrope text-6xl text-white font-bold text-center">Welcome To Silk Road Television</h1>
        <p class="text-[#999999] text-xl text-center md:w-4/5 tracking-wider">
            StreamVibe is the best streaming experience for watching your favorite movies and shows on demand, anytime, anywhere. With StreamVibe, you can enjoy a wide variety of content, including the latest blockbusters, classic movies, popular TV shows, and more. You can also create your own watchlists, so you can easily find the content you want to watch.
        </p>
        <a  href="<?php echo e(URL::to('vod/movies')); ?> " class="btn-red">
            <div class="flex gap-2 items-center">
                <img class="size-6" src="<?php echo e(URL::asset('frontend/images/play-icon.svg')); ?>" alt="" srcset="">
                <div>Start watching Now</div>
            </div>
        </a>
    </div>
</div>
<!-- hero section end -->

<div class="bg-black">
    <div class="container mx-auto">

        <section class="space-y-10 py-20">
            <div class="">
                <div class="text-white text-center md:text-left">
                    <h2 class="font-bold text-3xl mb-3">Explore our wide variety of categories</h2>
                    <div class="text-sm opacity-50">Whether you're looking for a comedy to make you laugh, a drama to make you think, or a documentary to learn something new</div>
                </div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 grid-flow-row md:grid-cols-3 gap-10 p-10 sm:p-0">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="rounded-md flex flex-col  gap-4 justify-between p-5 " style="background: linear-gradient(to bottom, rgba(26, 26, 26, 1) 0%, rgba(26, 26, 26, 1) 100%);">
                        <img class="w-full h-[300px] rounded-md" src="<?php echo e(URL::to('upload/source/'.$cat->image)); ?>" alt="" style="background: linear-gradient(to bottom, rgba(26, 26, 26, 1) 0%, rgba(26, 26, 26, 1) 100%);">
                        <div class="flex justify-between items-center">
                            <h2><?php echo e($cat->name); ?></h2>
                            <a href="<?php echo e($cat->link); ?>"><img src="<?php echo e(URL::asset('frontend/images/right-arrow.svg')); ?>" alt=""></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            


        </section>
        <!-- category list end -->



        <!-- experience section start -->
        <section class="space-y-10 py-20">
            <div class="text-center sm:text-left flex gap-5 justify-between items-center">
                <div class="text-white ">
                    <h2 class="font-bold text-3xl mb-3">We Provide you streaming experience across various devices.</h2>
                    <div class="text-center sm:text-left text-sm opacity-50 w-4/5 mx-auto sm:mx-0">With StreamVibe, you can enjoy your favorite movies and TV shows anytime, anywhere. Our platform is designed to be compatible with a wide range of devices, ensuring that you never miss a moment of entertainment.</div>
                </div>

            </div>
            <div class="">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-10">
                    <div class="flex items-center text-white gap-2 bg-red-300 justify-center py-10 rounded" style="background: rgb(16,8,8);
background: linear-gradient(59deg, rgba(16,8,8,0.9136029411764706) 31%, rgba(8,8,8,0.7679446778711485) 69%, rgba(241,4,4,0.21332282913165268) 100%);">
                        <div class="bg-stone-800 rounded py-2 px-2  ">
                            <img class="h-8 w-8" src="<?php echo e(URL::asset('frontend/images/smartphone-Icon.svg')); ?>" alt="">
                        </div>
                        <span>SmartPhones</span>
                    </div>

                    <div class="flex items-center text-white gap-2 bg-red-300 justify-center py-10 rounded" style="background: rgb(16,8,8);
background: linear-gradient(59deg, rgba(16,8,8,0.9136029411764706) 31%, rgba(8,8,8,0.7679446778711485) 69%, rgba(241,4,4,0.21332282913165268) 100%);">
                        <div class="bg-stone-800 rounded py-2 px-2  ">
                            <img class="h-8 w-8" src="<?php echo e(URL::asset('frontend/images/pc-Icon.svg')); ?>" alt="">
                        </div>
                        <span>Computer</span>
                    </div>

                    <div class="flex items-center text-white gap-2 bg-red-300 justify-center py-10 rounded" style="background: rgb(16,8,8);
background: linear-gradient(59deg, rgba(16,8,8,0.9136029411764706) 31%, rgba(8,8,8,0.7679446778711485) 69%, rgba(241,4,4,0.21332282913165268) 100%);">
                        <div class="bg-stone-800 rounded py-2 px-2  ">
                            <img class="h-8 w-8" src="<?php echo e(URL::asset('frontend/images/smart-tv-Icon.svg')); ?>" alt="">
                        </div>
                        <span>Smart TV</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- experience section end -->


         <!-- tv statation start -->
         <section class="space-y-10 py-10">
            <div class=" flex flex-col md:flex-row gap-5 justify-between items-center p-10 md:p-0">
                <div class="text-white text-center md:text-left">
                    <h2 class="font-bold text-3xl mb-2">Explore Our TV Station</h2>
                    <div class="text-sm opacity-50">Whether you're looking for a comedy to make you laugh, a drama to make you think, or a documentary to learn something new</div>
                </div>
            </div>


            <div class="space-x-10 tv-station">
                <?php $__currentLoopData = $liveStrems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mr-10 rounded-md flex flex-col  gap-4 justify-between p-5 hover:scale-110 duration-300 transform-all" style="background: linear-gradient(to bottom, rgba(26, 26, 26, 1) 0%, rgba(26, 26, 26, 1) 100%);">
                        <img class="w-full h-[250px] rounded-md" src="<?php echo e(URL::to('upload/source/'.$tv->channel_thumb)); ?>" alt="" style="background: linear-gradient(to bottom, rgba(26, 26, 26, 1) 0%, rgba(26, 26, 26, 1) 100%);">
                        <div class="flex justify-between items-center">
                            <h2><?php echo e($tv->channel_name); ?></h2>
                            <a href="<?php echo e(URL::to('tvstation?play='.$tv->channel_slug)); ?>"><img src="<?php echo e(URL::asset('frontend/images/right-arrow.svg')); ?>" alt=""></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

            </div>


        </section>
        <!-- tv statation end -->

        <!-- ask question section start  -->
        <section class="space-y-10 py-10 p-10 sm:p-0">
            <div class=" flex flex-col sm:flex-row gap-5 justify-between items-start sm:items-center ">
                <div class="text-white">
                    <h2 class="font-bold text-3xl mb-2">Frequently Asked Questions</h2>
                    <div class="text-sm opacity-50">Got questions? We've got answers! Check out our FAQ section to find answers to the most common questions about StreamVibe.</div>
                </div>
                <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Notification</a>
                <a @click="contactForm = true" class=" btn-red hover:opacity-50">Ask a Question</a>
            </div>
            <div class="space-y-5 grid grid-cols-1  sm:grid-cols-2 gap-5">
                <!-- single question  -->
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-between items-center gap-2 question border-b border-red-600 " x-data="{open: false}">
                        <div class="p-3 bg-stone-800 rounded text-center h-12  w-12 text-white block align-center justify-center">
                            01
                        </div>
                        <div class="text-white answer flex flex-col items-start justify-center flex-1">
                            <div class=""><?php echo e($faq->title); ?></div>
                            <p class="opacity-50 ans" x-show="open"><?php echo e($faq->description); ?></p>
                        </div>
                        <button class="text-white showQ text-3xl" @click="open = !open" x-text="open ? '-' : '+'"></button>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                





            </div>
        </section>
        <!-- ask question section end  -->


        <!-- plan section start  -->
        <section class="space-y-10 py-[100px]">
            <div class=" flex flex-col sm:flex-row gap-5 justify-between items-center">
                <div class="text-white text-center sm:text-left px-5 sm:px-0">
                    <h2 class="font-bold text-3xl mb-2">Choose the plan that's right for you</h2>
                    <div class="text-sm opacity-50">Join StreamVibe and select from our flexible subscription options tailored to suit your viewing preferences. Get ready for non-stop entertainment!</div>
                </div>
                <div class="flex text-white border-2 border-stone-500 p-1 rounded gap-2">
                    <button id="monthly_btn" class="p-2 rounded ">Monthly</button>
                    <button id="yearly_btn" class="p-3 rounded ">Yearly</button>
                </div>
            </div>
            <!-- monthly plan -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 p-10 sm:p-0" id="monthly_plan">
                
                <?php $__currentLoopData = $monthly_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-second_black p-5 flex flex-col text-white gap-5 rounded w-full ">
                        <h2 class="text-2xl"><?php echo e($plan->plan_name); ?></h2>
                        <p class="opacity-50"><?php echo e($plan->description); ?></p>
                        <div class="">
                            <span class="text-3xl "><?php echo e($plan->plan_price); ?></span><span class="opacity-50">/month</span>
                        </div>
                        <div class="flex justify-between gap-5">
                            <a href="" class="w-full py-2 px-2 bg-first_black text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Start Free Trail</a>
                            <a href="" class="w-full  py-2 px-2 bg-redcolor text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Choose Plan</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

            </div>
            <!-- yearly plan -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 p-10 sm:p-0" id="yearly_plan">
                <?php $__currentLoopData = $yearly_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-second_black p-5 flex flex-col text-white gap-5 rounded w-full ">
                        <h2 class="text-2xl"><?php echo e($plan->plan_name); ?></h2>
                        <p class="opacity-50"><?php echo e($plan->description); ?></p>
                        <div class="">
                            <span class="text-3xl "><?php echo e($plan->plan_price); ?></span><span class="opacity-50">/month</span>
                        </div>
                        <div class="flex justify-between gap-5">
                            <a href="" class="w-full py-2 px-2 bg-first_black text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Start Free Trail</a>
                            <a href="" class="w-full  py-2 px-2 bg-redcolor text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Choose Plan</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
         </section>
        <!-- plan section end -->

        <!-- free trail section  start  -->
        <section class=" rounded  h-[250px] flex  justify-center items-center" style="background-image: url(<?php echo e(URL::asset('frontend/images/BackgroundImages.png')); ?>) "; >
            <div class="flex flex-col sm:flex-row justify-between gap-10 items-center w-full p-10">
                <div class="text-white text-center sm:text-left">
                    <h2 class="font-bold text-3xl mb-2">Start browsing for free today!</h2>
                    <p class=" opacity-50 text-sm">This is a clear and concise call to action that encourages users to sign up for a free trial of StreamVibe.</p>
                </div>
                <a  href="" class="btn-red hover:opacity-50">Start a free trail</a>
            </div>
        </section>
        <!-- free trail section  end  -->


    </div>
</div>

<?php endif; ?>

<?php if(auth()->guard()->check()): ?>

<div class="slide">
    <div class="h-[500px] w-full" style="background: url('./images/movie-slider.png'); background-size: cover;">
        <div class="container mx-auto flex flex-col h-full py-10 justify-between">
            <div class="flex flex-col gap-2">
                <h2 class="text-4xl font-bold ">Hi Brandy!</h2>
                <h4 class="text-xl "><span class="opacity-50">Free Account-</span> <span class="text-redcolor">Upgrade to Premiem</span></h4>
            </div>

        </div>
    </div>
</div>



<div class="bg-black">
    <div class="container mx-auto">
        <!-- section recently watch start -->
        <section class="py-10 space-y-5 p-10">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold">Recent Watch</h2>
                <a class="text-redcolor font-xl underline underline-offset-4 font-bold" href="">View All</a>
            </div>
            <div class="slider1">

                <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between">
                    <img class="w-full h-[250px] hover:scale-110 duration-300" src="./images/movie1.png" alt="">
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex gap-1 text-white"><img src="./images/clock-icon.svg" alt=""><span>1h30m</span></div>
                        <div class=" text-white opacity-80">Movies</div>
                    </div>
                </div>

                <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between">
                    <img class="w-full h-[250px] hover:scale-110 duration-300" src="./images/movie1.png" alt="">
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex gap-1 text-white"><img src="./images/clock-icon.svg" alt=""><span>1h30m</span></div>
                        <div class="text-white opacity-80">Movies</div>
                    </div>
                </div>

                <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between">
                    <img class="w-full h-[250px] hover:scale-110 duration-300" src="./images/movie1.png" alt="">
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex gap-1 text-white"><img src="./images/clock-icon.svg" alt=""><span>1h30m</span></div>
                        <div class="text-white opacity-80">Movies</div>
                    </div>
                </div>

                <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between">
                    <img class="w-full h-[250px] hover:scale-110 duration-300" src="./images/movie1.png" alt="">
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex gap-1 text-white"><img src="./images/clock-icon.svg" alt=""><span>1h30m</span></div>
                        <div class="text-white opacity-80">Movies</div>
                    </div>
                </div>

                <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between">
                    <img class="w-full h-[250px] hover:scale-110 duration-300" src="./images/movie1.png" alt="">
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex gap-1 text-white"><img src="./images/clock-icon.svg" alt=""><span>1h30m</span></div>
                        <div class="text-white opacity-80">Movies</div>
                    </div>
                </div>

                <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between">
                    <img class="w-full h-[250px] hover:scale-110 duration-300" src="./images/movie1.png" alt="">
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex gap-1 text-white"><img src="./images/clock-icon.svg" alt=""><span>1h30m</span></div>
                        <div class="text-white opacity-80">Movies</div>
                    </div>
                </div>



            </div>
        </section>
        <!-- section recently watch start -->


        <!-- section recently watch start -->
        <section class="py-10 space-y-5 p-10">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold">Movies</h2>
                <a class="text-redcolor font-xl underline underline-offset-4 font-bold" href="">View All</a>
            </div>
            <div class="slider1">


                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(URL::to('movie/'.$movie->video_slug)); ?> ">
                        <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between hover:scale-95 duration-300">
                            <img class="w-full h-[250px]  duration-300 rounded-lg mb-2" src="<?php echo e(URL::asset('upload/source/'.$movie->video_image_thumb)); ?>" alt="">
                            <div class="flex justify-between items-center text-sm">
                                <div class="flex gap-1 text-white"><img src="<?php echo e(URL::asset('frontend/images/clock-icon.svg')); ?>" alt=""><span><?php echo e($movie->duration); ?></span></div>
                                <div class="text-white opacity-80">Movies</div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                



            </div>
        </section>
        <!-- section recently watch start -->

        <!-- section live show start -->
        <section class="py-10 space-y-5 p-10">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold">Live</h2>
                <a class="text-redcolor font-xl underline underline-offset-4 font-bold" href="">View All</a>
            </div>
            <div class="flex gap-5 flex-wrap">
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>

                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>

                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>

                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
                <a href="">
                    <div class="border-4 border-redcolor rounded-full h-[120px] w-[120px] relative">
                        <img class="h-full w-full" src="./images/profile1.png" alt="">
                        <div class="bg-redcolor rounded-full inline-block text-sm text-white py-1 px-2 absolute -bottom-3 left-1/2 transform -translate-x-1/2">Live</div>
                    </div>
                </a>
            </div>
        </section>
        <!-- section live show end -->

        <!-- section show watch start -->
        <section class="py-10 space-y-5 p-10">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold">Shows</h2>
                <a class="text-redcolor font-xl underline underline-offset-4 font-bold" href="">View All</a>
            </div>
            <div class="slider1">



                <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="h-[300px] w-[200px] mx-5 flex flex-col justify-between hover:scale-95 duration-300">
                        <img class="w-full h-[250px]  duration-300 rounded-lg mb-2" src="<?php echo e(URL::asset('upload/source/'.$show->series_poster)); ?>" alt="">
                        <div class="flex justify-between items-center text-sm">
                            <div class="flex gap-1 text-white"><img src="<?php echo e(URL::asset('frontend/images/clock-icon.svg')); ?>" alt=""><span><?php echo e($show->duration); ?></span></div>
                            <div class="text-white opacity-80">Show</div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                



            </div>
        </section>
        <!-- section show watch start -->
    </div>
</div>


<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/client_site/pages/home.blade.php ENDPATH**/ ?>