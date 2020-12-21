<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Clasificación</h1>


<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Puntuación</th>
        <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>

    @foreach( $clasificacion as $key => $cl )
    <tr>
        <td>{{$cl->puntos}}</td>
        <td>{{$cl->nombre}}</td>   
    </tr>
    @endforeach
    </tbody>
</table>


@stop