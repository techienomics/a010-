<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		@include('layouts.navbar')

		<div class="container">
			@yield('main_content')
		</div>
	</body>
</html>




<!--!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actors Index</title>

        <-- Fonts -- >
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -- >
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    


    	<!--Ion icons -- >
		<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
		<!-- jQuery -- >
		<script src="admin/js/jquery-3.3.1.min.js"></script>
		<!-- JS -- >
		<script src="admin/js/bootstrap.min.js"></script>
    </body>
</html-->