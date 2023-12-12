<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class DashboardController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('dashboard', ["empleados" => $empleados]);
    }//pasa los datos de empleados como una variable llamada "empleados" a esa vista
    
}

    
