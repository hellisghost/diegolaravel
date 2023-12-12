@extends('layauts.app')

@section('titulo')

    actualizacion de datos de sesión

@endsection

@section('contenido')

        <div class="flex flex-col gap-3 p-6 rounded-lg shadow-xl bg-white">
            <div class="md:w-full   flex flex-row justify-between items-center">

                <h1 class="justify-start font-bold">Empleados</h1>
                <a href="{{ url('crear')}}" class=" p-1 rounded  bg-green-500 text-white">+crear</a>
                
                

            </div>

            <table>
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-600 uppercase">ID</th>
                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-600 uppercase">NOMBRE</th>
                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-600 uppercase">CEDULA</th>
                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-600 uppercase">DIRECCION</th>
                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-600 uppercase">TELEFONO</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($empleados as $i)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->nombre }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->cedula }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->direccion }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->telefono }}</td>
                            <td class="flex flex-row gap-3">
                                <a href="{{ route('editar.index', $i->id) }}" class="p-1 rounded bg-yellow-600 text-white">Editar</a>
                                <a href="{{ route('delete', $i->id)}}" class="p-1 rounded bg-red-600 text-white">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection