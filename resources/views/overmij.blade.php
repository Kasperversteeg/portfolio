{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Over mij')

{{-- main content --}}
@section('content')

	<div class="content-section">
		<div class="row info-intro">
			<div class="column column-33">
				<p>img here</p>
			</div>
			<div class="column column-66">
				<div class="row">
					<h3>Over mij</h3>
				</div>
				<div class="row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
					<li class="pict"><a href="mailto:kasperversteeg@gmail.com">@svg('img/pictograms/pict-mail.svg', 'e-mail')<span>kasperversteeg@gmail.com</span></a></li>
				</ul>
			</div>
			<div class="column  column-33">
				<h3>Socials:</h3>
				<ul>
					<li class="pict"><a href="https://www.facebook.com/kasper.versteeg.1">@svg('img/pictograms/pict-fb.svg', 'Facebook')<span>Facebook</span></a></li>
					<li class="pict"><a href="https://www.linkedin.com/in/kasper-versteeg-97419051">@svg('img/pictograms/pict-li.svg', 'LinkedIn')<span>LinkedIn</span></a></li>
					<li class="pict"><a href="https://github.com/Kasperversteeg">@svg('img/pictograms/pict-gh.svg', 'GitHub')<span>GitHub</span></a></li>
				</ul>
			</div>
		</div>
	</div>


	<div class="divider"></div>


	<div class="content-section">
		<div class="row info-skill">
			<div class="column column-33">
				<div class="row">
					<p>img here</p>
				</div>
			</div>
			<div class="column column-66">
				<div class="row">
					<h3>Skillset</h3>
				</div>
				<div class="row skills">
					<ul>
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