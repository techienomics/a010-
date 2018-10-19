@extends('layouts.base')

@section('title', 'Search Actors')

@section('main_content')
	<h3>Search Actors by name:</h3>
    <form action="/actors/results" method="post">
        @csrf
        <div class="form-group">
            <label for="first_name">By First Name: </label>
            <input type='text' name='first_name' value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
            <label for="last_name">By Last Name: </label>
            <input type='text' name='last_name' value="{{ old('last_name') }}">
        </div>
        
        <button type="submit" class="btn btn-success">Search</button>
    </form>
@endsection