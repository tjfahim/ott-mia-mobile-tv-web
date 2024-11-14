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
                                {!! Form::open(array('url' => 'admin/channel-manage', 'class'=>'app-search', 'id'=>'search', 'role'=>'form', 'method'=>'get')) !!}   
                                    <input type="text" name="s" placeholder="Search by title" class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                {!! Form::close() !!}
                            </div>             
                            <div class="col-md-3">
                                <a href="{{URL::to('admin/channel-manage/create')}}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="Add Channel">
                                    <i class="fa fa-plus"></i> Add Channel
                                </a>
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
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>URL</th>
                                        <th>Status</th>                       
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($channels as $i => $channel)
                                        <tr>
                                            <!-- Display the ID -->
                                            <td>{{ $channel->id }}</td>

                                            <!-- Display the Title -->
                                            <td>{{ stripslashes($channel->title) }}</td>

                                            <!-- Display the URL -->
                                            <td>{{ stripslashes($channel->url) }}</td>

                                            <!-- Display the Status -->
                                            <td>
                                                @if($channel->status)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>                       

                                            <!-- Display the Image -->
                                            <td>
                                                @if($channel->image)
                                                    <img src="{{ asset('/' . $channel->image) }}" alt="Channel Image" width="100">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                            </td>

                                            <!-- Action buttons: Edit & Delete -->
                                            <td>
                                                <a href="{{ url('admin/channel-manage/'.$channel->id.'/edit') }}" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ url('admin/channel-manage/'.$channel->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('Are you sure you want to delete this channel?')" data-toggle="tooltip" title="Remove">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </form>           
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <nav class="paging_simple_numbers">
                            @include('admin.pagination', ['paginator' => $channels]) 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("admin.copyright") 
</div>

@endsection
