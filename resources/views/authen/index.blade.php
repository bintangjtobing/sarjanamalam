<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Sarjanamalam | @yield('title')</title>
    <link rel="shortcut icon" href="{!!asset('storage/webicon.png')!!}" type="image/x-icon">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{!!asset('dashboard_admin/plugins/fontawesome-free/css/all.min.css')!!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{!!asset('dashboard_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!!asset('dashboard_admin/dist/css/adminlte.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('dashboard_admin/dist/css/customstyle.css')!!}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- Meta info --}}
    <meta name="description" content="Complex search engine Dashboard, to configuring all web.">

    {{-- SOCIAL MEDIA TAGS --}}
    {{-- FACEBOOK SOCMED --}}
    <meta property="fb:admins" content="110102153747274">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://sarjanamalam.com">
    <meta property="og:image"
        content="{!!asset('storage/img/Official%20sarjanamalam%20logo%20copyright%202020.jpg')!!}">
    <meta property="og:description" content="@yield('metadesc')">
    <meta property="og:site_name" content="Sarjanamalam.">

</head>
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{!!asset('dashboard_admin/dist/img/user1-128x128.jpg')!!}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
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
                                <img src="{!!asset('dashboard_admin/dist/img/user8-128x128.jpg')!!}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
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
                                <img src="{!!asset('dashboard_admin/dist/img/user3-128x128.jpg')!!}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
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
                        <span class="badge badge-warning navbar-badge">15</span>
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
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="javascript:window.location.reload(true)" class="brand-link">
                <img src="{!!asset('dashboard_admin/dist/img/sarjana_logo.jpg')!!}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">MANAGEMENT TOOLS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{!!asset('file/img/profilepic/'.auth()->user()->displaypic)!!}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/restricted/{{$tokens}}" class="nav-link @yield('aktifdash')">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user-config/{{$tokens}}" class="nav-link @yield('aktifuser')">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    User configurations
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">SYSTEM</li>
                        <li class="nav-item">
                            <a href="/messages/{{$tokens}}" class="nav-link @yield('aktifinbox')">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Inbox
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/event/{{$tokens}}" class="nav-link @yield('aktifevent')">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>
                                    Events
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/karir/{{$tokens}}" class="nav-link @yield('aktifkarir')">
                                <i class="nav-icon fab fa-ethereum"></i>
                                <p>
                                    Career
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/threads/{{$tokens}}" class="nav-link @yield('aktifthreads')">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Forum Threads
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout/{{auth()->user()->id}}/{{$tokens}}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Sign out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <?php $YearNow = date('Y') ?>
            <strong>Copyright &copy; {{$YearNow}} <a href="/">Sarjanamalam</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.1
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{!!asset('dashboard_admin/plugins/jquery/jquery.min.js')!!}"></script>
    <!-- Bootstrap -->
    <script src="{!!asset('dashboard_admin/plugins/bootstrap/js/bootstrap.bundle.min.js')!!}"></script>
    <!-- DataTables -->
    <script src="{!!asset('dashboard_admin/plugins/datatables/jquery.dataTables.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')!!}"></script>
    <!-- overlayScrollbars -->
    <script src="{!!asset('dashboard_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')!!}"></script>
    <!-- AdminLTE App -->
    <script src="{!!asset('dashboard_admin/dist/js/adminlte.js')!!}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{!!asset('dashboard_admin/dist/js/demo.js')!!}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{!!asset('dashboard_admin/plugins/jquery-mousewheel/jquery.mousewheel.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/raphael/raphael.min.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/jquery-mapael/jquery.mapael.min.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/jquery-mapael/maps/usa_states.min.js')!!}"></script>
    <!-- ChartJS -->
    <script src="{!!asset('dashboard_admin/plugins/chart.js/Chart.min.js')!!}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{!!asset('dashboard_admin/dist/js/pages/dashboard2.js')!!}"></script>
    <script>
        $(document).ready(function () {
            $('#tableJs').DataTable({
                "paging": true,
                "scrollY": "200px",
                "scrollCollapse": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
            });
            $('#tableItem').DataTable({
                "paging": true,
                "scrollY": "300px",
                "scrollCollapse": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
            });
        });

    </script>
</body>

</html>
