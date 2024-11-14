@extends('site_app')
 

@if($tv_info->seo_title)
    @section('head_title', stripslashes($tv_info->seo_title).' | '.getcong('site_name'))
@else
    @section('head_title', stripslashes($tv_info->channel_name).' | '.getcong('site_name') )
@endif

@if($tv_info->seo_description)
    @section('head_description', stripslashes($tv_info->seo_description))
@else
    @section('head_description', Str::limit(stripslashes($tv_info->channel_description),160))
@endif

@if($tv_info->seo_keyword)
    @section('head_keywords', stripslashes($tv_info->seo_keyword)) 
@endif


@section('head_image', URL::to('upload/source/'.$tv_info->channel_thumb) )

@section('head_url', Request::url())

@section('content')
  

@if(get_player_cong('player_style')!="")  
  <link href="{{ URL::asset('site_assets/videojs_player/css/'.get_player_cong('player_style').'.min.css') }}" rel="stylesheet" type="text/css" />    
 @else
  <link href="{{ URL::asset('site_assets/videojs_player/css/videojs_style1.min.css') }}" rel="stylesheet" type="text/css" />
 @endif

 
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
  @if(get_player_cong('pip_mode')=="ON")
  display: block!important;
  @else
  display: none!important;
  @endif
}

 </style> 

<section class="single__movie padding-top-70 single__page">
    <div class="single__header">
        <div class="wrapper">
            <h2 class="single__title">{{stripslashes($tv_info->channel_name)}}</h2>
            <!-- <div class="tag">NR</div> -->
        </div>
    </div>
    <div class="single__body mb-5">
        <div class="wrapper">
            <div class="mb-4">
               
               <main>
                        
                         @if($tv_info->channel_url_type=="embed")

              {{-- <div class="videoWrapper">{!! $tv_info->channel_url!!}</div> --}}

            @elseif($tv_info->channel_url_type=="hls")
              
              <div id="container">                   
              <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="{{URL::to('upload/source/'.$tv_info->channel_thumb)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
                  
                  <!-- video source -->
                  @if(isset($_GET['server']) AND $_GET['server']==2)
                  <source src="{{$tv_info->channel_url2}}" type="application/x-mpegURL" /> 
                  @elseif(isset($_GET['server']) AND $_GET['server']==3)
                  <source src="{{$tv_info->channel_url3}}" type="application/x-mpegURL" /> 
                  @else
                  <source src="{{$tv_info->channel_url}}" type="application/x-mpegURL" /> 
                  @endif
                   
                  
                 

                <!-- worning text if needed -->
                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
              </video>
            </div>

            @elseif($tv_info->channel_url_type=="dash")

            <div id="container">                   
              <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="{{URL::to('upload/source/'.$tv_info->channel_thumb)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
                  
                  <!-- video source -->
                  @if(isset($_GET['server']) AND $_GET['server']==2)
                  <source src="{{$tv_info->channel_url2}}" type="application/dash+xml" /> 
                  @elseif(isset($_GET['server']) AND $_GET['server']==3)
                  <source src="{{$tv_info->channel_url3}}" type="application/dash+xml" /> 
                  @else
                  <source src="{{$tv_info->channel_url}}" type="application/dash+xml" /> 
                  @endif
                   
                   
                <!-- worning text if needed -->
                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
              </video>
            </div>  

            @else
                <?php 
                parse_str( parse_url( $tv_info->channel_url, PHP_URL_QUERY ), $my_array_of_vars );

                $youtube_id=$my_array_of_vars['v'];
                ?>
                <div class="videoWrapper">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>    

            @endif  
                        
                      </main> 

                      

            </div>
            <div class="video__desc">
                <div class="row">
                    <div class="col-lg-7 order-1 order-lg-0">
                        <div class="row">
                            <div class="col-sm-4 mb-4 mb-sm-0">
                                <div class="show__preview">
                                    <img src="{{URL::to('upload/source/'.$tv_info->channel_thumb)}}" width="100%" height="auto">
                                    <!-- <i class="fa-solid fa-play play__btn"></i> -->
                                </div>
                                <!-- <button class="show__trigger">
                                    Play
                                </button> -->
                            </div>
                            <div class="col-sm-8">
                                <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                                <h2 class="part__title"> 
                                    {{$tv_info->channel_name}}
                                </h2>
                                <p class="part__desc">
                                    
                                    {!!stripslashes($tv_info->channel_description)!!}


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
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" class="icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{$tv_info->channel_name}}&amp;url={{url()->current()}}" class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.$tv_info->channel_thumb)}}&description={{$tv_info->channel_name}}" class="icon">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                            <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share" class="icon">
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
    <h2 class="splide__heading text-uppercase">{{trans('words.you_may_like')}}</h2>
    <div class="splide" id="recommendedShows">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach($related_livetv_list as $related_data)
                <li class="splide__slide">

                    <a href="{{ URL::to('live-tv/'.$related_data->channel_slug.'/'.$related_data->id) }}" class="splide__overlay"></a>


                    <img src="{{URL::to('upload/source/'.$related_data->channel_thumb)}}" alt="Movie Thumb" class="splide__img" />
                    <div class="show__quality">Premium</div>
                    <button class="wishlist__btn">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</section>
<!-- Trending shows ends -->


@if($tv_info->channel_url_type!="embed" AND $tv_info->channel_url_type!="youtube")

 
<script src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>

<script src="{{ URL::asset('site_assets/videojs_player/js/videojs.min.js') }}"></script>

<script src="{{ URL::asset('site_assets/videojs_player/plugins/videojs.pip.js') }}"></script> 
 
<script src="{{ URL::asset('site_assets/videojs_player/plugins/videojs-chromecast.min.js') }}"></script>
  
<script>
        
        var player = videojs('v_player',{techOrder:['chromecast','html5']});

        player.viavi({
            shareMenu: false,

            @if(get_player_cong('player_watermark')=="ON")
            logo: "{{ get_player_cong('player_logo')? URL::asset('upload/source/'.get_player_cong('player_logo')) : URL::asset('upload/source/'.getcong('site_logo')) }}",
            logoposition: '{{get_player_cong('player_logo_position')}}',
            logourl: '{{ get_player_cong('player_url')?get_player_cong('player_url'):URL::to('/') }}',
            @endif

            video_id: 'tv{{$tv_info->id}}',
            resume: true,
            contextMenu: false,
            @if(get_player_cong('rewind_forward')=="ON")
            buttonRewind: true,
            buttonForward: true,            
            @else
            buttonRewind: false,
            buttonForward: false,
            @endif            
            mousedisplay:true,
            textTrackSettings: false,
            @if(get_player_cong('theater_mode')=="ON")
            theaterButton: true            
            @else
            theaterButton: false
            @endif            

        });

        player.pip();

        player.chromecast({ metatitle: '{{stripslashes($tv_info->channel_name)}}', metasubtitle: 'Live TV' }); 
        
        @if(get_player_cong('player_ad_on_off')=="ON")           
        player.vroll({src:"{{get_player_cong('ad_video_url')}}",type:"video/mp4",href:"{{get_player_cong('ad_web_url')}}",offset:"{{get_player_cong('ad_offset')}}",skip:"{{get_player_cong('ad_skip')}}",id:1});
        @endif
          

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
    <script src="{{ URL::asset('site_assets/videojs_player/plugins/hotkeys/videojs.hotkeys.min.js') }}"></script>
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
 
 @endif

@endsection