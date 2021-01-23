<?php

namespace App\Http\Controllers;

use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableroController extends Controller
{
    //Carga las mujeres
    public function indexMujer(Request $request){
       /*  $mujer = Mujer::all();
        return $mujer; */

        $mujer=DB::table('mujeres')->get();
        return $mujer;  
    }

    //Carga las preguntas para el tablero
    public function indexPregunta(Request $request){
        $pregunta=DB::table('preguntas')->get();
        return $pregunta;  
    }

    //Inserta la puntuación del ganadaor al finalizar la oca
    public function puntuacion(Request $request){
        DB::table('clasificacion')->insert([
            'nombre' => $request->nombre,
            'puntos' => $request->puntos
        ]);
    }

}
