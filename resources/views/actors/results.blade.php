@extends('layouts.base')

@section('title', 'Search Results')

@section('main_content')
	<h2>Search Results for $request->first_name $request->last_name:</h2>
	<ul>
	@foreach ($actorsWhereName as $actor)
		<li>{{ $actorsWhereName->first_name $actorsWhereName->last_name}}</li>
	@endforeach
	</ul>
@endsection