
<?php $__env->startSection('head_title', trans('words.tv_show_languages').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>
<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <h2 class="section__title"><?php echo e(trans('words.tv_show_languages')); ?></h2>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $lang_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">
            <a href="<?php echo e(URL::to('language/series/'.$lang_data->language_slug)); ?>" class="show__link"></a>
            <div class="show__type text-uppercase"><?php echo e(stripslashes($lang_data->language_name)); ?></div>

            <?php if($lang_data->language_image): ?>
            <img class="show__img" src="<?php echo e(URL::to('upload/source/'.$lang_data->language_image)); ?>" alt="<?php echo e(stripslashes($lang_data->language_name)); ?>">


            <?php else: ?>
            <img class="show__img" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e(stripslashes($lang_data->language_name)); ?>">
            <?php endif; ?>



            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/series_language.blade.php ENDPATH**/ ?>