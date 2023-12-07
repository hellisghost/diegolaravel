

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Principal</title>


    </head>
    <body class="bg-gray-200">

        <header class=" flex justify-between p-5 border-b bg-white font-bold shadow">
            <h1 class="text-3xl font-black">
                Devstagram
            </h1>
            {{--comentarios--}}
            @auth()
                <nav class="flex gap-8 items-center">
                    <a class="font-bold uppercase text-gray-600" href="#">
                        Hola <span class="font-bold">{{auth()->user()->name}} {{auth()->user()->username}}</span></a>


                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600">Cerrar Sesión</button>
                        </form>
                    
                </nav>
            @endauth

            @guest()
                
                <nav class="flex gap-2 items-center">

                    <a class="font-bold uppercase text-gray-600" href="{{route('login')}}">Login</a>

                    <a class="font-bold uppercase text-gray-600" href="{{route('register')}}">Crear cuenta</a>

                </nav>

            @endguest


        </header>

        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>

            @yield('contenido')

        </main>



        <footer class="text-center p-5 text-gray-500 font-bold uppercase">

                Devstagram - Todos los derechos reservados {{date ('Y')}}
                

        </footer>

    

    </body>
</html>
