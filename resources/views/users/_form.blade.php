@csrf
<p><label for="avatar">
	<input type="file" name="avatar">
</label></p>
<p><label for="nombre">
	Nombre
	<input class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}">
</label></p>
<br>
<p><label for="email">
	Email
	<input class="form-control" type="text" name="email" value="{{ old('email', $user->email) }}">
</label></p>
<br>
<button class="btn btn-success">{{ $btnText }}</button>