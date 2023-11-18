@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo usuario")

@section('contenido')
    <div class=" w-full text-3xl">
        <h1>Eliminar usuario</h1>
        <h2>Esta seguro de elimar al usuario!!!!!</h2>
        <table class="border-collapse border border-gray-300">
            <thead class="gap-x-1">
                <th class="border border-gray-300 p-2">Nombre</th>
                <th class="border border-gray-300 p-2">Identificacion</th>
                <th class="border border-gray-300 p-2"> Telegono</th>
                <th class="border border-gray-300 p-2">Direccion </th>
            </thead>
            <tbody>
                
                    <tr>
                        <td class="border border-gray-300 p-2">{{$user->name}}</td>
                        <td class="border border-gray-300 p-2">{{$user->identification}}</td>
                        <td class="border border-gray-300 p-2">{{$user->phone}}</td>
                        <td class="border border-gray-300 p-2">{{$user->address}}</td>

                    </tr>
            </tbody>
        </table>
        <form action="{{route('Users.destroy',$user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route('users.index')}} "class="bg-blue-400 w-44 h-10 text-white text-center">Regresar</a>
            <button class="bg-red-400 w-44 h-10 text-white text-center">Eliminar</button>
        </form>
        
@endsection