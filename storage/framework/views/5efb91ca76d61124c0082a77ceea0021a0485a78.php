<?php $__env->startSection('content'); ?>

<section class="bg-cover relative w-full h-[650px]" style="background-image:  linear-gradient(0deg, rgba(20,20,20,0.4878151944371498) 0%, rgba(20,20,20,0.20770314961922265) 100%), url(<?php echo e(URL::to( 'upload/source/'.$show->video_image_thumb )); ?>)">


    <div class="absolute  bottom-0 left-0 right-0 text-white text-center p-10 space-y-5">
        <div class="flex flex-col gap-2">
            <h2 class="text-xl font-semibold"><?php echo e($show->series_name); ?></h2>
            
        </div>
        <div class="flex justify-center items-stretch gap-3">
            <a href="<?php echo e(URL::to('show/play/'. $show->series_slug)); ?>" class="bg-redcolor flex rounded gap-1 px-3 py-2 justify-center items-center text-md "><img src="<?php echo e(URL::asset('assets/frontend/images/play-Icon.svg')); ?>" alt=""><span>Play Now</span></a>
            <button class=" border-2 border-[#262626]  p-2 px-3 bg-[#0F0F0F] rounded" ><img  class="size-8" src="<?php echo e(URL::asset('assets/frontend/images/plus.svg')); ?>" alt=""></button>

            <div x-data="{
                form: {
                    favourite_id: '',
                    video_type: 'shows'
                },

                async submit(){

                    try{
                        const res = await axios.post('<?php echo e(URL::to('favorite')); ?>', this.form, {
                            headers: {
                                'X-CSRF-TOKEN': this.csrfToken,
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                            },
                        });

                        console.log(res)

                        if(res.data.status == 401){

                                Toastify({
                                    text: `${res.data.success}`,
                                    duration: 3000,
                                    close: true,
                                    gravity: 'top',
                                    position: 'right',
                                    stopOnFocus: true,
                                    style: {
                                        background: 'linear-gradient(to right, #ff5f6d, #ffc371)',
                                    },
                                }).showToast();


                        }

                        if(res.data.status == 201){
                                 Toastify({
                                    text: `${res.data.success}`,
                                    duration: 3000,
                                    close: true,
                                    gravity: 'top',
                                    position: 'right',
                                    stopOnFocus: true,
                                    style: {
                                        background: 'linear-gradient(to right, #ff5f5f, #b7ff71)',
                                    },
                                }).showToast();
                        }
                    }catch(err){
                        console.log(err)
                    }

                }
            }"  x-init="form.favourite_id = <?php echo e($show->id); ?>">
                <form @submit.prevent="submit" >
                    
                    <button type="submit" class=" border-2 border-[#262626]  p-2 px-3 bg-[#0F0F0F] rounded"><img  class="size-8" src="<?php echo e(URL::asset('assets/frontend/images/like.svg')); ?>" alt=""></button>
                </form>
            </div>
            <button class=" border-2 border-[#262626] p-2  px-3 bg-[#0F0F0F] rounded"><img  class="size-8" src="<?php echo e(URL::asset('assets/frontend/images/sound-icon.png')); ?>" alt=""></button>
        </div>
    </div>
</section>

