<!DOCTYPE html>
<html lang="en">
	<head>
		@include('HarapanJaya.front.partials.header')
	</head>

	<body class="nav-md fixed">
		<div class="container body">
      		<div class="main_container">
        		@include('HarapanJaya.front.partials.sidebar')
        		@include('HarapanJaya.front.partials.top-nav')
	            <div class="right_col" role="main">
	      			@yield('content')
	            </div>
				@include('HarapanJaya.front.partials.footer')
  			</div>
  		</div>
		@include('HarapanJaya.front.partials.js_footer')
			
	</body>
</html>


