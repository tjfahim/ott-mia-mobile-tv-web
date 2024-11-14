<?php $__env->startSection("content"); ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div class="row">
                            <div class="col-md-3">
                                <?php echo Form::open(array('url' => 'admin/faqs', 'class'=>'app-search', 'id'=>'search', 'role'=>'form', 'method'=>'get')); ?>   
                                    <input type="text" name="s" placeholder="Search by title" class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                <?php echo Form::close(); ?>

                            </div>             
                            <div class="col-md-3">
                                <a href="<?php echo e(URL::to('admin/faqs/add')); ?>" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="Add FAQ"><i class="fa fa-plus"></i> Add FAQ</a>
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
                                        <th>Status</th>                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $faq_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(stripslashes($faq->title)); ?></td>
                                            <td><?php echo e(stripslashes($faq->description)); ?></td>
                                            <td>
                                                <?php if($faq->status == 1): ?>
                                                    <span class="badge badge-success">Active</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger">Inactive</span>
                                                <?php endif; ?>
                                            </td>                       
                                            <td>
                                                <a href="<?php echo e(url('admin/faqs/edit/'.$faq->id)); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo e(url('admin/faqs/delete/'.$faq->id)); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('Are you sure you want to delete this item?')" data-toggle="tooltip" title="Remove">
                                                    <i class="fa fa-remove"></i>
                                                </a>           
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <nav class="paging_simple_numbers">
                            <?php echo $__env->make('admin.pagination', ['paginator' => $faq_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott\resources\views/admin/pages/faq_list.blade.php ENDPATH**/ ?>