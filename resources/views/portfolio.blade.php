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
			<p>Een overzicht van gemaakte projecten</p>
		</div>
		<div class="row port-row">
			<div class="column column-25 port-item">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-3-thumb.png')}}">
				</div>
			</div>
			<div class="column column-25 port-item">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-2-thumb.png')}}">
				</div>
			</div>
			<div class="column column-25 port-item">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-1-thumb.png')}}">
				</div>
			</div>
			<div class="column column-25 port-item">
				<div class="port-img-wrap has-hover">
					<img src="{{asset('img/port-1-thumb.png')}}">
				</div>
			</div>
		</div>
	</div>



@endsection