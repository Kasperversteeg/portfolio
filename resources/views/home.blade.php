{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')
	<div class="content-section">
		<div class="row">
			<div class="column column-80">
				<p>Welkom op de website, Ik ben <a class="a-inline" href="overmij">Kasper Versteeg</a> en ik ben een webdeveloper die zich voornamelijk bezighoudt met het bouwen, optimaliseren van websites. Op het gebied van gebruiksvriendelijkheid en gemak van de website excelleer ik en pas dit toe op alle websites die ik ontwikkel of renoveer.</p>
				<p>Heeft u hulp nodig bij het creëren van een website? Neem snel contact met me op!</p>
			</div>
			<div class="column column-20 main-cta">
				<div>
					<p></p>
					<a class="button" href="">Button</a>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="row divider"></div>

	{{-- featured portfolio items --}}
	<div class="content-section">
		<div class="row">
			<h2>Recente projecten</h2>
		</div>
		<div class="row">
			<p>Hieronder ziet u een overzicht van mijn meest recente projecten, mocht u meer willen zien dan kunt u verder kijken op de <a class="a-inline" href="portfolio">portfolio</a> pagina</p>
		</div>
		<div class="row main-featured">
			<div class="column column-25">
				<div class="featured-img-wrap">
					<img src="{{asset('img/port-1.png')}}"></div>
				<div class="featured-content">
					<h5>Pride and joy labradoodles</h5>
					<p>Description <br />
					multiline</p>
				</div>
			</div>
			<div class="column column-25">
				<div class="featured-img-wrap">
					<img src="{{asset('img/port-1.png')}}"></div>
				<div class="featured-content">
					<h5>Portfolio</h5>
				</div>
			</div>
			<div class="column column-25">
				<div class="featured-img-wrap">
					<img src="{{asset('img/port-2.png')}}"></div>
				<div class="featured-content">
					<h5>Peluche labradoodles</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="content-section">
		<div class="row main-versions main-content-section">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>



@endsection