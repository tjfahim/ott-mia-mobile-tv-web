

<?php $__env->startSection("content"); ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                <?php echo Form::open(array('url' => 'admin/broadcasts', 'class'=>'app-search', 'id'=>'search', 'role'=>'form', 'method'=>'get')); ?>   
                                    <input type="text" name="s" placeholder="Search by title" class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                <?php echo Form::close(); ?>

                            </div>             
                            <div class="col-md-3">
                                <a href="<?php echo e(URL::to('admin/broadcasts/create')); ?>" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="Add Broadcast"><i class="fa fa-plus"></i> Add Broadcast</a>
                            </div>
                        </div>

                        <?php if(Session::has('flash_message')): ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo e(Session::get('flash_message')); ?>

                            </div>
                        <?php endif; ?>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Stream url</th>                       
                                        <th>Image</th>                       
                                        <th>Status</th>                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $broadcasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $broadcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(stripslashes($broadcast->title)); ?></td>
                                            <td><?php echo e(stripslashes($broadcast->description)); ?></td>
                                            <td><?php echo e(stripslashes($broadcast->stream_url)); ?></td>
                                            <td>
                                                <?php if($broadcast->image): ?>
                                                    <img src="<?php echo e(asset('/' . $broadcast->image)); ?>" alt="Broadcast Image" style="width: 100px; height: auto;">
                                                <?php else: ?>
                                                    No Image
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($broadcast->status == 1): ?>
                                                    <span class="badge badge-success">Active</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger">Inactive</span>
                                                <?php endif; ?>
                                            </td>                       
                                            <td>
                                                <a href="<?php echo e(url('admin/broadcasts/'.$broadcast->id.'/edit')); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="<?php echo e(route('broadcasts.destroy', $broadcast->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?')">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" data-toggle="tooltip" title="Remove">
        <i class="fa fa-remove"></i>
    </button>
</form>
       
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <nav class="paging_simple_numbers">
                            <?php echo $__env->make('admin.pagination', ['paginator' => $broadcasts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/redail/public_html/ott.redsmail.xyz/resources/views/admin/pages/broadcast_list.blade.php ENDPATH**/ ?>