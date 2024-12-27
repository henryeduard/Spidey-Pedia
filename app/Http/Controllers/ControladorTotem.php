<?php

namespace App\Http\Controllers;

use App\Models\Totem;
use App\Models\Universo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * Redirige a la vista de registro de un totem
    */
    public function vistaRegistro(){
        return view('totems.registroTotem', [
            'universos' => Universo::all(),
        ]);
    }


    // Crea un nuevo registro del modelo Totem
    // Si es necesario, llama al controlador de Universos para crear un nuevo universo
    // public function registrar()
    // {
    //     // Validamos que todos los datos del formulario sean correctos y los guardamos en un arreglo $attributes
    //     $attributes = request()->validate([

    //     ]);

    //     // Transferimos la información del curso desde el arreglo que regresa la funcion a uno nuevo
    //     $infoCurso = self::llenaDatosCurso($attributes);

    //     try {

    //         DB::beginTransaction();

    //         // Creamos un nuevo objeto ArticuloRevista y guardamos su ID para agregarlo a los objetos AutoresProducto
    //         $idCurso = Curso::create($infoCurso)->id;

    //         // Guardamos los datos del autor responsable en un arreglo
    //         $datosResponsable = [
    //             'id' => auth()->user()->academico->idUsuario->id,
    //             'tipo' => 'academicos',
    //             'nombre' => auth()->user()->academico->nombre_completo
    //         ];

    //         // Decodificamos el arreglo de autores que recibimos de la vista y lo guardamos en un arreglo   
    //         $infoAutores = json_decode($attributes['arregloAutores'], true);
    //         //Asignamos el ultimo valor como 12, pues es el indice del catalogo de Tipos Producto, referente a Cursos
    //         $cpa->registraAutores($infoAutores, $datosResponsable, $idCurso, 12);

    //         // Si es Curricular entonces guardamos sus actas
    //         if ($attributes['tipoCurso'] == 'CU' || $attributes['tipoCurso'] == 'TU') {
    //             // Obtenemos todos los archivos del request
    //             $archivos = request()->file('actaProbatoria');
    //             $datosActa = [
    //                 'nombreArchivo' => '',
    //                 'idCurso' => $idCurso,
    //             ];

    //             // Se guardan los archivos en la carpeta /public/ARCHIVOS/ActasProbatorias
    //             // Si esta carpeta no existe, se crea
    //             foreach ($archivos as $archivoActa) {
    //                 $actaProbatoria = ActaProbatoria::create($datosActa);
    //                 $nombre = "Acta_" . $actaProbatoria->id . ".pdf";
    //                 $ruta = $archivoActa->move('ARCHIVOS/ActasProbatorias', $nombre);
    //                 $attributes['actaProbatoria'] = $ruta->getPath() . "/" . $nombre;
    //                 $actaProbatoria->nombreArchivo = $attributes['actaProbatoria'];
    //                 $actaProbatoria->save();
    //             }
    //         }

    //         DB::commit();

    //         // Redirigimos al usuario a la vista de sus artículos (agregar with con los articulos del usuario) usar la funcion articulos de user
    //         return redirect('/curso/' . $idCurso);

    //     } catch (\Exception $e) {
    //         DB::rollBack();

    //         // Si hubo algún error regresamos a la pantalla de registro y mostramos este mensaje en un alert
    //         return back()->withInput()
    //             ->withErrors(['fail' => 'No se ha podido registrar el curso, intente de nuevo.']);
    //     }
    // }
}
