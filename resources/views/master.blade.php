<!DOCTYPE html>
<html>
<head>
	{{-- milligram --}}
	<link rel="stylesheet" type="text/css" href="{{asset('milligram.css')}}">
	<link rel="stylesheet" href="css/app.css">
	
	<title>Kasper Versteeg - @yield('title')</title>
</head>
<body>
	{{-- navigation --}}
	<nav>
		<div class="row">
			{{-- logo left --}}
			<div class="column column-20">
				<a href="/">Logo pls</a>
			</div>
			{{-- menu right --}}
			<div class="column column-40 main-nav">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Portfolio</a></li>
					<li><a href="">About</a></li>
				</ul>
			</div>
		</div>
		
	</nav>

	{{-- main container --}}
	<div class="container">
		{{-- insert page content --}}
		@yield('content')
	</div>


	{{-- footert --}}
	<footer>
		<p>test</p>
	</footer>




</body>
</html>