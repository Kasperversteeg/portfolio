{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')
      <h1>Webdeveloper / Multimedia expert</h1>
			<div class="">
				<p>Welkom op de website, Ik ben <a class="text-primary font-medium" href="overmij">Kasper Versteeg</a> en ik ben een webdeveloper die zich voornamelijk bezighoudt met het bouwen, optimaliseren van websites. Op het gebied van gebruiksvriendelijkheid en gemak van de website excelleer ik en pas dit toe op alle websites die ik ontwikkel of renoveer.</p>
				<p class="mt-2">Heeft u hulp nodig bij het creëren van een website? Neem snel contact met me op!</p>
			<a class="btn btn-primary" href="mailto:info@kasperversteeg.com">Mail mij</a>
			
		</div>
	
	<div class="divider"></div>

	{{-- featured portfolio items --}}
	<div class="content-section">
		<div class="row">
			<h2>Recente projecten</h2>
		</div>
		<div class="row">
			<p>Hieronder ziet u een overzicht van mijn meest recente projecten, mocht u meer willen zien dan kunt u verder kijken op de <a class="a-inline" href="portfolio">portfolio</a> pagina</p>
      </div>
      
		<portfolio />
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