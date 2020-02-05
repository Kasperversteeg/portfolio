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
			<div class="column column-20 port-item">
				<div class="featured-img-wrap has-hover" id="proj-1">
					<img src="{{asset('img/logo-peluche.png')}}">
				</div>
			</div>
			<div class="column column-20 port-item">
				<div class="featured-img-wrap">
					<img src="{{asset('img/logo-pridejoy.png')}}">
				</div>
			</div>
			<div class="column column-20 port-item">
				<div class="featured-img-wrap">
					<img src="{{asset('img/port-1.png')}}">
				</div>
			</div>
			<div class="column column-20 port-item">
				<div class="featured-img-wrap">
					<img src="{{asset('img/port-1.png')}}">
				</div>
			</div>
		</div>
	</div>



@endsection