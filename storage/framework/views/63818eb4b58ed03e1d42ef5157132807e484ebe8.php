<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">

                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-md-3">
                                    <?php echo Form::open([
                                        'url' => 'admin/reels',
                                        'class' => 'app-search',
                                        'id' => 'search',
                                        'role' => 'form',
                                        'method' => 'get',
                                    ]); ?>

                                    <input type="text" name="s" placeholder="<?php echo e(trans('words.search_by_title')); ?>"
                                        class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    <?php echo Form::close(); ?>

                                </div>
                                <div class="col-md-3">
                                    <a href="<?php echo e(URL::to('admin/reels/add_reels')); ?>"
                                        class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip"
                                        title="<?php echo e(trans('words.add_reel')); ?>"><i class="fa fa-plus"></i>
                                        <?php echo e(trans('words.add_reel')); ?></a>
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
                                            <th><?php echo e(trans('words.publisher')); ?></th>
                                            <th><?php echo e(trans('words.reel_name')); ?></th>
                                            <th><?php echo e(trans('words.reel_url')); ?></th>
                                            <th><?php echo e(trans('words.reel_like_count')); ?></th>
                                            <th><?php echo e(trans('words.reel_comment_count')); ?></th>
                                            <th><?php echo e(trans('words.reel_status')); ?></th>
                                            <th><?php echo e(trans('words.action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $reels_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $reel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td><?php echo e($reel->username); ?></td>
                                                <td><?php echo e($reel->title); ?></td>
                                                <td><?php echo e($reel->video_url); ?></td>
                                                <td><?php echo e($reel->like_count); ?></td>
                                                <td>
                                                    <a href="<?php echo e(url('admin/reels/all-comments/' . $reel->id)); ?>"
                                                        class="btn btn-icon waves-effect waves-light btn-link m-b-5 m-r-5"
                                                        data-toggle="tooltip" title="Show all comments"><?php echo e($reel->comment_count); ?> </a>
                                                    </td>
                                                <td>
                                                    <?php if($reel->status == 1): ?>
                                                        <span
                                                            class="badge badge-success"><?php echo e(trans('words.active')); ?></span>
                                                    <?php else: ?><span
                                                            class="badge badge-danger"><?php echo e(trans('words.inactive')); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>

                                                    <a href="<?php echo e(url('admin/reels/edit_reels/' . $reel->id)); ?>"
                                                        class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5"
                                                        data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i
                                                            class="fa fa-edit"></i> </a>
                                                    <a href="<?php echo e(url('admin/reels/delete/' . $reel->id)); ?>"
                                                        class="btn btn-icon waves-effect waves-light btn-danger m-b-5"
                                                        onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')"
                                                        data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i
                                                            class="fa fa-remove"></i> </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    </tbody>
                                </table>
                            </div>
                            <nav class="paging_simple_numbers">
                                <?php echo $__env->make('admin.pagination', ['paginator' => $reels_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('admin.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott\resources\views/admin/pages/reel_list.blade.php ENDPATH**/ ?>