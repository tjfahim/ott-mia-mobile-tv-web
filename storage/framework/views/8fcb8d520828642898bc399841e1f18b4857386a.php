<?php $__env->startSection('head_title', trans('words.dashboard_text').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">


    <div class="module    ">
        <div class="user-page04">
            <h2><?php echo e(trans('words.dashboard_text')); ?></h2>
            <div class="settingColumn">
                <section class="accountInfo">
                    <div class="title site-color">Account Info</div>




                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <?php echo e(Session::get('flash_message')); ?>

                    </div>
                    <?php endif; ?>


                    <div class="sectionDetails">
                        <div class="planDetails">

                            <div class="img-profile">
                                <?php if(Auth::User()->user_image): ?>
                                <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" class="img-rounded" alt="profile_img">
                                <?php else: ?>
                                <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" class="img-rounded" alt="profile_img">
                                <?php endif; ?>
                            </div>


                            <div class="title">
                                <h5><?php echo e(Auth::User()->name); ?></h5>
                                <p><?php echo e(Auth::User()->email); ?></p>
                                <a href="<?php echo e(URL::to('profile')); ?>" class="button cta"><?php echo e(trans('words.edit')); ?></a>
                            </div>

                        </div>
                    </div>



                </section>


            </div>
            <div class="settingColumn">


                <section class="noSubscription purchaseInfo">
                    <div class="title site-color"><?php echo e(trans('words.my_subscription')); ?></div>
                    <div class="sectionDetails">
                        <div class="planDetails">
                            <div class="title">
                                <?php if($user->plan_id!=0): ?>
                                <p class="premuim-memplan"><b><?php echo e(trans('words.current_plan')); ?>:</b> <?php echo e(\App\SubscriptionPlan::getSubscriptionPlanInfo($user->plan_id,'plan_name')); ?></p>
                                <?php if($user->exp_date): ?><p><?php echo e(trans('words.subscription_expires_on')); ?> <b><?php echo e(date('F, d, Y',$user->exp_date)); ?></b></p><?php endif; ?>
                                <div>
                                    <a href="<?php echo e(URL::to('membership_plan')); ?>" class="button cta"><?php echo e(trans('words.upgrade_plan')); ?> </a>
                                </div>
                                <?php else: ?>
                                <div>
                                    <a href="<?php echo e(URL::to('membership_plan')); ?>" class="button cta"><?php echo e(trans('words.select_plan')); ?> </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="noSubscription purchaseInfo">
                    <div class="title site-color"><?php echo e(trans('words.last_invoice')); ?></div>
                    <div class="sectionDetails">
                        <div class="planDetails">
                            <div class="title">
                                <p class="premuim-memplan"><b><?php echo e(trans('words.date')); ?>:</b> <span class="mem-span"><?php if($user->start_date): ?><?php echo e(date('F, d, Y',$user->start_date)); ?><?php endif; ?></span></p>
                                <p class="premuim-memplan"><b><?php echo e(trans('words.plan')); ?>:</b> <span class="mem-span"><?php echo e(\App\SubscriptionPlan::getSubscriptionPlanInfo($user->plan_id,'plan_name')); ?></span></p>
                                <p class="premuim-memplan"><b><?php echo e(trans('words.amount')); ?>:</b> <span class="mem-span"><?php if($user->plan_amount): ?><?php echo e(number_format($user->plan_amount,2,'.', '')); ?><?php endif; ?></span></p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</section>



<style>
    .modules .module {
        grid-column: 1/-1;
        max-width: 100%;
        background: inherit;
    }

    .user-page04 {
        padding: 40px;
        display: flex;
        max-width: 930px;
        margin: 20px auto;
        flex-wrap: wrap;
        justify-content: space-between;
        background: #fff;
        border-radius: 10px;
    }

    .user-page04 h2 {
        flex-basis: 100%;
        font-size: 28px;
        margin-bottom: 30px;
        color: #000;
        font-weight: 700;
    }

    .user-page04 .settingColumn {
        display: flex;
        flex-direction: column;
        flex-basis: 49%;
    }

    .user-page04 .settingColumn section {
        padding: 20px;
        background: #f7f8f9;
        border-radius: 8px;
        margin-bottom: 20px;
        color: #000;
    }

    .user-page04 .settingColumn section.accountInfo .title {
        margin-bottom: 30px;
        text-align: center;
    }

    .user-page04 .settingColumn section>.title {
        text-align: left;
        font-size: 20px;
        font-weight: 700;
    }

    .user-page04 .site-color {
        color: #ed1f52;
    }

    .user-page04 .settingColumn section.accountInfo .field {
        padding: 10px;
        position: relative;
        border: 1px solid #000;
        border-radius: 4px;
        margin-bottom: 20px;
        font-size: 14px;
        background: #fff;
        width: -webkit-fill-available;
    }

    .user-page04 .settingColumn section.accountInfo .field .fieldName {
        position: absolute;
        top: -6px;
        left: 10px;
        background: #f7f8f9;
        padding: 0 3px;
        color: #000;
        font-size: 10px;
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .user-page04 .button {
        margin-top: 10px;
        text-align: center;
        font-size: 11px;
        border-radius: 3px;
    }

    .user-page04 .cta {
        background: #ed1f52;
        color: #ffffff;
        font-weight: bold;
        border-style: solid;
        border-radius: 0px;
        border-width: 1px;
        border-color: #ed1f52;
        padding: 6px 34px;
        font-size: 18px;
    }

    .img-profile img.img-rounded {
        border-radius: 80px;
        width: 150px;
        display: block;
        margin: 0 auto;
        text-align: center;
        height: auto;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\netsky\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>