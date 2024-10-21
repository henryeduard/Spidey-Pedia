<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = "media";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    // Devuelve el estado de tipoMedia en STRING
    public function tipoMediaToString()
    {
        $estadoTipoMedia = $this->tipoMedia;
        $stringTipoMedia = "";

        switch($estadoTipoMedia) {
            case 'C':
                $stringTipoMedia = "Cómic";
                break;

            case 'P':
                $stringTipoMedia = "Película";
                break;

            case 'V':
                $stringTipoMedia = "Videojuego";
                break;

            case 'Tv':
                $stringTipoMedia = "Televisión";
                break;

            case 'M':
                $stringTipoMedia = "Manga";
                break;

            case 'Te':
                $stringTipoMedia = "Teatro";
                break;

            case 'F':
                $stringTipoMedia = "Figura Coleccionable";
                break;

            case 'A':
                $stringTipoMedia = "Arte";
                break;
            
            default:
                break;
        }

        return $stringTipoMedia;
    }
}
