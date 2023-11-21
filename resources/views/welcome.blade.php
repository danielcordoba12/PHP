@extends('layout/plantilla')

    <div class="flex items-center justify-center w-screen h-20 text-3xl font-bold bg-gray-400 ">
        <h1 class="">CRUD</h1>
    </div>
    <h2 class="flex items-center justify-center text-3xl font-bold ">Listado de usuarios</h2>
    @if($mensaje = Session::get('success'))
    <div>
        {{$mensaje}}
    </div>
    @endif
    <div class="h-20">
        <p class="">
            <a href="{{route ('users.create')}}" class="text-3xl text-white bg-blue-700"><span><i class="fa-solid fa-user-plus"></i></span>Crear usuario</a>
        </p>
    </div>
    <div class="flex items-center justify-center w-screen h-30">
            <table class="border border-collapse border-gray-300">
                <thead class="gap-x-1">
                    <th class="p-2 border border-gray-300"> Nombre</th>
                    <th class="p-2 border border-gray-300">Identificacion</th>
                    <th class="p-2 border border-gray-300">Celular</th>
                    <th class="p-2 border border-gray-300">Direccion </th>
                    <th class="p-2 border border-gray-300">Editar</th>
                    <th class="p-2 border border-gray-300">Eliminar</th>
                    <th class="p-2 border border-gray-300">PDF</th>

                </thead>
                <tbody class="text-center">
                    @foreach ($datos as $info)
                        <tr>
                            <td class="p-2 border border-gray-300">{{$info ->name }}</td>
                            <td class="p-2 border border-gray-300">{{$info ->identification}}</td>
                            <td class="p-2 border border-gray-300">{{$info ->phone}}</td>
                            <td class="p-2 border border-gray-300">{{$info ->address}}</td>
                            <td class="w-10 p-2 border border-gray-300">
                                <form action="{{route('Users.edit', $info->id)}}" method="GET">
                                    <button class="w-10 h-10 text-center text-blue-600 w-44">
                                        <span><i class="fa-solid fa-pen"></i></span>
                                    </button>
                                </form>
                            </td>

                            <td class="w-4 p-2 border border-gray-300">
                                <form action="{{ route('Users.show', $info->id) }}" method="GET">
                                    <button class="w-10 h-10 text-center text-blue-600">
                                        <span><i class="text-sm fa-solid fa-delete-left"></i></span>
                                    </button>
                                </form>
                            </td>

                            <td class="w-10 p-2 border border-gray-300">
                                <form action="{{route('Users.report', $info->id)}}" method="GET">
                                    <button class="h-10 text-center text-white bg-blue-400 rounded w-36">
                                        <span>Descargar</span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

