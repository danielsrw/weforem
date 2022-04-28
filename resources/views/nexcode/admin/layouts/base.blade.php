<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/nexcode/admin/" data-template="vertical-menu-template-free" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') - Admin</title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/nexcode/admin/img/favicon/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/nexcode/admin/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/nexcode/admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/nexcode/admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/nexcode/admin/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/nexcode/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/nexcode/admin/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ asset('assets/nexcode/admin/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/js/config.js') }}"></script>
</head>
<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('nexcode.admin.inc.sidebar')

            <div class="layout-page">
                @include('nexcode.admin.inc.nav')

                <div class="content-wrapper">
                    @yield('content')

                    @include('nexcode.admin.inc.footer')

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <div class="buy-now">
        <a
                href="{{ route('nexcode.home') }}"
                target="_blank"
                class="btn btn-danger btn-buy-now"
            >BACK TO HOME</a
        >
    </div>

    <script src="{{ asset('assets/nexcode/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/nexcode/admin/js/dashboards-analytics.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

