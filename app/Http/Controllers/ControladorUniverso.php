<?php

namespace App\Http\Controllers;

use App\Models\Universo;
use Illuminate\Http\Request;

class ControladorUniverso extends Controller
{
    /*
     * Redirige a la vista de listado
    */
    public function vistaListado(){
        $universos = Universo::all();

        return view('universos.listadoUniversos', [
            'universos' => $universos,
        ]);
    }


    /*
     * Redirige a la vista individual de un universo
    */
    public function vistaIndividual($numero){
        $universo = Universo::where('numero', $numero)->first();

        return view('universos.universo', [
            'universo' => $universo,
        ]);
    }


    /*
     * Redirige a la vista de registro de un universo
    */
    public function vistaRegistro(){
        return view('universos.registroUniverso', []);
    }
}
