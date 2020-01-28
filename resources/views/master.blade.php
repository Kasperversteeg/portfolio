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
	<div class="container main-content">
		{{-- insert page content --}}
		@yield('content')
	</div>


	{{-- footert --}}
	<footer>
		<div class="container">
			<div class="row foot-content">
				<div class="column">
					<p>kleine versie logo</p>
					<p>Kasper Versteeg</p>
					<p>Webdeveloper</p>
				</div>
				<div class="column">		
					<ul>
						<li>Huur me in</li>
						<li><span>Tel:</span><a href="">+31 6 11 11 99 44</a></li>
						<li><span>Mail:</span><a href="mailto:kasperversteeg@gmail.com">kasperversteeg@gmail.com</a></li>
					</ul>
				</div>
				<div class="column">
					<ul>
						<li>Socials</li>
						<li>Github</li>
						<li>Linked in</li>
						<li>Facebook</li>
					</ul>
				</div>
			</div>
			<div class="row footer-copy">
				<p>copyright © kasperversteeg - powered bij laravel etc etc</p>
			</div>
		</div>
	</footer>




</body>
</html>