<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;

class VuelosController extends Controller
{
    
    public function mostrarVuelos(){
        $vuelos = Vuelo::all();

        return view('vuelos', compact('vuelos'));
    }

    public function agregarVuelo(){
        return view('nuevoVuelo');
    }

    public function guardarVuelo(Request $request){
        $nvoVuelo = new Vuelo();
        $vuelos = Vuelo::all();

        if ($vuelos != null) {
            foreach ($vuelos as $vuelo) {

                if (($vuelo->numeroVuelo == $request->numero) and ($vuelo->fechaSalida == $request->fecha)) {
                    return redirect('/vuelos/mostrar');
                }else {
                    
                    $nvoVuelo->numeroVuelo = $request->numero;
                    $nvoVuelo->origen = $request->origen;
                    $nvoVuelo->destino = $request->destino;
                    $nvoVuelo->numeroAsientos = $request->cantidad;
                    $nvoVuelo->fechaSalida = $request->fecha;
                    $nvoVuelo->save();

                    return redirect('/vuelos/mostrar');
                }
            }
        }

        $nvoVuelo->numeroVuelo = $request->numero;
        $nvoVuelo->origen = $request->origen;
        $nvoVuelo->destino = $request->destino;
        $nvoVuelo->numeroAsientos = $request->cantidad;
        $nvoVuelo->fechaSalida = $request->fecha;
        $nvoVuelo->save();

        return redirect('/vuelos/mostrar');
      
    }

    public function editarVuelo($id){
        $vuelo = Vuelo::find($id);

        return view('editarVuelo', compact('vuelo'));
    }

    public function actualizarVuelo(Request $request, $id){
        $vuelo = Vuelo::find($id);

        $vuelo->origen = $request->origen;
        $vuelo->destino = $request->destino;
        $vuelo->save();

        return redirect('/vuelos/mostrar');
    }

    public function eliminarVuelo($id){
        $vuelo = Vuelo::find($id);

        $vuelo->delete();

        return redirect('/vuelos/mostrar');
    }
}
