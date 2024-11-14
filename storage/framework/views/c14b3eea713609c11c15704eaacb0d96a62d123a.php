
 

<?php if($tv_info->seo_title): ?>
    <?php $__env->startSection('head_title', stripslashes($tv_info->seo_title).' | '.getcong('site_name')); ?>
<?php else: ?>
    <?php $__env->startSection('head_title', stripslashes($tv_info->channel_name).' | '.getcong('site_name') ); ?>
<?php endif; ?>

<?php if($tv_info->seo_description): ?>
    <?php $__env->startSection('head_description', stripslashes($tv_info->seo_description)); ?>
<?php else: ?>
    <?php $__env->startSection('head_description', Str::limit(stripslashes($tv_info->channel_description),160)); ?>
<?php endif; ?>

<?php if($tv_info->seo_keyword): ?>
    <?php $__env->startSection('head_keywords', stripslashes($tv_info->seo_keyword)); ?> 
<?php endif; ?>


<?php $__env->startSection('head_image', URL::to('upload/source/'.$tv_info->channel_thumb) ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>
  

<?php if(get_player_cong('player_style')!=""): ?>  
  <link href="<?php echo e(URL::asset('site_assets/videojs_player/css/'.get_player_cong('player_style').'.min.css')); ?>" rel="stylesheet" type="text/css" />    
 <?php else: ?>
  <link href="<?php echo e(URL::asset('site_assets/videojs_player/css/videojs_style1.min.css')); ?>" rel="stylesheet" type="text/css" />
 <?php endif; ?>

 
 <style type="text/css">
   
  .videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
} 

.vjs-pip-control
{
  <?php if(get_player_cong('pip_mode')=="ON"): ?>
  display: block!important;
  <?php else: ?>
  display: none!important;
  <?php endif; ?>
}

 </style> 

<section class="single__movie padding-top-70 single__page">
    <div class="single__header">
        <div class="wrapper">
            <h2 class="single__title"><?php echo e(stripslashes($tv_info->channel_name)); ?></h2>
            <!-- <div class="tag">NR</div> -->
        </div>
    </div>
    <div class="single__body mb-5">
        <div class="wrapper">
            <div class="mb-4">
               
               <main>
                        
                         <?php if($tv_info->channel_url_type=="embed"): ?>

              

            <?php elseif($tv_info->channel_url_type=="hls"): ?>
              
              <div id="container">                   
              <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="<?php echo e(URL::to('upload/source/'.$tv_info->channel_thumb)); ?>" data-setup="{}" <?php if(get_player_cong('autoplay')=="true"): ?>autoplay="true"<?php endif; ?>>
                  
                  <!-- video source -->
                  <?php if(isset($_GET['server']) AND $_GET['server']==2): ?>
                  <source src="<?php echo e($tv_info->channel_url2); ?>" type="application/x-mpegURL" /> 
                  <?php elseif(isset($_GET['server']) AND $_GET['server']==3): ?>
                  <source src="<?php echo e($tv_info->channel_url3); ?>" type="application/x-mpegURL" /> 
                  <?php else: ?>
                  <source src="<?php echo e($tv_info->channel_url); ?>" type="application/x-mpegURL" /> 
                  <?php endif; ?>
                   
                  
                 

                <!-- worning text if needed -->
                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
              </video>
            </div>

            <?php elseif($tv_info->channel_url_type=="dash"): ?>

            <div id="container">                   
              <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="<?php echo e(URL::to('upload/source/'.$tv_info->channel_thumb)); ?>" data-setup="{}" <?php if(get_player_cong('autoplay')=="true"): ?>autoplay="true"<?php endif; ?>>
                  
                  <!-- video source -->
                  <?php if(isset($_GET['server']) AND $_GET['server']==2): ?>
                  <source src="<?php echo e($tv_info->channel_url2); ?>" type="application/dash+xml" /> 
                  <?php elseif(isset($_GET['server']) AND $_GET['server']==3): ?>
                  <source src="<?php echo e($tv_info->channel_url3); ?>" type="application/dash+xml" /> 
                  <?php else: ?>
                  <source src="<?php echo e($tv_info->channel_url); ?>" type="application/dash+xml" /> 
                  <?php endif; ?>
                   
                   
                <!-- worning text if needed -->
                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
              </video>
            </div>  

            <?php else: ?>
                <?php 
                parse_str( parse_url( $tv_info->channel_url, PHP_URL_QUERY ), $my_array_of_vars );

                $youtube_id=$my_array_of_vars['v'];
                ?>
                <div class="videoWrapper">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo e($youtube_id); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>    

            <?php endif; ?>  
                        
                      </main> 

                      

            </div>
            <div class="video__desc">
                <div class="row">
                    <div class="col-lg-7 order-1 order-lg-0">
                        <div class="row">
                            <div class="col-sm-4 mb-4 mb-sm-0">
                                <div class="show__preview">
                                    <img src="<?php echo e(URL::to('upload/source/'.$tv_info->channel_thumb)); ?>" width="100%" height="auto">
                                    <!-- <i class="fa-solid fa-play play__btn"></i> -->
                                </div>
                                <!-- <button class="show__trigger">
                                    Play
                                </button> -->
                            </div>
                            <div class="col-sm-8">
                                <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                                <h2 class="part__title"> 
                                    <?php echo e($tv_info->channel_name); ?>

                                </h2>
                                <p class="part__desc">
                                    
                                    <?php echo stripslashes($tv_info->channel_description); ?>



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
                            <a href="https://twitter.com/intent/tweet?text=<?php echo e($tv_info->channel_name); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.$tv_info->channel_thumb)); ?>&description=<?php echo e($tv_info->channel_name); ?>" class="icon">
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
    <h2 class="splide__heading text-uppercase"><?php echo e(trans('words.you_may_like')); ?></h2>
    <div class="splide" id="recommendedShows">
        <div class="splide__track">
            <ul class="splide__list">

                <?php $__currentLoopData = $related_livetv_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="splide__slide">

                    <a href="<?php echo e(URL::to('live-tv/'.$related_data->channel_slug.'/'.$related_data->id)); ?>" class="splide__overlay"></a>


                    <img src="<?php echo e(URL::to('upload/source/'.$related_data->channel_thumb)); ?>" alt="Movie Thumb" class="splide__img" />
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


