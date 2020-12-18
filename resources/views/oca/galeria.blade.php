<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')

@section('content')
<h1 style="color:white">Esto es la galeria</h1>
@foreach( $arrayPeliculas as $key => $pelicula )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/catalogo/show/' . $key ) }}">
        <img src="{{$pelicula['poster']}}" style="height:200px"/>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$pelicula['title']}}
        </h4>
    </a>

</div>
@endforeach

<h1>Espacio de la galeria</h1>
@stop