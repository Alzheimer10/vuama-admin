<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Models\Address;

class PerfilController extends Controller
{
    protected $dirApp   =   "webapp";     /* El directorio de las Vistas de los Usurias autenticado (AUTH)*/
    
    
    /**
    * Retorna la vista de la ruta "/perfil"
    * @author CarlosAnselmi
    * @return View Blade
    */    
    public function index(){
        return view($this->dirApp.'.sections.account');
    }
 

    /**
     * Edita los datos del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProfile(Request $request)
    {
        $user = \Auth::user();
        $user->update($request->all());
        $address = Address::where('user_id', '=', $user->id)->first();
        if(!$address){
            $address = Address::create($request->all());
            $address->user_id   =   \Auth::user()->id;
            $address->save();
        }else
            $address->update($request->all());
        return redirect('/mi-cuenta');
    }

    /**
     * Actualiza la foto de perfil del usuario. La imagen de perfil se almacena con el username del mismo + la extension
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Request $request
     * @return redirect()
     */
    public function upload_avatar(Request $request)
    {
        $file = $request->file('avatar');
        $filename = \Auth::user()->username.'.'.$file->extension();
        $user = \Auth::user();
        $user->avatar = $filename;
        $user->save();
        Storage::disk("avatar")->put($filename, \File::get($file) );
        return redirect('/mi-cuenta');
    }

    /**
     * Actualiza la contraseña del usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        if(\Hash::check($request->password, \Auth::user()->password)){
            if($request->new_password == $request->repeat_password){
                $user = \Auth::user();
                $user->password = \Hash::make($request->new_password);
                $user->save();
                return redirect('/mi-cuenta');
            }else{
                // FALSE
            }
        }else{
            // FALSE
        }
    }

    /**
    * Retorna la vista de la ruta "/perfil"
    * @author CarlosAnselmi
    * @return View Blade
    */    
    public function perfil($id){
        $user = \App\User::findOrFail($id);
        return view($this->dirApp.'.sections.perfil')->with('user', $user);
    }


}
