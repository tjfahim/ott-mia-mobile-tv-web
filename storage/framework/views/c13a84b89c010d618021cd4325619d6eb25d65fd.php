<?php $__env->startSection('content'); ?>


<div
id="container"
class="group w-full h-full mx-auto rounded-lg overflow-hidden relative"
>

<figure>
    <video  class="w-full">
        <source src="./images/video.mp4" />

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
    <!-- FULLSCREEN BUTTON -->
    <button
        id="fullscreen"
        class="transition-all duration-100 ease-linear hover:scale-125"
    >
        <i class="material-icons text-white text-3xl">fullscreen</i>
    </button>
</div>
</div>
    </div>
</div>



<!-- vod  content start -->
<div class="border border-[#262626] p-10 py-10" >

    <!-- Recently Added Shows start -->
    <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Recently Added Shows</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            <?php
                $count = 0;
            ?>
            <?php $__currentLoopData = $recent_shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(URL::to('play/'.$show->series_slug.'/serise')); ?> ">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to('upload/source/'. $show->series_poster)); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                            <button class="flex justify-center items-center gap-1 text-xs border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/season-Icon.svg" alt=""><span>3 Season</span></button>
                        </div>
                    </div>
                </a>
                <?php
                    $count++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            



        </div>
     </section>
    <!-- Recently Added Shows end -->

     <!-- Recently Added Movies session start -->
     <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Recently Added Movies</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            <?php
                $count = 0;
            ?>
            <?php $__currentLoopData = $recent_movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count === 5): ?>
                    <?php break; ?>
                <?php endif; ?>
                <a href="<?php echo e(URL::to('movie/'.$movie->video_slug)); ?> ">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to( 'upload/source/'.$movie->video_image_thumb )); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                                <div class="flex gap-1">
                                    <img class="h-3 w-3" src="./images/star.svg" alt="">
                                    <img class="h-3 w-3" src="./images/star.svg" alt="">
                                    <img class="h-3 w-3" src="./images/star.svg" alt="">
                                    <img class="h-3 w-3" src="./images/star.svg" alt="">
                                    <img class="h-3 w-3" src="./images/star.svg" alt="">

                                </div>
                                <span>2k</span>
                            </button>
                        </div>
                    </div>
                </a>
                <?php
                    $count++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            


        </div>
     </section>
     <!-- Recently Added Movies session end -->


      <!-- Recently Added Lives session start -->
      <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Recently Added Lives</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            <?php
                $count = 0;
            ?>
            <?php $__currentLoopData = $recent_lives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $live): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count === 5): ?>
                    <?php break; ?>
                <?php endif; ?>
                <div class="border border-[#262626] p-3 rounded-md space-y-5">
                    <img class="w-full  rounded-md"src="<?php echo e(URL::to( $live->image )); ?>" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img class="h-3 w-3" src="" alt=""><span>1h57min</span></button>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]">
                            <div class="flex gap-1">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">

                            </div>
                            <span>2k</span>
                        </button>
                    </div>
                </div>
                <?php
                    $count++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            


        </div>
     </section>
     <!-- Recently Added Lives session end -->

     <!-- movie card start -->
     <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Movies</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
            <?php
                $count = 0;
            ?>
            <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count == 5): ?>
                    <?php break; ?>
                <?php endif; ?>
                <a href="<?php echo e(URL::to('movie/'.$movie->video_slug)); ?> ">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to( 'upload/source/'.$movie->video_image_thumb )); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""><span><?php echo e($movie->duration); ?></span></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                        </div>
                    </div>
                </a>
                <?php
                    $count++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            


        </div>
     </section>
    <!-- movie card end -->

     <!-- show card start -->
     <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Show</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

            <?php
                $count = 0;
            ?>
            <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count === 5): ?>
                    <?php break; ?>
                <?php endif; ?>

                <a href="">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src="<?php echo e(URL::to('upload/source/'. $show->series_poster)); ?>" alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><img src="./images/time-icon.png" alt=""></button>
                            <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414]"><span><?php echo e($show->series_info); ?></span></button>
                        </div>
                    </div>
                </a>

                <?php
                    $count++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            


        </div>
     </section>
    <!-- show card end -->


     <!-- Live TV  card start -->
    <section class="py-[50px]">
        <div class="flex justify-between items-center text-white mb-10">
            <h2 class="text-3xl font-semibold">Live TV</h2>
            <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

            <?php
                $count = 0;
            ?>
            <?php $__currentLoopData = $livetv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($count == 5): ?>
                    <?php break; ?>
                <?php endif; ?>
                <a href="<?php echo e(URL::to('play/'.$tv->channel_slug.'/tv')); ?>">
                    <div class="border border-[#262626] p-3 rounded-md space-y-5">
                        <img class="w-full  rounded-md" src=" <?php echo e(URL::to( 'upload/source/'.$tv->channel_thumb )); ?> " alt="">
                        <div class="text-white flex justify-between items-center text-sm">
                            <button class="text-[#BFBFBF] w-full text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-center"> <span>Released at 14 April 2023</span></button>
                        </div>
                    </div>
                </a>
                <?php
                    $count++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            


        </div>
     </section>
     <!-- Live TV card end -->



</div>
<!-- vod content end -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/tvstation.blade.php ENDPATH**/ ?>