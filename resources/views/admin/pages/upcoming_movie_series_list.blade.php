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
                                {!! Form::open(array('url' => 'admin/upcoming-movie-series', 'class'=>'app-search', 'id'=>'search', 'role'=>'form', 'method'=>'get')) !!}   
                                    <input type="text" name="s" placeholder="Search by title" class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                {!! Form::close() !!}
                            </div>             
                            <div class="col-md-3">
                                <a href="{{URL::to('admin/upcoming-movie-series/create')}}" class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip" title="Add Upcoming Movie/Series">
                                    <i class="fa fa-plus"></i> Add Upcoming Movie/Series
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
                                        <th>Description</th>
                                        <th>Release Date</th>
                                        <th>Type</th>
                                        <th>Status</th>                       
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($movie_series_list as $i => $movie_series)
                                        <tr>
                                            <!-- Display the ID -->
                                            <td>{{ $movie_series->id }}</td>

                                            <!-- Display the Title -->
                                            <td>{{ stripslashes($movie_series->title) }}</td>

                                            <!-- Display the Description -->
                                            <td>{{ stripslashes($movie_series->description) }}</td>

                                            <!-- Display the Release Date -->
                                            <td>{{ $movie_series->release_date ? $movie_series->release_date->format('Y-m-d') : 'N/A' }}</td>

                                            <!-- Display the Type -->
                                            <td>{{ ucfirst($movie_series->type) }}</td>

                                            <!-- Display the Status -->
                                            <td>
                                                @if($movie_series->status == 'upcoming')
                                                    <span class="badge badge-warning">Upcoming</span>
                                                @elseif($movie_series->status == 'released')
                                                    <span class="badge badge-success">Released</span>
                                                @else
                                                    <span class="badge badge-danger">Unknown</span>
                                                @endif
                                            </td>                       

                                            <!-- Display the Image -->
                                            <td>
                                                @if($movie_series->image)
                                                    <img src="{{ asset('/' . $movie_series->image) }}" alt="Movie Image" width="100">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                            </td>

                                            <!-- Action buttons: Edit & Delete -->
                                            <td>
                                                <a href="{{ url('admin/upcoming-movie-series/'.$movie_series->id.'/edit') }}" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ url('admin/upcoming-movie-series/'.$movie_series->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('Are you sure you want to delete this movie/series?')" data-toggle="tooltip" title="Remove">
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
                            @include('admin.pagination', ['paginator' => $movie_series_list]) 
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("admin.copyright") 
</div>

@endsection
