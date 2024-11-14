
<?php $__env->startSection('head_title', trans('words.watch_popular_tv_shows').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>
<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <h2 class="section__title"><?php echo e(trans('words.shows_text')); ?></h2>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $series_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">
            <a href="<?php echo e(URL::to('series/'.$series_data->series_slug.'/'.$series_data->id)); ?>" class="show__link"></a>
            <div class="show__type text-uppercase"><?php echo e(Str::limit(stripslashes($series_data->series_name),25)); ?></div>

            <?php if($series_data->series_poster): ?>
            <img class="show__img__big" src="<?php echo e(URL::to('upload/source/'.$series_data->series_poster)); ?>" alt="<?php echo e(Str::limit(stripslashes($series_data->series_name),25)); ?>">
            <?php else: ?>
            <img class="show__img__big" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e(Str::limit(stripslashes($series_data->series_name),25)); ?>">
            <?php endif; ?>

            <a href="<?php echo e(URL::to('series/'.$series_data->series_slug.'/'.$series_data->id)); ?>" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
    <?php echo $__env->make('_particles.pagination', ['paginator' => $series_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/series.blade.php ENDPATH**/ ?>