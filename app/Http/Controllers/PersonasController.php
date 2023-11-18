<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        $datos = personas::all();
        return view('welcome',compact('datos'));

    }

    public function create()
    {
        return view('CrearUsuario');
    }

    public function store(Request $request)
    {
        $personas = new personas();
        $personas -> nombre =  $request ->post('nombre');
        $personas -> apellidos =  $request ->post('apellidos');
        $personas -> identificaion =  $request ->post('identificaion');
        $personas -> fecha_nacimento =  $request ->post('fecha_nacimento');
        $personas->save();

        return redirect()->route('personas.index')->with("succes","agregado con exito");

    }       

    public function show($id)
    {
        $personas = Personas::find($id);
        return view("EliminarUsuario ", compact('personas'));
    }

    public function edit($id)
    {
        $personas = Personas::find($id);
        return view("ActualizarUsuario", compact('personas'));
    }


    public function update(Request $request, $id)
    {
        $personas = Personas::find($id);
        $personas = new personas();
        $personas -> nombre =  $request ->post('nombre');
        $personas -> apellidos =  $request ->post('apellidos');
        $personas -> identificaion =  $request ->post('identificaion');
        $personas -> fecha_nacimento =  $request ->post('fecha_nacimento');
        $personas->save();

        return redirect()->route('personas.index')->with("succes","Actualizado con exito");


    }

    public function destroy($id)
    {
        $personas = Personas::find($id);
        $personas-> delete();
        return redirect()->route("personas.index")->with("succes","Eliminado con exito");
    }
}
