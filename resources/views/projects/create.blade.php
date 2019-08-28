@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
@include('partials.validation-errors')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-10 mx-auto">
			<form method="POST" action="{{ route('projects.store') }}" class="bg-white shadow rounded py-3 px-4">
				<h1 class="display-4">Crear proyecto</h1>
				@include('projects._form', ['btnText' => 'Guardar'])
			</form>
		</div>
	</div>
</div>
@endsection