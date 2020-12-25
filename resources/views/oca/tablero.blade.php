<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Apartado de Juego</h1>

<div id="app" class="content">
    <tablero-component></tablero-component>
</div>

<main>
        <img 
            v-for="persona in personas" 
            :src="persona.picture.thumbnail" 
            :alt="persona.name.first">
        
    </main>
@stop