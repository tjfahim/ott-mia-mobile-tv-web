
 

<?php if($sports_info->seo_title): ?>
    <?php $__env->startSection('head_title', stripslashes($sports_info->seo_title).' | '.getcong('site_name')); ?>
<?php else: ?>
    <?php $__env->startSection('head_title', stripslashes($sports_info->video_title).' | '.getcong('site_name') ); ?>
<?php endif; ?>

<?php if($sports_info->seo_description): ?>
    <?php $__env->startSection('head_description', stripslashes($sports_info->seo_description)); ?>
<?php else: ?>
    <?php $__env->startSection('head_description', Str::limit(stripslashes($sports_info->video_description),160)); ?>
<?php endif; ?>

<?php if($sports_info->seo_keyword): ?>
    <?php $__env->startSection('head_keywords', stripslashes($sports_info->seo_keyword)); ?> 
<?php endif; ?>


<?php $__env->startSection('head_image', URL::to('upload/source/'.$sports_info->video_image) ); ?>

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
            <h2 class="single__title"><?php echo e(stripslashes($sports_info->video_title)); ?></h2>
            <!-- <div class="tag">NR</div> -->
        </div>
    </div>
    <div class="single__body mb-5">
        <div class="wrapper">
            <div class="mb-4">
               
               <main>
                        
                        <?php if($sports_info->video_type=="Embed"): ?>
                         
                          
                        
                        <?php elseif($sports_info->video_type=="HLS"): ?>
                            
                            <div id="container">                   
                            <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="<?php echo e(URL::to('upload/source/'.$sports_info->video_image)); ?>" data-setup="{}" <?php if(get_player_cong('autoplay')=="true"): ?>autoplay="true"<?php endif; ?>>
                                
                                <!-- video source -->
                                <source src="<?php echo e($sports_info->video_url); ?>" type="application/x-mpegURL" />  
                                <?php if($sports_info->subtitle_on_off): ?>
                                <!-- video subtitle -->
                                <?php if($sports_info->subtitle_url1): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url1); ?>"   label="<?php echo e($sports_info->subtitle_language1?$sports_info->subtitle_language1:'English'); ?>" default>     
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url2): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url2); ?>"   label="<?php echo e($sports_info->subtitle_language2?$sports_info->subtitle_language2:'English'); ?>">     
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url3): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url3); ?>"    label="<?php echo e($sports_info->subtitle_language3?$sports_info->subtitle_language3:'English'); ?>">        
                                <?php endif; ?>  
                                <?php endif; ?>
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                        </div>

                        <?php elseif($sports_info->video_type=="DASH"): ?>

                        <div id="container">                   
                            <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="<?php echo e(URL::to('upload/source/'.$sports_info->video_image)); ?>" data-setup="{}" <?php if(get_player_cong('autoplay')=="true"): ?>autoplay="true"<?php endif; ?>>
                                
                                <!-- video source -->
                                <source src="<?php echo e($sports_info->video_url); ?>" type="application/dash+xml" />  
                                <?php if($sports_info->subtitle_on_off): ?>
                                <!-- video subtitle -->
                                <?php if($sports_info->subtitle_url1): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url1); ?>"   label="<?php echo e($sports_info->subtitle_language1?$sports_info->subtitle_language1:'English'); ?>" default>     
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url2): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url2); ?>"   label="<?php echo e($sports_info->subtitle_language2?$sports_info->subtitle_language2:''); ?>">        
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url3): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url3); ?>"    label="<?php echo e($sports_info->subtitle_language3?$sports_info->subtitle_language3:''); ?>">       
                                <?php endif; ?>  
                                <?php endif; ?>
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                        </div>

                        <?php elseif($sports_info->video_type=="URL"): ?>
                          <div id="container">                   
                            <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline width="640" height="450" poster="<?php echo e(URL::to('upload/source/'.$sports_info->video_image)); ?>" data-setup="{}" <?php if(get_player_cong('autoplay')=="true"): ?>autoplay="true"<?php endif; ?>>
                                
                                <!-- video source -->
                                <source src="<?php echo e($sports_info->video_url); ?>" type="video/mp4" label='Auto' res='360' default/>  

                                <?php if($sports_info->video_quality): ?>        
                                <?php if($sports_info->video_url_480): ?>
                                <source src="<?php echo e($sports_info->video_url_480); ?>" type='video/mp4' label='480P' res='480'/>
                                <?php endif; ?>  
                                
                                <?php if($sports_info->video_url_720): ?>
                                <source src="<?php echo e($sports_info->video_url_720); ?>" type='video/mp4' label='720P' res='720'/>                                 
                                <?php endif; ?>

                                <?php if($sports_info->video_url_1080): ?>
                                <source src="<?php echo e($sports_info->video_url_1080); ?>" type='video/mp4' label='1080P' res='1080'/>                        
                                <?php endif; ?>  
                                <?php endif; ?>
                                
                                <?php if($sports_info->subtitle_on_off): ?>
                                <!-- video subtitle -->
                                <?php if($sports_info->subtitle_url1): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url1); ?>"   label="<?php echo e($sports_info->subtitle_language1?$sports_info->subtitle_language1:'English'); ?>" default>     
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url2): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url2); ?>"   label="<?php echo e($sports_info->subtitle_language2?$sports_info->subtitle_language2:''); ?>">        
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url3): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url3); ?>"    label="<?php echo e($sports_info->subtitle_language3?$sports_info->subtitle_language3:''); ?>">       
                                <?php endif; ?>      
                                <?php endif; ?>       
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                            
                        </div>                
                        <?php else: ?>
                        <div id="container">
                          <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline width="640" height="450" poster="<?php echo e(URL::to('upload/source/'.$sports_info->video_image)); ?>" data-setup="{}" <?php if(get_player_cong('autoplay')=="true"): ?>autoplay="true"<?php endif; ?>>
                            
                            <!-- video source -->                      
                            <source src="<?php echo e(URL::to('upload/source/'.$sports_info->video_url)); ?>" type="video/mp4" label='Auto' res='360' default/> 

                            <?php if($sports_info->video_quality): ?>
                            <?php if($sports_info->video_url_480): ?>
                            <source src="<?php echo e(URL::to('upload/source/'.$sports_info->video_url_480)); ?>" type='video/mp4' label='480P' res='480'/>
                            <?php endif; ?>  
                                
                            <?php if($sports_info->video_url_720): ?>    
                            <source src="<?php echo e(URL::to('upload/source/'.$sports_info->video_url_720)); ?>" type='video/mp4' label='720P' res='720'/>
                            <?php endif; ?>  
                                
                            <?php if($sports_info->video_url_1080): ?>   
                            <source src="<?php echo e(URL::to('upload/source/'.$sports_info->video_url_1080)); ?>" type='video/mp4' label='1080P' res='1080'/>   
                            <?php endif; ?>    
                            <?php endif; ?>    
                            
                            <?php if($sports_info->subtitle_on_off): ?> 
                            <!-- video subtitle -->
                                <?php if($sports_info->subtitle_url1): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url1); ?>"  label="<?php echo e($sports_info->subtitle_language1?$sports_info->subtitle_language1:'English'); ?>" default>      
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url2): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url2); ?>" label="<?php echo e($sports_info->subtitle_language2?$sports_info->subtitle_language2:''); ?>">      
                                <?php endif; ?>
                                <?php if($sports_info->subtitle_url3): ?>
                                    <track kind="captions" src="<?php echo e($sports_info->subtitle_url3); ?>"  label="<?php echo e($sports_info->subtitle_language3?$sports_info->subtitle_language3:''); ?>">     
                                <?php endif; ?>  
                            <?php endif; ?>        
                                                 
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
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
                                    <img src="<?php echo e(URL::to('upload/source/'.$sports_info->video_image)); ?>" width="100%" height="auto">
                                    <!-- <i class="fa-solid fa-play play__btn"></i> -->
                                </div>
                                <!-- <button class="show__trigger">
                                    Play
                                </button> -->
                            </div>
                            <div class="col-sm-8">
                                <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                                <h2 class="part__title"> 
                                    <?php echo e(stripslashes($sports_info->video_title)); ?>

                                </h2>
                                <p class="part__desc">
                                    
                                    <?php echo stripslashes($sports_info->video_description); ?>



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
                            <a href="https://twitter.com/intent/tweet?text=<?php echo e($sports_info->video_title); ?>&amp;url=<?php echo e(url()->current()); ?>" class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(url()->current()); ?>&media=<?php echo e(URL::to('upload/source/'.$sports_info->video_image)); ?>&description=<?php echo e($sports_info->video_title); ?>" class="icon">
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

                <?php $__currentLoopData = $latest_sports_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_sports_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="splide__slide">

                    <a href="<?php echo e(URL::to('sports/'.$latest_sports_data->video_slug.'/'.$latest_sports_data->id)); ?>" class="splide__overlay"></a>


                    <img src="<?php echo e(URL::to('upload/source/'.$latest_sports_data->video_image)); ?>" alt="Movie Thumb" class="splide__img" />
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



<?php if($sports_info->video_type!="Embed"): ?>

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

            video_id: 'sports<?php echo e($sports_info->id); ?>',
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

        player.chromecast({ metatitle: '<?php echo e(stripslashes($sports_info->video_title)); ?>', metasubtitle: 'Release : <?php echo e(isset($sports_info->date) ? date('M d Y',$sports_info->date) : null); ?>' }); 
        
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
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/pages/sports_single.blade.php ENDPATH**/ ?>