<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            //dd($request -> get(key: 'name'));
            $this ->validate($request,[

                'nombre'=>'required' ,
                'cedula'=>'required',
                'direccion'=>'required',
                'telefono'=>'required'
            ]);
    
            
            Empleado::create([
                'nombre' => $request->nombre, 
                'cedula' => $request->cedula, 
                'direccion' => $request->direccion, 
                'telefono' =>  $request->telefono
            ]);
           
    
            return redirect()->route('dashboard.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id)
    {
         $this->validate($request, [
             "nombre" => 'required',
             "cedula" => 'required|integer',
             "direccion" => 'string',
             "telefono" => 'string'
         ]);

         $empleado = Empleado::where('id', '=', $id)->first();
         $empleado->nombre = $request->nombre;
         $empleado->cedula = $request->cedula;
         $empleado->direccion = $request->direccion;
         $empleado->telefono = $request->telefono;

         $empleado->save();

         return redirect()->route('dashboard.index');

     }

     public function delete(Int $id) {
         $empleado = Empleado::where('id', '=', $id)->first();
         $empleado->delete();  //recuperar un empleado de la base de datos cuyo ID coincide con el valor proporcionado en la URL.

         return redirect()->route('dashboard.index');
    }

}
