<?php

namespace App\Http\Controllers;

use App\Models\Totem;
use Illuminate\Http\Request;

class ControladorTotem extends Controller
{
    /*
     * Redirige a la vista de listado
    */
    public function vistaListado(){
        $totems = Totem::all();

        return view('totems.listadoTotems', [
            'totems' => $totems,
        ]);
    }


    /*
     * Redirige a la vista individual de un totem
    */
    public function vistaIndividual($alias){
        $totem = Totem::where('alias', $alias)->first();

        return view('totems.totem', [
            'totem' => $totem,
        ]);
    }


    /*
     * Redirige a la vista individual de un totem
    */
    public function vistaRegistro(){
        return view('totems.registroTotem', []);
    }
}
