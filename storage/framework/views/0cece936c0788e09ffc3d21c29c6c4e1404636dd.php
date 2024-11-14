
<?php $__env->startSection('head_title', trans('words.tv_show_genres').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>
<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <h2 class="section__title"><?php echo e(trans('words.tv_show_genres')); ?></h2>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $genres_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genres_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">
            <a href="<?php echo e(URL::to('genres/series/'.$genres_data->genre_slug)); ?>" class="show__link"></a>
            <div class="show__type text-uppercase"><?php echo e(stripslashes($genres_data->genre_name)); ?></div>

            <?php if($genres_data->genres_image): ?>
            <img class="show__img" src="<?php echo e(URL::to('upload/source/'.$genres_data->genres_image)); ?>" alt="<?php echo e(stripslashes($genres_data->genre_name)); ?>">


            <?php else: ?>
            <img class="show__img" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e(stripslashes($genres_data->genre_name)); ?>">
            <?php endif; ?>

            <a href="<?php echo e(URL::to('genres/series/'.$genres_data->genre_slug)); ?>" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>

    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/series_genres.blade.php ENDPATH**/ ?>