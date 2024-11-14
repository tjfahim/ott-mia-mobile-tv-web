@extends('admin.admin_app')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                           
                            <div class="row">
                                <div class="col-sm-3">
                                  <div class="row">
                                    <div class="col-sm-6">
                                         <a href="{{ URL::to('admin/reels') }}"><h4 class="header-title m-t-0 m-b-30 text-primary pull-left" style="font-size: 20px;"><i class="fa fa-arrow-left"></i> {{trans('words.back')}}</h4></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    {!! Form::open([
                                        'url' => 'admin/reels/all-comments/'.$id,
                                        'class' => 'app-search',
                                        'id' => 'search',
                                        'role' => 'form',
                                        'method' => 'get',
                                    ]) !!}
                                    <input type="text" name="s" placeholder="{{ trans('words.search_by_title') }}"
                                        class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    {!! Form::close() !!}
                                </div>
                                {{-- <div class="col-md-3">
                                    <a href="{{ URL::to('admin/reels/add_reels') }}"
                                        class="btn btn-success btn-md waves-effect waves-light m-b-20" data-toggle="tooltip"
                                        title="{{ trans('words.add_reel') }}"><i class="fa fa-plus"></i>
                                        {{ trans('words.add_reel') }}</a>
                                </div> --}}
                            </div>

                            @if (Session::has('flash_message'))
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
                                            <th>{{ trans('words.name') }}</th>
                                            <th>{{ trans('words.email') }}</th>
                                            <th>{{ trans('words.reel_name') }}</th>
                                            <th>{{ trans('words.comments') }}</th>
                                            <th>{{ trans('words.comment_status') }}</th>
                                            <th>{{ trans('words.action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if (count($comments) == 0)
                                                <td colspan="6" class="text-center">No Data Found</td>
                                      @endif
                                        @foreach ($comments as $i => $comment)
                                            <tr>
                                              
                                              

                                                <td>{{ $comment->user->name }}</td>
                                                <td>{{ $comment->user->email }}</td>
                                                <td>{{ $comment->reels->title }}</td>
                                                <td>{{ $comment->comment }}</td>
                                                
                                                <td>
                                                    @if ($comment->status == 1)
                                                        <span
                                                            class="badge badge-success">{{ trans('words.active') }}</span>
                                                    @else<span
                                                            class="badge badge-danger">{{ trans('words.inactive') }}</span>
                                                    @endif
                                                </td>
                                                <td>

                                                    <a href="{{ url('admin/reels/add-reply/' . $comment->id) }}"
                                                        class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5"
                                                        data-toggle="tooltip" title="Reply"> <i
                                                            class="ti-comments"></i> </a>
                                                    <a href="{{ url('admin/reels/comment-delete/' . $comment->id) }}"
                                                        class="btn btn-icon waves-effect waves-light btn-danger m-b-5"
                                                        onclick="return confirm('{{ trans('words.dlt_warning_text') }}')"
                                                        data-toggle="tooltip" title="{{ trans('words.remove') }}"> <i
                                                            class="fa fa-remove"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                            {{-- <nav class="paging_simple_numbers">
                                @include('admin.pagination', ['paginator' => $comments])
                            </nav> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.copyright')
    </div>
@endsection
