<?php $__env->startSection('content'); ?>



<div class="flex flex-col gap-10 justify-between items-center pt-10 ">
    <div class="text-white text-sm p-1 bg-second_black font-normal flex gap-2 rounded-full">

        <a href="<?php echo e(URL::to('vod/movies')); ?>" class="<?php echo e(request()->is('vod/movies') ? 'bg-redcolor' : 'hover:bg-redcolor'); ?> px-10 py-3 text-sm rounded-full text-gray-200  hover:translate-x-1 duration-300 ">Movies</a>
        <a href="<?php echo e(URL::to('vod/shows')); ?>" class="<?php echo e(request()->is('vod/shows') ? 'bg-redcolor' : 'hover:bg-redcolor'); ?> px-10 py-3 text-sm rounded-full text-gray-200 hover:bg-redcolor hover:translate-x-1 duration-300">TV Shows</a>
        <a href="<?php echo e(URL::to('vod/lives')); ?>" class="<?php echo e(request()->is('vod/lives') ? 'bg-redcolor' : 'hover:bg-redcolor'); ?> px-10 py-3 text-sm rounded-full text-gray-200 hover:bg-redcolor hover:translate-x-1 duration-300">Live</a>
    </div>
    <div class="text-center">
        <h2 class="text-5xl font-bold text-white">Movies</h2>
        <div class="text-md font-normal text-white opacity-50">Let's drive into entertainment</div>
    </div>
</div>

<div class="main-slider container mx-auto py-10">
    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img class="px-5 rounded-lg container mx-auto h-[600px]" src="<?php echo e(URL::to( 'upload/source/'.$slide->slider_image )); ?>" alt="">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>





     <!-- search option add  -->
     <div class="flex items-center gap-3 justify-end py-5">
        <div>
            <form action="">
                <div class="relative  bg-second_black text-white p-1 border-0  rounded-full flex gap-2 items-center">
                    <img src="./images/search-icon.svg" class="size-4 ml-2" alt="">
                    <input type="text" class="w-[300px] flex-1 p-2 bg-second_black focus:border-0 focus:outline-none rounded-full" placeholder="search">
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 text-white font-normal px-5 py-1.5 bg-redcolor rounded-full  hover:scale-105 duration-200">Search</button>
                </div>
            </form>
        </div>
        <div>
            <div class="relative"  x-data="{open: false}" @click.away="open = false">
                <button @click="open = !open" class="p-4 bg-second_black rounded-full"><img class="size-5" src="./images/filter-icon.svg" alt=""></button>
                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"

                    class="bg-second_black p-5 absolute -right-0 mt-4 w-[250px] rounded-md flex flex-col gap-2 text-white">
                    <div class="size-4 bg-second_black absolute -top-2 right-5 rotate-45 rounded-sm"></div>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 1</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 2</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 3</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 4</a>
                    <a href="" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out">Category 5</a>
                </div>
            </div>

        </div>
     </div>

 <div class="border border-second_black p-10 " >




        <!-- Netflix Movies cart start -->
        <section class="py-[50px]">
           <div class="flex justify-between items-center text-white mb-10">
               <h2 class="text-3xl font-bold ">Netflix Movies</h2>
               <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


           </div>
        </section>
       <!-- Netflix Movies card end -->

       <!-- 4K Netflix Movies card start -->
       <section class="py-[50px]">
           <div class="flex justify-between items-center text-white mb-10">
               <h2 class="text-3xl font-bold ">4K Netflix Movies</h2>
               <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


           </div>
        </section>
       <!-- 4K Netflix Movies card end -->


        <!-- Disney+ Kids card start -->
       <section class="py-[50px]">
           <div class="flex justify-between items-center text-white mb-10">
               <h2 class="text-3xl font-bold ">Disney+ Kids</h2>
               <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


           </div>
        </section>
       <!-- Disney+ Kids card end -->

        <!-- Disney+ Movies card start -->
        <section class="py-[50px]">
           <div class="flex justify-between items-center text-white mb-10">
               <h2 class="text-3xl font-bold ">Disney+ Movies</h2>
               <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


           </div>
        </section>
       <!-- Disney+ Movies card end -->

       <!-- [EN] Gangster & Mafia  card start -->
       <section class="py-[50px]">
           <div class="flex justify-between items-center text-white mb-10">
               <h2 class="text-3xl font-bold ">[EN] Gangster & Mafia </h2>
               <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


           </div>
        </section>
       <!-- [EN] Gangster & Mafia  card end -->


       <!-- Apple+ Movies  card start -->
       <section class="py-[50px]">
           <div class="flex justify-between items-center text-white mb-10">
               <h2 class="text-3xl font-bold ">Apple+ Movies </h2>
               <a href="" class="text-xl text-[#ED2024] hover:underline hover:underline-offset-4">View All</a>
           </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">
               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>

               <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5 ">
                   <img class="w-full  rounded-md" src="./images/youtube1.png" alt="">
                   <div class="text-white flex justify-between items-center text-sm">
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/time-icon.png" alt=""><span>1h57min</span></button>
                       <button class="flex justify-center items-center gap-1 text-sm border border-third_black rounded-full px-2 py-1 bg-second_black"><img src="./images/eye2.svg" alt=""><span>2k</span></button>
                   </div>
               </div>


           </div>
        </section>
       <!-- Apple+ Movies  card end -->


 </div>
<!-- vod content end -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott\resources\views/frontend/vod/lives.blade.php ENDPATH**/ ?>