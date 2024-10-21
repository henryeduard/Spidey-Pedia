<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    use HasFactory;

    protected $table = "participaciones";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    // Devuelve el estado de tipoParticipacion en STRING
    public function tipoParticipacionToString()
    {
        $estadoTipoParticipacion = $this->tipoParticipacion;
        $stringTipoParticipacion = "";

        switch($estadoTipoParticipacion) {
            case 'Dib':
                $stringTipoParticipacion = "Dibujante";
                break;

            case 'E':
                $stringTipoParticipacion = "Escritor";
                break;

            case 'Dir':
                $stringTipoParticipacion = "Director";
                break;

            case 'P':
                $stringTipoParticipacion = "Productor";
                break;

            case 'De':
                $stringTipoParticipacion = "Desarrollador";
                break;

            case 'A':
                $stringTipoParticipacion = "Actor";
                break;

            case 'Av':
                $stringTipoParticipacion = "Actor de voz";
                break;

            case 'Com':
                $stringTipoParticipacion = "Compositor";
                break;

            case 'Col':
                $stringTipoParticipacion = "Colorista";
                break;
            
            default:
                break;
        }

        return $stringTipoParticipacion;
    }
}
