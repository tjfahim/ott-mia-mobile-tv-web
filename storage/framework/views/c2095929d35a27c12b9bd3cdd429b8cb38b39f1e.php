

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
                    <?php echo Form::open(array('url' => 'profile','class'=>'chnge-password pure-form pure-chng"','name'=>'profile_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')); ?>

                    <input name="" value="" type="hidden">

                    <div class="fieldName"><?php echo e(trans('words.name')); ?></div>
                    <input name="name" value="<?php echo e($user->name); ?>" placeholder="Name" required type="text" class="field">

                    <div class="fieldName"><?php echo e(trans('words.email')); ?></div>
                    <input name="email" value="<?php echo e($user->email); ?>" placeholder="Email" required type="text" class="field">

                    <div class="fieldName"><?php echo e(trans('words.password')); ?></div>
                    <input name="password" value="" placeholder="Password" type="password" class="field">

                    <div class="fieldName"><?php echo e(trans('words.phone')); ?></div>
                    <input type="text" class="field" name="phone" value="<?php echo e($user->phone); ?>" placeholder="Phone">

                    <div class="fieldName"><?php echo e(trans('words.address')); ?></div>
                    <input type="text" class="field" name="user_address" placeholder="Address" value="<?php echo e($user->user_address); ?>">

                    <div class="fieldName"><?php echo e(trans('words.profile_image')); ?></div>
                    <input type="file" class="field" name="user_image">

                    <button type="submit" class="button cta"><?php echo e(trans('words.update')); ?></button>


                    <?php echo Form::close(); ?>



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
        margin: auto;
        /* flex-basis: 49%; */
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
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/profile.blade.php ENDPATH**/ ?>