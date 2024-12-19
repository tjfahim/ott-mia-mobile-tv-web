<?php $__env->startSection('content'); ?>

<!-- account section start  -->
<section class="py-[50px] flex flex-col sm:flex-row justify-between gap-5 items-start p-5">

    <?php echo $__env->make('frontend.user.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="bg-first_black rounded-md p-10  flex-1">
        <h2 class="text-2xl font-semibold text-white mb-5">Subscription</h2>
        <h3 class="text-white opacity-50">Manage your subscription</h3>

        <div class="text-white py-5">
            <h2 class="text-base font-semibold mb-3">Premium Plans:</h2>
            <div>
                <h3 class="opacity-80 mb-2 text-sm">What does premiun include?</h3>
                <div class="flex gap-2 text-sm">
                    <div class="flex gap-2 "><img src="./images/plan-option.svg" alt=""><span class="opacity-50">Watch full movie and show</span></div>
                    <div class="flex gap-2 "><img src="./images/plan-option.svg" alt=""><span class="opacity-50">Watch full movie and show</span></div>
                    <div class="flex gap-2 "><img src="./images/plan-option.svg" alt=""><span class="opacity-50">Watch full movie and show</span></div>
                </div>
            </div>
            <div class="mt-3 bg-second_black rounded-lg w-1/2">
                <div class="flex justify-between items-center rounded-t-lg bg-redcolor p-2">
                    <h2>Weekly <span class="opacity-50">- Best for Weekly Entertainment</span></h2>
                    <img src="./images/plan-option.svg" alt="">
                </div>
                <div class="p-2">
                    <h2 class="font-bold text-2xl">$19.99</h2>
                    <div class="opacity-50 flex justify-between items-center">
                        <div>per week</div>
                        <div>Cancel anytime</div>
                    </div>
                </div>
            </div>
            <div class="flex gap-3 w-1/2 py-10 mt-3 justify-between">
                <a class="rounded-full w-1/2 text-center py-3 px-5 text-sm bg-redcolor" href="">Change Plan</a>
                <a class="rounded-full w-1/2 text-center py-3 px-5 text-sm bg-second_black" href="">Cancel Membership</a>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-3">Payment Info:</h2>
                <div class=" justify-between items-center bg-second_black flex gap-2 p-2 rounded-md">
                    <div class="flex gap-10">
                        <div class="flex items-center gap-5">
                            <img class="size-6" src="./images/user-pay-icon.svg" alt="">
                            <div class="">
                                <h2 class="text-sm opacity-50">Next Payment:</h2>
                                <div class="text-md ">November 26, 2024</div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-sm opacity-50">Payment Method:</h2>
                            <div class="text-md ">November 26, 2024</div>
                        </div>
                        <div>
                            <h2 class="text-sm opacity-50">Amount to Pay:</h2>
                            <div class="text-md ">November 26, 2024</div>
                        </div>
                    </div>
                    <div>
                        <a class="w-[200px] bg-third       _black rounded-full py-2 px-10 text-sm" href="">View Current Bill</a>
                        <a class="w-[200px] bg-redcolor rounded-full py-2 px-10 text-sm" href="">Pay Now</a>
                    </div>
                </div>
            </div>

            <div class="flex gap-4 mt-7">
                <a class=" bg-redcolor rounded-full py-3 px-10 text-sm" href="">Manage payment method</a>
                <a class=" bg-redcolor rounded-full py-3 px-10 text-sm" href="">View payment history</a>
                <a class=" bg-second_black rounded-full py-3 px-10 text-sm" href="">Pedeem Promo Code </a>
            </div>
        </div>



    </div>

 </section>
<!-- account section end  -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/frontend/user/subScripPlan.blade.php ENDPATH**/ ?>