<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'usuario' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //con el termino file se guarda la foto en la bd, pero se guarda la ruta y deberia ser el nombre.
            'avatar' => ['file'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){  
        
        $request = request();
        
        if($request->hasfile('avatar')){

            $request->validate([
                'avatar' => 'file',
              ]);
            //cod1= guarda ruta de archivo y no nombre. Linea 56,57 y 60 se agrego
            //cod1  $nombreAvatar = $request->file('avatar')->store('public');
            //cod1 $user->avatar = basename($nombreAvatar);
            $ruta = $request->file('avatar')->store('public');
            $nombreAvatar = basename($ruta);
            // $user->avatar = $nombreAvatar;
        
    
        
            $user->avatar = $data[$nombreAvatar];
            $user->name = $data["name"];
            $user->usuario = $data["usuario"];
            $user->surname = $data["surname"];
            $user->email =$data["email"];
            //$user->provincia=$data["provincia"];
        
    }
    

        else {
            
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'usuario' => $data['usuario'],
            'email' => $data['email'],
            'avatar' => $data['avatar'],
            'password' => Hash::make($data['password']),
            // dd($data),
   
        ]);
       
    }
}

};
