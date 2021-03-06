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
//Crear usuario desde las rutas
/*App\User::create([
	'name' => 'Josue',
	'role_id' => '2',
	'email' => 'elieqc95@gmail.com',
	'password' => bcrypt('kerrigan')
]);*/
/*App\Role::create([
	'name' => 'stu',
	'display_name' => 'Estudiante',
]);*/

//Ruta de prueba
Route::get('roles', function(){
	return \App\Role::with('user')->get();
});

//Route::view('/', 'home', ['nombre1' => 'Eliezer'])->name('home');//Politicas de privacidad, terminos y condiciones
App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');

// Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

// Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

// Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Route::resource('usuarios', 'UsersController')->names('users');
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
Auth::routes(['register' => false]);
