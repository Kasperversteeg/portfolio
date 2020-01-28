{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')


	<div class="main-content-section">
		<div class="row">
			<h1>Huur mij in!</h1>
		</div>
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
	<div class="main-content-section">
		<div class="row">
			<h2>Recente projecten</h2>
		</div>
		<div class="row main-featured">
			<div class="column column-25">
				<img src="{{asset('img/port-1.png')}}">
			</div>
			<div class="column column-40">
				<img src="{{asset('img/port-1.png')}}">
			</div>
			<div class="column column-25">
				<img src="{{asset('img/port-2.png')}}">
			</div>
		</div>
	</div>

	<div class="main-content-section">
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