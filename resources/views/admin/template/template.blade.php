<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Admin Panel</title>

        @section('Style')
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}" />
        @show
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

        <!-- Начало общего контейнера -->
        <div class="wrapper">
            @include('admin.template.menu')

            <!-- Content Wrapper. Contains page content Start -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) Start -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">Home</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('AdminHomePage') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard v1</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Content Header (Page header) End -->

                <!-- Main content Start -->
                @section('Content')

                @show
                <!-- Main content End -->
                
            </div>
            <!-- Content Wrapper. Contains page content End -->

            <!-- Footer Start-->
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2020.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.0.0</div>
            <footer>
            <!-- Footer End-->
            <aside class="control-sidebar control-sidebar-dark"></aside>

        </div>
        <!-- Конец общего контейнера -->

        @section('Sript')
        <!-- jQuery -->
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
        @show
    </body>
</html>