	<?php

use Illuminate\Http\Request;

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
Route::group(['prefix' => 'alunos'], function(){
	Route::get('/', 'AlunosController@index')->name('index');
	Route::post('/', 'AlunosController@store')->name('store');
	Route::get('/{id}', 'AlunosController@show')->name('show');
	Route::post('/{id}', 'AlunosController@update')->name('update');
	Route::delete('/{id}', 'AlunosController@destroy')->name('destroy');
});
