<?php $__env->startSection('head_title', trans('words.subscription_plan').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>


<section class="viewplans">
    <div class="container">
        <h2 class="title text-uppercase text-center mb-5">
            <strong><?php echo e(trans('words.subscription_plan')); ?></strong>
        </h2>
        <div class="plans mb-5">
            <div class="row ">
                <?php $__currentLoopData = $plan_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" style="margin: 13px 0px 0px;">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card__title text-uppercase text-center">
                                <?php echo e($plan_data->plan_name); ?>

                            </h3>
                        </div>
                        <div class="card-body">
                            <h4 class="price"><?php echo e($plan_data->plan_price); ?> <?php echo e(getcong('currency_code')); ?></h4>
                            <ul class="features">

                                <li class="feature__item">For <?php echo e(App\SubscriptionPlan::getPlanDuration($plan_data->id)); ?></li>
                                <li class="feature__item">Ad Free Premium Access</li>
                            </ul>
                            <a href="<?php echo e(URL::to('payment_method/'.$plan_data->id)); ?>"> <button type="button" class="subscribe__btn btn rounded-pill">
                                    <?php echo e(trans('words.select_plan')); ?>

                                </button>
                            </a>
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/pages/membership_plan.blade.php ENDPATH**/ ?>