<link rel="stylesheet" href="<?php echo asset('css/galeria.css')?>" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
@extends('layouts.master')

@section('content')
<!-- El titulo de la galeria -->
    <h1 class="galeria">Galeria</h1>

<!-- Search form -->
<div class="col-md-10 md-form mb-4 mr-auto ml-auto">
    <input class="form-control" id="searchbar" type="text" placeholder="Buscar en nuestra galeria" aria-label="Search">
  </div>

<!-- El div de la galeria -->
    <div class="divGaleria col-md-10">

<!-- Por cada mujer que hay en la base de datos creamos un div con los datos -->
<!-- $mujeres = todas las mujeres de la base de datos -->



        <div class="row espacio">

            @php $contador = 0; @endphp 
                            
            @foreach( $mujeres as $key => $a)

                <div class="mujer">
                    {{-- Ruta de la imagen --}}
                    <img class="imagen" src="./../resources/img/fotosMujeres/{{$a['imagen']}}" style="height:200px"/>
                    {{-- Nombre --}}
                    <h4 class="nombre">{{$a['nombre']}}</h4>
                    {{-- Apellido --}}
                    <h4 class="Apellido">{{$a['apellido']}}</h4>
                    {{-- Categoria --}}                  
                    <h5 class="Categoria">{{$a->categorias->nombreCategoria}}</h5>
                    
                </div>

            @endforeach
        
        </div>

            {{-- @foreach ($categorias as $c)
                <h4 class="categoria">{{$c['nombreCategoria']}}</h4>
            @endforeach --}}
  
    
    </div>
    
    

@stop
<script src="js/galeria.js"></script>