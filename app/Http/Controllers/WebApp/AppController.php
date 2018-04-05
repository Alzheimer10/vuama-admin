<?php

namespace App\Http\Controllers\webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \App\Models\Service;
class AppController extends Controller
{

    protected $dirWebsite   = "website";    /* El directorio de las Vistas de los Usuarios SIN autenticar (GUEST)*/
    protected $dirApp       = "webapp";     /* El directorio de las Vistas de los Usurias autenticado (AUTH)*/


    /**
    * Retorna la vista de la ruta "/" dependiendo si está autenticado o no.
    * @author CarlosAnselmi
    * @return View Blade
    */    
    function home(){
        if (!Auth::check())
            return view('website.home');
        else{ // LOGICA DE UN USUARIO AUTENTICADO
            $services = Service::all();
            return view($this->dirApp.'.home')->with('services',$services);
        }
    }
        
    /**
    * Retorna la vista de la ruta "/mi-bandeja"
    * @author CarlosAnselmi
    * @return View Blade
    */    
    function inbox(){
        return view($this->dirApp.'.sections.inbox');
    }

}
