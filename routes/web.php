<?php

use Illuminate\Support\Facades\Route;

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
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/createMovie','FilmeController@createMovie')->name('createMovie');
	Route::get('/listaFilme','FilmeController@indexMovie')->name('listaFilme');
	Route::post('/storeMovie','FilmeController@storeMovie')->name('storeMovie');
	Route::get('/editMovie/{id}','FilmeController@editMovie')->name('editMovie');
	Route::post('/updateMovie/{id}','FilmeController@updateMovie')->name('updateMovie');
	Route::put('/delete/{id}', 'FilmeController@deleteMovie')->name('delete');
	




});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

