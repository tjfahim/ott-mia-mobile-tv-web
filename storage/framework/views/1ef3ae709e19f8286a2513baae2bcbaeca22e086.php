
<?php $__env->startSection('head_title', $lang_info->language_name.' '.trans('words.movies_text').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>
<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <h2 class="section__title"><?php echo e(trans('words.popular_in')); ?> <?php echo e($lang_info->language_name); ?></h2>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $movies_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">






            <a href="<?php echo e(URL::to('movies/'.$movies_data->video_slug.'/'.$movies_data->id)); ?>" class="show__link"></a>




            <div class="show__type text-uppercase"><?php echo e(Str::limit(stripslashes($movies_data->video_title),12)); ?></div>

            <?php if($movies_data->video_image_thumb): ?>
            <img class="show__img__big" src="<?php echo e(URL::to('upload/source/'.$movies_data->video_image_thumb)); ?>" alt="<?php echo e($movies_data->video_title); ?>">
            <?php else: ?>
            <img class="show__img__big" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e($movies_data->video_title); ?>">
            <?php endif; ?>




            <a href="<?php echo e(URL::to('movies/'.$movies_data->video_slug.'/'.$movies_data->id)); ?>" class="play__btn">
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
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/movies_by_language.blade.php ENDPATH**/ ?>