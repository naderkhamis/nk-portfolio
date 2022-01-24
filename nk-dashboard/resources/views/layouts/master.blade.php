@include('layouts.header')

<!-- Main content -->
<section class="content-wrapper content m-0 bg-secondary">
    <div class="container-fluid">
        <main id="main">
            <div class="d-flex justify-content-center py-5">
                @yield('content')
            </div>
        </main>
    </div>
</section>
<!-- /Main content -->

@include('layouts.footer')
