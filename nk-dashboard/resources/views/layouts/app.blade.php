@include('layouts.header')

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark border-warning">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <span class="text-warning">
                    <i class="fas fa-bars"></i>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <span class="text-warning">
                    <i class="fas fa-home"></i>
                </span>
            </a>
        </li>
    </ul>
    <!-- /Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- /Navbar Search -->
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
            <a href="">
                {{-- <a class="nav-link" href="{{ route('emails-index') }}"> --}}
                <span class="text-warning">
                    <i class="fas fa-envelope"></i>
                </span>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
        </li>
        <!-- /Messages Dropdown Menu -->
        <!-- Expand -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <span>
                    <i class="fas fa-expand-arrows-alt"></i>
                </span>
            </a>
        </li>
        <!-- /Expand -->

    </ul>
    <!-- /Right navbar links -->

</nav>
<!-- /Navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link border-warning">

        <img src="{{ asset('images/headerdarklogo.png') }}" alt="NK Logo" class="brand-image">
        <span class="brand-text">
            NK-Dashboard
        </span>

    </a>
    <!-- /Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-user"></i>
                        </span>
                        <p>
                            {{ Auth::user()->name }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    {{ __('Logout') }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Sidebar User Panel -->

        <!-- Sidebar Search -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-fw fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-search-results">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <div class="search-title">
                            <strong class="text-light"></strong>
                            N<strong class="text-light"></strong>
                            o<strong class="text-light"></strong>
                            <strong class="text-light"></strong>
                            e<strong class="text-light"></strong>
                            l<strong class="text-light"></strong>
                            e<strong class="text-light"></strong>
                            m<strong class="text-light"></strong>
                            e<strong class="text-light"></strong>
                            n<strong class="text-light"></strong>
                            t<strong class="text-light"></strong>
                            <strong class="text-light"></strong>
                            f<strong class="text-light"></strong>
                            o<strong class="text-light"></strong>
                            u<strong class="text-light"></strong>
                            n<strong class="text-light"></strong>
                            d<strong class="text-light"></strong>
                            !<strong class="text-light"></strong>
                        </div>
                        <div class="search-path"></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Sidebar Search -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="tree" role="menu"
                data-accordion="false">

                <!-- Personal Information -->
                <li class="nav-item menu-item">
                    <a href="{{ route('personal-information-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-address-card"></i>
                        </span>
                        <p>
                            Personal Information
                        </p>
                    </a>
                </li>
                <!-- /Personal Information -->

                <!-- Contact Information -->
                <li class="nav-item menu-item">
                    <a href="{{ route('contacts-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-phone-alt"></i>
                        </span>
                        <p>
                            Contact Information
                        </p>
                    </a>
                </li>
                <!-- /Contact Information -->

                <!-- Certificates -->
                <li class="nav-item menu-item">
                    <a href="{{ route('certificates-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-book"></i>
                        </span>
                        <p>
                            Certificates
                        </p>
                    </a>
                </li>
                <!-- /Certificates -->

                <!-- Experience -->
                <li class="nav-item menu-item">
                    <a href="{{ route('career-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-medal"></i>
                        </span>
                        <p>
                            Experience
                        </p>
                    </a>
                </li>
                <!-- /Experience -->

                <!-- Skills -->
                <li class="nav-item menu-item">
                    <a href="{{ route('skills-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-star"></i>
                        </span>
                        <p>
                            Skills
                        </p>
                    </a>
                </li>
                <!-- /Skills -->

                <!-- Services -->
                <li class="nav-item menu-item">
                    <a href="{{ route('services-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-hand-holding-heart"></i>
                        </span>
                        <p>
                            Services
                        </p>
                    </a>
                </li>
                <!-- /Services -->

                <!-- Processes -->
                <li class="nav-item menu-item">
                    <a href="{{ route('processes-index') }}" class=" nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-tasks"></i>
                        </span>
                        <p>
                            Processes
                        </p>
                    </a>
                </li>
                <!-- /Processes -->

                <!-- Projects -->
                <li class="nav-item menu-item">
                    <a href="{{ route('projects-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-briefcase"></i>
                        </span>
                        <p>
                            Projects
                        </p>
                    </a>
                </li>
                <!-- /Projects -->

                <!-- Statistics -->
                <li class="nav-item menu-item">
                    <a href="{{ route('statistics-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-chart-bar"></i>
                        </span>
                        <p>
                            Statistics
                        </p>
                    </a>
                </li>
                <!-- /Statistics -->

                <!-- Clients Reviews -->
                <li class="nav-item menu-item">
                    <a href="{{ route('review-index') }}" class="nav-link">
                        <span class="text-warning">
                            <i class="nav-icon fas fa-user-edit"></i>
                        </span>
                        <p>
                            Clients Reviews
                        </p>
                    </a>
                </li>
                <!-- /Clients Reviews -->

            </ul>
        </nav>
        <!-- /Sidebar Menu -->

    </div>
    <!-- /Sidebar -->

</aside>
<!-- /Main Sidebar Container -->

<!-- Main content -->
<section class="content-wrapper content pt-5 mt-0 bg-secondary">
    <div class="container-fluid p-0">
        <main id="main" class="p-3 p-md-2 p-lg-4 p-xl-5">
            @yield('content')
        </main>
    </div>
</section>
<!-- /Main content -->

@include('layouts.footer')

@yield('scripts')
