<!DOCTYPE html>
<html lang="<?php echo e(getcong('default_language')); ?>">

<head>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('head_title', getcong('site_name')); ?></title>
  <meta name="description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />
  <meta name="keywords" content="<?php echo $__env->yieldContent('head_keywords', getcong('site_keywords')); ?>" />
  <link rel="canonical" href="<?php echo $__env->yieldContent('head_url', url('/')); ?>">

  <meta property="og:type" content="movie" />
  <meta property="og:title" content="<?php echo $__env->yieldContent('head_title',  getcong('site_name')); ?>" />
  <meta property="og:description" content="<?php echo $__env->yieldContent('head_description', getcong('site_description')); ?>" />
  <meta property="og:image" content="<?php echo $__env->yieldContent('head_image', URL::asset('upload/source/'.getcong('site_logo'))); ?>" />
  <meta property="og:url" content="<?php echo $__env->yieldContent('head_url', url('/')); ?>" />
  <meta property="og:image:width" content="1024" />
  <meta property="og:image:height" content="1024" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="<?php echo $__env->yieldContent('head_image', URL::asset('upload/source/'.getcong('site_logo'))); ?>">
  <link rel="image_src" href="<?php echo $__env->yieldContent('head_image', URL::asset('upload/source/'.getcong('site_logo'))); ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="<?php echo e(URL::asset('upload/source/'.getcong('site_favicon'))); ?>">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/assets/libraries/bootstrap/css/bootstrap.min.css')); ?>" />

  <!-- Splide CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/assets/libraries/splide/css/splide.min.css')); ?>" />

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/assets/libraries/fontawesome/css/all.min.css')); ?>" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- External CSS -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/css/style.css')); ?>" />
  <link rel="stylesheet" href="<?php echo e(URL::asset('site_assets/css/responsive.css')); ?>" />
</head>

<body>

  <?php echo $__env->make("_particles.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- website body starts -->
  <main id="website">
    <?php echo $__env->yieldContent("content"); ?>
  </main>
  <!-- website body ends -->

  <!-- login panel starts -->
  <div class="modal fade general__modal" id="loginRegiModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginRegiModalLabel" aria-hidden="true">
    <button type="button" class="login__regi__close" data-bs-dismiss="modal" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>
    </button>
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <!-- modal-body -->

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav__one" role="tabpanel" aria-labelledby="nav__one__tab">

              <h2 class="section__title">Login Alert</h2>

              <p class="part__desc">You don't have access to premimum content kindly purchase subscription to watch this content or Login with premium account.</p>

              <a href="<?php echo e(URL::to('login')); ?>">
                <button type="submit" class="btn btn__submit"><?php echo e(trans('words.login_text')); ?></button>
              </a>




            </div>



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

  <?php echo $__env->make("_particles.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Bootstrap Bundle JS -->
  <script src="<?php echo e(URL::asset('site_assets/assets/libraries/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Splide JS -->
  <script src="<?php echo e(URL::asset('site_assets/assets/libraries/splide/js/splide.min.js')); ?>"></script>

  <!-- Vanilla Emoji Picker -->
  <script src="<?php echo e(URL::asset('site_assets/assets/libraries/vanilla-javascript-emoji-picker/vanillaEmojiPicker.js')); ?>"></script>

  <!-- External JS -->
  <script src="<?php echo e(URL::asset('site_assets/js/index.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('site_assets/js/homeSliders.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('site_assets/js/home.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('site_assets/js/single-page.js')); ?>"></script>

</body>

</html><?php /**PATH E:\xampp\htdocs\netsky\resources\views/site_app.blade.php ENDPATH**/ ?>