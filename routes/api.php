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

// Route::post('/api','AppControllers@api');

// Route::get('/users','AppControllers@users')->name('api_users');

Route::group(['namespace' => 'Api'], function(){
	Route::get('/projects','ProjectController@projects')->name('api.projects');
	Route::get('/clientes','CustomersController@index')->name('api.customers');

	Route::resource('users', 'UserController',['as' => 'api']);
	Route::get('servicios','ServiceController@index')->name('api.services');
	Route::get('servicios/{id}','ServiceController@show')->name('api.service');
	Route::post('servicios/{id}','ServiceController@destroy')->name('api.service.destroy');
	Route::post('servicios','ServiceController@store')->name('api.service.store');
	Route::put('servicios','ServiceController@update')->name('api.service.update');
});
