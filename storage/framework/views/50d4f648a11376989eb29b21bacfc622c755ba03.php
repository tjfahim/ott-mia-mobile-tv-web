<?php $__env->startSection("content"); ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                <?php echo Form::open(array('url' => 'admin/channel-manage', 'class'=>'app-search', 'id'=>'search', 'role'=>'form', 'method'=>'get')); ?>   
                                    <input type="text" name="s" placeholder="Search by title" class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                <?php echo Form::close(); ?>

                            </div>             
                            <div class="col-md-3">
                                <a href="<?php echo e(URL::to('admin/channel-manage/create')); ?>" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="Add Channel">
                                    <i class="fa fa-plus"></i> Add Channel
                                </a>
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
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>URL</th>
                                        <th>Status</th>                       
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <!-- Display the ID -->
                                            <td><?php echo e($channel->id); ?></td>

                                            <!-- Display the Title -->
                                            <td><?php echo e(stripslashes($channel->title)); ?></td>

                                            <!-- Display the URL -->
                                            <td><?php echo e(stripslashes($channel->url)); ?></td>

                                            <!-- Display the Status -->
                                            <td>
                                                <?php if($channel->status): ?>
                                                    <span class="badge badge-success">Active</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger">Inactive</span>
                                                <?php endif; ?>
                                            </td>                       

                                            <!-- Display the Image -->
                                            <td>
                                                <?php if($channel->image): ?>
                                                    <img src="<?php echo e(asset('/' . $channel->image)); ?>" alt="Channel Image" width="100">
                                                <?php else: ?>
                                                    <span>No Image</span>
                                                <?php endif; ?>
                                            </td>

                                            <!-- Action buttons: Edit & Delete -->
                                            <td>
                                                <a href="<?php echo e(url('admin/channel-manage/'.$channel->id.'/edit')); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="<?php echo e(url('admin/channel-manage/'.$channel->id)); ?>" method="POST" style="display:inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('Are you sure you want to delete this channel?')" data-toggle="tooltip" title="Remove">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </form>           
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <nav class="paging_simple_numbers">
                            <?php echo $__env->make('admin.pagination', ['paginator' => $channels], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/admin/pages/channel_manage_list.blade.php ENDPATH**/ ?>