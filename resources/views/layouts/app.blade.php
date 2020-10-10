<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title tab') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- overlayScrollbars -->
        <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
        <!-- Ionicons -->
        <link href="{{ asset('plugins/ionicons-2.0.1/css/ionicons.min.css') }}" rel="stylesheet">
        <!-- Sweetalert Css -->
        <link href="{{ asset('plugins/sweetalert2/sweetalert2.css') }}" rel="stylesheet">
        <!-- overlayScrollbars -->
        <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
        <!-- DataTables -->
        <link href="{{ asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
        @livewireStyles
        @yield('css')
        <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }
        .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
        </style>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Page Loader -->
        <div class="preloader">
            <div class="loading">
                <div class="spinner-grow text-danger" role="status"></div>
                <div class="spinner-grow text-danger" role="status"></div>
                <div class="spinner-grow text-danger" role="status"><span class="sr-only">Loading...</span></div>
                <strong>Loading...</strong>
            </div>
        </div>
        <!-- #END# Page Loader -->

        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('admin') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('contact') }}" id="contentcontact" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{ asset('img/user1-128x128.jpg') }}" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Moh Jamil
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{ asset('img/user8-128x128.jpg') }}" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Izzatul Mubarokah
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="{{ asset('img/user8-128x128.jpg') }}" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Irmawati
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('img/userarif160x160.jpg') }}" class="user-image img-circle elevation-2"
                                alt="User Image">
                            <!-- <span class="d-none d-md-inline">{{ Auth::user()->fullname }}</span> -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-danger">
                                <img src="{{ asset('img/userarif160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">

                                <p>
                                    {{ Auth::user()->fullname }} - Web Developer
                                    <small>Member since Jan. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="{{ route('profile') }}" id="contentprofile" class="btn btn-default btn-flat">Profile</a>
                                <a href="lockscreen" class="btn btn-default btn-flat">Lockscreen</a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    class="btn btn-default btn-flat float-right">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">@csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Left Sidebar -->
            @include('layouts.leftsidebar')
            <!-- #END# Left Sidebar -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" id="contentpage">
                @include('sweetalert::alert')

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <h1 class="urlpage">@yield('title page')</h1>
                            </div>
                            <!-- SEARCH FORM -->
                            <div class="col-sm-4">
                                <form action="admin">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn  btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                                    <li class="breadcrumb-item active urlpage">@yield('title tab')</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                @yield('content')
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2019-2020 <a
                        href="https://id.linkedin.com/in/arif-nur-shobirin-795026a2a">FrontLiner.io</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->


        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- <script src="{{ asset('plugins/popper/popper.min.js') }}"></script> -->
        <!-- DataTables -->
        <script src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('plugins/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
        <!-- jQuery UI -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/demo.js') }}"></script>
        <!-- Content Page-->
        <!-- <script src="{{ asset('js/content.js') }}"></script> -->
        <!-- SweetAlert Plugin Js -->
        <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Moment -->
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
        
        {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
        @yield('javascript')
        @stack('scripts')
        @livewireScripts
    </body>
</html>

