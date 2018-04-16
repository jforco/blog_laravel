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
use Illuminate\Support\Facades\Auth; 
Route::get('/', function () {
    return view('index');
});

/*
Route::get('logout', function () {
    Auth::logout();
});
*/

Route::get('/acerca-de', function () {
    return view('acerca-de.acerca-de');
});
Route::get('/acerca-de/hechos-divertidos', function () {
    return view('acerca-de.hechos-divertidos');
});
Route::get('/galeria-fotos', function () {
    return view('acerca-de.galeria-fotos');
});



Route::get('/consejos-negocio', function () {
    return view('consejos-negocio.consejos-negocio');
});
Route::get('/guia-negocio', function () {
    return view('consejos-negocio.guia-negocio');
});
Route::get('/preguntas-frecuentes', function () {
    return view('consejos-negocio.preguntas');
});



Route::get('/noticias', 'PostController@noticias');
Route::get('/noticias/{slug}', 'PostController@noticia_slug');
Route::get('/eventos', 'PostController@eventos');
Route::get('/eventos/{slug}', 'PostController@evento_slug');



Route::get('/inversiones', function () {
    return view('inversiones.inversiones');
});
Route::get('/inversiones/teclu', function () {
    return view('inversiones.teclu');
});
Route::get('/inversiones/cuatropf', function () {
    return view('inversiones.cuatropf');
});



Route::get('/blog', 'PostController@blog');
Route::get('/blog/{slug}', 'PostController@blog_slug');


Route::get('/contacto', function () {
    return view('contacto.index');
});
Route::post('/contacto', 'ContactoController@contacto');



Route::get('buscar', function () {
	return 'busqueda';
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
