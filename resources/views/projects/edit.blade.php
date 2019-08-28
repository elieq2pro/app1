@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
@include('partials.validation-errors')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-10 mx-auto">
			<form method="POST" action="{{ route('projects.update', $project) }}" class="bg-white shadow rounded py-3 px-4">
				@method('PATCH')
				<h1 class="display-4">Editar proyecto</h1>
				@include('projects._form', ['btnText' => 'Actualizar'])
			</form>
		</div>
	</div>
</div>
@endsection