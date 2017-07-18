<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">

	{{-- Asset points to public --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	
</head>
<body>
{{-- <nav class="navbar navbar-default"> --}}
  {{-- <ul class="nav navbar-nav">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
  </ul> --}}
 {{--  <p class="navbar-text"><b>@yield("title")</b></p>
</nav> --}}
<div class="row">
	@yield("addtask_panel")
</div>

<div class="row">
	@yield("currenttask_panel")
</div>

{{-- <div class="container">
	<div>
		<h2>Navigation goes here</h2>
		<ul>
			<li>Link 1</li>
			<li>Link 2</li>
		</ul>
	</div>
	

	<div>
		<h2>Content goes here</h2>
		@yield("main_content")
	</div>

	<div>
		<h2>Footer</h2>
	</div>
</div> --}}

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>