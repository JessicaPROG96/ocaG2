<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mujer;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Galeria;

class ocaController extends Controller{

    public $arrayClasificacion=[];
    public $arrayClasi=[];

    public function  index(){
        return view('oca.inicio');
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
        // return view('oca.altaMujer');
    }

    //añadir una mujer a la base de datos
    public function crearMujer(Request $request){
        // return view('oca.altaMujer');
        $notaMujer = new Mujer;
        $notaMujer->nombre = $request->nombre;
        $notaMujer->apellido = $request->apellido;
        $notaMujer->fechaNacimiento = $request->fechaNacimiento;
        $notaMujer->fechaFallecimiento = $request->fechaFallecimiento;
        $notaMujer->imagen = $request->imagen;
        
       
        // $carpeta ='../resources/img/fotosMujeres/';
        $ruta = public_path().'../resources/img/fotosMujeres/'; 
        // $nombre_img = $_FILES['imagen']['name'];
        move_uploaded_file($notaMujer->imagen,$ruta.$notaMujer->imagen);
        
        if(isset($notaMujer->imagen)){
            // echo ($notaMujer->imagen);
            print_r($notaMujer->imagen);
        }else
        {
            echo ("lol");
        }
        //  obtenemos el nombre del archivo
        //  $imagen =  time()."_".$file->getClientOriginalName();
         
        //  $notaMujer->imagen = $imagen;
        // $_FILES['imagen'];
        // $notaMujer = $_FILES['imagen']['name'];

        // $notaMujer->$nombre_img = $request->imagen;
        $notaMujer->enlace = $request->enlace;
        $notaMujer->descripcion = $request->descripcion;
        $notaMujer->zonaGeografica = $request->zonaGeografica;
        $notaMujer->id_categoria = $request->id_categoria;
        $notaMujer->save();

        // return back()->with('mensaje', 'Mujer agregada correctamente');
    }
}
