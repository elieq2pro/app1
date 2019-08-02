@extends('layout')

@section('title', 'Portfolio')

@section('content')
<h1>Portfolio</h1>

<ul>


	@forelse ($projects as $projectItem)
		<li>{{ $projectItem->title }} <br><small>{{ $projectItem->description }}</small><br><small>{{ $projectItem->created_at->diffForHumans() }}</small> </li>
	@empty
		<li>No hay proyectos para mostrar</li>
	@endforelse
	{{ $projects->links() }}
</ul>
@endsection