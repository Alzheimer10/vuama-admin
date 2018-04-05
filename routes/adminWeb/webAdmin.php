<?php

Route::get('/', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('servicios', function(){
	return view('admin.sections.services');
})->name('admin.services');

Route::get('clientes', function(){
	return view('admin.sections.customers');
})->name('admin.customers');