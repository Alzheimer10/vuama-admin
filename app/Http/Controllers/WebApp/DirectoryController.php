<?php

namespace App\Http\Controllers\webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{
    protected $dirApp   =   "webapp";     /* El directorio de las Vistas de los Usurias autenticado (AUTH)*/
    
    /**
    * Retorna la vista de la ruta "/perfil"
    * @author CarlosAnselmi
    * @return View Blade
    */    
    public function directory(){
    	$services = \App\Models\Service::all();
        return view($this->dirApp.'.sections.directory')->with('users',\App\User::all())->with('services',$services);
    }
}
