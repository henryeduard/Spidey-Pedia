<?php

namespace App\Http\Controllers;

use App\Models\Totem;
use Illuminate\Http\Request;

class ControladorTotem extends Controller
{
    public function vistaIndividual($nombre){
        $totem = Totem::where('nombre', $nombre)->first();

        return view('totems.totem', [
            'totem' => $totem,
        ]);
    }
}
