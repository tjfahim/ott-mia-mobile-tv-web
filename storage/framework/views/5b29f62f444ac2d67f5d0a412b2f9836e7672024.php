<?php $__env->startSection("content"); ?>

  
  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card-box table-responsive">

                <div class="row">             
                <div class="col-md-3">
                  <a href="<?php echo e(URL::to('admin/genres/add_genre')); ?>" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="<?php echo e(trans('words.add_genre')); ?>"><i class="fa fa-plus"></i> <?php echo e(trans('words.add_genre')); ?></a>
                </div>
              </div>

                <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                        <?php echo e(Session::get('flash_message')); ?>

                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th><?php echo e(trans('words.genre_title')); ?></th>
                      <th><?php echo e(trans('words.status')); ?></th>                        
                      <th><?php echo e(trans('words.action')); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $__currentLoopData = $genres_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $genres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e(stripslashes($genres->genre_name)); ?></td>
                      <td><?php if($genres->status==1): ?><span class="badge badge-success"><?php echo e(trans('words.active')); ?></span> <?php else: ?><span class="badge badge-danger"><?php echo e(trans('words.inactive')); ?></span><?php endif; ?></td>                       
                      <td>
                      <a href="<?php echo e(url('admin/genres/edit_genre/'.$genres->id)); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                      <a href="<?php echo e(url('admin/genres/delete/'.$genres->id)); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>           
                      </td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                     
                     
                  </tbody>
                </table>
              </div>
                <nav class="paging_simple_numbers">
                <?php echo $__env->make('admin.pagination', ['paginator' => $genres_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                </nav>
           
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    </div>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/admin/pages/genres_list.blade.php ENDPATH**/ ?>