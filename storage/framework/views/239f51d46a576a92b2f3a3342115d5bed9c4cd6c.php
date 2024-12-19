<nav class="flex flex-col  sm:flex-row justify-between sm:items-center p-5 gap-5 h-[90px]">
    <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="logo"></a>
    <div class="flex flex-col sm:flex-row p-1.5  sm:bg-first_black sm:rounded-full text-white font-manrope ">
        <!-- active class css bg-second_black -->

        <a href="<?php echo e(URL::to('/')); ?>" class="<?php echo e(request()->is('/') ? 'bg-second_black translate-x-1' : ''); ?> px-5 py-2  rounded-full duration-200 hover:translate-x-1">Home</a>

        <a href="<?php echo e(URL::to('tvstation')); ?>" class="<?php echo e(request()->is('tvstation') ? 'bg-second_black translate-x-1' : ''); ?>  px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">TV Station</a>
        <a href="<?php echo e(URL::to('lives')); ?>"  class="<?php echo e(request()->is('lives') ? 'bg-second_black translate-x-1' : ''); ?> px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Live</a>
        <a href="<?php echo e(URL::to('vod/movies')); ?>"  class="<?php echo e(request()->is('vod*') ? 'bg-second_black translate-x-1' : ''); ?> px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">VDO</a>
        <a href="" class="px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Notification</a>
        <button @click="contactForm = true" class=" translate-x-1  px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Contact Us</button>
        <!-- <a href="<?php echo e(URL::to('account/info')); ?>" class="<?php echo e(request()->is('account*') ? 'bg-second_black translate-x-1' : ''); ?> px-5 py-2  rounded-full duration-200 hover:translate-x-1 hover:bg-second_black">Account</a> -->
    </div>
    <div class="flex justify-between gap-3">
        <div class="hidden sm:flex gap-1">
            <div class="relative" x-data="{open: false}" @click.away="open = false" >
                <button @click="open = !open" x-cloak class="p-3 bg-second_black rounded-full hover:scale-110 duration-300"><img src="<?php echo e(URL::asset('frontend/images/search-icon.svg')); ?>" alt=""></button>
                <div
                    x-cloak
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="bg-second_black  rounded-md w-[300px] absolute right-0 top-0 ">
                    <form action="relative">
                        <input class="border border-third_black bg-second_black p-2 w-full focus:boreder-none  rounded-md" type="text" placeholder="search...">
                        <button class="absolute top-1/2 trasnform -translate-y-1/2 hover:scale-95 duration-300 right-2"><img src="<?php echo e(URL::asset('frontend/images/search-icon.svg')); ?> " alt=""></button>
                    </form>
                </div>
            </div>
            <button class="p-3 bg-second_black rounded-full hover:scale-110 duration-300" x-cloak ><img src="<?php echo e(URL::asset('frontend/images/notif-icon.svg')); ?>" alt=""></button>
        </div>
        <div class="flex justify-center gap-3 sm:items-center">

            <?php if(auth()->guard()->check()): ?>
                <div class="group flex gap-3 items-center cursor-pointer px-3 py-2 rounded-full bg-first_black ">
                    <img class="size-8 group-hover:scale-110 duration-300 transform " src="<?php echo e(URL::asset('frontend/images/user.png')); ?>" alt="">

                    <div><?php echo e(Auth::user()->name); ?></div>

                    <div class="relative " x-data="{open: false}" @click.away="open = false">
                        <button @click="open = !open" class="bg-second_black rounded-full p-2 hover:scale-110 duration-300 transform ease-in"><img class="size-4" src="<?php echo e(URL::asset('frontend/images/3dot.svg')); ?>" alt=""></button>

                        <div
                            x-show="open"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"

                            class="bg-second_black p-5 absolute -right-4 mt-4 w-[250px] rounded-md flex flex-col gap-2">
                            <div class="size-4 z-50 bg-second_black absolute -top-2 right-5 rotate-45 rounded-sm"></div>
                            <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out">Account</a>
                            <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out ">Settings</a>
                            <a href="" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out ">Contacts</a>
                            <a href="<?php echo e(URL::to('favorite')); ?>" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out ">Favorites</a>
                            <a href="<?php echo e(URL::to('logout')); ?>" class="py-2 px-3 text-md hover:scale-105 duration-300 ease-out text-redcolor">Logout</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
            <button
                    @click="loginform = !loginform"
                    class="btn-login"
            >
                    Login
            </button>
            <button
                    @click="regform = !regform"
                    class="btn-register"
            >Register</button>
            <?php endif; ?>

        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/client_site/components/navbar.blade.php ENDPATH**/ ?>