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



Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function(){

	Route::get('/', 'dashboardController@index')->name('dashboard');

	// Route::resource('user','UserController');
	// Route::resource('categories','CategoriesController');

	Route::resource('servicio', 'servicioController');
	Route::get('servicio/{id}/destroy', [
		'uses'  => 'servicioController@destroy',
		'as'	=> 'dashboard.servicio.destroy'

	]);

	// Route::resource('articles', 'ArticlesController');
	// Route::get('articles/{id}/destroy', [
	// 	'uses'  => 'ArticlesController@destroy',
	// 	'as'	=> 'dashboard.articles.destroy'

	// ]);

});



Route::group(['middleware' => ['auth'], 'prefix' => 'adminghouse'], function(){

	//Route::get('/', 'dashboardController@index')->name('dashboard');

	// Route::resource('user','UserController');
	// Route::resource('categories','CategoriesController');

	Route::resource('servicios', 'serviciosController');
	Route::get('servicios/{id}/destroy', [
		'uses'  => 'serviciosController@destroy',
		'as'	=> 'dashboard.servicios.destroy'

	]);

	// Route::resource('articles', 'ArticlesController');
	// Route::get('articles/{id}/destroy', [
	// 	'uses'  => 'ArticlesController@destroy',
	// 	'as'	=> 'dashboard.articles.destroy'

	// ]);

});
