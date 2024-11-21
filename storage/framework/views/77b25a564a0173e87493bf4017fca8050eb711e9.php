<?php $__env->startSection("content"); ?>


<div class="content-page">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card-box table-responsive">

                <div class="row">
                    <div class="col-md-6">
                        <?php echo Form::open(array('url' => 'admin/production/members','class'=>'app-search','id'=>'search','role'=>'form','method'=>'get')); ?>

                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" name="s_by" aria-label="Default select example">
                                    <option value="all" <?php echo e(request('s_by') == 'all' ? 'selected' : ''); ?>>All</option>
                                    <option value="name" <?php echo e(request('s_by') == 'name' ? 'selected' : ''); ?>>Name</option>
                                    <option value="role" <?php echo e(request('s_by') == 'role' ? 'selected' : ''); ?>>Role</option>
                                    <option value="country" <?php echo e(request('s_by') == 'country' ? 'selected' : ''); ?>>Country</option>
                                </select>


                            </div>
                            <div class="col-md-9">
                                <input type="text" name="s" placeholder="search..." value="<?php echo e(request()->input('s')); ?>" class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                    <div class="col-md-3">
                        <a href="<?php echo e(URL::to('admin/production/members')); ?>" class="btn btn-light btn-md waves-effect waves-light m-b-20">Clear</a>
                        <a href="<?php echo e(URL::to('admin/production/members/add')); ?>" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="<?php echo e(trans('words.add_movie')); ?>"><i class="fa fa-plus"></i>Add Member</a>
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
                    <th>No.</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Role</th>
                    <th>Nationality</th>
                    <th>Age</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($member->id); ?></td>
                    <td><?php echo e($member->name); ?></td>
                    <td>
                        <img src="<?php echo e(URL::to('upload/source/'.$member->image)); ?>" class="thumb-lg bdr_radius" alt="">
                    </td>
                    <td><?php echo e($member->role); ?></td>
                    <td><?php echo e($member->nationality); ?></td>
                    <td>
                        <?php
                            $bdate = new DateTime($member->dof);
                            $ndate = new DateTime();
                            $age = $bdate->diff($ndate)->y;
                        ?>
                        <?php echo e($age); ?> Years
                    </td>
                    <td>
                        <a href="<?php echo e(URL::to('admin/production/members/'. $member->id.'/edit')); ?>" class="btn btn-info">Edit</a>
                        <form action="<?php echo e(URL::asset('admin/production/members/'. $member->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                  </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </tbody>
              </table>
            </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/admin/pages/production_member/index.blade.php ENDPATH**/ ?>