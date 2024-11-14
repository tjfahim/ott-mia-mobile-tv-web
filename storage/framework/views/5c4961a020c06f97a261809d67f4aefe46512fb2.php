

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
            <div class="col-lg-6 offset-md-3">
              <div class="card-box">
                
                   <div class="row">
                     <div class="col-sm-6">
                          <a href="<?php echo e(URL::to('admin/reels')); ?>"><h4 class="header-title m-t-0 m-b-30 text-primary pull-left" style="font-size: 20px;"><i class="fa fa-arrow-left"></i> <?php echo e(trans('words.back')); ?></h4></a>
                     </div>
                     
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

               

                 <?php echo Form::open(array('url' => array('admin/reels/add_edit_reels'),'class'=>'form-horizontal','name'=>'reel_form','id'=>'reel_form','role'=>'form','enctype' => 'multipart/form-data')); ?>  
                  
                  <input type="hidden" name="id" value="<?php echo e(isset($reel->id) ? $reel->id : null); ?>">

                  
                 <div class="row">

                    <div class="col-md-12"> 
                      <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;"><?php echo e(trans('words.reel_info')); ?></h4>  


                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.name')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" id="title" value="<?php echo e(isset($reel->username) ? stripslashes($reel->username) : $username); ?>" class="form-control">
                    </div>
                  </div>                  

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.image')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="user_img"
                          value="<?php echo e(isset($reel->user_img) ? $reel->user_img : $user_img); ?>"
                          class="form-control" placeholder="http://example.com/demo.jpg">
                  </div>
                  </div>                  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.reel_name')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="title" id="title" value="<?php echo e(isset($reel->title) ? stripslashes($reel->title) : old('title')); ?>" class="form-control">
                    </div>
                  </div>                  

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.reel_url')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="video_url"
                          value="<?php echo e(isset($reel->video_url) ? $reel->video_url : null); ?>"
                          class="form-control" placeholder="http://example.com/demo.mp4">
                  </div>
                  </div>                  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.status')); ?>*</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="status">
                            <option value="1" <?php if(isset($reel->status) and $reel->status == 1): ?> selected <?php endif; ?>>
                                <?php echo e(trans('words.active')); ?></option>
                            <option value="0" <?php if(isset($reel->status) and $reel->status == 0): ?> selected <?php endif; ?>>
                                <?php echo e(trans('words.inactive')); ?></option>
                        </select>
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

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/netskytv/public_html/resources/views/admin/pages/addeditreel.blade.php ENDPATH**/ ?>