<?php $__env->startSection('content'); ?>



 <!-- login form section start -->
 <section class="p-10 w-full md:w-2/4 sm:w-1/4 mx-auto flex flex-col gap-10 mt-[50px] h-full">
    <div class="text-center text-white space-y-5">
        <h2 class="text-2xl font-normal ">Login form</h2>
        <p class="opacity-50 text-sm">Enter following details to login.</p>
    </div>
    <form action="<?php echo e(URL::to('login')); ?>" class="flex gap-5 flex-col" method="post">
        <?php echo csrf_field(); ?>
        <div class="border border-[#FFFFFF1A]  hover:border-[#ED2024] rounded-md p-3   gap-3 flex items-center justify-start" >
            <div class=" border-r pr-3 border-[#FFFFFF1A]">
                <img src="<?php echo e(URL::asset('assets/frontend/images/email.svg')); ?>" alt="">
            </div>
            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                <label for="" class=" text-md">Email</label>
                <input type="email" name="email" class="border-none bg-[#141414] p-2 w-full focus:outline-none" value="<?php echo e(old('email')); ?>" placeholder="example@gmail.com" >
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-[#ED2024]"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <img src="<?php echo e(URL::asset('assets/frontend/images/success.svg')); ?>" alt="">
            </div>
        </div>

        <div class="border border-[#FFFFFF1A]  hover:border-[#ED2024] rounded-md p-3   gap-3 flex items-center justify-start" >
            <div class=" border-r pr-3 border-[#FFFFFF1A]">
                <img src="<?php echo e(URL::asset('assets/frontend/images/email.svg')); ?>" alt="">
            </div>
            <div class="flex-1 flex-col gap-2 text-[#FFFFFF66]">
                <label for="" class=" text-md">Password</label>
                <input type="password" name="password" class="border-none bg-[#141414] p-2 w-full focus:outline-none" placeholder="**********">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-[#ED2024]"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <img src="<?php echo e(URL::asset('assets/frontend/images/eye-off.svg')); ?>" alt="">
            </div>
        </div>
        <div  class="flex gap-5 flex-col md:flex-row justify-between text-sm text-[#999999]">
            <div>
                <input type="checkbox" name="" value="" class="bg-red-500">
                <label for="" class="text-sm text-[#999999]">Remember me</label>
            </div>
            <a href="" class="hover:underline hover:underline-offset-2">Forget Password</a>
        </div>
        <button class="bg-red-500 py-3 hover:bg-red-400 px-2 rounded-full text-white font-normal ">Login</button>
        <a href="" class="text-white text-center hover:underline hover:underline-offset-2 decoration-red-500">Registation</a>
    </form>
    <div class="flex gap-2 opacity-70 mx-auto">
        <a class=" bg-gray-300 opacity-90 p-2 rounded-full" href="">
            <img style="height: 24px; width: 24px;" src="<?php echo e(URL::asset('assets/frontend/images/facebook-Icon.svg')); ?>" alt="">
        </a>
        <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="<?php echo e(URL::asset('assets/frontend/images/x-Icon.svg')); ?>" alt=""></a>
        <a class=" bg-dark p-2 rounded" href=""><img style="height: 24px; width: 24px;" src="<?php echo e(URL::asset('assets/frontend/images/linkdin-icon.svg')); ?>" alt=""></a>
    </div>
</section>
<!-- login form section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.MainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>