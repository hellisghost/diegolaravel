@extends('layauts.app')

@section('title')
    editar empleados
@endsection

@section('contenido')
    
<div class="md:flex md:justify-center md:gap-10 md:ítems-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <div class="w-1/2 p-10">
            <a href="{{ route('dashboard.index')}}" class="w-full p-2 bg-blue-500 text-black rounded hover:scale-105 transition-all">Volver</a>
            <form action="{{ route('editar.edit', $empleado->id)}}" class="flex flex-col gap-4" method="post">
                @csrf
                <div class="flex flex-col gap-2 pt-10">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre" class="border w-96 border-gray-400 p-2 rounded @error('nombre') @enderror" value="{{ $empleado->nombre }}">
                </div>
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-2">
                    <label for="cedula">Cedula</label>
                    <input type="number" name="cedula" placeholder="Cédula" class="border w-96 border-gray-400 p-2 rounded @error('cedula') @enderror" value="{{ $empleado->cedula }}">
                </div>
                @error('cedula')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-2">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" placeholder="Direccion" class="border w-96 border-gray-400 p-2 rounded @error('direccion') @enderror" value="{{ $empleado->direccion }}">
                </div>
                @error('direccion')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-2">
                    <label for="telefono">Teléfono</label>
                    <input type="number" name="telefono" placeholder="Teléfono" class="border w-96 border-gray-500 p-2 rounded @error('telefono') @enderror" value="{{ $empleado->telefono }}">
                </div>
                @error('telefono')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <button type="submit" class="w-full p-2 bg-blue-500 text-black rounded hover:scale-105 transition-all">finalizar</button>
            </form>
        </div>

    </div>
</div>

@endsection