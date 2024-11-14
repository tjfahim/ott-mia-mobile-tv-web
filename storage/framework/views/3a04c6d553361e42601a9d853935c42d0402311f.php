

<?php $__env->startSection('head_title', trans('words.dashboard_text').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
<div class="general__modal" id="loginRegiModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginRegiModalLabel" aria-hidden="true">
  <!-- <button type="button" class="login__regi__close" data-bs-dismiss="modal" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>
  </button> -->
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <div class="py-5">
              <!-- modal-body -->
              <nav class="mb-4">
                <div class="mb-4 text-white">
                  <h1 class="mb-1 fw-bold">Chage Password</h1>
                  <p>Fill the form to change your password.</p>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav__one" role="tabpanel" aria-labelledby="nav__one__tab">
                      <?php echo Form::open(array('url' => 'reset-password','id'=>'loginform','role'=>'form', 'method' => 'post')); ?>

                     
                      <div class="message">
                          <?php if(Session::has('login_flash_error')): ?>
                          <?php if(count($errors) > 0): ?>
                          <div class="alert alert-danger">
                              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                              <ul>
                                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                          <?php endif; ?>
                          <?php endif; ?>


                          <?php if(Session::has('flash_message')): ?>
                          <div class="alert alert-success">
                              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button> -->
                              <?php echo e(Session::get('flash_message')); ?>

                          </div>
                          <?php endif; ?>
                          <?php if(Session::has('error_flash_message')): ?>
                          <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                              <?php echo e(Session::get('error_flash_message')); ?>

                          </div>
                          <?php endif; ?>
                      </div>

                      <div class="mb-4">
                          <input type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>" placeholder="<?php echo e(trans('words.email')); ?>" readonly />
                      </div>
                      <div class="mb-4">
                          <input type="password" class="form-control" name="password"  placeholder="<?php echo e(trans('words.password')); ?>" />
                      </div>
                      <div class="mb-4">
                          <input type="password" class="form-control" name="password_confirmation" placeholder="<?php echo e(trans('words.confirm_password')); ?>" />
                      </div>
                      <button type="submit" class="btn btn__submit"><?php echo e(trans('words.update')); ?></button>
                      
                      <?php echo Form::close(); ?>


                  </div>
                  
              </div>
          </div>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/reset_password_new.blade.php ENDPATH**/ ?>