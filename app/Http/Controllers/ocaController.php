<?php

namespace App\Http\Controllers;
use App\Models\Galeria;
use Illuminate\Http\Request;

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
