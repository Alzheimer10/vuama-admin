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

/** 
 *  Note: middleware optional 
 */
Route::get('/api/route/{name}', 'RouteController@index'); 

Route::get('/','WebApp\AppController@home')->name('home');

Route::get('/contacto',function(){
	return view('website.sections.contact');
})->name('contact');

Route::get('/nosotros',function(){
	return view('website.sections.about');
})->name('about');

Route::get('/como-funciona',function(){
	return view('website.sections.howWork');
})->name('howWork');

Route::get('/ayuda',function(){
	return view('website.sections.help');
})->name('help');

Route::get('/politica-de-privacidad',function(){
	return view('website.sections.privacy_policy');
})->name('privacy-policy');

Route::get('/proveedores',function(){
	return view('website.sections.providers');
})->name('providers');

Route::get('/trabajos',function(){
	return view('website.sections.jobs');
})->name('jobs');

Route::get('/oficinas',function(){
	return view('website.sections.offices');
})->name('offices');