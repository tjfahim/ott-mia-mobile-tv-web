<?php $__env->startSection('content'); ?>

<div class="w-full h-[600px] py-10">
    <video
        id="my-video"
        class="video-js w-full h-full"
        controls
        preload="auto"
        poster="<?php echo e($video->image ?? ''); ?>"
        data-setup="{}"

>
    <?php if($extention == 'live'): ?>{
        <source src="<?php echo e($url); ?>" type="application/x-mpegURL">
    }
    <?php else: ?>
        <source src="<?php echo e($url); ?>" type="video/mp4">
    <?php endif; ?>

        
</video>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client_site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott-mia\ott-mia-mobile-tv-web\resources\views/frontend/playMovies.blade.php ENDPATH**/ ?>