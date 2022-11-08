<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template') }}/assets/images/title.png">
    <title>Posyandu | @yield('title')</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{ asset('template') }}/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/extra-libs/css-chart/css-chart.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('template') }}/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar shadow-sm">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('template') }}/assets/images/logo-i.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('template') }}/assets/images/logo-icon.jpg" width="40" height="40"
                                style="border-radius: 50%" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text" style="color: #FFFFFF; font-weight: initial">
                            Posyandu

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar">
                                <i class="sl-icon-menu font-20"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('template') }}/assets/images/users/admin.jpg" alt="user"
                                    class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="{{ asset('template') }}/assets/images/users/admin.jpg"
                                            alt="user" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">{{ auth()->user()->nama }}</h4>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="/logout">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            @include('layout.v_nav')
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height:100vh; background-color : #C7C8C9">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->


        <script src="{{ asset('package/dist/chart.min.js') }}"></script>
        <script src="{{ asset('template') }}/assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('template') }}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{ asset('template') }}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <script src="{{ asset('template') }}/dist/js/app.min.js"></script>
        <script src="{{ asset('template') }}/dist/js/app.init.iconbar.js"></script>
        <!-- Theme settings -->
        <script src="{{ asset('template') }}/dist/js/app-style-switcher.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset('template') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="{{ asset('template') }}/assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="{{ asset('template') }}/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('template') }}/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('template') }}/dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <script src="{{ asset('template') }}/assets/extra-libs/c3/d3.min.js"></script>
        <script src="{{ asset('template') }}/assets/extra-libs/c3/c3.min.js"></script>
        <script src="{{ asset('template') }}/assets/libs/chart.js/dist/chart.min.js"></script>
        <script src="{{ asset('template') }}/assets/libs/gaugeJS/dist/gauge.min.js"></script>
        <script src="{{ asset('template') }}/assets/libs/flot/excanvas.min.js"></script>
        <script src="{{ asset('template') }}/assets/libs/flot/jquery.flot.js"></script>
        <script src="{{ asset('template') }}/assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('template') }}/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{ asset('template') }}/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
        <script src="{{ asset('template') }}/assets/extra-libs/DataTables/datatables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTables').DataTable({
                    "paging": false,
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bInfo": false,
                    "bAutoWidth": false,
                    "oLanguage": {
                        "sEmptyTable": "Data kosong"
                    }
                });
            });
        </script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
        <script src="{{ asset('template') }}/dist/js/pages/dashboards/dashboard2.js"></script>
</body>

</html>
