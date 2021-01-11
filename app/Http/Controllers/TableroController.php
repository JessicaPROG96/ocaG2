<?php

namespace App\Http\Controllers;

use App\Models\Mujer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMujer()
    {
      
        // $mujer = Mujer::all();
        // return $mujer;

        $mujer=DB::table('mujeres')->get();
        return $mujer;


        // $sql = 'SELECT * FROM mujeres where id_categoria="8" AND id_categoria="7"';
        // $mujer = DB::select($sql);
        // return $mujer;

        // $sql = 'SELECT * FROM products';
        // $products = DB::select($sql);
        // return $products;
    }

    public function categorias()
    {
      
        // $mujer = Mujer::all();
        // return $mujer;

        $categorias=DB::table('categorias')->get();
        return $categorias;
       
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}