{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')
	<div class="content-section">
		<div class="row home-header">
			<h2 id="typewriter">{{--  --}}</h2>
		</div>
		<div class="row">
			<div class="column column-80">
				<p>Welkom op de website, Ik ben <a class="a-inline" href="overmij">Kasper Versteeg</a> en ik ben een webdeveloper die zich voornamelijk bezighoudt met het bouwen, optimaliseren van websites. Op het gebied van gebruiksvriendelijkheid en gemak van de website excelleer ik en pas dit toe op alle websites die ik ontwikkel of renoveer.</p>
				<p>Heeft u hulp nodig bij het creëren van een website? Neem snel contact met me op!</p>
			</div>
			<div class="column column-20 main-cta">
				<div>
					<a class="button" id="main-cta-button" href="mailto:info@kasperversteeg.com">Mail mij</a>
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
      
		<div class="grid grid-cols-4 gap-2">
			<div class="">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-3-thumb.png')}}">
				</div>
				<div class="featured-content">
					<h3>Kasper Versteeg</h3>
				</div>
			</div>

			<div class="">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-2-thumb.png')}}">
				</div>
				<div class="featured-content">
					<h3>Peluche</h3>
				</div>
			</div>
			<div class="">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-1-thumb.png')}}">
				</div>
				<div class="featured-content">
					<h3>Pride and joy labradoodles</h3>
				</div>
			</div>
			<div class="">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-1-thumb.png')}}">
				</div>
				<div class="featured-content">
					<h3>Bernerdoodles</h3>
				</div>
			</div>
		</div>
	</div>

	<div class="row divider"></div>

	<div class="content-section">
		<div class="row">
			<h2>Versies</h2>
		</div>
		<div class="row main-versions">
			<p>Hier komt een overzicht van de het opbouwen van de website, maar hier ben ik nog mee bezig. Nog even gedult dus!</p>
		</div>
	</div>



@endsection