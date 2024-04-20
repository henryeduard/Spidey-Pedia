<?php

namespace App\Http\Controllers;

use App\Models\Universo;
use Illuminate\Http\Request;

class ControladorUniverso extends Controller
{
    /*
     *
    */
    public function vistaListado(){
        $universos = Universo::all();

        return view('universos.listadoUniversos', [
            'universos' => $universos,
        ]);
    }

    /*
     *
    */
    public function vistaIndividual($numero){
        $universo = Universo::where('numero', $numero)->first();

        return view('universos.universo', [
            'universo' => $universo,
        ]);
    }
}
