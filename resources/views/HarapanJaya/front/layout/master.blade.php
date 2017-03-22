<!DOCTYPE html>
<html lang="en">
	<head>
		@include('HarapanJaya.front.partials.header')
	</head>

	<body class="nav-md">
		<div class="container body">

			<div class="main_container">

			<!-- PAGE -->
			@include('HarapanJaya.front.partials.sidebar')
			@include('HarapanJaya.front.partials.top-nav')

			@yield('content')

			@include('HarapanJaya.front.partials.footer')

		</div>
		@include('HarapanJaya.front.partials.js_footer')
			
	</body>
</html>


