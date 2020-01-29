{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')

	<div class="main-content-section">
		<div class="row">
			<h1>Projects</h1>
		</div>
		<div class="row port-row">
			<div class="column column-20 port-item">1</div>
			<div class="column column-20 port-item">2</div>
			<div class="column column-20 port-item">3</div>
			<div class="column column-20 port-item">4</div>
		</div>
		<div class="row port-row">
			<div class="column column-20 port-item">5</div>
			<div class="column column-20 port-item">6</div>
			<div class="column column-20 port-item">7</div>
			<div class="column column-20 port-item">8</div>
		</div>
		<div class="row port-row">
			<div class="column column-20 port-item">5</div>
			<div class="column column-20 port-item">6</div>
			<div class="column column-20 port-item">7</div>
			<div class="column column-20 port-item">8</div>
		</div>
	</div>



@endsection