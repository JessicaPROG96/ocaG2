<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mujer;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Clasificacion;

class ocaController extends Controller
{

    public $arrayClasificacion=[];

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
        $arrayClasificacion = DB::table('clasificacion')->get();
        $arrayClasificacion = Clasificacion::all();
        $arrayClasificacion =  DB::select('SELECT * FROM clasificacion');
		return view('oca.clasificacion')->with('clasificacion', Clasificacion::all());
    }
    
 
}