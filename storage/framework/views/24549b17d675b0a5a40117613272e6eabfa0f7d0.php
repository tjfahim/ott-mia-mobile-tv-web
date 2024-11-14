
<?php if($series_info->seo_title): ?>
<?php $__env->startSection('head_title', stripslashes($series_info->seo_title).' | '.getcong('site_name')); ?>
<?php else: ?>
<?php $__env->startSection('head_title', stripslashes($series_info->series_name).' | '.getcong('site_name')); ?>
<?php endif; ?>

<?php if($series_info->seo_description): ?>
<?php $__env->startSection('head_description', stripslashes($series_info->seo_description)); ?>
<?php else: ?>
<?php $__env->startSection('head_description', Str::limit(stripslashes($series_info->series_info),160)); ?>
<?php endif; ?>

<?php if($series_info->seo_keyword): ?>
<?php $__env->startSection('head_keywords', stripslashes($series_info->seo_keyword)); ?>
<?php endif; ?>


<?php $__env->startSection('head_image', URL::to('upload/source/'.$series_info->series_poster)); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>


<section class="single__movie padding-top-70 single__page">
    <div class="single__header">
        <div class="wrapper">

            <h2 class="single__title"><?php echo e(stripslashes($series_info->series_name)); ?></h2>
            <div class="time__duration">
                <span class="count"><?php echo e(\App\Series::getSeriesTotalSeason($series_info->id)); ?> Seasons</span>
            </div>
            |
            <div class="type"><?php echo e(\App\Series::getSeriesTotalEpisodes($series_info->id)); ?> Episodes</div>|

            <div class="type"><?php echo e(\App\Language::getLanguageInfo($series_info->series_lang_id,'language_name')); ?></div>|

            <?php $__currentLoopData = explode(',',$series_info->series_genres); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genres_ids): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="type"><?php echo e(App\Genres::getGenresInfo($genres_ids,'genre_name')); ?></div>|

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($series_info->imdb_rating): ?>
            <div class="type">IMDb Rating <?php echo e($series_info->imdb_rating); ?></div>
            <?php endif; ?>
            <!-- <div class="tag">NR</div> -->
        </div>
    </div>
    <div class="single__body mb-5">
        <div class="wrapper">
            <div class="mb-4">
                
                <img src="<?php echo e(URL::to('upload/source/'.$series_info->series_poster)); ?>" alt="<?php echo e($series_info->series_name); ?>" width="100%" height="auto">

            </div>
            <div class="video__desc">
                <div class="row">
                    <div class="col-lg-7 order-1 order-lg-0">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                                <h2 class="part__title"> <?php echo e(stripslashes($series_info->series_name)); ?></h2>
                                <p class="part__desc">
                                    <?php echo e(Str::limit($series_info->series_info,180)); ?>

                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="icons">
                            <!--             
            <a href="#" class="icon">
                <i class="fa-solid fa-thumbs-up"></i>
            </a>
            <a href="#" class="icon">
                <i class="fa-solid fa-thumbs-down"></i>
            </a> -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" class="icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=<?php echo e($series_info->video_title); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.$series_info->video_image)); ?>&description=<?php echo e($series_info->video_title); ?>" class="icon">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                            <a href="whatsapp://send?text=<?php echo e(url()->current()); ?>" data-action="share/whatsapp/share" class="icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="splide__shows single__splider">
    <h2 class="splide__heading text-uppercase"><?php echo e(trans('words.seasons_text')); ?></h2>
    <div class="splide" id="recommendedShows">
        <div class="splide__track">
            <ul class="splide__list">

                <?php $__currentLoopData = $season_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="splide__slide">

                    <a href="<?php echo e(URL::to('series/'.$series_info->series_slug.'/seasons/'.$season_data->season_slug.'/'.$season_data->id)); ?>" class="splide__overlay"></a>
                    <img src="<?php echo e(URL::to('upload/source/'.$season_data->season_poster)); ?>" alt="<?php echo e($season_data->season_name); ?>" class="splide__img" />
                    <div class="show__quality">Premium</div>
                    <button class="wishlist__btn">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    </div>
</section>
<!-- Trending shows ends -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/series_single.blade.php ENDPATH**/ ?>