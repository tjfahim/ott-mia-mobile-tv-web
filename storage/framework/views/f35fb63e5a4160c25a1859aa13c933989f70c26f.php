

<?php $__env->startSection('content'); ?>

<div class="p-10">
                <h2 class="text-5xl font-bold text-center mb-5 py-5">My Favorites</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">


                        <?php $__currentLoopData = $favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                                <img class="w-full h-[400px] rounded-md object-cover mb-2" src="<?php echo e(URL::to('upload/source/'. $fav->movie->video_image_thumb)); ?>" alt="">
                                <div class="flex justify-between items-center opacity-80">
                                    <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="<?php echo e(URL::asset('frontend/images/clock-full.svg')); ?>"  alt=""><span><?php echo e($fav->movie->duration); ?></span></div>
                                    <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="<?php echo e(URL::asset('frontend/images/file-icon.svg')); ?>"  alt=""><span>Movies</span></div>
                                </div>
                                <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="<?php echo e(URL::asset('frontend/images/hart-icon.svg')); ?>"  alt=""></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  

                        <!-- <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div>

                        <div class="p-4 rounded-md bg-second_black hover:scale-105 duration-300 relative">
                            <img class="w-full h-[400px] rounded-md object-cover mb-2" src="./images/movie2.jpg" alt="">
                            <div class="flex justify-between items-center opacity-80">
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/clock-full.svg" alt=""><span>8h 20min</span></div>
                                <div class="border border-third_black py-1 px-5 text-sm rounded-md flex items-center gap-2"><img class="size-6" src="./images/file-icon.svg" alt=""><span>4 season</span></div>
                            </div>
                            <a href="" class="absolute top-5 right-5 p-2 rounded-md bg-white"><img src="./images/hart-icon.svg" alt=""></a>
                        </div> -->
             
             
             
             

                   
                    
                </div>
             </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/frontend/favorite.blade.php ENDPATH**/ ?>