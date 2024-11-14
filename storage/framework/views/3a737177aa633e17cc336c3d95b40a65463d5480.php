

<?php if($season_info->seo_title): ?>
<?php $__env->startSection('head_title', stripslashes($season_info->seo_title).' | '.getcong('site_name')); ?>
<?php else: ?>
<?php $__env->startSection('head_title', $series_name.' '.stripslashes($season_info->season_name).' | '.getcong('site_name')); ?>
<?php endif; ?>

<?php if($season_info->seo_description): ?>
<?php $__env->startSection('head_description', stripslashes($season_info->seo_description)); ?>
<?php endif; ?>

<?php if($season_info->seo_keyword): ?>
<?php $__env->startSection('head_keywords', stripslashes($season_info->seo_keyword)); ?>
<?php endif; ?>


<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('head_title', trans('words.watch_popular_tv_shows').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('content'); ?>

<section class="movies padding-x section-padding-y">

    <a href="<?php echo e(URL::to('series/'.$series_slug.'/'.$season_info->series_id)); ?>">
        <h2 class="section__title"><?php echo e($series_name); ?>-<?php echo e($season_info->season_name); ?></h2>
    </a>

    <ul class="show__list py-2">
        <?php $__currentLoopData = $episode_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episode_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="show__item">
            <a href="<?php echo e(URL::to('series/'.$series_slug.'/'.$episode_data->video_slug.'/'.$episode_data->id)); ?>">

            <div class="show__type text-uppercase"><?php echo e(Str::limit(stripslashes($episode_data->video_title),15)); ?></div>

            <?php if($episode_data->video_image): ?>
            <img class="show__img__big" src="<?php echo e(URL::to('upload/source/'.$episode_data->video_image)); ?>" alt="<?php echo e($episode_data->video_title); ?>" >
            <?php else: ?>
            <img class="show__img__big" src="<?php echo e(URL::to('site_assets/images/colored-painted.jpg')); ?>" alt="<?php echo e(Str::limit(stripslashes($episode_data->video_title),15)); ?>">
            <?php endif; ?>



            <a href="<?php echo e(URL::to('series/'.$series_slug.'/'.$episode_data->video_slug.'/'.$episode_data->id)); ?>" class="play__btn">
                <i class="fa-solid fa-play"></i>
            </a>

        </a>

        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
    
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/season_episodes.blade.php ENDPATH**/ ?>