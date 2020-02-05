{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Home')

{{-- main content --}}
@section('content')

	<div class="main-content-section">
		<div class="row">
			<h1>Projecten</h1>
		</div>
		<div class="row">
			<p>Een overzicht van de projecten die ik gemaakt heb</p>
		</div>
		<div class="row port-row">
			<div class="column column-25 port-item">
				<div class="featured-img-wrap has-hover" id="proj-1">
					<img src="{{asset('img/logo-peluche.png')}}">
				</div>
			</div>
			<div class="column column-25 port-item">
				<div class="featured-img-wrap has-hover">
					<img src="{{asset('img/logo-pridejoy.png')}}">
				</div>
			</div>
			<div class="column column-25 port-item">
				<div class="featured-img-wrap has-hover">
					<img src="{{asset('img/logo-peluche.png')}}">
				</div>
			</div>
			<div class="column column-25 port-item">
				<div class="featured-img-wrap has-hover">
					<img src="{{asset('img/logo-pridejoy.png')}}">
				</div>
			</div>
		</div>
	</div>



@endsection