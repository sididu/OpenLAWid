@extends('adminlte::page')

	@section('title', 'Legal IT')

	@section('css')

	@endsection

		@section('content_header')
			<div>
				<h3><a href='home' ><img class="push-left" src="dist/img/openlaw-dark.png" height="50"></a>
				  Legal IT
				  <small> Law Office Software</small>
				</h3>
			</div>
		@stop

			@section('content')

			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">DAFTAR BENDA SITAAN</h3>				
				</div>
				<div class="box-body">
					@include('partials._bendasitaan')
				</div>

		@stop

