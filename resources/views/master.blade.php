<!DOCTYPE html>
<html>
<head>
	{{-- milligram --}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/milligram.css')}}">
	{{-- fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
	{{-- custom files --}}
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="stylesheet" href="css/app.css">
	<script type="text/javascript" src="js/app.js"></script>
	
	<title>Kasper Versteeg - @yield('title')</title>
</head>
<body>
	{{-- navigation --}}
	<nav>
		<div class="container">
			<div class="row">
				{{-- logo left --}}
				<div class="column column-25 main-logo">
					<a href="/">@svg('img/kv-logo-full.svg', 'kv-logo')</a>
				</div>
				{{-- menu right --}}
				<div class="column column-75 main-nav">
					<ul>
						<li id="home"><a href="/">Home</a></li>
						<li id="port"><a href="portfolio">Portfolio</a></li>
						<li id="over"><a href="overmij">Over mij</a></li>
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
				<div class="column foot-logo">
					<a href="/">@svg('img/kv-logo-full-white.svg', 'kv-logo')</a>
					<p>Kasper Versteeg</p>
					<p>Webdeveloper</p>
				</div>
				<div class="column foot-contact">
					<h5>Contact:</h5>		
					<ul>
						<li class="foot-pict"><a href="tel:+31611119944"><span>@svg('img/pictograms/pict-tel.svg', 'telefoon')</span>+31 6 11 11 99 44</a></li>
						<li class="foot-pict"><a href="mailto:info@kasperversteeg.com"><span>@svg('img/pictograms/pict-mail.svg', 'e-mail')</span>info@kasperversteeg.com</a></li>
					</ul>
				</div>
				<div class="column foot-socials">
					<h5>Socials:</h5>
					<ul>
						<li class="foot-pict"><a href="https://www.facebook.com/kasper.versteeg.1">@svg('img/pictograms/pict-fb.svg', 'Facebook')</a></li>
						<li class="foot-pict"><a href="https://www.linkedin.com/in/kasper-versteeg">@svg('img/pictograms/pict-li.svg', 'LinkedIn')</a></li>
						<li class="foot-pict"><a href="https://github.com/Kasperversteeg">@svg('img/pictograms/pict-gh.svg', 'GitHub')</a></li>
					</ul>
				</div>
			</div>
			<div class="row footer-copy">
				<p>copyright © KasperVersteeg - powered bij <a href="https://laravel.com/">laravel</a></p>
			</div>
		</div>
	</footer>




</body>
</html>