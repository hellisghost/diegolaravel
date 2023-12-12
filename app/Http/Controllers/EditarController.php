<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EditarController extends Controller
{
    public function index(Int $id)//Declara un parámetro $id en el método
    {
        $empleado = Empleado::where('id', '=', $id)->first();
        return view('editar', ["empleado" => $empleado]);
    }
}
