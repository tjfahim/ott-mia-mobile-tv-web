
<?php $__env->startSection('head_title', $tv_cat_info->category_name.' '.trans('words.live_tv').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>
<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <h2 class="section__title"><?php echo e($tv_cat_info->category_name); ?></h2>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $live_tv_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $live_tv_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">
            <a href="<?php echo e(URL::to('live-tv/'.$live_tv_data->channel_slug.'/'.$live_tv_data->id)); ?>" class="show__link"></a>
            <div class="show__type text-uppercase"><?php echo e(Str::limit(stripslashes($live_tv_data->channel_name),20)); ?></div>

            <?php if($live_tv_data->channel_thumb): ?>
            <img class="show__img" src="<?php echo e(URL::to('upload/source/'.$live_tv_data->channel_thumb)); ?>" alt="<?php echo e($live_tv_data->channel_name); ?>">
            <?php else: ?>
            <img class="show__img" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e($live_tv_data->channel_name); ?>">
            <?php endif; ?>

            <a href="<?php echo e(URL::to('live-tv/'.$live_tv_data->channel_slug.'/'.$live_tv_data->id)); ?>" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
    <?php echo $__env->make('_particles.pagination', ['paginator' => $live_tv_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/livetv_by_category.blade.php ENDPATH**/ ?>