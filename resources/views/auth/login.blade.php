@extends('layauts.app')

@section('titulo')

    Iniciar sesión en devstagram  

@endsection

@section('contenido')

        <div class="md:flex md:justify-center md:gap-10 md:ítems-center">

            <div class="md:w-6/12 p-5 border-2 border-dashed">
                <img src="{{ asset('img/imagen.1.jpg') }}" alt="">
            </div>

            <div class="md:w-4/12 h-4/5 bg-white p-6 rounded-lg shadow-xl">

                <form method="post" action="{{route('login')}}" novalidate>
                    @csrf

                    @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}} </p>
                    @endif
                    
                    
                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                        <input type="text" name="email" id="email" placeholder="Correo" class="border p-3 w-full rounded-lg @error ('email')
                        border-red-500
                        @enderror">

                        @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Contraseña" class="border p-3 w-full rounded-lg @error('password')
                        border-red-500
                        @enderror">

                        @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror

                    </div>
                   

                    <input type="submit" value="Iniciar Sesión" class=" inicio bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">
                </form>
            </div>
        </div>

@endsection
