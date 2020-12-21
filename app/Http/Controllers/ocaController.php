<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mujer;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Galeria;


class ocaController extends Controller
{
    public function index(){
        return view('oca.inicio');
    }
    public function tablero(){
        return view('oca.tablero');
    }
    public function galeria(){
        return view('oca.galeria')->with('mujeres',Galeria::all());
    }
    public function clasificacion(){
        return view('oca.clasificacion');
    }
 
}
