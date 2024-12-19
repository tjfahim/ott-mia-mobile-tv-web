<div class="bg-first_black rounded-md p-5 w-[350px]">
    <div class="text-white text-xl font-semibold mb-5">Settings</div>
    <ul class="flex flex-col gap-3 text-sm">
        <li class="<?php echo e(request()->is('account/info') ? 'bg-second_black'  : ''); ?>  hover:bg-second_black p-3 duration-200 rounded-md transform hover:translate-x-1">
            <a href="<?php echo e(URL::to('account/info')); ?>" class="flex justify-start gap-4 text-white items-center ">
              <img class="size-5" src="<?php echo e(URL::asset('frontend/images/account-logo.svg')); ?>" alt="">
              Account Details
            </a>
          </li>


        <li class="<?php echo e(request()->is('account/subscription') ? 'bg-second_black'  : ''); ?>   hover:bg-second_black p-3 duration-200 rounded-md transform hover:translate-x-1"><a href="<?php echo e(URL::to('account/subscription')); ?>" class="flex justify-start gap-4 text-white items-center "><img class="size-5" src="<?php echo e(URL::asset('frontend/images/subscription-logo.svg')); ?>" alt="">Subscription</a></li>
        <li class="<?php echo e(request()->is('account/device') ? 'bg-second_black'  : ''); ?>   hover:bg-second_black p-3 duration-200 rounded-md transform hover:translate-x-1"><a href="<?php echo e(URL::to('account/device')); ?>" class="flex justify-start gap-4 text-white items-center "><img class="size-5" src="<?php echo e(URL::asset('frontend/images/device-logo.svg')); ?>" alt="">Devices</a></li>
        <li class="<?php echo e(request()->is('account/preferences') ? 'bg-second_black'  : ''); ?>   hover:bg-second_black p-3 duration-200 rounded-md transform hover:translate-x-1"><a href="<?php echo e(URL::to('account/preferences')); ?>" class="flex justify-start gap-4 text-white items-center "><img class="size-5" src="<?php echo e(URL::asset('frontend/images/setting-logo.svg')); ?>" alt="">Preferences</a></li>
        <li class="<?php echo e(request()->is('logout') ? 'bg-second_black'  : ''); ?>   hover:bg-second_black p-3 duration-200 rounded-md transform hover:translate-x-1"><a href="<?php echo e(URL::to('logout')); ?>" class="flex justify-start gap-4 text-white items-center "><img class="size-5" src="<?php echo e(URL::asset('frontend/images/logout-logo.svg')); ?>" alt="">Logout</a></li>
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/frontend/user/components/sidebar.blade.php ENDPATH**/ ?>