@extends('layauts.app')

@section('titulo')

    Hola desde el dashboard

@endsection

@section('contenido')

        <div class="md:flex md:justify-center md:gap-10 md:ítems-center">

            <div class="md:w-6/12 p-5 border-2 border-dashed">
                <img src="{{ asset('img/usuario.2.png') }}" alt="">
            </div>

            <div class="md:w-4/12 h-4/5 bg-white p-6 rounded-lg shadow-xl">

                <form method="post" action="{{route('login')}}" novalidate>
                    @csrf 

                    @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}} </p>
                    @endif

                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                        <a type="text" name="name" id="name" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->name}} {{auth()->user()->username}}</span></a>
                        
                    </div>
                    
                    
                    

                    <input type="submit" value="Actualizar datos" class=" actualizar bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

                    <input type="submit" value="Eliminar datos" class=" eliminar bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

                </form>
            </div>
        </div>

@endsection
