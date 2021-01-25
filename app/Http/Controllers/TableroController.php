<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableroController extends Controller
{
    //Carga las mujeres
    public function indexMujer(Request $request){
        $mujer = Mujer::all();
        return $mujer; 


        // $mujer=DB::table('mujeres')->get();
        // return $mujer;

        // $sql = 'SELECT * FROM mujeres where id_categoria="8" AND id_categoria="7"';
        // $mujer = DB::select($sql);
        // return $mujer;

        // $sql = 'SELECT * FROM products';
        // $products = DB::select($sql);
        // return $products;
    }

    public function categorias(Request $request)
    {
      
        // $mujer = Mujer::all();
        // return $mujer;

        // $categorias=DB::table('categorias')->get();
        // return $categorias;

        //  $categorias = Categoria::get();
        // return view('oca.altaMujer')->with('categorias', $categorias);
        
        // $categorias = Categoria::get();
        // return view('oca.altaMujer')->with('categorias', $categorias);
        // $modoCategoria = Categoria::with('categorias')->where('id',$request->id)->orderBy('nombreCategoria', 'asc')->get();
        // return $modoCategoria;
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    


