<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::get('/', 'InicioController@index');
Route::get('index', 'InicioController@inicio');


/*Route::group(['prefix'=>'reservar'],function()
{
	Route::get('/', 'reservarController@index');
	Route::get('solicitar', 'reservarController@solicitar');
	Route::get('solicitarReserva', 'reservarController@solicitarReserva');
	Route::get('reservas', function()
	{
		echo "probando esta cosa";
	});

});*/
Route::get('reservar/', 'reservarController@index');
Route::get('reservar/solicitar', 'reservarController@solicitar');
Route::post('/reservar/confirmar', [
	'as' => 'confirmar',
	'uses' => 'reservarController@confirmarReserva'
]);
Route::get('reservar/buscarEquipo','reservarController@buscarEquipo');

Route::resource('reservar', 'reservarController');




Route::resource('alumno','ControladorAlumno');

Route::resource('agenda','ControladorReserva');

//Route::get('crear', 'ControladorAlumno@create');

