<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home_admin')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink text-warning"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Bir Nömrə</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'numbers') disabled text-success @endif " href="{{route('numbers.index')}}">
                <i class="fas fa-phone-volume text-white"></i> <span>Nömrələr</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) == 'users') disabled text-success @endif " href="{{route('users.index')}}">
                <i class="fas fa-users text-white"></i> <span>İstifadəçilər</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand bg-gradient-secondary topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a href="{{route('index')}}" target="target" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"></i> Bir Nömrə</a>
                    </li>

                    <li class="nav-item mr-3">
                        <a class="btn btn-danger" href="{{route('logout')}}">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                            Çıxış
                        </a>
                    </li>


                </ul>

            </nav>