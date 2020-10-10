@extends('layouts.auth')
@section('title','Forgot Password')
@section('content')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
      <a href="javascript:void(0);" class="h1"><b>FrLi</b>ANS</a>
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif
      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
          @error('email')
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
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">Login</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection