@extends('layouts.master')
@section('title', 'Solicitud')

@section('styles')
	<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
@stop

@section('content')

<div class="container-fluid">
	<!-- END PAGE HEADER-->	
	<section class="container">
		<example-component v-bind:user_id="1"></example-component>
	</section>
</div>

@endsection

@section('scripts')
@endsection
