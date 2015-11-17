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

/*
Route::patterns(array('id' => '[0-9]+', 'name' => '[a-zA-Z]+'));
//Route::pattern('id', '[0-9]+');
//Route::pattern('name', '[a-zA-Z]+');

Route::get('/admin/noticias/crear/{id}/{name}', function($id, $name) 
{
	return $id . " y el articulo es " . $name;

});

Route::get('/admin/noticias/editar/{id}', function($id)
{
	return "articulo " . $id . " actualizado";
});
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
