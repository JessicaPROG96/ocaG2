<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Clasificación</h1>

<div >
    @foreach( $clasificacion as $key => $cl )
    <div>
        <p>{{$cl->nombre}}</p>
        <p>{{$cl->puntos}}</p>
    </div>
    @endforeach
</div>

@stop