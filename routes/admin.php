<?php

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::middleware(['admin'])->group(function () {
  Route::group(['prefix' => 'admin'], function () {
  	
	  Route::get('/', function () {
	      $users[] = Auth::user();
	      $users[] = Auth::guard()->user();
	      $users[] = Auth::guard('admin')->user();
	      //dd($users);
	      return view('admin.home');
	  })->name('admin.home');

  });
});