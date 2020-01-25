{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')


	<div class="main-intro">
		<div class="row">
			<h1>Welkom</h1>
		</div>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\
		</div>
	</div>
	
	{{-- featured portfolio items --}}
	<div class="row main-featured">
		<div class="column column-25">
			<p>1</p>
		</div>
		<div class="column column-40">
			<p>2</p>
			
		</div>
		<div class="column column-25">
			<p>3</p>
			
		</div>
	</div>

	<div class="row main-versions">
		
	</div>



@endsection