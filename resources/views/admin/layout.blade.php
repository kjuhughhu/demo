<!DOCTYPE html>
<html lang="en">

<head>
   @includeIf('admin.head')

    <![endif]-->
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="dashboard.html">
                    <!-- Logo icon image, you can use font-icon also -->
                    <b>
                        <!--This is dark logo icon-->
                        <img src={{asset("admin/plugins/images/admin-logo.png")}} alt="home" class="dark-logo" />
                        <!--This is light logo icon-->
                        <img src={{asset("admin/plugins/images/admin-logo-dark.png")}} alt="home" class="light-logo" />
                    </b>
                    <!-- Logo text image you can use text also -->
                    <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src={{asset("admin/plugins/images/admin-text.png")}} alt="home" class="dark-logo" />
                        <!--This is light logo text-->
                            <img src={{asset("admin/plugins/images/admin-text-dark.png")}} alt="home" class="light-logo" />
                    </span>
                </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                </li>
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href="">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                </li>
                <li>
                    <a class="profile-pic" href="#"> <img src={{asset("admin/plugins/images/users/varun.jpg")}}
                            alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Duy Anh</b></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                </li>
                <li>
                    <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                </li>
                <li>
                    <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Basic Table</a>
                </li>
                <li>
                    <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                </li>
                <li>
                    <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                </li>
                <li>
                    <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                </li>
                <li>
                    <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                </li>

            </ul>
            <div class="center p-20">
                <a href={{url("https://wrappixel.com/templates/ampleadmin/")}} target="_blank" class="btn btn-danger btn-block waves-effect waves-light">Upgrade to Pro</a>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Dashboard</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="{{url("admin/category/created")}}" target="_blank" class="btn btn-danger
                    pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add Student</a>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Different data widgets -->
            <!-- ============================================================== -->
            <!-- .row -->
{{--            //total trang--}}
            <div class="row">
                @yield('total')
            </div>
            <!--/.row -->
            <!--row -->
            <!-- /.row -->
{{--            // bieu do trang--}}
            <div class="row">
                @yield('chart')
            </div>
            <!-- ============================================================== -->
            <!-- table -->
            <!-- ============================================================== -->
{{--            // list nguoi dung--}}
            <div class="row">
                @yield('listsales')
            </div>
            <!-- ============================================================== -->
            <!-- chat-listing & recent comments -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- .col -->
{{--                // binh luan--}}
                <div class="col-md-12 col-lg-8 col-sm-12">
                    @yield('comment')
                </div>
{{--                // chat listing--}}
                <div class="col-lg-4 col-md-6 col-sm-12">
                    @yield('chatlisting')
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
@includeIf('admin.script')
