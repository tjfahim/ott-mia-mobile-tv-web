@extends("admin.admin_app")

@section("content")

  
  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card-box table-responsive">

                <div class="row">
                  <div class="col-sm-3">
                     {{-- <select class="form-control select2" name="movie_language_id" id="movie_language_id">
                        <option value="">{{trans('words.filter_by_lang')}}</option>
                        @foreach($language_list as $language_data)
                          <option value="?language_id={{$language_data->id}}">{{$language_data->language_name}}</option>
                        @endforeach
                    </select> --}}
                  </div>  
                  <div class="col-md-3">
                     {!! Form::open(array('url' => 'admin/music','class'=>'app-search','id'=>'search','role'=>'form','method'=>'get')) !!}   
                      <input type="text" name="s" placeholder="{{trans('words.search_by_title')}}" class="form-control">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    {!! Form::close() !!}
                  </div>             
                <div class="col-md-3">
                  <a href="{{URL::to('admin/music/add_music')}}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="{{trans('words.add_music')}}"><i class="fa fa-plus"></i> {{trans('words.add_music')}}</a>
                </div>
              </div>

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>{{trans('words.music_name')}}</th>
                      {{-- <th>{{trans('words.music_poster')}}</th> --}}
                      <th>{{trans('words.music_genre')}}</th>
                      <th>{{trans('words.music_artist')}}</th>                       
                      <th>{{trans('words.music_url')}}</th>                       
                      <th>{{trans('words.action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($musics_list as $i => $music)
                    <tr>
                      <td>{{ stripslashes($music->music_title) }}</td>
                      {{-- <td>@if(isset($music->music_thumbnail_url)) <img src="{{URL::to($music->music_thumbnail_url)}}" alt="video image" class="thumb-lg bdr_radius"> @endif</td> --}}
                      <td>{{ $music->music_genre }}</td>
                      <td>{{ $music->music_artist }}</td>
                      <td>
                        <audio controls>
                          <source src="{{ asset($music->music_url) }}" type="audio/mpeg">
                        </audio>
                        </td>                 
                      <td>
                      <a href="{{ url('admin/music/edit_music/'.$music->music_id) }}" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="{{trans('words.edit')}}"> <i class="fa fa-edit"></i> </a>
                      <a href="{{ url('admin/music/delete/'.$music->music_id) }}" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('{{trans('words.dlt_warning_text')}}')" data-toggle="tooltip" title="{{trans('words.remove')}}"> <i class="fa fa-remove"></i> </a>           
                      </td>
                    </tr>
                   @endforeach
                     
                     
                     
                  </tbody>
                </table>
              </div>
                <nav class="paging_simple_numbers">
                @include('admin.pagination', ['paginator' => $musics_list]) 
                </nav>
           
              </div>
            </div>
          </div>
        </div>
      </div>
      @include("admin.copyright") 
    </div>

    

@endsection