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
                <a href="{{ URL::to('admin/faqs') }}">
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

            {!! Form::open(array('url' => route('faqs.store'), 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data')) !!}

<input type="hidden" name="id" value="{{ isset($faq_info->id) ? $faq_info->id : null }}">
<div class="row">
  <div class="col-md-12"> 
    <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;">FAQ Information</h4>
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Question</label>
      <div class="col-sm-8">
        <input type="text" name="title" value="{{ isset($faq_info->title) ? stripslashes($faq_info->title) : null }}" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Answer</label>
      <div class="col-sm-8">
        <textarea name="description" class="form-control">{{ isset($faq_info->description) ? stripslashes($faq_info->description) : null }}</textarea>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-8">
        <select class="form-control" name="status">                               
          <option value="1" @if(isset($faq_info->status) && $faq_info->status==1) selected @endif>Active</option>
          <option value="0" @if(isset($faq_info->status) && $faq_info->status==0) selected @endif>Inactive</option>                            
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
