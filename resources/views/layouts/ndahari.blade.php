<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ndahari Foundation - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('assets/ndahari/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/ndahari/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{ asset('assets/ndahari/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ndahari/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ndahari/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ndahari/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ndahari/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ndahari/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/ndahari/css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('ndahari.partials.header')

    @yield('content')

    @include('ndahari.partials.footer')

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/ndahari/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/ndahari/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/ndahari/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/ndahari/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/ndahari/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/ndahari/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/ndahari/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/ndahari/js/main.js') }}"></script>

</body>

</html>