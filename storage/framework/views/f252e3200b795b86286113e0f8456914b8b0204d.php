

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

            <div class="row">
              <div class="col-sm-6">
                <a href="<?php echo e(URL::to('admin/channel-manage')); ?>">
                  <h4 class="header-title m-t-0 m-b-30 text-primary pull-left" style="font-size: 20px;">
                    <i class="fa fa-arrow-left"></i> Back
                  </h4>
                </a>
              </div>
            </div>

            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
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
                <span aria-hidden="true">&times;</span>
              </button>
              <?php echo e(Session::get('flash_message')); ?>

            </div>
            <?php endif; ?>

            <?php echo Form::open(array('url' => route('channel.store'), 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data')); ?>


<input type="hidden" name="id" value="<?php echo e(isset($channel->id) ? $channel->id : null); ?>">
<div class="row">
  <div class="col-md-12"> 
    <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;">Channel Information</h4>

    <!-- Title -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Title</label>
      <div class="col-sm-8">
        <input type="text" name="title" value="<?php echo e(isset($channel->title) ? stripslashes($channel->title) : null); ?>" class="form-control" required>
      </div>
    </div>

    <!-- URL -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">URL</label>
      <div class="col-sm-8">
        <input type="url" name="url" value="<?php echo e(isset($channel->url) ? stripslashes($channel->url) : null); ?>" class="form-control" required>
      </div>
    </div>

    <!-- Status -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-8">
        <select class="form-control" name="status">
          <option value="1" <?php if(isset($channel->status) && $channel->status == 1): ?> selected <?php endif; ?>>Active</option>
          <option value="0" <?php if(isset($channel->status) && $channel->status == 0): ?> selected <?php endif; ?>>Inactive</option>
        </select>
      </div>
    </div>

    <!-- Image Upload -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Image</label>
      <div class="col-sm-8">
        <input type="file" name="image" class="form-control">
        <?php if(isset($channel->image) && $channel->image): ?>
          <br>
          <img src="<?php echo e(asset('storage/' . $channel->image)); ?>" alt="Image" width="150">
        <?php endif; ?>
      </div>
    </div>

    <!-- Save Button -->
    <div class="form-group">
      <div>
        <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa fa-save"></i> Save </button>                      
      </div>
    </div>
  </div>
</div>

<?php echo Form::close(); ?>

          </div>
        </div>            
      </div>              
    </div>
  </div>
  <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/redail/public_html/ott.redsmail.xyz/resources/views/admin/pages/addedit_channel.blade.php ENDPATH**/ ?>