<?php $__env->startSection('head_title', getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>


<?php $__env->startSection('content'); ?>



<div class="">
    <div class="flex flex-col gap-10 justify-between items-center pt-10 ">
        <div class="text-center">
            <h2 class="text-5xl font-bold text-white"><?php echo e($categorie); ?></h2>
            <div class="text-md font-normal text-white opacity-50">Let's drive into entertainment</div>
        </div>
    </div>

</div>


   <!-- search option add  -->
   <div class="flex items-center gap-3 justify-end py-5">
    <div>
        <form action="<?php echo e(route('movies.all')); ?>" method="get">
            <input type="text" name="categorie" value="<?php echo e($categorie); ?>" class="hidden">
            <div class="relative  bg-second_black text-white p-1 border-0  rounded-full flex gap-2 items-center">
                <img src="<?php echo e(URL::asset('frontend/images/search-icon.svg')); ?>" class="size-4 ml-2" alt="">
                <input type="text" value="<?php echo e(request()->input('search')); ?>" name="search" class="w-[300px] flex-1 p-2 bg-second_black focus:border-0 focus:outline-none rounded-full" placeholder="search">
                <button class="absolute right-2 top-1/2 -translate-y-1/2 text-white font-normal px-5 py-1.5 bg-redcolor rounded-full  hover:scale-105 duration-200">Search</button>
            </div>
        </form>
    </div>
    <div>
        <div class="relative"  x-data="{open: false}" @click.away="open = false">
            <button @click="open = !open" class="p-4 bg-second_black rounded-full"><img class="size-5" src="<?php echo e(URL::asset('frontend/images/filter-icon.svg')); ?>" alt=""></button>
            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"

                class="bg-second_black p-5 absolute -right-0 mt-4 w-[250px] rounded-md flex flex-col gap-2 text-white h-[300px] overflow-auto scrollbar">
                <div class="size-4 bg-second_black absolute -top-2 right-5 rotate-45 rounded-sm">
                </div>
                <?php $__currentLoopData = $iptv_cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('movies.all', ['categorie' => $cat->name ])); ?>" class="py-2 px-3 text-md hover:bg-third_black rounded-md duration-300 ease-out"><?php echo e($cat->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>

    </div>
 </div>

<div class="border border-second_black p-10 " >




    <!-- all movies  -->
    <section class="py-[50px]">

       <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-[50px]">

        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(URL::to('movie/'.$movie->id)); ?> ">
                <div class="border border-third_black bg-first_black min-h-[350px] flex flex-col justify-between p-3 rounded-md space-y-5">
                    <img class="w-full h-[300px] rounded-md" src="<?php echo e($movie->image); ?>" alt="">
                    <div class="text-white flex justify-between items-center text-sm">
                        
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>


       <!-- Pagination Links -->
       <?php if($movies->lastPage() > 1): ?>

        <div class="flex items-center justify-center py-20">
            <nav role="navigation" aria-label="Pagination Navigation" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px border border-black bg-first_black">
                <?php if($movies->onFirstPage()): ?>
                    <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-bg-third_black bg-second_black text-sm font-medium text-gray-500 cursor-not-allowed">
                        Previous
                    </span>
                <?php else: ?>
                    <a href="<?php echo e($movies->previousPageUrl()); ?>" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-bg-third_black bg-second_black text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Previous
                    </a>
                <?php endif; ?>

                <?php $__currentLoopData = $movies->getUrlRange(1, $movies->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $movies->currentPage()): ?>
                        <span class="bg-redcolor text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            <?php echo e($page); ?>

                        </span>
                    <?php else: ?>
                        <a href="<?php echo e($url); ?>" class="bg-second_black border-bg-third_black text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            <?php echo e($page); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($movies->hasMorePages()): ?>
                    <a href="<?php echo e($movies->nextPageUrl()); ?>" class="relative inline-flex items-center px-2 py-2 rounded-r-md border bg-second_black text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Next
                    </a>
                <?php else: ?>
                    <span class="relative inline-flex items-center px-2 py-2 rounded-r-md border bg-second_black text-sm font-medium text-gray-500 cursor-not-allowed">
                        Next
                    </span>
                <?php endif; ?>
            </nav>
        </div>

       <?php endif; ?>

    </section>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/frontend/vod/allMovies.blade.php ENDPATH**/ ?>