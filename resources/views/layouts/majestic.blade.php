<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Majestic | @yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/majestic/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/majestic/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/majestic/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/majestic/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/majestic/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/majestic/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('assets/majestic/css/theme.css') }}" rel="stylesheet" />
</head>
<body>

    <main class="main" id="top">
        @include('majestic.partials.header')

        @yield('content')

        @include('majestic.partials.footer')
    </main>

    <script src="{{ asset('assets/majestic/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('assets/majestic/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/majestic/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('assets/majestic/vendors/feather-icons/feather.min.js') }}"></script>
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('assets/majestic/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>