@extends("admin.admin_app")

@section("content")


<div class="content-page">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card-box table-responsive">

                <div class="row">
                    <div class="col-md-6">
                        {!! Form::open(array('url' => 'admin/production/members','class'=>'app-search','id'=>'search','role'=>'form','method'=>'get')) !!}
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" name="s_by" aria-label="Default select example">
                                    <option value="all" {{ request('s_by') == 'all' ? 'selected' : '' }}>All</option>
                                    <option value="name" {{ request('s_by') == 'name' ? 'selected' : '' }}>Name</option>
                                    <option value="role" {{ request('s_by') == 'role' ? 'selected' : '' }}>Role</option>
                                    <option value="country" {{ request('s_by') == 'country' ? 'selected' : '' }}>Country</option>
                                </select>


                            </div>
                            <div class="col-md-9">
                                <input type="text" name="s" placeholder="search..." value="{{ request()->input('s') }}" class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-3">
                        <a href="{{URL::to('admin/production/members')}}" class="btn btn-light btn-md waves-effect waves-light m-b-20">Clear</a>
                        <a href="{{URL::to('admin/production/members/add')}}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="{{trans('words.add_movie')}}"><i class="fa fa-plus"></i>Add Member</a>
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
                    <th>No.</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Role</th>
                    <th>Nationality</th>
                    <th>Age</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($members as $member)
                  <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>
                        <img src="{{ URL::to('upload/source/'.$member->image) }}" class="thumb-lg bdr_radius" alt="">
                    </td>
                    <td>{{ $member->role }}</td>
                    <td>{{ $member->nationality }}</td>
                    <td>
                        @php
                            $bdate = new DateTime($member->dof);
                            $ndate = new DateTime();
                            $age = $bdate->diff($ndate)->y;
                        @endphp
                        {{  $age }} Years
                    </td>
                    <td>
                        <a href="{{ URL::to('admin/production/members/'. $member->id.'/edit') }}" class="btn btn-info">Edit</a>
                        <form action="{{  URL::asset('admin/production/members/'. $member->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
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
