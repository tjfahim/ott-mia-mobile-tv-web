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
                                {!! Form::open(array('url' => 'admin/broadcasts', 'class'=>'app-search', 'id'=>'search', 'role'=>'form', 'method'=>'get')) !!}   
                                    <input type="text" name="s" placeholder="Search by title" class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                {!! Form::close() !!}
                            </div>             
                            <div class="col-md-3">
                                <a href="{{ URL::to('admin/broadcasts/create') }}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="Add Broadcast"><i class="fa fa-plus"></i> Add Broadcast</a>
                            </div>
                        </div>

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                        
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Stream url</th>                       
                                        <th>Image</th>                       
                                        <th>Status</th>                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($broadcasts as $broadcast)
                                        <tr>
                                            <td>{{ stripslashes($broadcast->title) }}</td>
                                            <td>{{ stripslashes($broadcast->description) }}</td>
                                            <td>{{ stripslashes($broadcast->stream_url) }}</td>
                                            <td>
                                                @if($broadcast->image)
                                                    <img src="{{ asset('/' . $broadcast->image) }}" alt="Broadcast Image" style="width: 100px; height: auto;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                @if($broadcast->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>                       
                                            <td>
                                                <a href="{{ url('admin/broadcasts/'.$broadcast->id.'/edit') }}" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('broadcasts.destroy', $broadcast->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" data-toggle="tooltip" title="Remove">
        <i class="fa fa-remove"></i>
    </button>
</form>
       
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <nav class="paging_simple_numbers">
                            @include('admin.pagination', ['paginator' => $broadcasts]) 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("admin.copyright") 
</div>

@endsection
