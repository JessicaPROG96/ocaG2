<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1>Clasificación</h1>

<!-- LA TABLA CON LOS DATOS AHORA SE CARGAN EN ClasificacionComponent.vue -->
<div id="app" class="content">
<clasificacion></clasificacion>
</div>
@stop