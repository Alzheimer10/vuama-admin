<?php

namespace App\Http\Controllers\WebAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \App\Models\Service;
class AppController extends Controller
{

    protected $dirView       = "webapp";     /* El directorio de las Vistas de los Usurias autenticado (AUTH)*/


    /**
    * Retorna la vista de la ruta "/" dependiendo si está autenticado o no.
    * @author CarlosAnselmi
    * @return View Blade
    */    
    function home(){
        
    }

}
