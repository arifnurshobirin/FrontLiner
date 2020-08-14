@extends('layouts.auth')
@section('title','Login Page')



@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0);"><b>Admin</b>FR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

      <form id="sign_in" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
          @error('username')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="current-password">
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      @if (Route::has('password.request'))
      <p class="mb-1">
        <a href="{{ route('password.request') }}">{{ __('I forgot my password') }}</a>
      </p>
      @endif
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">{{ __('Register Now!') }}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection

