<link rel="stylesheet" href="<?php echo asset('css/inicio.css') ?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Apartado de Juego</h1>

<div id="app"> 
    <!-- <example-component></example-component>  -->
    <tablero-component></tablero-component>
</div>

@stop
