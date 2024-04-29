<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VuelosAsientos;
use App\Models\TipoAsiento;

class VuelosAsientosController extends Controller
{
    
    public function agregarAsientoVuelo($id, $fecha){
        return view('agregarAsiento', compact('id', 'fecha'));
    }

    public function guardarAsiento(Request $request, $idVuelo){
        $nvoAsiento = new VuelosAsientos();

        $tipoAsiento = TipoAsiento::find($request->tipoAsiento);

        if ($tipoAsiento != null) {
            $nvoAsiento->idTipoAsiento = $request->tipoAsiento;
            $nvoAsiento->numeroVuelo = $idVuelo;
            $nvoAsiento->numeroAsiento = $request->numAsiento;
            $nvoAsiento->save();

            return redirect('/vuelos/mostrar');
        }

        return redirect('/vuelos/mostrar');

    }

    public function AsientosXvuelo($id){
        $asientos = VuelosAsientos::where('numeroVuelo', $id)->get();

        return view('vueloAsientos', compact('asientos', 'id'));
    }
}
