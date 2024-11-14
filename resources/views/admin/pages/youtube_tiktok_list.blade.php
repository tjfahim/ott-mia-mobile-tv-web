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
            @if ($errors->any())
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                <span aria-hidden="true">&times;</span></button>
              {{ Session::get('flash_message') }}
            </div>
            @endif

            <h4 class="header-title">YouTube & TikTok Video List</h4>

            <div class="mb-3">
              <a href="{{ route('youtube-tiktok.create') }}" class="btn btn-primary">Add New Entry</a>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Video Title</th>
                    <th>Video URL</th>
                    <th>Platform</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($videos as $video)
                  <tr>
                    <td>{{ $video->id }}</td> <!-- Updated to match the correct attribute -->
                    <td>{{ $video->title }}</td> <!-- Updated to match the correct attribute -->
                    <td><a href="{{ $video->url }}" target="_blank">{{ $video->url }}</a></td> <!-- Updated to match the correct attribute -->
                    <td>{{ $video->type }}</td> <!-- Updated to match the correct attribute -->
                    <td>{{ $video->description }}</td>
                    <td>
                      @if ($video->status)
                        <span class="badge badge-success">Active</span>
                      @else
                        <span class="badge badge-danger">Inactive</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('youtube-tiktok.edit', $video->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <form action="{{ route('youtube-tiktok.delete', $video->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this video?');"><i class="fa fa-trash"></i> Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-end">
              {{ $videos->links() }}
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  @include("admin.copyright")
</div>

@endsection
