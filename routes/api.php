<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Filme;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('apiFilme', 'ApiFilmeController@index');
Route::get('apiFilme/{id}', 'ApiFilmeController@show');
Route::post('apiFilme/store', 'ApiFilmeController@store');
Route::put('apiFilme/{id}', 'ApiFilmeController@update');
Route::delete('apiFilme/{id}', 'ApiFilmeController@delete');