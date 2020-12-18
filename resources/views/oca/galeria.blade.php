<link rel="stylesheet" href="<?php echo asset('css/galeria.css')?>" type="text/css">
@extends('layouts.master')

@section('content')
<!-- El titulo de la galeria -->
    <h1 class="galeria">Galeria</h1>

<!-- Por cada mujer que hay en la base de datos creamos un div con los datos -->
<!-- $mujeres = todas las mujeres de la base de datos y la $a = cada mujer -->
    <div class="col-md-12">
    <!-- hay que hacer un row que tenga 4 mujeres hasta que se acabe-->
    
    @foreach( $mujeres as $key => $a )
        <div class="mujer">
            <img class="imagen" src="./../resources/img/fotosMujeres/{{$a['imagen']}}" style="height:200px"/>
            <h4 class="nombre">{{$a['nombre']}}</h4>
            <h4 class="Apellido">{{$a['apellido']}}</h4>
        </div>
    @endforeach
    </div>
    
    

@stop