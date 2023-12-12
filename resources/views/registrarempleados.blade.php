@extends('layauts.app')

@section('titulo')

    Registrar Empleados

@endsection

@section('contenido')

        <div class="md:flex md:justify-center md:gap-10 md:ítems-center">

            <div class="md:w-6/12 p-5">
                <img src="{{asset  ('img/6d8841b6-9d24-457a-95c5-0d3de1d7bf5f.png') }}" alt="">
            </div>

            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

                <form action="{{route('empleados.store')}}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="nombre" class="border p-3 w-full rounded-lg @error('nombre')
                        border-red-500 
                        @enderror">

                        @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold">cedula</label>
                        <input type="number" name="cedula" id="cedula" placeholder="cedula" class="border p-3 w-full rounded-lg @error('cedula')
                        border-red-500
                        @enderror">

                        @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    <div class="mb-5">
                        <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold">direccion</label>
                        <input type="text" name="direccion" id="direccion" placeholder="direccion" class="border p-3 w-full rounded-lg @error ('direccion')
                        border-red-500
                        @enderror">

                        @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    <div class="mb-5">
                        <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold">telefono</label>
                        <input type="number" name="telefono" id="telefono" placeholder="telefono" class="border p-3 w-full rounded-lg @error('telefono')
                        border-red-500
                        @enderror">

                        @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    

                    <input type="submit" value="Crear cuenta" class=" cuenta bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">
                </form>
            </div>
        </div>

@endsection