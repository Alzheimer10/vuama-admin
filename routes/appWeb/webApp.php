<?php 

Route::get('/ayuda-perfil','AppController@help_user')->name('help-user');
Route::get('/mi-bandeja','AppController@inbox')->name('inbox');

Route::get('/mi-cuenta','PerfilController@index')->name('my-account');
Route::get('/perfil/{id}','PerfilController@perfil')->name('perfil');
Route::post('/editProfile','PerfilController@editProfile')->name('editProfile');
Route::post('/upload_avatar','PerfilController@upload_avatar')->name('upload_avatar');
Route::post('/updatePassword','PerfilController@updatePassword')->name('updatePassword');
Route::get('/directorio','DirectoryController@directory')->name('directory');
Route::get('/solicitar','solicitarController@solicitar')->name('solicitar');

Route::get('/proyectos','ProjectController@index')->name('projects');
Route::get('/proyecto/{id}','ProjectController@show')->name('show_projects');
Route::get('/proyectos/{services}','ProjectController@projectsServices')->name('projects_services');
