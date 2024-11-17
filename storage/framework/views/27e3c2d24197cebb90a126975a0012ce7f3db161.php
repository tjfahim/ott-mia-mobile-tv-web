<?php $__env->startSection('head_title', getcong('site_name') ); ?>
<?php $__env->startSection('content'); ?>
<!-- Trending shows starts -->




<!-- login panel starts -->
<div class="general__modal" id="loginRegiModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginRegiModalLabel" aria-hidden="true">
    <!-- <button type="button" class="login__regi__close" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
    </button> -->
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="">
                <!-- modal-body -->
                <nav class="mb-4">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav__one__tab" data-bs-toggle="tab" data-bs-target="#nav__one" type="button" role="tab" aria-controls="nav__one" aria-selected="true">
                            <?php echo e(trans('words.login_text')); ?>

                        </button>
                        <button class="nav-link" id="nav__two__tab" data-bs-toggle="tab" data-bs-target="#nav__two" type="button" role="tab" aria-controls="nav__two" aria-selected="false">
                            <?php echo e(trans('words.dont_have_account')); ?>

                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav__one" role="tabpanel" aria-labelledby="nav__one__tab">
                        <?php echo Form::open(array('url' => 'login','id'=>'loginform','role'=>'form')); ?>

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
                            <input type="email" class="form-control" name="email" value="" placeholder="<?php echo e(trans('words.email')); ?>" />
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control" name="password" value="" placeholder="<?php echo e(trans('words.password')); ?>" />
                        </div>
                        <button type="submit" class="btn btn__submit"><?php echo e(trans('words.login_text')); ?></button>
                        <div class="forgot__pass__link">
                            <a href="<?php echo e(URL::to('forgot-password')); ?>" class="forgot__password"><?php echo e(trans('words.forgot_password')); ?></a>
                        </div>
                        <?php echo Form::close(); ?>


                        <div class="alternative__text">or</div>

                        <div class="authentication__methods">

                            <div class="top">
                                <?php if(getcong('facebook_login')): ?>
                                <a href="<?php echo e(url('auth/facebook')); ?>" type="button" class="social__btn facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    Log in With Facebook
                                </a>
                                <?php endif; ?>
                                <?php if(getcong('google_login')): ?>
                                <a href="<?php echo e(url('auth/google')); ?>" type="button" class="social__btn google">
                                    <i class="fa-brands fa fa-google"></i>
                                    Log in With Google
                                </a>
                                <?php endif; ?>
                            </div>
                            <!-- <div class="bottom">
                  <a href="#" type="button" class="social__btn apple">
                    <i class="fa-brands fa-apple"></i>
                    Sign in With Apple
                  </a>
                </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav__two" role="tabpanel" aria-labelledby="nav__two__tab">
                        <?php echo Form::open(array('url' => 'signup','id'=>'loginform','role'=>'form')); ?>


                        <div class="message">
                            <?php if(Session::has('signup_flash_error')): ?>
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
                        </div>

                        <?php if(Session::has('signup_flash_message')): ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <?php echo e(Session::get('signup_flash_message')); ?>

                        </div>
                        <?php endif; ?>


                        <div class="mb-4">
                            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(trans('words.name')); ?>" />
                        </div>

                        <div class="mb-4">
                            <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(trans('words.email')); ?>" />
                        </div>


                        <div class="mb-4">
                            <input class="form-control" type="password" name="password" placeholder="<?php echo e(trans('words.password')); ?> <?php echo e(trans('words.at_least_8_char')); ?>" />
                        </div>

                        <div class="mb-4">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="<?php echo e(trans('words.confirm_password')); ?>" />
                        </div>

                        <!-- <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="tos" />
                            <label class="form-check-label" for="tos">Please send me email and other marketing communications
                                regarding my account and other products from
                                Chorki.</label>
                        </div> -->
                        <button type="submit" class="btn btn__submit">
                            <?php echo e(trans('words.sign_up')); ?>

                        </button>
                        <?php echo Form::close(); ?>



                        <!-- <div class="alternative__text">or</div>
                        <div class="authentication__methods">
                            <div class="top">
                                <a href="#" type="button" class="social__btn facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    Log in With Facebook
                                </a>
                                <a href="#" type="button" class="social__btn google">
                                    <img src="./assets/images/google.png" alt="google" />
                                    Log in With Google
                                </a>
                            </div>
                            <div class="bottom">
                                <a href="#" type="button" class="social__btn apple">
                                    <i class="fa-brands fa-apple"></i>
                                    Sign in With Apple
                                </a>
                            </div>
                        </div> -->
                        <!-- <div class="privacy__terms">
                            By clicking Sign Up, you agree to our
                            <a href="#" class="link">terms of use</a> and
                            <a href="#" class="link">privacy policy</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login panel ends -->

<!-- Trending shows ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hadiuzzaman2\ott-mia-mobile-tv-web\resources\views/pages/login.blade.php ENDPATH**/ ?>