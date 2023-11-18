@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo usuario")

@section('contenido')
    <div class=" w-full text-3xl">
        <h1>Actualizar usuario</h1>
        <form action="{{route('Users.update',$user->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class=" p-4">
                <label class=" ">Nombre</label><br>
                <input  class="border border-black " type="text" name="name" placeholder="Ingrese su nombre" value="{{$user->name}}"><br>
                <label>identificacion</label><br>
                <input class="border border-black" type="text" name="identification" placeholder="Ingrese sus Apellidos" value="{{$user->identification}}"><br>
                <label>Celular</label><br>
                <input  class="border border-black "type="text" name="phone" placeholder="phone"value="{{$user->phone}}"><br>
                <label>Direccion</label><br>
                <input class="border border-black" type="text" name="address" placeholder="address" value="{{$user->address}}"> <br><br>
                <button class="bg-blue-400 w-44 h-10 text-white text-center"><span><i class="fa-solid fa-user-pen"></i></span> Actualizar</button>
                <a href="{{route("users.index")}}"  class="bg-blue-400 w-44 h-10 text-white text-center">Regresar</a>
            </div>
        </form>
    </div>
@endsection
