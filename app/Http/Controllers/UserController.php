<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class UserController extends Controller
{
    //function verUsuario($id){
    function verInfoUsuario($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('perfil',$vac);
        
    }
    

    //function modificarDatos(Request $request){
    function editarDatos(Request $request){


        $reglas=[
            'name'=>"string|required|min:1",
            'usuario'=>"string|min:1",
            'surname'=>"string|required|min:1",
            'email'=>"E-Mail|required|min:5",
            'avatar'=>"image",

          ];
    
          $mensajes=[
            'string'=> "Sólo puede ingresar texto",
            'required'=> "Este campo es obligatorio",
            'min'=> "Este campo requiere al menos 1 carateres",
            'unique'=> "Este nombre ya fue utilizado",
            'image'=>"Sólo puede subir archivos .jpg, .jpeg o .png",
            'e-mail'=>"El formato email no es válido",
          ];
          $this->validate($request, $reglas,$mensajes);


        $user = Auth::user();
        $id = Auth::user()->id;

        if($request->hasfile('avatar')){

            $request->validate([
            'avatar' => 'file',
            ]);

        $nombreAvatar = $request->file('avatar')->store('public');
        $user->avatar = basename($nombreAvatar);
    }

        $user->name = $request["name"];
        $user->usuario = $request["usuario"];
        $user->surname = $request["surname"];
        $user->email =$request["email"];
        
        //$user->provincia=$request["provincia"];

        $user->save();

        return redirect('perfil/'.$id);

    }

    //function tomarDatos($id){
    function traerDatos($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('editarperfil',$vac);

    }

    public function perfilDestroy(Request $req)
    {
      $id=$req["id"];
      $user = User::find($id);
      
        $user->delete();
        return redirect("/");
    }

}