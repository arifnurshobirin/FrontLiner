@extends('layouts.auth')
@section('title','Lockscreen Page')


@section('content')
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="javascript:void(0);"><b>Admin</b>FR</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">{{ Auth::user()->name }}</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="{{ asset('img/userarif160x160.jpg') }}" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form id="sign_in" method="POST" action="{{ route('login') }}" class="lockscreen-credentials">
    @csrf
    <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      <div class="input-group">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password">
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

        <div class="input-group-append">
          <button  type="submit"  class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="{{ route('login') }}">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2019-2020 <b><a href="https://www.instagram.com/arifkillua" class="text-black">FrontLiner.io</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->
@endsection
