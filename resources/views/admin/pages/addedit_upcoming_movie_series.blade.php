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
                <a href="{{ URL::to('admin/upcoming-movie-series') }}">
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

            {!! Form::open(array('url' => route('admin.upcoming-movie-series.store'), 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data')) !!}

<input type="hidden" name="id" value="{{ isset($movie_series->id) ? $movie_series->id : null }}">
<div class="row">
  <div class="col-md-12"> 
    <h4 class="m-t-0 m-b-30 header-title" style="font-size: 20px;">Upcoming Movie/Series Information</h4>

    <!-- Title -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Title</label>
      <div class="col-sm-8">
        <input type="text" name="title" value="{{ isset($movie_series->title) ? stripslashes($movie_series->title) : null }}" class="form-control" required>
      </div>
    </div>

    <!-- Description -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Description</label>
      <div class="col-sm-8">
        <textarea name="description" class="form-control">{{ isset($movie_series->description) ? stripslashes($movie_series->description) : null }}</textarea>
      </div>
    </div>

    <!-- Release Date -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Release Date</label>
      <div class="col-sm-8">
        <input type="date" name="release_date" value="{{ isset($movie_series->release_date) ? $movie_series->release_date->format('Y-m-d') : null }}" class="form-control">
      </div>
    </div>

    <!-- Type (Movie or Series) -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type</label>
      <div class="col-sm-8">
        <select class="form-control" name="type">
          <option value="movie" @if(isset($movie_series->type) && $movie_series->type == 'movie') selected @endif>Movie</option>
          <option value="series" @if(isset($movie_series->type) && $movie_series->type == 'series') selected @endif>Series</option>
        </select>
      </div>
    </div>

    <!-- Status -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Status</label>
      <div class="col-sm-8">
        <select class="form-control" name="status">                               
          <option value="upcoming" @if(isset($movie_series->status) && $movie_series->status == 'upcoming') selected @endif>Upcoming</option>
          <option value="released" @if(isset($movie_series->status) && $movie_series->status == 'released') selected @endif>Released</option>
          <option value="postponed" @if(isset($movie_series->status) && $movie_series->status == 'postponed') selected @endif>Postponed</option>                             
        </select>
      </div>
    </div>

    <!-- Image Upload -->
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Image</label>
      <div class="col-sm-8">
        <input type="file" name="image" class="form-control">
        @if(isset($movie_series->image) && $movie_series->image)
          <br>
          <img src="{{ asset('storage/' . $movie_series->image) }}" alt="Image" width="150">
        @endif
      </div>
    </div>

    <!-- Save Button -->
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
