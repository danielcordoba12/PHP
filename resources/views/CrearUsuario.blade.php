@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo usuario")

@section('contenido')
    <div class=" w-full text-3xl">
        <h1>Registrar usuario</h1>
        <form action="{{route('Users.store')}}" method="POST">
            @csrf
            <div class=" p-4">

                <label class=" ">Nombre</label><br>
                <input  class="border border-black " type="text" name="name" placeholder="Ingrese su nombre"><br>
                <label>Identificacion</label><br>
                <input class="border border-black" type="text" name="identification" placeholder="Ingrese su identificacion"><br>
                <label>Telefono</label><br>
                <input  class="border border-black "type="text" name="phone" placeholder="Ingrese su telefono"><br>
                <label>Direccion</label><br>
                <input class="border border-black" type="text" name="address" placeholder="Ingrese su direccion"> <br><br>
                <button class="bg-blue-400 w-44 h-10 text-white text-center">Agregar</button>
                <a href="{{route("users.index")}}"  class="bg-blue-400 w-44 h-10 text-white text-center">Regresar</a>
            </div>
        </form>
    </div>
@endsection
