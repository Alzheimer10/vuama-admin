let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/app/js/app.js', 'public/js');
// mix.js('resources/assets/admin/js/app.js', 'public/js/admin');
// mix.js(['node_modules/bootstrap/dist/js/bootstrap.min.js'],'public/js/lib.js');
mix.styles([
		'node_modules/bootstrap/dist/css/bootstrap.min.css',
		'node_modules/animate.css/animate.min.css'
	], 'public/css/lib.css');