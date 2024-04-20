<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totem extends Model
{
    use HasFactory;

    protected $table = "totems";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    // Devuelve el estado de vivido en STRING
    public function vividoToString()
    {
        $estadoVivido = $this->vivido;
        $stringVivido = "";

        switch($estadoVivido) {
            case 'V':
                $stringVivido = "Vivo";
                break;

            case 'M':
                $stringVivido = "Muerto";
                break;

            case 'D':
                $stringVivido = "Estado Desconocido";
                break;
            
            default:
                break;
        }

        return $stringVivido;
    }
}
