<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">


	<title>Siswaku</title>
	<link rel="stylesheet" href="{{ asset('bootstrap-4.4.1/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	<div class="container">
		@include('navbar')
		@yield('main')
	</div>
	
	@yield('footer')

	<script src="{{ asset('js/jquery_3_4_1.min.js') }}"></script>
	<script src="{{ asset('bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
</body>

</html>