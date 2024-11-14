@extends('site_app')

@section('head_title', trans('words.dashboard_text').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')
<div class="general__modal" id="loginRegiModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginRegiModalLabel" aria-hidden="true">
  <!-- <button type="button" class="login__regi__close" data-bs-dismiss="modal" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>
  </button> -->
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <div class="py-5">
              <!-- modal-body -->
              <nav class="mb-4">
                <div class="mb-4 text-white">
                  <h1 class="mb-1 fw-bold">Chage Password</h1>
                  <p>Fill the form to change your password.</p>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav__one" role="tabpanel" aria-labelledby="nav__one__tab">
                      {!! Form::open(array('url' => 'reset-password','id'=>'loginform','role'=>'form', 'method' => 'post')) !!}
                     
                      <div class="message">
                          @if(Session::has('login_flash_error'))
                          @if(count($errors) > 0)
                          <div class="alert alert-danger">
                              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                              <ul>
                                  @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                          @endif
                          @endif


                          @if(Session::has('flash_message'))
                          <div class="alert alert-success">
                              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button> -->
                              {{ Session::get('flash_message') }}
                          </div>
                          @endif
                          @if(Session::has('error_flash_message'))
                          <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                              {{ Session::get('error_flash_message') }}
                          </div>
                          @endif
                          @error('email')
                              <div class="alert alert-danger">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                  Please Enter Valid Email
                              </div>
                          @enderror
                          @error('password')
                              <div class="alert alert-danger">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                  Please Enter Valid Password   
                              </div>
                          @enderror
                          @error('password_confirmation')
                              <div class="alert alert-danger">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                  Please Enter Valid Confirmation Password   
                              </div>
                          @enderror
                      </div>

                      <div class="mb-4">
                          <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="{{trans('words.email')}}" readonly />
                          
                      </div>
                      <div class="mb-4">
                          <input type="password" class="form-control" name="password"  placeholder="{{trans('words.password')}}" />
                      </div>
                      <div class="mb-4">
                          <input type="password" class="form-control" name="password_confirmation" placeholder="{{trans('words.confirm_password')}}" />
                      </div>
                      <button type="submit" class="btn btn__submit">{{trans('words.update')}}</button>
                      
                      {!! Form::close() !!}

                  </div>
                  
              </div>
          </div>
      </div>
  </div>
</div>

@endsection