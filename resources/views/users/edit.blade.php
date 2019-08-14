@extends('layout')

@section('title', 'Editar usuario')

@section('content')
<h1>Editar usuario</h1>
{{-- @include('partials.validation-errors')
 --}}
@if (session()->has('info'))
	<div class="alert alert-success">
		{{ session('info') }}
	</div>
@endif
<form method="POST" action="{{ route('users.update', $user) }}">
	@csrf @method('PATCH')
	@include('users._form', ['btnText' => 'Actualizar'])
</form>

@endsection