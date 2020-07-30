{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')
    <h1>Webdeveloper / Multimedia expert</h1>
	<p>Welkom op de website, Ik ben <a class="text-primary font-medium hover:underline" href="overmij">Kasper Versteeg</a> en ik ben een webdeveloper die zich voornamelijk bezighoudt met het bouwen, optimaliseren van websites. Op het gebied van gebruiksvriendelijkheid en gemak van de website excelleer ik en pas dit toe op alle websites die ik ontwikkel of renoveer.</p>
	<div class="flex justify-between pt-2">
		<p class="mt-2">Heeft u hulp nodig bij het creëren van een website? Neem snel contact met me op!</p>
		<a class="btn btn-primary" href="mailto:info@kasperversteeg.com">Mail mij</a>
	</div>
	
	<div class="divider"></div>

	{{-- featured portfolio items --}}
	<div>
      <h2>Recente projecten</h2>
      <p>Hieronder ziet u een overzicht van mijn meest recente projecten, mocht u meer willen zien dan kunt u verder kijken op de <a class="text-primary font-medium hover:underline" href="portfolio">portfolio</a> pagina</p>
      
		<portfolio v-on:open-modal="toggleModal"/>
	</div>

	<div class="divider"></div>

   <div>
      <h2>Project: ReserV</h2>
      <p>Tijdens mijn afstudeer project ben ik begonnen met het ontwikkelen van een web applicatie voor horeca bedrijven. 
      Deze applicatie neemt veel werk uit het handen van de werknemers wat betreft het registreren van de reserveringen. <br>
      De applicatie wordt eind 2020 gelanceerd</p>
      <p class="pt-2"><a class="text-primary font-medium" href="https://www.youtube.com/watch?v=QbmAI9Bx8KE" target="_blank">Klik hier</a> voor een preview video</p>
   </div>


@endsection