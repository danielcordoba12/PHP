@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo usuario")

@section('contenido')
    <div class="w-full text-xl ">
        <h1 class="mb-10 text-3xl font-bold">Registrar usuario</h1>
        <form action="{{route('Users.store')}}" method="POST">
            @csrf
            <div class="">

                <label class="">Nombre</label><br>
                <input  class="m-4 border border-black " type="text" name="name" placeholder="Ingrese su nombre"><br>
                <label>Identificacion</label><br>
                <input class="m-4 border border-black" type="text" name="identification" placeholder="Ingrese su identificacion"><br>
                <label>Telefono</label><br>
                <input  class="m-4 border border-black "type="text" name="phone" placeholder="Ingrese su telefono"><br>
                <label>Direccion</label><br>
                <input class="m-4 border border-black " type="text" name="address" placeholder="Ingrese su direccion"> <br><br>
                <button class="h-10 text-white bg-blue-400 m-4text-center w-44">Agregar</button>
                <a href="{{route("users.index")}}"  class="h-10 text-center text-white bg-blue-400 w-44">Regresar</a>
            </div>
        </form>
    </div>
@endsection
