@extends('layout')

@section('content')
	<h1>Todos los usuarios</h1>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>@lang('name')</th>
			<th>@lang('email')</th>
			<th>@lang('role')</th>
			<th>@lang('action')</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					{{ $user->roles->pluck('display_name')->implode(' - ') }}
				</td>
				<td>
					<a class="btn btn-info btn-xs" href="{{ route('users.edit', $user->id) }}">Editar</a><br>
					<form method="POST" action="{{ route('users.destroy', $user->id) }}">
						@csrf @method('DELETE')
						<button class="btn btn-danger btn-xs">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection