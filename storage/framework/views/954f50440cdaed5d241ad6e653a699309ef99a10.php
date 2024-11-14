<?php $__env->startSection('head_title', getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
<!-- Trending shows starts -->


<section class="splide__fluid">
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="heroSplide">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="heroSplide-track" aria-label="Previous slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="heroSplide-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="heroSplide-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="heroSplide-list" style="transform: translateX(-9443px);">
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="splide__slide is-next" id="heroSplide-slide<?php echo e($slider_data->id); ?>" style="width: calc(100%); height: 600px;" aria-hidden="true">
                    <a href="#" class="splide__overlay" tabindex="-1"></a>
                    <img src="<?php echo e(URL::to('upload/source/'.$slider_data->slider_image)); ?>" data-small-src="<?php echo e(URL::to('upload/source/'.$slider_data->slider_image)); ?>" alt="Slide" class="splide__img">
                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title"><?php echo e(stripslashes($slider_data->slider_title)); ?></h2>
                        </div>
                        <!-- <div class="splide__content">
                            <span class="type">ডার্ক কমেডি</span>
                            |
                            <span class="tag">NR</span>
                            |
                            <span class="duration">99 মিনিট</span>
                        </div> -->
                        <div class="splide__footer">
                            <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($slider_data->slider_post_id,'video_slug').'/'.$slider_data->slider_post_id)); ?>" class="cta-btn watch-btn" tabindex="-1">Play</a>
                        </div>
                        <!-- <div class="splide__icons">
                            <i class="fa-solid fa-share-nodes share-icon"></i>
                            <ul class="social__icons">
                                <li>
                                    <a href="#" class="icon" tabindex="-1">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon" tabindex="-1">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon" tabindex="-1">
                                        <i class="fa-regular fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
        <ul class="splide__pagination">
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><button class="splide__pagination__page" type="button" aria-controls="heroSplide-slide<?php echo e($slider_data->id); ?>" aria-label="Go to next"></button></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>
<!-- Trending shows ends -->









<section class="splide__shows">
    <h2 class="splide__heading"><?php echo e(trans('words.latest_shows')); ?></h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows-list" style="transform: translateX(-2626px);">

                <?php $__currentLoopData = explode(",",$home_sections->section2_latest_series); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(App\Series::getSeriesInfo($latest_series,'status')==1): ?>

                <li class="splide__slide splide__slide--clone0<?php echo e(App\Series::getSeriesInfo($latest_series,'id')); ?> is-active" id="trendingShows-clone<?php echo e(App\Series::getSeriesInfo($latest_series,'id')); ?>" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>" class="splide__overlay" tabindex="-1"></a>
                    <img src="<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))); ?>" alt="Slide" class="splide__img">

                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title"><?php echo e(Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25)); ?></h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>" class="cta-btn watch-btn" tabindex="-1">Watch</a>

                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(App\Series::getSeriesInfo($latest_series,'series_name')); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))); ?>&description=<?php echo e(App\Series::getSeriesInfo($latest_series,'series_name')); ?>" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>



