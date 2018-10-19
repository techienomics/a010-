@extends('layouts.base')

@section('title', 'Movies')

@section('main_content')
	<h2>Listado de películas</h2>
	<br><a href="/movies/create" class="btn btn-info btn-lg">New Movie</a>
	<br><a href="/movies/create" class="btn btn-warning btn-lg">Edit Movie</a>
	
	<ul>
	@foreach ($movies as $oneMovie)
		<li style="padding: 5px 0;">{{ $oneMovie->title }}
		(Length: {{ "$oneMovie->length minutes" ?? "n/d" }})
			<a href="/movies/show/{{ $oneMovie->id }}" class="btn btn-success">[+]</a>
		</li>
	@endforeach
	</ul>

	<h3>Best movies:</h3>	
	<ul>
	@foreach ($movies as $oneMovie)
		<li>{{ $oneMovie->getTitleAndRating() }}</li>
	@endforeach
	</ul>
@endsection