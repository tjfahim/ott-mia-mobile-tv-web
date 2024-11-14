
<?php $__env->startSection('head_title', trans('words.sports_text').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>
<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <h2 class="section__title"><?php echo e(trans('words.sports_text')); ?></h2>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $sports_video_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sports_video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">
            <a href="<?php echo e(URL::to('sports/'.$sports_video->video_slug.'/'.$sports_video->id)); ?>" class="show__link"></a>
            <div class="show__type text-uppercase"><?php echo e(Str::limit(stripslashes($sports_video->video_title),20)); ?></div>

            <?php if($sports_video->video_image): ?>
            <img class="show__img" src="<?php echo e(URL::to('upload/source/'.$sports_video->video_image)); ?>" alt="<?php echo e($sports_video->video_title); ?>">
            <?php else: ?>
            <img class="show__img" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e($sports_video->video_title); ?>">
            <?php endif; ?>

            <a href="<?php echo e(URL::to('sports/'.$sports_video->video_slug.'/'.$sports_video->id)); ?>" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>
            <!-- <button class="wishlist__btn">
                <i class="fa-solid fa-plus"></i>
            </button> -->
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
    <?php echo $__env->make('_particles.pagination', ['paginator' => $sports_video_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/sports.blade.php ENDPATH**/ ?>