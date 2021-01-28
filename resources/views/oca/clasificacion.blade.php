<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')

<!-- LA TABLA CON LOS DATOS AHORA SE CARGAN EN ClasificacionComponent.vue -->
<div id="app" class="content">
<clasificacion></clasificacion>
<video src="../public/img/otros/fondoVideo.mp4" autoplay loop playsinline muted></video>
</div>
@stop
