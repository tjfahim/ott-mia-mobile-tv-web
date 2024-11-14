

<?php $__env->startSection("content"); ?>

<style type="text/css">
  .iframe-container {
  overflow: hidden;
  padding-top: 56.25% !important;
  position: relative;
}
 
.iframe-container iframe {
   border: 0;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}
</style>
 

  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-box">
                
                   <div class="row">
                     <div class="col-sm-6">
                          <a href="<?php echo e(URL::to('admin/music')); ?>"><h4 class="header-title m-t-0 m-b-30 text-primary pull-left" style="font-size: 20px;"><i class="fa fa-arrow-left"></i> <?php echo e(trans('words.back')); ?></h4></a>
                     </div>
                     <?php if(isset($music->id)): ?>
                     <div class="col-sm-6">
                        <a href="<?php echo e(URL::to('music/'.$music->video_slug.'/'.$music->id)); ?>" target="_blank"><h4 class="header-title m-t-0 m-b-30 text-primary pull-right" style="font-size: 20px;"><?php echo e(trans('words.preview')); ?> <i class="fa fa-eye"></i></h4> </a>
                     </div>
                     <?php endif; ?>
                   </div> 

                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(Session::has('flash_message')): ?>
                      <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                          <?php echo e(Session::get('flash_message')); ?>

                      </div>
                <?php endif; ?>

               

                 <?php echo Form::open(array('url' => array('admin/music/add_edit_music'),'class'=>'form-horizontal','name'=>'music_form','id'=>'music_form','role'=>'form','enctype' => 'multipart/form-data')); ?>  
                  
                  <input type="hidden" name="id" value="<?php echo e(isset($music->music_id) ? $music->music_id : null); ?>">

                  
                 <div class="row">

                    <div class="col-md-6"> 
                      <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;"><?php echo e(trans('words.music_info')); ?></h4>  


                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.music_name')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="music_title" id="music_title" value="<?php echo e(isset($music->music_title) ? stripslashes($music->music_title) : old('music_title')); ?>" class="form-control">
                    </div>
                  </div>                  

                  <div class="form-group row">
                    <label class="control-label col-sm-3"><?php echo e(trans('words.music_genre')); ?></label>
                    <div class="col-sm-8">
                      <div class="input-group"> 
                        <input type="text" id="music_genre" name="music_genre" value="<?php echo e(isset($music->music_genre) ? $music->music_genre : old('music_genre')); ?>" class="form-control" placeholder="">
                         
                      </div>
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label class="control-label col-sm-3"><?php echo e(trans('words.release_date')); ?></label>
                    <div class="col-sm-8">
                      <div class="input-group"> 
                        <input type="text" id="datepicker-autoclose" name="music_release_date" value="<?php echo e(isset($music->music_release_date) ? date('m/d/Y',$music->music_release_date) : old('music_release_date')); ?>" class="form-control" placeholder="mm/dd/yyyy">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>
                <div class="col-md-6"> 
                    <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;"><?php echo e(trans('words.music_poster_thumb_audio')); ?></h4> 

                    <div class="form-group row">
                      <label class="control-label col-sm-3"><?php echo e(trans('words.music_artist')); ?> *</label>
                      <div class="col-sm-8">
                        <div class="input-group"> 
                          <input type="text" id="music_artist" name="music_artist" value="<?php echo e(isset($music->music_artist) ? $music->music_artist : old('music_artist')); ?>" class="form-control" placeholder="">
                           
                        </div>
                      </div>
                    </div> 

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.music_poster')); ?> <small
                            id="emailHelp"
                            class="form-text text-muted">(<?php echo e(trans('words.recommended_resolution')); ?>

                            : 80x80)</small></label>
                    <div class="col-sm-8">
                        <div class="input-group">

                            <input type="text" name="music_thumbnail_url" id="video_image"
                                value="<?php echo e(isset($music->music_thumbnail_url) ? $music->music_thumbnail_url : null); ?>"
                                class="form-control" readonly>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-dark waves-effect waves-light"
                                    data-toggle="modal"
                                    data-target="#model_music_poster">Select</button>

                            </div>
                        </div>

                    </div>
                </div>

                <?php if(isset($music->music_thumbnail_url)): ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">&nbsp;</label>
                        <div class="col-sm-8">

                            <img src="<?php echo e(URL::to('upload/source/'.$music->music_thumbnail_url)); ?>"
                                alt="video image" class="img-thumbnail" width="250">

                        </div>
                    </div>
                <?php endif; ?>
                <div class="form-group row" id="display_thumb_img" style="display: none;">
                  <label class="col-sm-3 col-form-label">&nbsp;</label>
                  <div class="col-sm-8">   
                         <input type="hidden" name="thumb_link" id="thumb_link" value="">                                                  
                         <img id="imdb_thumb_image" src="" alt="video thumb" class="img-thumbnail" width="250">                       
                  </div>
                </div>
                  
                  <br/>
                  <hr/>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.music_upload_type')); ?></label>
                      <div class="col-sm-8">
                            <select class="form-control" name="audio_type" id="video_type">                               
                                <option value="Local" <?php if(isset($music->audio_type) AND $music->audio_type=="Local"): ?> selected <?php endif; ?>>Local</option>
                                <option value="URL" <?php if(isset($music->audio_type) AND $music->audio_type=="URL"): ?> selected <?php endif; ?>>URL</option>
                                                    
                            </select>
                      </div>
                  </div>

              <div class="form-group row" id="local_id"
                  <?php if(isset($music->audio_type) and $music->audio_type != 'Local'): ?> style="display:none;" <?php endif; ?>>

                  <div class="col-sm-11">
                      <small id="emailHelp" class="form-text text-muted">(Supported : MP3)</small></label><br>
                  </div>

                  <label class="col-sm-3 col-form-label"><?php echo e(trans('words.music_file')); ?> *<small
                          id="emailHelp" class="form-text text-muted">(Defualt Player
                          File)
                      </small>

                  </label>
                  <div class="col-sm-8">
                      <div class="input-group">

                          <input type="text" name="music_url_local" id="video_url"
                              value="<?php echo e(isset($music->music_url) ? trim($music->music_url, "upload/source/") : null); ?>"
                              class="form-control" readonly>
                          <div class="input-group-append">
                              <button type="button" class="btn btn-dark waves-effect waves-light"
                                  data-toggle="modal" data-target="#model_video_url">Select
                              </button>

                          </div>
                      </div>

                  </div>

              </div>

              <div class="form-group row" id="url_id"
                  <?php if(isset($music->audio_type) and $music->audio_type != 'URL'): ?> style="display:none;" <?php endif; ?>
                  <?php if(!isset($music->music_id)): ?> style="display:none;" <?php endif; ?>>

                  <div class="col-sm-11">
                      <small id="emailHelp" class="form-text text-muted">(Supported : MP3)</small></label><br>
                  </div>

                  <label class="col-sm-3 col-form-label"><?php echo e(trans('words.music_url')); ?> <small
                          id="emailHelp" class="form-text text-muted">(Audio File)</small></label>
                  <div class="col-sm-8">
                      <input type="text" name="music_url"
                          value="<?php echo e(isset($music->music_url) ? $music->music_url : null); ?>"
                          class="form-control" placeholder="http://example.com/demo.mp3">
                  </div>

              </div>
              <div class="form-group">
                <div class="offset-sm-9 col-sm-9">
                    <button type="submit" id="add_btn_id"
                        class="btn btn-primary waves-effect waves-light"><i
                            class="fa fa-save"></i> <?php echo e(trans('words.save')); ?> </button>
                </div>
            </div>
              </div> 

                <?php echo Form::close(); ?> 
              </div>
            </div>            
          </div>              
        </div>
      </div>
      <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    </div> 

 
<!--  music Video file -->
<div id="model_video_url" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" style="max-width: 900px;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="iframe-container">
                        <iframe
                            src="<?php echo e(URL::to('responsive_filemanager/filemanager/dialog.php?type=2&sort_by=date&field_id=video_url&relative_url=1')); ?>"
                            frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--  Music Poster -->
<div id="model_music_poster" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 900px;">
        <div class="modal-content">             
            <div class="modal-body">
               <div class="iframe-container">
               <iframe src="<?php echo e(URL::to('responsive_filemanager/filemanager/dialog.php?type=2&sort_by=date&field_id=video_image&relative_url=1')); ?>" frameborder="0"></iframe>
               </div>
            </div>
        </div> 
    </div> 
</div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/admin/pages/addeditmusic.blade.php ENDPATH**/ ?>