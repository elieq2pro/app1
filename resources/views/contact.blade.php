@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-10 mx-auto">
			<form method="POST" action="{{ route('messages.store') }}" class="bg-white shadow rounded py-3 px-4">
			@csrf
			<h1 class="display-4">@lang('Contact')</h1>
			<div class="form-group">
				<label for="name">Nombre</label>
				<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="subject">Asunto</label>
				<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" id="subject" type="text" name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>
				@error('subject')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="content">Mensaje</label>
				<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" id="content" name="content" placeholder="Mensaje">{{ old('content') }}</textarea><br>
				@error('content')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<button class="btn btn-primary btn-lg btn-block">Enviar</button>
		</form>
		</div>
	</div>

	@include('partials.session-status')


</div>
@endsection