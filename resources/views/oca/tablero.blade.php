<link rel="stylesheet" href="<?php echo asset('css/inicio.css') ?>" type="text/css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@extends('layouts.master')
@section('content')
<h1>Apartado de Juego</h1>

<div id="app"> 
    <!-- <example-component></example-component>  -->
    <tablero-component></tablero-component>
    </div>
</div>
<main>
        <img 
            v-for="persona in personas" 
            :src="persona.picture.thumbnail" 
            :alt="persona.name.first">
        
    </main>

@stop
