<!DOCTYPE html>
<html>
<head>
	<title>WEFOREM</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{ asset('assets/weforem/css/main.css') }}" />
</head>
<body class="is-preload">

	<div id="wrapper">
		@yield('content')
	</div>

	<div id="bg"></div>

	<script src="{{ asset('assets/weforem/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/weforem/js/browser.min.js') }}"></script>
	<script src="{{ asset('assets/weforem/js/breakpoints.min.js') }}"></script>
	<script src="{{ asset('assets/weforem/js/util.js') }}"></script>
	<script src="{{ asset('assets/weforem/js/main.js') }}"></script>

</body>
</html>