<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mujer;
use App\Models\Usuario;
use App\Models\Categoria;


class ocaController extends Controller
{

    public $arrayClasificacion=[];
    public $arrayClasi=[];

    public function  index(){
        return view('oca.inicio');
    }
    public function tablero(){
        return view('oca.tablero');
    }
    public function galeria(){
        return view('oca.galeria');
    }
    public function clasificacion(){
        $arrayClasificacion=DB::table('clasificacion')->orderBy('puntos','desc')->get();
        return view('oca.clasificacion')->with('clasificacion', $arrayClasificacion );

    }

    public function clasi(Request $request){
        $arrayClasi=DB::table('clasificacion')->orderBy('puntos','desc')->get();
        return $arrayClasi;  

    }

 
}