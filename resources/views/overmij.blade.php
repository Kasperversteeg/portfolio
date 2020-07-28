{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Over mij')

{{-- main content --}}
@section('content')

	<div class="flex">
      <div class="w-4/12">
         <div class="rounded-full h-64 w-64 overflow-hidden mx-auto">
          <img class="w-auto h-full max-w-none" src="img/om-kasper.jpg">
         </div>
      </div>
      <div class="w-8/12">
         <h3>Over mij</h3>
         <p>Ik ben Kasper Versteeg, 31 jaar oud en ik ben een webdeveloper. Ik ben meer dan 15 jaar actief geweest in de Horeca branche maar ik heb besloten dat het tijd was voor wat nieuws. Ik hou me voornamelijk bezig met het ontwikkelen van websites voor de kleinere bedrijven. Ik heb me gespecialiseerd op UX-design, dit houdt in dat ik er voor zorg dat de website gebruiksvriendelijk is en dat het doel van de website duidelijk wordt.
         Vragen? Neem gerust contact met me op!</p>
      </div>
	</div>

	<div class="divider"></div>

	<div class="flex">
			<div class="flex-1">
				<h3>Contact:</h3>		
				<ul>
					<li class="">
                  <a href="tel:+31611119944"><icon id="fb" color="primary" /><span>+31 6 11 11 99 44<span></a>
                  </li>
					<li class="w-10">
                  <a href="mailto:info@kasperversteeg.com"><img src="img/pictograms/pict-mail.svg" alt="e-mail" /><span>info@kasperversteeg.com</span></a>
               </li>
				</ul>
			</div>
			<div class="flex-1">
				<h3>Socials:</h3>
				<ul>
					<li class="w-10"><a href="https://www.facebook.com/kasper.versteeg.1"><img src="img/pictograms/pict-fb.svg" alt="Facebook" /><span>Facebook</span></a></li>
					<li class="w-10"><a href="https://www.linkedin.com/in/kasper-versteeg"><img src="img/pictograms/pict-li.svg" alt="LinkedIn" /><span>LinkedIn</span></a></li>
					<li class="w-10"><a href="https://github.com/Kasperversteeg"><icon id="gh" color="primary" /><<span>GitHub</span></a></li>
				</ul>
			</div>
	</div>

	<div class="divider"></div>

	<div class="flex">
      <div class="w-4/12">
         <div class="rounded-full h-64 w-64 overflow-hidden mx-auto">
            <img class="w-auto h-full max-w-none -ml-16" src="img/om-2.jpg">
         </div>
      </div>
      <div class="w-8/12">
            <h3>Skillset</h3>
         <div class="">
            <ul class="text-tertiary">
               <li><span class="text-secondary font-medium w-40 inline-block">Opleiding</span>Communicatie & Multimedia Design</li>
               <li><span class="text-secondary font-medium w-40 inline-block">Website op maat</span>Het realiseren van een website voor iedereen</li>
               <li><span class="text-secondary font-medium w-40 inline-block">Usability expert</span>Het verbeteren van de gebruikersvriendelijkheid van de website of app</li>
               <li><span class="text-secondary font-medium w-40 inline-block">Wordpress</span>Kennis van het cms-framework</li>
               <li><span class="text-secondary font-medium w-40 inline-block">Laravel</span>Kennis van het php-framework</li>
               <li><span class="text-secondary font-medium w-40 inline-block">Javascript</span>Kennis van de meest gebruikte front-end programmeertaal</li>
            </ul>
         </div>
      </div>
   </div>
	

@endsection