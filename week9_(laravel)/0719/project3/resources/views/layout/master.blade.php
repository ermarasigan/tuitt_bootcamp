<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">

	{{-- Asset points to public --}}
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"> --}}

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	
</head>
<body>

{{-- <div class="row">
	@yield("add_panel")
</div>
 --}}
<div class="container">
	@yield("current_panel")
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>