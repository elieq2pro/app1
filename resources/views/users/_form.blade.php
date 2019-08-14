@csrf
<label>
	Nombre <br>
	<input type="text" name="name" value="{{ old('name', $user->name) }}">
</label>
<br>
<label>
	Email <br>
	<input type="text" name="email" value="{{ old('email', $user->email) }}">
</label>
<br>
<button>{{ $btnText }}</button>