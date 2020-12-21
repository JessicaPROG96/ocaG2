<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Clasificación</h1>


<div class="row">
    <div class="col-md-8 offset-md-2">
        <table class="table table-dark" >
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Puntuación</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $clasificacion as $key => $cl )
                <tr>
                    <td>{{$cl->nombre}}</td> 
                    <td>{{$cl->puntos}}</td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop