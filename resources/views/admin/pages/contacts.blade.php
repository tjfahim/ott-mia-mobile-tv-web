@extends("admin.admin_app")

@section("content")


<div class="content-page">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card-box table-responsive">

              {{-- <div class="row">
                <div class="col-sm-3">
                   <select class="form-control select2" name="movie_language_id" id="movie_language_id">
                      <option value="">{{trans('words.filter_by_lang')}}</option>
                      @foreach($language_list as $language_data)
                        <option value="?language_id={{$language_data->id}}">{{$language_data->language_name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                   {!! Form::open(array('url' => 'admin/movies','class'=>'app-search','id'=>'search','role'=>'form','method'=>'get')) !!}
                    <input type="text" name="s" placeholder="{{trans('words.search_by_title')}}" class="form-control">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  {!! Form::close() !!}
                </div>
              <div class="col-md-3">
                <a href="{{URL::to('admin/movies/add_movie')}}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="{{trans('words.add_movie')}}"><i class="fa fa-plus"></i> {{trans('words.add_movie')}}</a>
              </div>
            </div> --}}

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
                    <th>No.</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Replay</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($contacts as $contact)
                  <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        @if($contact->read)
                        <div>Ok</div>
                        @else
                        <div>No</div><a href="{{  URL::to('admin/contacts/replay/'.$contact->id) }}" class="btn btn-success">Replay</a>
                        @endif
                    </td>
                  </tr>
                 @endforeach



                </tbody>
              </table>
            </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    @include("admin.copyright")
  </div>



@endsection
