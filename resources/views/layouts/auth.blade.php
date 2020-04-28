<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Frontliner Admin | @yield('title')</title>

    <!-- Favicon-->
    
    <!-- Font Awesome -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{ asset('plugins/ionicons-2.0.1/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- icheck bootstrap -->
    <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="{{ asset('') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

@yield('content')

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

</body>

</html>