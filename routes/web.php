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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard'], function(){

	Route::resource('adminpanel', 'AdminUserController');


	Route::resource('user', 'UserController');

	Route::resource('frontservicio', 'ServiciosFrontController');


// Route::get('user/list_servicios', [
// 	'as' => 'frontservicio.index',
// 	'uses' => 'UserController@list_servicios'
// ]);

Route::get('user/create_s/{id}', [
	'as' => 'user.create_s',
	'uses' => 'UserController@createservice'
]);

});


