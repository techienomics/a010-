@extends('layouts.base')

@section('', 'Details for {{ $movie->title }}' )

@section('main_content')
    <p>Detalles sobre:</p>
	<h2>{{ $movie->title }}</h2>
	<ul>
        <li><b>Viewers Rating:</b> {{ $movie->rating }} (of 10).</li>
        <li><b>Awards:</b> {{ $movie->awards }} (worldwide).</li>
        <li><b>Length:</b> {{ $movie->length ? "$movie->length minutes." : "n/d." }} </li>
	</ul>
    <a href="/movies" class="btn btn-sm btn-info">View full list</a>
@endsection