<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shofia Bouqet | @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets-dashboard/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('layouts.dashboard.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('layouts.dashboard.header')
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                @yield('isi')
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://instagram.com/adhfry.r"
                            target="_blank" class="pe-1 text-primary text-decoration-underline">Shofie</a> </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets-dashboard/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/app.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/dashboard.js') }}"></script>
</body>

</html>