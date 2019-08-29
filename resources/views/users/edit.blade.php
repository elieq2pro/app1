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

<form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
	@csrf @method('PATCH')
	<img width="100px" src="{{ Storage::url($user->avatar) }}">
	@include('users._form', ['btnText' => 'Actualizar'])
</form>

@endsection