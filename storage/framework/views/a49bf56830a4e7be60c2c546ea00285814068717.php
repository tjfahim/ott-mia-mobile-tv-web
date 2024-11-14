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
                <a href="<?php echo e(URL::to('admin/upcoming-movie-series')); ?>">
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

            <?php echo Form::open(array('url' => route('admin.upcoming-movie-series.store'), 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data')); ?>


<input type="hidden" name="id" value="<?php echo e(isset($movie_series->id) ? $movie_series->id : null); ?>">
<div class="row">
  <div class="col-md-12"> 
    <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;">Upcoming Movie/Series Information</h4>

    <!-- Title -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Title</label>
      <div class="col-sm-8">
        <input type="text" name="title" value="<?php echo e(isset($movie_series->title) ? stripslashes($movie_series->title) : null); ?>" class="form-control" required>
      </div>
    </div>

    <!-- Description -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Description</label>
      <div class="col-sm-8">
        <textarea name="description" class="form-control"><?php echo e(isset($movie_series->description) ? stripslashes($movie_series->description) : null); ?></textarea>
      </div>
    </div>

    <!-- Release Date -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Release Date</label>
      <div class="col-sm-8">
        <input type="date" name="release_date" value="<?php echo e(isset($movie_series->release_date) ? $movie_series->release_date->format('Y-m-d') : null); ?>" class="form-control">
      </div>
    </div>

    <!-- Type (Movie or Series) -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type</label>
      <div class="col-sm-8">
        <select class="form-control" name="type">
          <option value="movie" <?php if(isset($movie_series->type) && $movie_series->type == 'movie'): ?> selected <?php endif; ?>>Movie</option>
          <option value="series" <?php if(isset($movie_series->type) && $movie_series->type == 'series'): ?> selected <?php endif; ?>>Series</option>
        </select>
      </div>
    </div>

    <!-- Status -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-8">
        <select class="form-control" name="status">                               
          <option value="upcoming" <?php if(isset($movie_series->status) && $movie_series->status == 'upcoming'): ?> selected <?php endif; ?>>Upcoming</option>
          <option value="released" <?php if(isset($movie_series->status) && $movie_series->status == 'released'): ?> selected <?php endif; ?>>Released</option>
          <option value="postponed" <?php if(isset($movie_series->status) && $movie_series->status == 'postponed'): ?> selected <?php endif; ?>>Postponed</option>                             
        </select>
      </div>
    </div>

    <!-- Image Upload -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Image</label>
      <div class="col-sm-8">
        <input type="file" name="image" class="form-control">
        <?php if(isset($movie_series->image) && $movie_series->image): ?>
          <br>
          <img src="<?php echo e(asset('storage/' . $movie_series->image)); ?>" alt="Image" width="150">
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

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott\resources\views/admin/pages/addedit_upcoming_movie_series.blade.php ENDPATH**/ ?>