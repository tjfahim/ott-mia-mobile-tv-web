<?php $__env->startSection('content'); ?>

<!-- account section start  -->
<section class="py-[50px] flex flex-col sm:flex-row justify-between gap-5 items-start p-5">

    <?php echo $__env->make('frontend.user.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="bg-first_black rounded-md p-10  flex-1">
        <h2 class="text-2xl font-semibold text-white mb-5">Account Details</h2>
        <h3 class="text-white opacity-50">Manage your account details</h3>
        <form action="" class="flex flex-col gap-5 my-10">
            <div class="flex  gap-3 justify-start items-center" x-data="profileShow()">

                <div class="rounded-full h-[200px] w-[200px]">
                    <img class="w-full h-full rounded-full" :src="fileUrl ? fileUrl : './images/profile-pic.png'" alt="">
                </div>
                <div>
                    <label x-on for="file-input" class="cursor-pointer flex items-center gap-2 rounded-full bg-second_black px-3 py-2 w-full">
                        <img class="size-4" src="./images/pen-icon.svg" alt="">
                        <span class="text-base text-white">Change Picture</span>
                    </label>
                   <input type="file" id="file-input" class="hidden"  @change="changeprofile">
                </div>

            </div>
            <div>
                <h2 class="text-white text-xl font-bold">Personal Details:</h2>
            </div>
            <div class="flex gap-5 justify-between">
                <div class="flex flex-col gap-3 text-white w-full">
                    <label for="" class="text-base opacity-50">First Name</label>
                    <input type="text" name="firstname" value="<?php echo e($user->name); ?>" class=" bg-black rounded-md border border-second_black p-3 w-full focus:outline-none " placeholder="Jone">
                </div>

                <div class="flex flex-col gap-3 text-white w-full">
                    <label for="" class="text-base opacity-50">Last Name</label>
                    <input type="text" name="firstname" value="<?php echo e($user->last_name ?? ''); ?>" class=" bg-black rounded-md border border-second_black p-3 w-full focus:outline-none " placeholder="Jone">
                </div>
            </div>

            <div class="flex gap-5 justify-between">

                <div class="flex flex-col gap-3 text-white w-full">
                    <label for="" class="text-base opacity-50">Email</label>
                    <input type="text" name="firstname" value="<?php echo e($user->email); ?>" class=" bg-black rounded-md border border-second_black p-3 w-full focus:outline-none " placeholder="jone.doe@gmail.com">
                </div>

                <div class="flex flex-col gap-3 text-white w-full">
                    <label for="" class="text-base opacity-50">Phone Number</label>
                    <div class="flex gap-2">
                        <select name="color" id="color" class="bg-black">
                            <option value=""><img class="h-[20px] w-[20px]" src="./images/f-ind.svg" alt="" /></option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                        <input x-mask="99999 999999" placeholder="99999 999999" value="<?php echo e($user->phone ?? ''); ?>" name="firstname" class=" bg-black rounded-md border border-second_black p-3 w-full focus:outline-none ">
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-3 text-white w-full" x-data="{ showPasswrod: false }">
                <label for="" class="text-base opacity-50">Password</label>
                <div class="relative">
                    <!-- Toggle the input type based on showPassword -->
                    <input :type="showPassword ? 'text' : 'password'"  name="password" class="bg-black rounded-md border border-second_black p-3 w-full focus:outline-none" placeholder="**********">

                    <!-- Button to toggle the password visibility -->
                    <button @click.prevent="showPassword = !showPassword" class="absolute right-2 top-1/2 -translate-y-1/2 text-white">
                        <span x-text="showPassword ? 'Hide' : 'Show'"></span>
                    </button>
                </div>
            </div>




            <div>
                <button class="bg-redcolor px-3 py-2 rounded text-white hover:opacity-50 hover:translate-x-1 duration-200">Edit Details</button>
            </div>
        </form>
    </div>

 </section>
<!-- account section end  -->





<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/frontend/user/accountInfo.blade.php ENDPATH**/ ?>