<!-- header starts -->
<header id="header" class="header">
  <nav id="navbar" class="navbar">
    <button type="button" class="menu__btn">
      <i class="fa-solid fa-bars"></i>
    </button>
    <button type="button" class="menu__btn__close">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <a href="<?php echo e(URL::to('/')); ?>" class="logo">
      <img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="Brand Logo" width="76" class="brand__logo" />
    </a>
    <!-- <a href="./viewplans.html" class="subscribe__btn_sm">
      সাবস্ক্রাইব করুন
    </a> -->
    <ul class="navbar__nav">
     
      <li class="nav__item dropdown">
        <a href="<?php echo e(URL::to('series')); ?>" class="nav__link dropdown__trigger"><?php echo e(trans('words.tv_shows_text')); ?></a>
        <ul class="dropdown__menu">
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('language/series')); ?>" class="dropdown__link"><?php echo e(trans('words.language_text')); ?></a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('genres/series')); ?>" class="dropdown__link"><?php echo e(trans('words.genres_text')); ?></a>
          </li>
        </ul>
      </li>
      <li class="nav__item ">
        <a href="<?php echo e(route('reels')); ?>" class="nav__link"><?php echo e(trans('words.reals')); ?></a>

      </li>
      <li class="nav__item dropdown">
        <a href="<?php echo e(URL::to('movies')); ?>" class="nav__link dropdown__trigger"><?php echo e(trans('words.movies_text')); ?></a>
        <ul class="dropdown__menu">
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('language/movies')); ?>" class="dropdown__link"><?php echo e(trans('words.language_text')); ?></a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('genres/movies')); ?>" class="dropdown__link"><?php echo e(trans('words.genres_text')); ?></a>
          </li>
        </ul>
      </li>

      <li class="nav__item dropdown">
        <a href="<?php echo e(URL::to('sports')); ?>" class="nav__link dropdown__trigger"><?php echo e(trans('words.sports_text')); ?></a>
        <ul class="dropdown__menu">
          <?php $__currentLoopData = \App\SportsCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sports_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('sports/'.$sports_cat->category_slug)); ?>" class="dropdown__link"><?php echo e($sports_cat->category_name); ?></a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </li>

      <li class="nav__item dropdown">
        <a href="<?php echo e(URL::to('live-tv')); ?>" class="nav__link dropdown__trigger"><?php echo e(trans('words.live_tv')); ?></a>
        <ul class="dropdown__menu">
          <?php $__currentLoopData = \App\TvCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('live-tv/'.$tv_cat->category_slug)); ?>" class="dropdown__link"><?php echo e($tv_cat->category_name); ?></a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </li>

   


    </ul>
    <ul class="navbar__nav ms-auto d-none d-xl-flex">
      <li class="nav__item">
        <div class="search__icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </li>
      <!--<li class="nav__item dropdown">-->
      <!--  <button type="button" class="translate__btn">-->
      <!--    <img src="<?php echo e(URL::asset('images/en__bn__translate.png')); ?>" alt="translate icon" width="24" />-->
      <!--    <span class="translate__btn__text ms-1">BN</span>-->
      <!--    <i class="fa-solid fa-caret-down"></i>-->
      <!--  </button>-->
      <!--  <ul class="dropdown__menu__sm">-->
      <!--    <li class="dropdown__item">-->
      <!--      <a href="#" class="dropdown__link">English</a>-->
      <!--    </li>-->
      <!--    <li class="dropdown__item">-->
      <!--      <a href="#" class="dropdown__link">Bengali</a>-->
      <!--    </li>-->
      <!--  </ul>-->
      <!--</li>-->
      <!-- <li class="nav__item">
        <a href="./viewplans.html" role="button" class="nav__btn subscribe__btn">
          সাবস্ক্রাইব করুন
        </a>
      </li> -->



      <?php if(Auth::check()): ?>

      <li class="nav__item dropdown">
        <button type="button" class="translate__btn">
          <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
          <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img" style="height: 25px;width: 25px;">
          <?php else: ?>
          <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img" style="height: 25px;width: 25px;">
          <?php endif; ?>
          <span class="translate__btn__text ms-1"> Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></span>
          <i class="fa-solid fa-caret-down"></i>
        </button>
        <ul class="dropdown__menu__sm">
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('dashboard')); ?>" class="dropdown__link"><?php echo e(trans('words.dashboard_text')); ?></a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('profile')); ?>" class="dropdown__link"><?php echo e(trans('words.profile')); ?></a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('logout')); ?>" class="dropdown__link"><?php echo e(trans('words.logout')); ?></a>
          </li>
        </ul>
      </li>
      <?php else: ?>

      <li class="nav__item">
        <a href="<?php echo e(URL::to('login')); ?>" style="text-transform: uppercase;"> <button type="button" class="nav__btn login__btn">
            <?php echo e(trans('words.login_text')); ?>

          </button>
        </a>
      </li>

      <?php endif; ?>

    </ul>
    <button type="button" class="search__btn">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
  </nav>
