<?php $__env->startSection('content'); ?>

<!-- hero section start -->
<div class="h-[calc(100vh-90px)]"
style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo e(URL::asset('frontend/images/bg-hero.png')); ?>'); background-size: cover; background-position: center;">
    <div class="h-full w-3/4 mx-auto flex flex-col gap-5 justify-center items-center">
        <img class="" src="<?php echo e(URL::asset('frontend/images/logo-hero.svg')); ?>" alt="">
        <h1 class="font-manrope text-4xl text-white font-bold text-center">Welcome To Silk Road Television</h1>
        <p class="text-white opacity-50 text-sm text-center md:w-3/4">
            StreamVibe is the best streaming experience for watching your favorite movies and shows on demand, anytime, anywhere. With StreamVibe, you can enjoy a wide variety of content, including the latest blockbusters, classic movies, popular TV shows, and more. You can also create your own watchlists, so you can easily find the content you want to watch.
        </p>
        <a href="" class="btn-red">Start watching Now</a>
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
                            <a href=""><img src="<?php echo e(URL::asset('frontend/images/right-arrow.svg')); ?>" alt=""></a>
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
                            <a href="<?php echo e($tv->channel_slug); ?>"><img src="<?php echo e(URL::asset('frontend/images/right-arrow.svg')); ?>" alt=""></a>
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
                <a href="" class="btn-red hover:opacity-50">Ask a Question</a>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 p-10" id="monthly_plan">
                <div class="bg-second_black p-5 flex flex-col text-white gap-5 rounded w-full ">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between gap-5">
                        <a href="" class="w-full py-2 px-2 bg-first_black text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Start Free Trail</a>
                        <a href="" class="w-full  py-2 px-2 bg-redcolor text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-second_black p-5 flex flex-col text-white gap-5 rounded w-full ">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between gap-5">
                        <a href="" class="w-full py-2 px-2 bg-first_black text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Start Free Trail</a>
                        <a href="" class="w-full  py-2 px-2 bg-redcolor text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Choose Plan</a>
                    </div>
                </div>

            </div>
            <!-- yearly plan -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 p-10" id="yearly_plan">
                <div class="bg-second_black p-5 flex flex-col text-white gap-5 rounded w-full ">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between gap-5">
                        <a href="" class="w-full py-2 px-2 bg-first_black text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Start Free Trail</a>
                        <a href="" class="w-full  py-2 px-2 bg-redcolor text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Choose Plan</a>
                    </div>
                </div>
                <div class="bg-second_black p-5 flex flex-col text-white gap-5 rounded w-full ">
                    <h2 class="text-2xl">Basic Plan</h2>
                    <p class="opacity-50">Enjoy an extensive library of movies and shows, featuring a range of content, including recently released titles.</p>
                    <div class="">
                        <span class="text-3xl ">$9.99</span><span class="opacity-50">/month</span>
                    </div>
                    <div class="flex justify-between gap-5">
                        <a href="" class="w-full py-2 px-2 bg-first_black text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Start Free Trail</a>
                        <a href="" class="w-full  py-2 px-2 bg-redcolor text-center rounded-md hover:scale-110 duration-300 ease-in hover:ease-out">Choose Plan</a>
                    </div>
                </div>
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
                <a href="" class="btn-red hover:opacity-50">Stat a free trail</a>
            </div>
        </section>
        <!-- free trail section  end  -->


    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/client_site/pages/home.blade.php ENDPATH**/ ?>