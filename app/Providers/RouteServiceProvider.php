<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespacea_admin = 'App\Http\Controllers\WebAdmin';
    protected $namespacea_admin_api = 'App\Http\Controllers\Api\WebAdmin';
    protected $namespacea_app = 'App\Http\Controllers\WebApp';
    protected $namespacea_app_api = 'App\Http\Controllers\Api\WebApp';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapWebAppRoutes();

        $this->mapWebAdminRoutes();

    }



    /**
     * Define the "webapp" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebAppRoutes()
    {

        Route::middleware('web','auth')
             ->namespace($this->namespacea_app)
             ->group(base_path('routes/appWeb/webApp.php'));

        Route::middleware('api')
             ->prefix('api/app')
             ->namespace($this->namespacea_app_api)
             ->group(base_path('routes/appWeb/apiApp.php'));


        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/appWeb/authApp.php'));
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebAdminRoutes()
    {

        Route::middleware('web','admin')
             ->namespace($this->namespacea_admin)
             ->prefix('admin')
             ->group(base_path('routes/adminWeb/webAdmin.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Auth\Admin')
             ->prefix('admin')
             ->group(base_path('routes/adminWeb/authAdmin.php'));

        Route::middleware('api')
             ->prefix('api/admin')
             ->namespace($this->namespacea_admin_api)
             ->group(base_path('routes/adminWeb/apiAdmin.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
