@extends("admin.admin_app")

@section("content")

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

                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                 @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span></button>
                                                    {{ Session::get('flash_message') }}
                                                </div>
                                @endif
                    <form action="{{ URL::to('admin/production/members/'.$member->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Memeber Name</label>
                          <div class="col-sm-8">
                            <input type="text" name="name" value="{{ isset($member->name) ? stripslashes($member->name) : null }}" class="form-control">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Photo <small id="emailHelp" class="form-text text-muted">({{trans('words.recommended_resolution')}} : 180x110)</small></label>
                            <div class="col-sm-8">
                              <div class="input-group">

                                <input type="text" name="image" id="genres_image" value="{{ $member->image }}" class="form-control" readonly>
                                <div class="input-group-append">
                                  <button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#model_genres_poster">Select</button>

                                </div>
                              </div>

                            </div>
                          </div>

                        @if(isset($member->image))
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">&nbsp;</label>
                          <div class="col-sm-8">

                                 <img src="{{URL::to('upload/source/'.$member->image)}}" alt="video image" class="img-thumbnail" width="180">

                          </div>
                        </div>
                        @endif

                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nationality</label>
                          <div class="col-sm-8">
                            <input type="text" name="nationality" value="{{ isset($member->nationality) ? stripslashes($member->nationality) : null }}" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Role</label>
                          <div class="col-sm-8">
                              <input type="text" name="role" value="{{ isset($member->role) ? stripslashes($member->role) : null }}" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-8">
                            <input type="date" name="dof" value="{{ isset($member->dof) ? stripslashes($member->dof) : null }}" class="form-control">
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-primary waves-effect waves-light"> {{trans('words.save')}} </button>
                          </div>
                        </div>
                    </form>


              </div>
            </div>
          </div>
        </div>
      </div>
      @include("admin.copyright")
    </div>

 <!--  Movie Poster -->
<div id="model_genres_poster" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-body">
               <div class="iframe-container">
               <iframe src="{{URL::to('responsive_filemanager/filemanager/dialog.php?type=2&sort_by=date&field_id=genres_image&relative_url=1')}}" frameborder="0"></iframe>
               </div>
            </div>
        </div>
    </div>
</div>

@endsection
