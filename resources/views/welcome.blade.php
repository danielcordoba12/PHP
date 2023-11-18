@extends('layout/plantilla')

    <div class=" flex w-screen h-20 text-3xl font-bold  justify-center items-center bg-gray-400">
        <h1 class="">CRUD</h1>
    </div>
    <h2 class=" flex   justify-center items-center text-3xl font-bold ">Listado de usuarios</h2>
    @if($mensaje = Session::get('success'))
    <div>
        {{$mensaje}}
    </div>
    @endif
    <div class="h-20">
        <p class="">
            <a href="{{route ("users.create")}}" class="bg-blue-700 text-white text-3xl"><span><i class="fa-solid fa-user-plus"></i></span>Crear usuario</a>
        </p>
    </div>
    <div class="flex w-screen h-30  justify-center items-center">
            <table class="border-collapse border border-gray-300">
                <thead class="gap-x-1">
                    <th class="border border-gray-300 p-2"> Nombre</th>
                    <th class="border border-gray-300 p-2">Identificacion</th>
                    <th class="border border-gray-300 p-2">Celular</th>
                    <th class="border border-gray-300 p-2">Direccion </th>
                    <th class="border border-gray-300 p-2">Editar</th>
                    <th class="border border-gray-300 p-2">Eliminar</th>
                    <th class="border border-gray-300 p-2">PDF</th>

                </thead>
                <tbody>
                    @foreach ($datos as $info)
                        <tr>
                            <td class="border border-gray-300 p-2">{{$info ->name }}</td>
                            <td class="border border-gray-300 p-2">{{$info ->identification}}</td>
                            <td class="border border-gray-300 p-2">{{$info ->phone}}</td>
                            <td class="border border-gray-300 p-2">{{$info ->address}}</td>
                            <td class="border border-gray-300 p-2">
                                <form action="{{route('Users.edit', $info->id)}}" method="GET">
                                    <button class="bg-blue-400 w-44 h-10 text-white text-center">
                                        <span><i class="fa-solid fa-pen"></i></span>
                                    </button>
                                </form>
                            </td>

                            <td class="border border-gray-300 p-2">
                                <form action="{{route('Users.show', $info->id)}}" method="GET">
                                    <button class="bg-blue-400 w-44 h-10 text-white text-center">
                                        <span><i class="fa-solid fa-delete-left"></i></span>
                                    </button>
                                </form>
                            </td>
                            <td class="border border-gray-300 p-2">
                                <form action="{{route('Users.report', $info->id)}}" method="GET">
                                    <button class="bg-blue-400 w-44 h-10 text-white text-center">
                                        <span>Descargar</span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

