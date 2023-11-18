<?php


namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $datos = Users::all();
        return view('welcome',compact('datos'));

    }

    public function create()
    {
        return view('CrearUsuario');
    }

    public function store(Request $request)
    {
        $personas = new Users();
        $personas -> name =  $request ->post('name');
        $personas -> identification =  $request ->post('identification');
        $personas -> phone =  $request ->post('phone');
        $personas -> address =  $request ->post('address');
        $personas->save();

        return redirect()->route('users.index')->with("succes","agregado con exito");

    }       

    public function show($id)
    {
        $user = Users::find($id);
        return view("EliminarUsuario ", compact('user'));
    }

    public function edit($id)
    {
        $user = Users::find($id);
        return view("ActualizarUsuario", compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = Users::find($id);
        $user -> name =  $request ->post('name');
        $user -> identification =  $request ->post('identification');
        $user -> phone =  $request ->post('phone');
        $user -> address =  $request ->post('address');
        $user->save();

        return redirect()->route('users.index')->with("succes","Actualizado con exito");


    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user-> delete();
        return redirect()->route("users.index")->with("succes","Eliminado con exito");
    }

    public  function  report($id)
    {
        $user = Users::find($id);
        $pdf = PDF::loadView('reporte', compact('user'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream($user->name . '.pdf');  
    }
}
