<?php

namespace App\Http\Controllers\webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class solicitarController extends Controller
{
    protected $dirApp   =   "webapp";     /* El directorio de las Vistas de los Usurias autenticado (AUTH)*/
    

    public function solicitar(){
    	return view($this->dirApp.'.sections.solicitud');
    }
}
