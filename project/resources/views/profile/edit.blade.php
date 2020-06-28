@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update',['id'=>$user->id])}}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-6 col-form-label">{{ __('Name: ') }} @if(!empty($user)){{ $user-> name }} {{ $user-> surname }} @endif</label>
                </div>
                <div class="row">
                  <label class="col-sm-6 col-form-label">{{ __('Email: ') }} @if(!empty($user)){{ $user-> email }}@endif</label>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">Admin</label>
                    <div class="col-sm-7">
                        <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }} form-check">
                            <label class="form-check-label">
                                <input class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }} form-check-input" name="role" id="input-role" type="checkbox" value="1" @if(!empty($user) && $user->role) checked @endif/>
                                <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                            </label>
                            @if ($errors->has('role'))
                                <span id="role-error" class="error text-danger" for="input-role">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
