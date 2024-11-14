

<?php $__env->startSection('head_title', $page_info->page_title.' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>

<section class="privacy__policies">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="policy__title text-uppercase"><?php echo e(stripslashes($page_info->page_title)); ?></h3>

                <span class="clt-content"><?php echo stripslashes($page_info->page_content); ?></span>


            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/pages.blade.php ENDPATH**/ ?>