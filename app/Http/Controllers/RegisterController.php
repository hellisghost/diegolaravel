<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function crear(){
        return view(view: 'auth.register');
    }

    public function creacion(){
        return view(view: 'auth.login');
    }
    public function index(){
        return view (view:'auth.register');
    }
    public function store(Request $request){
        //dd($request -> get(key: 'name'));
        $this ->validate($request,[
            'name'=>'required | min:3 |max:30' ,
        
            'username'=>'required |unique:users|min:3|max:30',
        
        
            'email'=>'required |unique:users|email|max:60',
    
        
            'password'=>'required|confirmed| min:8 |max:15',
        
        
            'password_confirmation'=>'required'

         
        ]);

        
        User::create([
            'name' => $request->name, 
            'username' => str::lower ($request->username), 
            'email' => $request->email, 
            'password' =>  $request->password
        ]);
       

        return redirect()->route('post.index');

        //autenticar
    
        auth() -> attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ]);

        //Redireccionar

        return redirect() -> route(route:'post.index');


        //otra forma de autenticar

        /*auth()-> attempt($requesto -> only('email', 'password'));*/

    }
}

    



?>