<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Models\Mujer;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Galeria;
use Illuminate\Support\Facades\Storage;

class ocaController extends Controller{

    public $arrayClasificacion=[];
    public $arrayClasi=[];

    public function  index(){
        // return view('oca.inicio');
        $categorias = Categoria::get();
        return view('oca.inicio')->with('categorias', $categorias);
    }

    public function tablero(){
        return view('oca.tablero');
    }

    public function galeria(){
        return view('oca.galeria')->with('mujeres',Galeria::all());
    }

    public function clasificacion(){
        /* $arrayClasificacion=DB::table('clasificacion')->orderBy('puntos','desc')->get(); */
        /* return view('oca.clasificacion')->with('clasificacion', $arrayClasificacion ); */
        return view('oca.clasificacion');
    }
 
    public function clasi(Request $request){
        $arrayClasi=DB::table('clasificacion')->orderBy('puntos','desc')->get();
        return $arrayClasi;  
    }
    //añadir una mujer 
    public function altaMujer(){
        $categorias = Categoria::get();
        return view('oca.altaMujer')->with('categorias', $categorias);
        // return view('oca.inicio')->with('categorias', $categorias);
        // return view('oca.altaMujer');
    }

    //añadir una mujer a la base de datos
    public function crearMujer(Request $request){
       
    $data = $request->all();
        //coger imagen 
      if($request->hasfile('imagen')){
            $image =$request->file('imagen');
            $nombre = $image->getClientOriginalName(); 
            $path = $request->imagen->storeAs($image, $nombre); 
            $data['imagen']=$path;

            // $path=Storage::disk('public')->put($nombre, $image);
            // $data['imagen']=$path;

        // $image->move(public_path().'/img/', $image, $nombre);
       
      }
    Mujer::create($data); 
    return redirect()->route('galeria')->with('success', 'Mujer agregada correctamente');
    }
}