<section class="splide__shows">
    <h2 class="splide__heading"><?php echo e(trans('words.live_now')); ?></h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="livetv">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="livetv-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="livetv-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="livetv-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="livetv-list" style="transform: translateX(-2626px);">

                <?php $__currentLoopData = explode(",",$home_sections->section_live_now); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $live_now): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(App\LiveTV::getLiveTvInfo($live_now,'status')==1): ?>

                <li class="splide__slide splide__slide--clone0<?php echo e(App\LiveTV::getLiveTvInfo($live_now,'id')); ?> is-active" id="livetv-clone<?php echo e(App\LiveTV::getLiveTvInfo($live_now,'id')); ?>" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="<?php echo e(URL::to('live-tv/'.App\LiveTV::getLiveTvInfo($live_now,'channel_slug').'/'.App\LiveTV::getLiveTvInfo($live_now,'id'))); ?>" class="splide__overlay" tabindex="-1"></a>
                    <img src="<?php echo e(URL::to('upload/source/'.App\LiveTV::getLiveTvInfo($live_now,'channel_thumb'))); ?>" alt="Slide" class="splide__img">

                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title"><?php echo e(Str::limit(stripslashes(App\LiveTV::getLiveTvInfo($live_now,'series_name')),25)); ?></h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="<?php echo e(URL::to('series/'.App\LiveTV::getLiveTvInfo($live_now,'series_slug').'/'.App\LiveTV::getLiveTvInfo($live_now,'id'))); ?>" class="cta-btn watch-btn" tabindex="-1">Watch</a>

                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(App\LiveTV::getLiveTvInfo($live_now,'series_name')); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.App\LiveTV::getLiveTvInfo($live_now,'series_poster'))); ?>&description=<?php echo e(App\LiveTV::getLiveTvInfo($live_now,'series_name')); ?>" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>

<section class="splide__shows">
    <h2 class="splide__heading"><?php echo e(trans('words.latest_movies')); ?></h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows2">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows2-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows2-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows2-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows2-list" style="transform: translateX(-2626px);">

                <?php $__currentLoopData = explode(",",$home_sections->section1_latest_movie); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(App\Movies::getMoviesInfo($latest_movie,'status')==1): ?>
                <li class="splide__slide splide__slide--clone<?php echo e(App\Movies::getMoviesInfo($latest_movie,'id')); ?> is-active" id="superHitShows-clone<?php echo e(App\Movies::getMoviesInfo($latest_movie,'id')); ?>" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id'))); ?>" class="splide__overlay" tabindex="-1"></a>
                    <img src="<?php echo e(URL::to('upload/source/'.App\Movies::getMoviesInfo($latest_movie,'video_image_thumb'))); ?>" alt="Slide" class="splide__img">
                    <?php if(App\Movies::getMoviesInfo($latest_movie,'video_access')=='Paid'): ?>
                    <div class="show__quality">Premium</div>
                    <?php endif; ?>
                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title"><?php echo e(Str::limit(stripslashes(App\Movies::getMoviesInfo($latest_movie,'video_title')),12)); ?></h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id'))); ?>" class="cta-btn watch-btn" tabindex="-1">Watch</a>
                                <a href="#" class="cta-btn trailler-btn" tabindex="-1"><i class="fa fa-clock-o"></i> <?php echo e(App\Movies::getMoviesInfo($latest_movie,'duration')); ?></a>
                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(App\Movies::getMoviesInfo($latest_movie,'video_title')); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.App\Movies::getMoviesInfo($latest_movie,'video_image_thumb'))); ?>&description=<?php echo e(App\Movies::getMoviesInfo($latest_movie,'video_title')); ?>" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </ul>
        </div>
    </div>
</section>



<section class="splide__shows">
    <h2 class="splide__heading"><?php echo e(trans('words.popular_shows')); ?></h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows3">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows3-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows3-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows3-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows3-list" style="transform: translateX(-2626px);">
                <?php $__currentLoopData = explode(",",$home_sections->section3_popular_series); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(App\Series::getSeriesInfo($popular_series,'status')==1): ?>

                <li class="splide__slide splide__slide--clone<?php echo e(App\Series::getSeriesInfo($latest_series,'id')); ?> is-active" id="trendingShows3-clone<?php echo e(App\Series::getSeriesInfo($latest_series,'id')); ?>" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>" class="splide__overlay" tabindex="-1"></a>
                    <img src="<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($popular_series,'series_poster'))); ?>" alt="Slide" class="splide__img">

                    <div class="splide__inner">
                        <div class="splide__header">
                            <h2 class="title"><?php echo e(Str::limit(stripslashes(App\Series::getSeriesInfo($popular_series,'series_name')),25)); ?></h2>
                        </div>
                        <div class="bottom">
                            <div class="splide__footer">
                                <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>" class="cta-btn watch-btn" tabindex="-1">Watch</a>

                            </div>
                            <div class="splide__icons">
                                <i class="fa-solid fa-share-nodes share-icon"></i>
                                <ul class="social__icons">

                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(App\Series::getSeriesInfo($latest_series,'series_name')); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))); ?>&description=<?php echo e(App\Series::getSeriesInfo($latest_series,'series_name')); ?>" class="icon">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>


