@extends('layout')

@section('title', 'Home')

@section('content')
	<h1>Home</h1>
	Bienvenid@ {{ $nombre ?? "Invitado" }} {{ $nombre1 ?? "Invit" }}
@endsection