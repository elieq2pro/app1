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
| q2pro.net = Route::get('/', function) function es closure
| q2pro.net/contacto = Route::get('contacto', function)
*/


//Route::view('/', 'home', ['nombre1' => 'Eliezer'])->name('home');//Politicas de privacidad, terminos y condiciones
App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');
Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', 'MessageController@store')->name('messages.store');

/*
Route::get('/', function(){
	$nombre = "Eliezer";
	$nombre1 = "Josue";
	return view('home')->with(['nombre' => $nombre, 'nombre1' => $nombre1]);
})->name('home');

Route::get('contactame', function(){
	return 'Hola desde la página de contacto';
})->name('contactos');

Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return 'Saludos ' . $nombre;
});
*/