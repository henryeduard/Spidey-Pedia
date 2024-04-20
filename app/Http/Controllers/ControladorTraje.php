<?php

namespace App\Http\Controllers;

use App\Models\Traje;
use Illuminate\Http\Request;

class ControladorTraje extends Controller
{
    /*
     * Redirige a la vista de listado
    */
    public function vistaListado(){
        $trajes = Traje::all();

        return view('trajes.listadoTrajes', [
            'trajes' => $trajes,
        ]);
    }

    /*
     * Redirige a la vista individual de un traje
    */
    public function vistaIndividual($nombre){
        $traje = Traje::where('nombre', $nombre)->first();

        return view('trajes.traje', [
            'traje' => $traje,
        ]);
    }
}
