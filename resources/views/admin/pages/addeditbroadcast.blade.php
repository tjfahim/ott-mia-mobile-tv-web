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

            <div class="row">
              <div class="col-sm-6">
                <a href="{{ route('broadcasts.index') }}">
                  <h4 class="header-title m-t-0 m-b-30 text-primary pull-left" style="font-size: 20px;">
                    <i class="fa fa-arrow-left"></i> Back
                  </h4>
                </a>
              </div>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
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
                <span aria-hidden="true">&times;</span>
              </button>
              {{ Session::get('flash_message') }}
            </div>
            @endif

            {!! Form::open(array('url' => route('broadcasts.store'), 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data')) !!}

            <input type="hidden" name="id" value="{{ isset($broadcast_info->id) ? $broadcast_info->id : null }}">
            <div class="row">
              <div class="col-md-12"> 
                <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;">Broadcast Information</h4>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-8">
                    <input type="text" name="title" value="{{ old('title', isset($broadcast_info->title) ? stripslashes($broadcast_info->title) : null) }}" class="form-control" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-8">
                    <textarea name="description" class="form-control" required>{{ old('description', isset($broadcast_info->description) ? stripslashes($broadcast_info->description) : null) }}</textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">RTMP Server</label>
                  <div class="col-sm-8">
                    <input type="text" name="rtmp_server" value="{{ old('rtmp_server', isset($broadcast_info->rtmp_server) ? $broadcast_info->rtmp_server : null) }}" class="form-control" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Stream Key</label>
                  <div class="col-sm-8">
                    <input type="text" name="stream_key" value="{{ old('stream_key', isset($broadcast_info->stream_key) ? $broadcast_info->stream_key : null) }}" class="form-control" required>
                  </div>
                </div>

             
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Image</label>
                  <div class="col-sm-8">
                    <input type="file" name="image" class="form-control">
                    @if(isset($broadcast_info->image))
                      <p>Current Image: <img src="{{ asset('storage/' . $broadcast_info->image) }}" style="max-width: 150px;"></p>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Status</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="status" required>                               
                      <option value="1" @if(isset($broadcast_info->status) && $broadcast_info->status == 1) selected @endif>Active</option>
                      <option value="0" @if(isset($broadcast_info->status) && $broadcast_info->status == 0) selected @endif>Inactive</option>                            
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa fa-save"></i> Save </button>                      
                  </div>
                </div>
              </div>
            </div>

            {!! Form::close() !!}
          </div>
        </div>            
      </div>              
    </div>
  </div>
  @include("admin.copyright") 
</div>

@endsection
