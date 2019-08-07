@extends('layout')

@section('content')
	<h1>Todos los usuarios</h1>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>@lang('name')</th>
			<th>@lang('email')</th>
			<th>@lang('role')</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->role }}</td>
			</tr>
		@endforeach
	</table>
@endsection