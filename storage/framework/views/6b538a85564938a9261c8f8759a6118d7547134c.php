<?php $__env->startSection("content"); ?>


<div class="content-page">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card-box table-responsive">

              

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
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Replay</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="<?php echo e($contact->read ? 'bg-light hover' : ''); ?>">
                    <td><?php echo e($contact->id); ?></td>
                    <td><?php echo e($contact->first_name); ?></td>
                    <td><?php echo e($contact->last_name); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->phone); ?></td>
                    <td><?php echo e($contact->message); ?></td>
                    <td>
                        <?php if($contact->read): ?>
                        <div class="btn btn-success">Read</div>
                        <?php else: ?>
                        <div></div><a href="<?php echo e(URL::to('admin/contacts/replay/'.$contact->id)); ?>" class="btn btn-info">Unread</a>
                        <?php endif; ?>
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

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/admin/pages/contacts.blade.php ENDPATH**/ ?>