<?php if($tv_info->channel_url_type!="embed" AND $tv_info->channel_url_type!="youtube"): ?>

 
<script src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>

<script src="<?php echo e(URL::asset('site_assets/videojs_player/js/videojs.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('site_assets/videojs_player/plugins/videojs.pip.js')); ?>"></script> 
 
<script src="<?php echo e(URL::asset('site_assets/videojs_player/plugins/videojs-chromecast.min.js')); ?>"></script>
  
<script>
        
        var player = videojs('v_player',{techOrder:['chromecast','html5']});

        player.viavi({
            shareMenu: false,

            <?php if(get_player_cong('player_watermark')=="ON"): ?>
            logo: "<?php echo e(get_player_cong('player_logo')? URL::asset('upload/source/'.get_player_cong('player_logo')) : URL::asset('upload/source/'.getcong('site_logo'))); ?>",
            logoposition: '<?php echo e(get_player_cong('player_logo_position')); ?>',
            logourl: '<?php echo e(get_player_cong('player_url')?get_player_cong('player_url'):URL::to('/')); ?>',
            <?php endif; ?>

            video_id: 'tv<?php echo e($tv_info->id); ?>',
            resume: true,
            contextMenu: false,
            <?php if(get_player_cong('rewind_forward')=="ON"): ?>
            buttonRewind: true,
            buttonForward: true,            
            <?php else: ?>
            buttonRewind: false,
            buttonForward: false,
            <?php endif; ?>            
            mousedisplay:true,
            textTrackSettings: false,
            <?php if(get_player_cong('theater_mode')=="ON"): ?>
            theaterButton: true            
            <?php else: ?>
            theaterButton: false
            <?php endif; ?>            

        });

        player.pip();

        player.chromecast({ metatitle: '<?php echo e(stripslashes($tv_info->channel_name)); ?>', metasubtitle: 'Live TV' }); 
        
        <?php if(get_player_cong('player_ad_on_off')=="ON"): ?>           
        player.vroll({src:"<?php echo e(get_player_cong('ad_video_url')); ?>",type:"video/mp4",href:"<?php echo e(get_player_cong('ad_web_url')); ?>",offset:"<?php echo e(get_player_cong('ad_offset')); ?>",skip:"<?php echo e(get_player_cong('ad_skip')); ?>",id:1});
        <?php endif; ?>
          

        player.on('mode',function(event,mode) {
          if(mode=='large'){
            document.querySelector("#left_video_player").style.width='100%';
            document.querySelector("#right_sidebar_hide").style.display='none';
            document.querySelector("#theater_mode_width").style.width='66%';
            
          }else{
            document.querySelector("#left_video_player").style.width='';
            document.querySelector("#right_sidebar_hide").style.display='block';
            document.querySelector("#theater_mode_width").style.width='100%';
          }
        });  
         
    </script>

        
    <!-- hotkeys -->
    <script src="<?php echo e(URL::asset('site_assets/videojs_player/plugins/hotkeys/videojs.hotkeys.min.js')); ?>"></script>
    <script>    
      player.ready(function() {
        this.hotkeys({
            volumeStep: 0.1,
      seekStep: 5,
      alwaysCaptureHotkeys: true
        });
      });

    </script>
    <!-- End hotkeys --> 
 
 <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/livetv_single.blade.php ENDPATH**/ ?>