<section class="grid grid-cols-2 md:grid-cols-3 md:grid-rows-auto md:grid-flow-col py-[100px] gap-5 p-5">
    <!-- description -->
    <div class="col-span-full md:col-start-1 md:col-end-3 bg-[#1A1A1A] p-5 border border-[#262626] rounded space-y-4">
        <h2 class="text-xl text-white  ">Description</h2>
        <div class="text-white opacity-50 w-4/5"><?php echo $show->video_description; ?></div>
        
    </div>
    <!-- cast -->
    <div class="col-start-1 col-end-3 bg-[#1A1A1A] p-5 border border-[#262626] rounded gap-5">
        <div class=" flex justify-between items-center space-y-5">
            <h2 class="text-white">Cast</h2>
            <div class="flex justify-center items-center gap-2">
                <button class="p-3 bg-[#141414] border border-[#262626] rounded-full"><img height="20" width="20" src="./images/left-arow.png" alt=""></button>
                <button class="p-3 bg-[#141414] border border-[#262626] rounded-full"><img height="20" width="20" src="./images/right-arow.png" alt=""></button>
            </div>
        </div>
        <div class="flex flex-wrap  gap-5">
            <img src="./images/cast.png" alt="">
            <img src="./images/cast1.png" alt="">
            <img src="./images/cast2.png" alt="">
        </div>
    </div>
    <!-- review -->
    <div class="col-span-full md:col-start-1 md:col-end-3 bg-[#1A1A1A] p-5 border border-[#262626] rounded">
        <div class=" flex justify-between items-center space-y-5">
            <h2 class="text-white">Reviews</h2>
            <div class="flex justify-center items-center gap-2">
                <button class="px-3 py-2 bg-[#141414] border border-[#262626] rounded flex justify-between text-white gap-2"><img height="20" width="20" src="./images/plus.svg" alt="">Add Your Review</button>

            </div>
        </div>
        <div class="">

            <div class="flex flex-col md:flex-row gap-10 py-[50px]">
                <div class="bg-[#0F0F0F] border border-[#262626] p-5 space-y-5 rounded">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-white">
                            <h2 class="text-xl">Aniket Roy</h2>
                            <h4 class="opacity-50 text-sm">Form India</h4>
                        </div>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-white">
                            <div class="flex gap-1 justify-center items-center">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">

                            </div>
                            <span>5</span>
                        </button>
                    </div>
                    <p class="text-white opacity-50 text-sm">
                        This movie was recommended to me by a very dear friend who went for the movie by herself. I went to the cinemas to watch but had a houseful board so couldn’t watch it.
                    </p>
                </div>

                <div class="bg-[#0F0F0F] border border-[#262626] p-5 space-y-5 rounded">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-white">
                            <h2 class="text-xl">Aniket Roy</h2>
                            <h4 class="opacity-50 text-sm">Form India</h4>
                        </div>
                        <button class="flex justify-center items-center gap-1 text-sm border border-[#262626] rounded-full px-2 py-1 bg-[#141414] text-white">
                            <div class="flex gap-1 justify-center items-center">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">
                                <img class="h-3 w-3" src="./images/star.svg" alt="">

                            </div>
                            <span>5</span>
                        </button>
                    </div>
                    <p class="text-white opacity-50 text-sm">
                        This movie was recommended to me by a very dear friend who went for the movie by herself. I went to the cinemas to watch but had a houseful board so couldn’t watch it.
                    </p>
                </div>

            </div>
            <div class="block col-start-1 col-end-3">
                <div>
                    <div class="flex gap-2 items-center justify-center">
                        <button class="p-3 bg-[#141414] border border-[#262626]  btn-pre rounded-full" ><img src="./images/left-arow.png" alt=""></button>
                        <div class="h-1 w-4 bg-white current_bar"></div>
                        <div class="h-1 w-4 bg-white current_bar" ></div>
                        <div class="h-1 w-4 bg-white current_bar"></div>
                        <button class="p-3 bg-[#141414] border border-[#262626]  btn-pre rounded-full" page="0"><img src="./images/right-arow.png" alt=""></button>
                    </div>
                </div>
            </div>




        </div>
    </div>

    <!-- information -->
    <div class="col-span-full md:col-start-3 md:col-end-4 md:row-start-1 md:row-end-4 bg-[#1A1A1A] p-5 border border-[#262626] rounded space-y-5">
       <div class="space-y-1">
            <h2 class="flex justify-start items-center text-[#999999]"><img src="./images/calender.svg" alt="">Released Year</h2>
            <div class="text-lg bold text-white "><?php echo e(date('Y', $show->release_date)); ?></div>
       </div>
       <div class="space-y-1">
            <h2 class="flex justify-start items-center text-[#999999]"><img src="./images/language.svg" alt="">Available Languages</h2>
            <div class="gap-4">
                <button class="bg-[#141414] border border-[#262626] py-2 px-3 text-white text-md">English</button>
                <button class="bg-[#141414] border border-[#262626] py-2 px-3 text-white text-md">Hindi</button>
                <button class="bg-[#141414] border border-[#262626] py-2 px-3 text-white text-md">Tamil</button>
                <button class="bg-[#141414] border border-[#262626] py-2 px-3 text-white text-md">Telegu</button>
                <button class="bg-[#141414] border border-[#262626] py-2 px-3 text-white text-md">Kannada</button>
            </div>

        </div>

        <div class="space-y-1">
            <h2 class="flex justify-start items-center text-[#999999]"><img src="./images/rating_star.svg" alt="">Ratings</h2>
            <div class="flex gap-5 justify-stretch items-center">
                <div class="flex flex-col justify-start items-start  gap-1 text-sm border border-[#262626]  px-2 py-1 bg-[#141414] text-white">
                    <h2>IMDb</h2>
                    <div class="flex gap-2">
                        <div class="flex gap-1 justify-center items-center">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">

                        </div>
                        <span><?php echo e($show->imdb_rating); ?></span>
                    </div>
                </div>
                <div class="flex flex-col justify-start items-start  gap-1 text-sm border border-[#262626]  px-2 py-1 bg-[#141414] text-white">
                    <h2>Streamvibe</h2>
                    <div class="flex gap-2">
                        <div class="flex gap-1 justify-center items-center">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">
                            <img class="h-3 w-3" src="./images/star.svg" alt="">

                        </div>
                        <span>5</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-1">
            <h2 class="flex justify-start items-center text-[#999999]"><img src="./images/file-Icon.svg" alt="">Genres</h2>
            <div class="gap-4">
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="bg-[#141414] border border-[#262626] py-2 px-3 text-white text-md"><?php echo e($gen); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>

        <div class="space-y-2">
            <h2 class="flex justify-start items-center text-[#999999]  ">Director</h2>
            <div class="bg-[#141414] border border-[#262626] p-3 flex justify-start items-center gap-3 rounded">
               <img class="h-[60px] w-[60px] rounded" src="./images/cast1.png" alt="">
               <div class="text-white">
                    <h2>Rishab Shetty</h2>
                    <p class="opacity-50">Form India</p>
               </div>
            </div>
        </div>

        <div class="space-y-2">
            <h2 class="flex justify-start items-center text-[#999999]  ">Music</h2>
            <div class="bg-[#141414] border border-[#262626] p-3 flex justify-start items-center gap-3 rounded">
               <img class="h-[60px] w-[60px] rounded" src="./images/cast2.png" alt="">
               <div class="text-white">
                    <h2>Rishab Shetty</h2>
                    <p class="opacity-50">Form India</p>
               </div>
            </div>
        </div>



    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/frontend/singleShowPage.blade.php ENDPATH**/ ?>