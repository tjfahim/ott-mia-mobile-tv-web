<?php $__env->startSection('content'); ?>

<!-- player section start  -->
<section class="w-full py-10">
    <video class="w-full" height="450" controls>
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>
 </section>
<!-- player section end  -->

<!-- tvstation content start -->
 <div class="border border-[#262626] p-10 " >
        <!-- tv statation start -->

        <section class="space-y-10 py-10">
            <div class=" flex flex-col md:flex-row gap-5 justify-between items-center p-10 md:p-0">
                <div class="text-white text-center md:text-left">
                    <h2 class="font-bold text-3xl mb-2">Explore Our TV Station</h2>
                    <div class="text-sm opacity-50 ">Whether you're looking for a comedy to make you laugh, a drama to make you think, or a documentary to learn something new</div>
                </div>
            </div>



            <div class="bg-cardbg  grid  grid-cols-1 place-items-center  sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-[80px] carasol first_carasol  p-10">
                <?php
                    $counter = 0;
                ?>
                <?php $__currentLoopData = $liveStrems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($counter == 5): ?>
                        <?php break; ?>
                    <?php endif; ?>



                    <div class="">
                        <div class="bg-cover h-[270px] flex justify-between items-start  p-5 rounded w-full max-w-[230px]"  style="background-image: url(<?php echo e(URL::to( "upload/source/".$strem->channel_thumb )); ?>);">
                            <div class="bg-gray-500 rounded-full px-3 py-1 text-sm text-white opacity-75 flex justify-between items-center gap-1 ">
                                <img src="./images/eye.svg" alt="">
                                420
                            </div>
                            <div class="bg-red-500 rounded-full px-3 py-1 text-sm text-white">live</div>
                        </div>
                        <div class="flex justify-between text-white text-md mt-3" style="width: 230px;">
                            <div><?php echo e($strem->channel_name); ?></div>

                            <a href="<?php echo e($strem->channel_url); ?>">
                                <img class="h-4.5 w-4.5" src="<?php echo e(URL::asset('assets/frontend/images/right-arow.png')); ?>" alt="">
                            </a>

                        </div>
                    </div>

                    <?php
                        $counter++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                






            </div>
        </section>
        <!-- tv statation end -->

        <!-- youtube card start -->
         <section class="py-[50px] ">
            <div class="flex justify-between items-center text-white mb-10">
                <h2 class="text-3xl font-semibold">Youtube</h2>
                <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
                <?php
                    $counter = 0;
                ?>
                <?php $__currentLoopData = $youtubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $youtube): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($counter == 5): ?>
                        <?php break; ?>
                    <?php endif; ?>
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to( $youtube->image )); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                        </div>
                    </div>
                    <?php
                        $counter++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





            </div>
         </section>
        <!-- youtube card end -->

         <!-- tiktok card start -->
        <section class="py-[50px]">

            <div class="flex justify-between items-center text-white mb-10">
                <h2 class="text-3xl font-semibold">TikTok</h2>
                <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

                <?php
                    $counter = 0;
                ?>
                <?php $__currentLoopData = $tiktoks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiktok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($counter == 5): ?>
                        <?php break; ?>
                    <?php endif; ?>

                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to( $tiktok->image )); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                        </div>
                    </div>
                    <?php
                        $counter++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
         </section>
         <!-- tiktok card end -->


         <!-- Livestreams card start -->



         <section class="py-[50px]">

            <div class="flex justify-between items-center text-white mb-10">
                <h2 class="text-3xl font-semibold">Livestreams</h2>
                <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">


                <?php
                    $counter = 0;
                ?>
                <?php $__currentLoopData = $liveBroadCasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livestrem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($counter == 5): ?>
                        <?php break; ?>
                    <?php endif; ?>

                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to( $livestrem->image )); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at <?php echo e($livestrem->created_at->format('F j, Y')); ?></span></button>
                        </div>
                    </div>

                    <?php
                        $counter++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        





            </div>
         </section>
         <!-- Livestreams card end -->


         <!-- Live Replays card start -->
        <section class="py-[50px]">
            <div class="flex justify-between items-center text-white mb-10">
                <h2 class="text-3xl font-semibold">Live Replays</h2>
                <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src="<?php echo e(URL::asset('assets/frontend/images/youtube2.png')); ?>" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">

                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>


                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src="<?php echo e(URL::asset('assets/frontend/images/youtube2.png')); ?>" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">

                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>

                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src="<?php echo e(URL::asset('assets/frontend/images/youtube2.png')); ?>" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="./images/star-white.svg" alt="">

                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>

                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md" src="<?php echo e(URL::asset('assets/frontend/images/youtube2.png')); ?>" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="<?php echo e(URL::asset('assets/frontend/images/star.svg')); ?>" alt="">
                                <img class="h-3 w-3" src="./images/star-white.svg" alt="">
                                <img class="h-3 w-3" src="./images/star-white.svg" alt="">
                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>


            </div>
         </section>
         <!-- Live Replays card end -->
 </div>
<!-- tvstation content end -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.MainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/tvstation.blade.php ENDPATH**/ ?>