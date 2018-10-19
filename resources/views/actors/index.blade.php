@extends('layouts.base')

@section('title', 'Actors')

@section('main_content')
	<h2>Listado de Actores</h2>
	<br><a href="/actors/search" class="btn btn-info btn-lg">Search Actors</a>
	<ul>
	@foreach ($actors as $actor)
		<li>{{ $actor->getFullName() }}</li>
	@endforeach
	</ul>
@endsection