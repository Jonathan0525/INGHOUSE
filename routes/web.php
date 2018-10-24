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

Route::get('/notificacion', function () {

	return view('dashboard.user.notificacion');

})->name('notificacion');

Route::get('/notificacion_asesoria', function () {

	return view('dashboard.asesoria.notificacion');

})->name('notificacion_asesoria');

Route::group(['prefix' => 'dashboard'], function(){
		Route::resource('adminpanel', 'AdminUserController');
		Route::resource('adminpanel2', 'AdminUserController2');
		Route::resource('user', 'UserController');
		Route::resource('frontservicio', 'ServiciosFrontController');
		Route::resource('frontasesorias', 'FronAsesorias');
// 	Route::get('user/notificacion', function () {
// })->name('dashboard.user.notificacion');
// Route::get('user/list_servicios', [
// 	'as' => 'frontservicio.index',
// 	'uses' => 'UserController@list_servicios'
// ]);
		Route::get('user/create_s/{id}', [
		'as' => 'user.create_s',
		'uses' => 'UserController@createservice'
		]);


		Route::get('asesoria/create_a/{id}', [
		'as' => 'asesoria.create_s',
		'uses' => 'FronAsesorias@createasesoria'
		]);
});