<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Clasificación</h1>

<div class="row">

    @foreach( $arrayClasificacion as $key => $cl )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <p>{{$cl->nombre}}</p>
        <p>{{$cl->puntos}}</p>
        

    </div>
    @endforeach

</div>
@stop