</header>
<!-- header ends -->




<!-- header small starts -->
<header id="header__sm" class="header__sm">
  <nav id="navbar__sm" class="navbar__sm">
    <a href="<?php echo e(URL::to('/')); ?>" class="logo">
      <img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="Brand Logo" width="76" class="brand__logo" />
    </a>
    <ul class="navbar__nav">

      <li class="nav__item dropdown">
        <div class="nav__link">
          <a href="<?php echo e(URL::to('series')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="#ffffff" version="1.1" viewBox="0 0 100 100">
              <path d="m90.7 86.9c0 2.4-1.6 3-3 3h-72c-2.4 0-3-1.7-3-3v-27h78v27zm-5.2-42-4.5 12h-12l4.5-12h12zm-22.6 0-4.5 12h-12l4.5-12h12zm-22.5 0-4.5 12h-12l4.5-12h12zm-12.4-5.5-8.2-9.9 11.4-3.9 8.2 9.9-11.4 3.9zm13.1-17.3 11.4-3.9 8.2 9.9-11.5 3.9-8.1-9.9zm21.3-7.3 11.4-3.9 8.2 9.9-11.4 3.9-8.2-9.9zm-44.8 24.4c2.3 0 4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2-4.2-1.9-4.2-4.2 1.8-4.2 4.2-4.2m79.1 47.7v-40.5c0-1.8-1.2-4.5-4.5-4.5h-62.5l59.5-20.5c3.1-1.1 3.4-4 2.8-5.7l-2.9-8.5c-1.1-3.1-4-3.4-5.7-2.8l-76.7 26.4c-3.1 1.1-3.4 4-2.8 5.7l3 8.5v0.1c-0.1 0.4-0.3 0.8-0.3 1.3v40.5c0 3.6 2.4 9 9 9h72c3.7 0.1 9.1-2.3 9.1-9"></path>
            </svg>
            <?php echo e(trans('words.tv_shows_text')); ?>

          </a>
          <span class="dropdown__trigger"></span>
        </div>
        <ul class="dropdown__menu__sm">
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('language/series')); ?>" class="dropdown__link"><?php echo e(trans('words.language_text')); ?></a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('genres/series')); ?>" class="dropdown__link"><?php echo e(trans('words.genres_text')); ?></a>
          </li>

        </ul>
      </li>
      <li class="nav__item ">
        <div class="nav__link">
          <a href="<?php echo e(URL::to('reels')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24px" viewBox="0 0 24 24" width="24px">
              <path d="M0 0h24v24H0V0z" fill="none" class="stroke-none"></path>
              <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"></path>
            </svg>
            <?php echo e(trans('words.reals')); ?>

          </a>
          <span class="dropdown__trigger"></span>
        </div>
   
      </li>
      <li class="nav__item dropdown">
        <div class="nav__link">
          <a href="<?php echo e(URL::to('movies')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffffff" width="24px" height="24px">
              <path d="M0 0h24v24H0z" fill="none"></path>
              <path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27-7.38 5.74zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16z"></path>
            </svg>
            <?php echo e(trans('words.movies_text')); ?>

          </a>
          <span class="dropdown__trigger"></span>
        </div>
        <ul class="dropdown__menu__sm">
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('language/movies')); ?>" class="dropdown__link"><?php echo e(trans('words.language_text')); ?></a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('genres/movies')); ?>" class="dropdown__link"><?php echo e(trans('words.genres_text')); ?></a>
          </li>

        </ul>
      </li>
      <li class="nav__item dropdown">
        <div class="nav__link">
          <a href="<?php echo e(URL::to('sports')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24px" viewBox="0 0 24 24" width="24px">
              <path d="M0 0h24v24H0V0z" fill="none" class="stroke-none"></path>
              <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"></path>
            </svg>
            <?php echo e(trans('words.sports_text')); ?>

          </a>
          <span class="dropdown__trigger"></span>
        </div>
        <ul class="dropdown__menu__sm">
          <?php $__currentLoopData = \App\SportsCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sports_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('sports/'.$sports_cat->category_slug)); ?>" class="dropdown__link"><?php echo e($sports_cat->category_name); ?></a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </li>


      <li class="nav__item dropdown">
        <div class="nav__link">
          <a href="<?php echo e(URL::to('live-tv')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24px" viewBox="0 0 24 24" width="24px">
              <path d="M0 0h24v24H0V0z" fill="none" class="stroke-none"></path>
              <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"></path>
            </svg>
            <?php echo e(trans('words.live_tv')); ?>

          </a>
          <span class="dropdown__trigger"></span>
        </div>
        <ul class="dropdown__menu__sm">
          <?php $__currentLoopData = \App\TvCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="dropdown__item">
            <a href="<?php echo e(URL::to('live-tv/'.$tv_cat->category_slug)); ?>" class="dropdown__link"><?php echo e($tv_cat->category_name); ?></a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </li>
     

      <!-- <li class="nav__item">
        <a href="./redeemCode.html" class="nav__link">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 24 24" width="24px" height="24px">
            <path d="M 18 3 v 2 h -2 V 3 H 8 v 2 H 6 V 3 H 4 v 18 h 2 v -2 h 2 v 2 h 8 v -2 h 2 v 2 h 2 V 3 h -2 Z M 8 17 H 6 v -2 h 2 v 2 Z m 0 -4 H 6 v -2 h 2 v 2 Z m 0 -4 H 6 V 7 h 2 v 2 Z m 10 8 h -2 v -2 h 2 v 2 Z m 0 -4 h -2 v -2 h 2 v 2 Z m 0 -4 h -2 V 7 h 2 v 2 Z"></path>
            <path fill="none" d="M 0 0 h 24 v 24 H 0 Z"></path>
          </svg>
          রিডিম কোড
        </a>
      </li> -->
      <!-- <li class="nav__item dropdown">
        <button type="button" class="translate__btn">
          <img src="<?php echo e(URL::asset('images/en__bn__translate.png')); ?>" alt="translate icon" width="24" />
          <span class="translate__btn__text ms-1">BN</span>
          <i class="fa-solid fa-caret-down"></i>
        </button>
        <ul class="dropdown__menu__sm">
          <li class="dropdown__item">
            <a href="#" class="dropdown__link">English</a>
          </li>
          <li class="dropdown__item">
            <a href="#" class="dropdown__link">Bengali</a>
          </li>
        </ul>
      </li> -->
    </ul>

    <ul class="navbar__nav navbar__nav__bottom">


      <li class="nav__item">
        <a href="<?php echo e(URL::to('login')); ?>" style="text-transform: uppercase;">
          <button type="button" class="nav__btn login__btn">
            <?php echo e(trans('words.login_text')); ?>

          </button>
        </a>
      </li>


      <!-- <li class="nav__item">
        <a href="./viewplans.html" role="button" class="nav__btn subscribe__btn">
          সাবস্ক্রাইব করুন
        </a>
      </li> -->


    </ul>
  </nav>
  <div class="filter__box">
    <a href="<?php echo e(URL::to('/')); ?>" class="logo">
      <img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="Brand Logo" width="76" class="brand__logo" />
    </a>
    <button type="button" class="filter__btn__close">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <?php echo Form::open(array('url' => 'search','class'=>'mb-5','id'=>'search','role'=>'form','method'=>'get')); ?>

    <div class="input-group">
      <input type="text" name="s" class="form-control" placeholder="<?php echo e(trans('words.search')); ?>" aria-label="Search field" aria-describedby="search__field" id="search__field" />
      <span class="input-group-text input__clear" id="search__field__clear">
        <i class="fa-solid fa-xmark"></i>
      </span>
      <button type="submit" class="input-group-text input__search">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>
    <?php echo Form::close(); ?>

    <!-- <ul class="nav nav-tabs" id="filterTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab__one__tab" data-bs-toggle="tab" data-bs-target="#tab__one" type="button" role="tab" aria-controls="tab__one" aria-selected="true">
          Top Results
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab__two__tab" data-bs-toggle="tab" data-bs-target="#tab__two" type="button" role="tab" aria-controls="tab__two" aria-selected="false">
          Video
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab__three__tab" data-bs-toggle="tab" data-bs-target="#tab__three" type="button" role="tab" aria-controls="tab__three" aria-selected="false">
          Bundle
        </button>
      </li>
    </ul>
    <div class="tab-content" id="filteredTabs">
      <div class="tab-pane fade show active" id="tab__one" role="tabpanel" aria-labelledby="tab__one__tab">
        <ul class="filtered__item__list">
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/tan.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/tan.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/tan.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/tan.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/tan.jpg" alt="Show" />
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="tab__two" role="tabpanel" aria-labelledby="tab__two__tab">
        <ul class="filtered__item__list">
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/prem-puran.jpg" alt="Show" />
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="tab__three" role="tabpanel" aria-labelledby="tab__three__tab">
        <ul class="filtered__item__list">
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
          <li class="filtered__item">
            <a href="#" class="filtered__link">
              <img src="./assets/images/shaticup.jpg" alt="Show" />
            </a>
          </li>
        </ul>
      </div>
    </div> -->
  </div>
</header>
<!-- header small ends --><?php /**PATH C:\xampp\htdocs\ott\resources\views/_particles/header.blade.php ENDPATH**/ ?>