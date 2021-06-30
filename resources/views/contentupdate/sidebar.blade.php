@extends('creatorlayout.sidebar')
@section('sidebar')
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/index"><h1><b>CMS</b></h1></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                            <li><a href="/index"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                               
                            </li>
                            <li class="active">
                            <li><a href="/user"><i class="ti-dashboard"></i> <span>User Dashboard</span></a></li>
                               
                            </li>

                            <li class="active">
                            <li><a href="/creator"><i class="ti-dashboard"></i> <span> Creator Dashboard</span></a></li>
                            </li>

                            <li class="active">
                            <li><a href="/manager"><i class="ti-dashboard"></i> <span>Manager Dashboard</span></a></li>
                               
                            </li>
                            
                          
                            <li>
                            <li><a href="/content"><i class="ti-dashboard"></i> <span>All Contents</span></a></li>
                               
                            </li>

                            <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Settings</span></a>
                                <ul class="collapse">
                                    {{-- <li><a href="index.blade.php"></a></li> --}}
                                    
                                    <li ><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Delete Profile</a></li>
                                    <li><a href="#">Update Profile</a></li>
                                </ul>
                            </li>
                            
                            
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        @endsection