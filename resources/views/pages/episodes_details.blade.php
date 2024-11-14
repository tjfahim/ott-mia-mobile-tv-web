@extends('site_app') 

@if($episode_info->seo_title)
  @section('head_title', stripslashes($episode_info->seo_title).' | '.getcong('site_name'))
@else
  @section('head_title', $series_name.' '.$season_name.' '.stripslashes($episode_info->video_title).' | '.getcong('site_name'))
@endif

@if($episode_info->seo_description)
  @section('head_description', stripslashes($episode_info->seo_description))
@else
  @section('head_description', Str::limit(stripslashes($episode_info->video_description),160))
@endif

@if($episode_info->seo_keyword)
  @section('head_keywords', stripslashes($episode_info->seo_keyword)) 
@endif

@section('head_image', URL::to('upload/source/'.$episode_info->video_image))

@section('head_url', Request::url())

@section('content')

<script src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>

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

            <h2 class="single__title">{{stripslashes($series_name)}}</h2>
            <div class="time__duration">
                <span class="count">{{stripslashes($episode_info->video_title)}}</span>
            </div>
            |
            <div class="type">{{App\Season::getSeasonInfo($episode_info->episode_season_id,'season_name')}}</div>|

            @if($episode_info->imdb_rating)
            <div class="type">IMDb Rating {{$episode_info->imdb_rating}}</div>
            @endif
            <!-- <div class="tag">NR</div> -->
        </div>
    </div>
    <div class="single__body mb-5">
        <div class="wrapper">
            <div class="mb-4">
                
                <main>
                        
                        @if($episode_info->video_type=="Embed")
                           
                          {{-- <div class="videoWrapper">{!! $episode_info->video_url!!}</div> --}}

                        @elseif($episode_info->video_type=="HLS")
                            
                            <div id="container">                   
                            <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="{{URL::to('upload/source/'.$episode_info->video_image)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
                                
                                <!-- video source -->
                                <source src="{{$episode_info->video_url}}" type="application/x-mpegURL" />  
                                @if($episode_info->subtitle_on_off)
                                    <!-- video subtitle -->
                                    @if($episode_info->subtitle_url1)
                                        <track kind="captions" src="{{$episode_info->subtitle_url1}}"   label="{{$episode_info->subtitle_language1?$episode_info->subtitle_language1:'English'}}" default>      
                                    @endif
                                    @if($episode_info->subtitle_url2)
                                        <track kind="captions" src="{{$episode_info->subtitle_url2}}"   label="{{$episode_info->subtitle_language2?$episode_info->subtitle_language2:'English'}}">      
                                    @endif
                                    @if($episode_info->subtitle_url3)
                                        <track kind="captions" src="{{$episode_info->subtitle_url3}}"    label="{{$episode_info->subtitle_language3?$episode_info->subtitle_language3:'English'}}">     
                                    @endif  
                                @endif
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                        </div>

                        @elseif($episode_info->video_type=="DASH")

                        <div id="container">                   
                            <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline crossorigin="anonymous" width="640" height="450" poster="{{URL::to('upload/source/'.$episode_info->video_image)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
                                
                                <!-- video source -->
                                <source src="{{$episode_info->video_url}}" type="application/dash+xml" />  
                                @if($episode_info->subtitle_on_off)
                                <!-- video subtitle -->
                                @if($episode_info->subtitle_url1)
                                    <track kind="captions" src="{{$episode_info->subtitle_url1}}"   label="{{$episode_info->subtitle_language1?$episode_info->subtitle_language1:'English'}}" default>      
                                @endif
                                @if($episode_info->subtitle_url2)
                                    <track kind="captions" src="{{$episode_info->subtitle_url2}}"   label="{{$episode_info->subtitle_language2?$episode_info->subtitle_language2:''}}">     
                                @endif
                                @if($episode_info->subtitle_url3)
                                    <track kind="captions" src="{{$episode_info->subtitle_url3}}"    label="{{$episode_info->subtitle_language3?$episode_info->subtitle_language3:''}}">        
                                @endif  
                                @endif  
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                        </div>

                        @elseif($episode_info->video_type=="URL")
                          <div id="container">                   
                            <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline width="640" height="450" poster="{{URL::to('upload/source/'.$episode_info->video_image)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
                                
                                <!-- video source -->
                                <source src="{{$episode_info->video_url}}" type="video/mp4" label='Auto' res='360' default/>  
                                @if($episode_info->video_quality)       
                                @if($episode_info->video_url_480)
                                <source src="{{$episode_info->video_url_480}}" type='video/mp4' label='480P' res='480'/>
                                @endif  
                                
                                @if($episode_info->video_url_720)
                                <source src="{{$episode_info->video_url_720}}" type='video/mp4' label='720P' res='720'/>                                    
                                @endif

                                @if($episode_info->video_url_1080)
                                <source src="{{$episode_info->video_url_1080}}" type='video/mp4' label='1080P' res='1080'/>                       
                                @endif
                                @endif      
                                
                                @if($episode_info->subtitle_on_off)
                                <!-- video subtitle -->
                                @if($episode_info->subtitle_url1)
                                    <track kind="captions" src="{{$episode_info->subtitle_url1}}"   label="{{$episode_info->subtitle_language1?$episode_info->subtitle_language1:'English'}}" default>      
                                @endif
                                @if($episode_info->subtitle_url2)
                                    <track kind="captions" src="{{$episode_info->subtitle_url2}}"   label="{{$episode_info->subtitle_language2?$episode_info->subtitle_language2:'English'}}">      
                                @endif
                                @if($episode_info->subtitle_url3)
                                    <track kind="captions" src="{{$episode_info->subtitle_url3}}"    label="{{$episode_info->subtitle_language3?$episode_info->subtitle_language3:'English'}}">     
                                @endif      
                                @endif   
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                            
                        </div>                
                        @else
                        <div id="container">
                          <video id="v_player" class="video-js vjs-big-play-centered skin-blue vjs-16-9" controls preload="auto" playsinline width="640" height="450" poster="{{URL::to('upload/source/'.$episode_info->video_image)}}" data-setup="{}" @if(get_player_cong('autoplay')=="true")autoplay="true"@endif>
                            
                            <!-- video source -->                      
                            <source src="{{URL::to('upload/source/'.$episode_info->video_url)}}" type="video/mp4" label='Auto' res='360' default/>  
                            @if($episode_info->video_quality)
                                @if($episode_info->video_url_480)
                                <source src="{{URL::to('upload/source/'.$episode_info->video_url_480)}}" type='video/mp4' label='480P' res='480'/>
                                @endif  
                                    
                                @if($episode_info->video_url_720)   
                                <source src="{{URL::to('upload/source/'.$episode_info->video_url_720)}}" type='video/mp4' label='720P' res='720'/>
                                @endif  
                                    
                                @if($episode_info->video_url_1080)  
                                <source src="{{URL::to('upload/source/'.$episode_info->video_url_1080)}}" type='video/mp4' label='1080P' res='1080'/>   
                                @endif    
                            @endif  
                            
                             @if($episode_info->subtitle_on_off)
                            <!-- video subtitle -->
                                @if($episode_info->subtitle_url1)
                                    <track kind="captions" src="{{$episode_info->subtitle_url1}}"  label="{{$episode_info->subtitle_language1?$episode_info->subtitle_language1:'English'}}" default>       
                                @endif
                                @if($episode_info->subtitle_url2)
                                    <track kind="captions" src="{{$episode_info->subtitle_url2}}" label="{{$episode_info->subtitle_language2?$episode_info->subtitle_language2:'English'}}">        
                                @endif
                                @if($episode_info->subtitle_url3)
                                    <track kind="captions" src="{{$episode_info->subtitle_url3}}"  label="{{$episode_info->subtitle_language3?$episode_info->subtitle_language3:'English'}}">       
                                @endif    
                            @endif                   
                                <!-- worning text if needed -->
                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                            </video>
                        </div>
                        @endif
                        
                      </main> 

            </div>
            <div class="video__desc">
                <div class="row">
                    <div class="col-lg-7 order-1 order-lg-0">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <!-- <h2 class="season__title text-uppercase">Season 1 : E1</h2> -->
                                <h2 class="part__title">
                                    {{stripslashes($episode_info->video_title)}}
                                </h2>
                                <p class="part__desc">
                                    {!!stripslashes($episode_info->video_description)!!}
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
                            <a href="https://twitter.com/intent/tweet?text={{$episode_info->video_title}}&amp;url={{url()->current()}}" class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url={{url()->current()}}&media={{URL::to('upload/source/'.$episode_info->video_image)}}&description={{$episode_info->video_title}}" class="icon">
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
    <h2 class="splide__heading text-uppercase">{{trans('words.seasons_text')}}</h2>
    <div class="splide" id="recommendedShows">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach($episode_list as $episode_data)
                <li class="splide__slide">

                    <a href="{{ URL::to('series/'.$series_slug.'/'.$episode_data->video_slug.'/'.$episode_data->id) }}" class="splide__overlay"></a>

                    <img src="{{URL::to('upload/source/'.$episode_data->video_image)}}" alt="{{$episode_data->video_title}}" class="splide__img" />
                    
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


@if($episode_info->video_type!="Embed")

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

            video_id: 'episode{{$episode_info->id}}',
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

        player.chromecast({ metatitle: '{{stripslashes($episode_info->video_title)}}', metasubtitle: 'Release : {{ isset($episode_info->release_date) ? date('M d Y',$episode_info->release_date) : null }}' }); 
        
          
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
         
        /*limit: 20, //Video will stop playing after 20 seconds
            limiturl: "#",
            limitimage: "http://localhost/laravel_video_script_update/upload/source/logo.png"*/
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