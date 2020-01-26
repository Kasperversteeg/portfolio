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
		<div class="container">
			<div class="row">
				{{-- logo left --}}
				<div class="column column-20">
					<a href="/">Logo pls</a>
				</div>
				{{-- menu right --}}
				<div class="column column-40 main-nav">
					<ul>
						<li><a href="/" class="active">Home</a></li>
						<li><a href="portfolio">Portfolio</a></li>
						<li><a href="service">Service</a></li>
						<li><a href="overmij">Over mij</a></li>
					</ul>
				</div>
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