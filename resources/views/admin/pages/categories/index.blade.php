@extends("admin.admin_app")

@section("content")


  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card-box table-responsive">

                <div class="row">
                <div class="col-md-3">
                  <a href="{{URL::to('admin/categories/create')}}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="{{trans('words.add_genre')}}"><i class="fa fa-plus"></i>Add Categories</a>
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
                      <th>Categories Name</th>
                      <th>Photo</th>
                      <th>{{trans('words.action')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($categories as $cat)
                    <tr>
                      <td>{{ $cat->name }}</td>
                        <td><img style="width: 200px; height: 200px" src="{{ URL::to('upload/source/'.$cat->image) }}" alt=""></td>
                      <td>
                      <a href="{{ url('admin/categories/edit/'.$cat->id) }}" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="{{trans('words.edit')}}"> <i class="fa fa-edit"></i> </a>
                      <a href="{{ url('admin/categories/delete/'.$cat->id) }}" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('{{trans('words.dlt_warning_text')}}')" data-toggle="tooltip" title="{{trans('words.remove')}}"> <i class="fa fa-remove"></i> </a>
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
