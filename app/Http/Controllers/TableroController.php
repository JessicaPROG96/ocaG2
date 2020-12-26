<?php

namespace App\Http\Controllers;

use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableroController extends Controller
{
    public function indexMujer(Request $request){
       /*  $mujer = Mujer::all();
        return $mujer; */

        $mujer=DB::table('mujeres')->get();
        return $mujer;  
    }

}
