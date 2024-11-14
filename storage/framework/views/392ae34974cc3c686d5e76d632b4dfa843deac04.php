<?php $__env->startSection("content"); ?>

<style type="text/css">
  .iframe-container {
    overflow: hidden;
    padding-top: 56.25% !important;
    position: relative;
  }

  .iframe-container iframe {
    border: 0;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
  }
</style>

<div class="content-page">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-box">
            <?php if($errors->any()): ?>
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

            <h4 class="header-title">YouTube & TikTok Video List</h4>

            <div class="mb-3">
              <a href="<?php echo e(route('youtube-tiktok.create')); ?>" class="btn btn-primary">Add New Entry</a>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Video Title</th>
                    <th>Video URL</th>
                    <th>Platform</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($video->id); ?></td> <!-- Updated to match the correct attribute -->
                    <td><?php echo e($video->title); ?></td> <!-- Updated to match the correct attribute -->
                    <td><a href="<?php echo e($video->url); ?>" target="_blank"><?php echo e($video->url); ?></a></td> <!-- Updated to match the correct attribute -->
                    <td><?php echo e($video->type); ?></td> <!-- Updated to match the correct attribute -->
                    <td><?php echo e($video->description); ?></td>
                    <td>
                      <?php if($video->status): ?>
                        <span class="badge badge-success">Active</span>
                      <?php else: ?>
                        <span class="badge badge-danger">Inactive</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?php echo e(route('youtube-tiktok.edit', $video->id)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <form action="<?php echo e(route('youtube-tiktok.delete', $video->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this video?');"><i class="fa fa-trash"></i> Delete</button>
                      </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-end">
              <?php echo e($videos->links()); ?> <!-- Pagination links -->
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott\resources\views/admin/pages/youtube_tiktok_list.blade.php ENDPATH**/ ?>