<section class="splide__shows">
    <h2 class="splide__heading"><?php echo e(trans('words.popular_movies')); ?></h2>
    <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="trendingShows4">
        <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="trendingShows4-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="trendingShows4-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                    <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg></button></div>
        <div class="splide__track" id="trendingShows4-track" style="padding-left: 0px; padding-right: 0px;">
            <ul class="splide__list" id="trendingShows4-list" style="transform: translateX(-2626px);">

                <?php $__currentLoopData = explode(",",$home_sections->section3_popular_movie); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(App\Movies::getMoviesInfo($popular_movie,'status')==1): ?>

                <li class="splide__slide splide__slide--clone<?php echo e(App\Movies::getMoviesInfo($popular_movie,'id')); ?> is-active" id="trendingShows4-clone<?php echo e(App\Movies::getMoviesInfo($popular_movie,'id')); ?>" style="margin-right: 0.75rem; width: calc(((100% + 0.75rem) / 4) - 0.75rem);" aria-hidden="true">
                    <?php if(Auth::check()): ?>
                    <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id'))); ?>" class="splide__overlay" tabindex="-1"></a>
                    <?php else: ?>
                    <?php if(App\Movies::getMoviesInfo($popular_movie,'video_access')=='Paid'): ?>
                    <a class="show__link" class="icon" href="Javascript::void();" data-bs-toggle="modal" data-bs-target="#loginRegiModal">
                        <?php else: ?>
                        <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id'))); ?>" class="splide__overlay" tabindex="-1"></a>
                        <?php endif; ?>
                        <?php endif; ?>
                        <img src="<?php echo e(URL::to('upload/source/'.App\Movies::getMoviesInfo($popular_movie,'video_image_thumb'))); ?>" alt="Slide" class="splide__img">

                        <div class="splide__inner">
                            <div class="splide__header">
                                <h2 class="title"><?php echo e(Str::limit(stripslashes(App\Movies::getMoviesInfo($popular_movie,'video_title')),12)); ?></h2>
                            </div>
                            <div class="bottom">
                                <div class="splide__footer">
                                    <?php if(Auth::check()): ?>
                                    <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id'))); ?>" class="cta-btn watch-btn" tabindex="-1">Watch</a>
                                    <?php else: ?>
                                    <?php if(App\Movies::getMoviesInfo($popular_movie,'video_access')=='Paid'): ?>
                                    <a class="show__link" class="icon" href="Javascript::void();" data-bs-toggle="modal" data-bs-target="#loginRegiModal">
                                        <?php else: ?>
                                        <a href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id'))); ?>" class="cta-btn watch-btn" tabindex="-1">Watch</a>
                                        <?php endif; ?>
                                        <?php endif; ?>




                                </div>
                                <div class="splide__icons">
                                    <i class="fa-solid fa-share-nodes share-icon"></i>
                                    <ul class="social__icons">

                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" class="icon">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?text=<?php echo e(App\Movies::getMoviesInfo($popular_movie,'video_title')); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.App\Movies::getMoviesInfo($popular_movie,'video_image_thumb'))); ?>&description=<?php echo e(App\Movies::getMoviesInfo($popular_movie,'video_title')); ?>" class="icon">
                                                <i class="fa-brands fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share" class="icon">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                </li>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    </div>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ott\resources\views/pages/index.blade.php ENDPATH**/ ?>