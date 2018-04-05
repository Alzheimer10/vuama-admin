<?php 

Auth::routes();
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');