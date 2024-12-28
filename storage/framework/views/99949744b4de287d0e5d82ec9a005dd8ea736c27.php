<?php $__env->startSection('content'); ?>

<section class="bg-cover relative w-full h-[650px]" style="background-image:  linear-gradient(0deg, rgba(20,20,20,0.4878151944371498) 0%, rgba(20,20,20,0.20770314961922265) 100%), url(<?php echo e($show->image); ?>)">


    <div class="absolute  bottom-0 left-0 right-0 text-white text-center p-10 space-y-5">
        <div class="flex flex-col gap-2">
            <h2 class="text-xl font-semibold"><?php echo e($show->name); ?></h2>
            
        </div>
        <div class="flex justify-center items-stretch gap-3">
            <a href="<?php echo e(URL::to('movie/play/'. $show->id)); ?>" class="bg-[#E50000] flex rounded gap-1 px-3 py-2 justify-center items-center text-md "><img src="<?php echo e(URL::asset('assets/frontend/images/play-Icon.svg')); ?>" alt=""><span>Play Now</span></a>
            

            <div x-data="{
                form: {
                    favourite_id: '',
                    video_type: 'movies'
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
            
        </div>
    </div>
</section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/frontend/singleMoviePage.blade.php ENDPATH**/ ?>