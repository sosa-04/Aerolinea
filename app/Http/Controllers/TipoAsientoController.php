<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    public function verTiposAsientos(){
        $tiposAsientos = TipoAsiento::where('estado', 'A')->get();

        return view('tiposAsientos', compact('tiposAsientos'));
    }

    public function agregarTipo(){
        return view('agregarTipoAsiento');
    }

    public function guardarTipo(Request $request){
        $nvoTipo = new TipoAsiento();

        $nvoTipo->descripcion = $request->descripcion;
        $nvoTipo->precio = $request->precio;
        $nvoTipo->estado = $request->estado;
        $nvoTipo->save();

        return redirect('/tiposAsientos/mostrar');
    }

    public function eliminarTipo($id){
        $nvoTipo = TipoAsiento::find($id);

        $nvoTipo->estado = 'I';
        $nvoTipo->save();

        return redirect('/tiposAsientos/mostrar');
    }

    public function editarTipo($id){
        $nvoTipo = TipoAsiento::find($id);

        return view('editarAsiento', compact('nvoTipo'));
    }

    public function actualizarTipo(Request $request, $id){
        $nvoTipo = TipoAsiento::find($id);

        $nvoTipo->descripcion = $request->descripcion;
        $nvoTipo->precio = $request->precio;
        $nvoTipo->estado = $request->estado;
        $nvoTipo->save();

        return redirect('/tiposAsientos/mostrar');
    }
}
