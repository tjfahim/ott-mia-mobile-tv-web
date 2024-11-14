    <style>
      .tab__navbar__nav {

    grid-template-columns: repeat(5, 1fr) !important;
}
    </style>
    
    <!-- footer starts -->
    <footer id="footer" class="footer">
      <div class="top">
        <div class="row align-items-center align-items-xl-start">
          <div class="col-xl-8 col-lg-7">
            <div class="row">
              <div class="col-xl-8 mb-4 mb-xl-0">
                <ul class="footer__navbar">
                  <?php $__currentLoopData = \App\Pages::where('status','1')->orderBy('id')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="footer__nav__item">
                    <a href="<?php echo e(URL::to('page/'.$page_data->page_slug)); ?>" class="footer__nav__link"><?php echo e($page_data->page_title); ?></a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <p class="copyright__text d-none d-xl-block">
                  <?php echo e(stripslashes(getcong('site_copyright'))); ?>

                </p>
              </div>
              <div class="col-xl-4 mb-4 mb-lg-0">
                <ul class="social__links">
                  <li class="social__item">
                    <a href="<?php echo e(stripslashes(getcong('footer_fb_link'))); ?>" class="social__link" target="_blank">
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="social__item">
                    <a href="<?php echo e(stripslashes(getcong('footer_instagram_link'))); ?>" class="social__link" target="_blank">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                  </li>
                  <li class="social__item">
                    <a href="<?php echo e(stripslashes(getcong('footer_twitter_link'))); ?>" class="social__link" target="_blank">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="download__apps">
              <a href="#" role="button" class="app__icon">
                <i class="fa-brands fa-google-play"></i>
                <div class="app__icon__text">
                  <p class="app__available">Available on the</p>
                  <span class="store__name">playstore</span>
                </div>
              </a>
              <a href="#" role="button" class="app__icon">
                <i class="fa-brands fa-apple"></i>
                <div class="app__icon__text">
                  <p class="app__available">Available on the</p>
                  <span class="store__name">appstore</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__text__sm d-xl-none">
        <?php echo e(stripslashes(getcong('site_copyright'))); ?>

      </div>

      <!-- tabnavbar starts -->
      <nav class="tab__navbar d-md-none">
        <ul class="tab__navbar__nav">
          <li class="tab__nav__item">
            <a href="<?php echo e(url('/')); ?>" class="tab__nav__link active">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff" viewBox="0 0 100 100">
                <path d="M48.188 5.6l-40 30a3.05 3.05 0 0 0-1.188 2.406v54c0 1.57 1.43 3 3 3h80c1.57 0 3-1.43 3-3v-54c0-.927-.45-1.846-1.187-2.406l-40-30c-1.3-.832-2.444-.75-3.625 0zM50 11.756l37 27.75v49.5H13v-49.5z"></path>
              </svg>
              Home
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="<?php echo e(url('/')); ?>/reels" class="tab__nav__link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="#ffffff" version="1.1" viewBox="0 0 100 100">
                <path d="m90.7 86.9c0 2.4-1.6 3-3 3h-72c-2.4 0-3-1.7-3-3v-27h78v27zm-5.2-42-4.5 12h-12l4.5-12h12zm-22.6 0-4.5 12h-12l4.5-12h12zm-22.5 0-4.5 12h-12l4.5-12h12zm-12.4-5.5-8.2-9.9 11.4-3.9 8.2 9.9-11.4 3.9zm13.1-17.3 11.4-3.9 8.2 9.9-11.5 3.9-8.1-9.9zm21.3-7.3 11.4-3.9 8.2 9.9-11.4 3.9-8.2-9.9zm-44.8 24.4c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2-4.2-1.9-4.2-4.2 1.8-4.2 4.2-4.2m79.1 47.7v-40.5c0-1.8-1.2-4.5-4.5-4.5h-62.5l59.5-20.5c3.1-1.1 3.4-4 2.8-5.7l-2.9-8.5c-1.1-3.1-4-3.4-5.7-2.8l-76.7 26.4c-3.1 1.1-3.4 4-2.8 5.7l3 8.5v0.1c-0.1 0.4-0.3 0.8-0.3 1.3v40.5c0 3.6 2.4 9 9 9h72c3.7 0.1 9.1-2.3 9.1-9"></path>
              </svg>
              Reels
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="<?php echo e(url('/')); ?>/movies" class="tab__nav__link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="#ffffff" version="1.1" viewBox="0 0 100 100">
                <path d="m90.7 86.9c0 2.4-1.6 3-3 3h-72c-2.4 0-3-1.7-3-3v-27h78v27zm-5.2-42-4.5 12h-12l4.5-12h12zm-22.6 0-4.5 12h-12l4.5-12h12zm-22.5 0-4.5 12h-12l4.5-12h12zm-12.4-5.5-8.2-9.9 11.4-3.9 8.2 9.9-11.4 3.9zm13.1-17.3 11.4-3.9 8.2 9.9-11.5 3.9-8.1-9.9zm21.3-7.3 11.4-3.9 8.2 9.9-11.4 3.9-8.2-9.9zm-44.8 24.4c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2-4.2-1.9-4.2-4.2 1.8-4.2 4.2-4.2m79.1 47.7v-40.5c0-1.8-1.2-4.5-4.5-4.5h-62.5l59.5-20.5c3.1-1.1 3.4-4 2.8-5.7l-2.9-8.5c-1.1-3.1-4-3.4-5.7-2.8l-76.7 26.4c-3.1 1.1-3.4 4-2.8 5.7l3 8.5v0.1c-0.1 0.4-0.3 0.8-0.3 1.3v40.5c0 3.6 2.4 9 9 9h72c3.7 0.1 9.1-2.3 9.1-9"></path>
              </svg>
              Movies
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="<?php echo e(url('/')); ?>/series" class="tab__nav__link">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffffff" width="24px" height="24px">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27-7.38 5.74zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16z"></path>
              </svg>
              Series
            </a>
          </li>
          <li class="tab__nav__item">
            <a href="<?php echo e(url('/')); ?>/live-tv" class="tab__nav__link">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24px" viewBox="0 0 24 24" width="24px">
                <path d="M0 0h24v24H0V0z" fill="none" class="stroke-none"></path>
                <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"></path>
              </svg>
              Shows
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- tabnavbar ends -->
    </footer>
    <!-- footer ends --><?php /**PATH /home/netskytv/public_html/resources/views/_particles/footer.blade.php ENDPATH**/ ?>