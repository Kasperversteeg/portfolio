{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Over mij')

{{-- main content --}}
@section('content')

	<div class="content-section">
		<div class="row info-intro">
			<div class="column column-33">
				<div class="circle-img-wrap">
					<img src="{{asset('img/om-kasper.jpg')}}">
				</div>
			</div>
			<div class="column column-66">
				<div class="row">
					<h3>Over mij</h3>
				</div>
				<div class="row">
					<p>Ik ben Kasper Versteeg, 31 jaar oud en ik ben een webdeveloper. Ik ben meer dan 15 jaar actief geweest in de Horeca branche maar ik heb besloten dat het tijd was voor wat nieuws. Ik hou me voornamelijk bezig met het ontwikkelen van websites voor de kleinere bedrijven. Ik heb me gespecialiseerd op UX-design, dit houdt in dat ik er voor zorg dat de website gebruiksvriendelijk is en dat het doel van de website duidelijk wordt.
					Vragen? Neem gerust contact met me op!</p>
				</div>
			</div>
		</div>
	</div>

	<div class="divider"></div>


	<div class="content-section">
		<div class="row info-contact">
			<div class="column column-33">
				<h3>Contact:</h3>		
				<ul>
					<li class="pict"><a href="tel:+31611119944">@svg('img/pictograms/pict-tel.svg', 'telefoon')<span>+31 6 11 11 99 44<span></a></li>
					<li class="pict"><a href="mailto:info@kasperversteeg.com">@svg('img/pictograms/pict-mail.svg', 'e-mail')<span>info@kasperversteeg.com</span></a></li>
				</ul>
			</div>
			<div class="column  column-33">
				<h3>Socials:</h3>
				<ul>
					<li class="pict"><a href="https://www.facebook.com/kasper.versteeg.1">@svg('img/pictograms/pict-fb.svg', 'Facebook')<span>Facebook</span></a></li>
					<li class="pict"><a href="https://www.linkedin.com/in/kasper-versteeg">@svg('img/pictograms/pict-li.svg', 'LinkedIn')<span>LinkedIn</span></a></li>
					<li class="pict"><a href="https://github.com/Kasperversteeg">@svg('img/pictograms/pict-gh.svg', 'GitHub')<span>GitHub</span></a></li>
				</ul>
			</div>
		</div>
	</div>


	<div class="divider"></div>


	<div class="content-section">
		<div class="row info-skill">
			<div class="column column-33">
				<div class="circle-img-wrap">
					<img src="{{asset('img/om-2.jpg')}}">
				</div>
			</div>
			<div class="column column-66">
				<div class="row">
					<h3>Skillset</h3>
				</div>
				<div class="row skills">
					<ul>
						<li><span>Opleiding</span>Communicatie & Multimedia Design</li>
						<li><span>Website op maat</span>Het realiseren van een website voor iedereen</li>
						<li><span>Usability expert</span>Het verbeteren van de gebruikersvriendelijkheid van de website of app</li>
						<li><span>Wordpress</span>Kennis van het cms-framework</li>
						<li><span>Laravel</span>Kennis van het php-framework</li>
						<li><span>Javascript</span>Kennis van de meest gebruikte front-end programmeertaal</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	

@endsection