{{-- get master layout --}}
@extends('master')

{{-- insert title --}}
@section('title', 'Portfolio')

{{-- main content --}}
@section('content')

	<div class="main-content-section">
		<div class="row">
			<h1>Projecten</h1>
		</div>
		<div class="row">
			<p>Een overzicht van gemaakte projecten</p>
		</div>
      <portfolio v-on:open-modal="toggleModal"/>
	</div>



@endsection