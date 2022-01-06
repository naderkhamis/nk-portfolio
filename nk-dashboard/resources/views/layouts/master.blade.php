<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- /CSRF Token -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- /Scripts -->

    <!-- Google Font: Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- /Google Font: Roboto -->

    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css"
        integrity="sha512-jN4O0AUkRmE6Jwc8la2I5iBmS+tCDcfUd1eq8nrZIBnDKTmCp5YxxNN1/aetnAH32qT+dDbk1aGhhoaw5cJNlw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /overlayScrollbars -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/headerdarklogo.png') }}" type="image/x-icon">
    <!-- /Favicon -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- /Styles -->
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('images/headerdarklogo.png') }}" alt="NK-Logo" height="60"
                width="60">
        </div>
        <!-- /Preloader -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">
                        Home
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
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- /Navbar Search -->

            </ul>
            <!-- /Right navbar links -->

        </nav>
        <!-- /Navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('images/headerdarklogo.png') }}" alt="NK Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
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
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    {{ Auth::user()->name }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            {{ __('Logout') }}
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
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

                <!-- Sidebar Menu -->
                <div class="form-inline">

                    <!-- Sidebar Search -->
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
                    <!-- /Sidebar Search -->

                </div>
                <!-- /Sidebar Menu -->

            </div>
            <!-- /Sidebar -->

        </aside>
        <!-- /Main Sidebar Container -->

        <!-- Main content -->
        <section class="content-wrapper content">
            <div class="container-fluid">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </section>
        <!-- /Main content -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>
                Copyright &copy; 2021
                <a href="https://naderkhamis.net">
                    Nader Khamis
                </a>
                .
            </strong>
            All rights reserved.
        </footer>
        <!-- /Main Footer -->

    </div>

    <!-- overlayScrollbars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"
        integrity="sha512-B1xv1CqZlvaOobTbSiJWbRO2iM0iii3wQ/LWnXWJJxKfvIRRJa910sVmyZeOrvI854sLDsFCuFHh4urASj+qgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- /overlayScrollbars -->

</body>

</html>
