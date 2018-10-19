<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    }
);

/* En la vista search.blade.php, crear un formulario que tenga únicamente un campo de texto. 
Este formulario tendrá el objetivo de buscar actores. 
(Tener en cuenta que el formulario deberá apuntar a la ruta localhost:8000/actors/result)
Crear la ruta /actors/result/{request}, que usará el método ActorsController@result, y 
retorne la vista result.blade.php.
En el controlador ActorsController, el método result deberá utilizar Request y 
Eloquent para obtener los actores cuyo nombre contenga los caracteres buscados. 
Guardar el actor en la variable $results, y enviarla a la vista localhost:8000/actors/result. 
(Se recomienda utilizar el método where)*/

Route::get('/actors', 'ActorsController@index'); 
Route::get('/actors/search', 'ActorsController@search');
Route::post('/actors/results/{request}', 'ActorsController@result');

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/create', 'MoviesController@create');
Route::post('/movies/store', 'MoviesController@store');
Route::get('/movies/show/{id}', 'MoviesController@show');

// Route::get('/', function () {
//    return view('index');
// });
//
// Route::get('/genres', function () {
// 	$genres = DB::table('genres')->get();
//    return view('genres.index')->with(compact('genres'));
// });