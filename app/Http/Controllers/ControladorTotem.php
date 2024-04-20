<?php

namespace App\Http\Controllers;

use App\Models\Totem;
use Illuminate\Http\Request;

class ControladorTotem extends Controller
{
    /*
     *
    */
    public function vistaListado(){
        $totems = Totem::all();

        return view('totems.listadoTotems', [
            'totems' => $totems,
        ]);
    }

    /*
     *
    */
    public function vistaIndividual($alias){
        $totem = Totem::where('alias', $alias)->first();

        return view('totems.totem', [
            'totem' => $totem,
        ]);
    }
}
