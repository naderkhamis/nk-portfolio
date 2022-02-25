<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- /CSRF Token -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- /Script -->

    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css"
        integrity="sha512-jN4O0AUkRmE6Jwc8la2I5iBmS+tCDcfUd1eq8nrZIBnDKTmCp5YxxNN1/aetnAH32qT+dDbk1aGhhoaw5cJNlw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /overlayScrollbars -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/headerdarklogo.png') }}" type="image/x-icon">
    <!-- /Favicon -->

    <!-- Fileinput-plugin -->
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />
    <!--/ Fileinput-plugin -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
        integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- /Styles -->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <!-- Wrapper -->
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center bg-secondary">
            <img class="animation__wobble" src="{{ asset('images/headerdarklogo.png') }}" alt="NK-Logo" height="60"
                width="60">
        </div>
        <!-- /Preloader --> --}}
