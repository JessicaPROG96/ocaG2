<link rel="stylesheet" href="<?php echo asset('css/galeria.css')?>" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
@extends('layouts.master')

@section('content')

@php
    session_start();
@endphp
<!-- Cuando la sesion este iniciada, aparecerá este div que te permitirá ir al modo administrador-->
    <div class="icono">
        <a href="#">Modo administrador (WIP)</a>
    </div>
             

<!-- El titulo de la galeria -->
    <h1 class="galeria">Galeria</h1>

<!-- Barra de busqueda -->
<div class="col-md-10 md-form mb-4 mr-auto ml-auto">
    <input class="form-control" id="searchbar" type="text" placeholder="Buscar en nuestra galeria" aria-label="Search">
  </div>

<!-- Select -->
<form action="" method="post">
  <select id="ambito" class="form-select" aria-label="Default select example">
    <option selected>Todas</option>
    <option value="Historia">Historia</option>
    <option value="Antropología">Antropología</option>
    <option value="Pedagogía">Pedagogía</option>
  </select>
</form>
<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="imagen-modal" src="null" alt="">
          <p class="desc-modal"><b>Descripción: </b></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Saber mas</button>
        </div>
      </div>
    </div>
  </div>

<!-- El div de la galeria -->
    <div class="divGaleria col-md-10">

<!-- Por cada mujer que hay en la base de datos creamos un div con los datos -->
<!-- $mujeres = todas las mujeres de la base de datos -->

        <div class="row espacio">

            @php $contador = 0; @endphp 
                            
            @foreach( $mujeres as $key => $a)
            
              {{-- @if ($a->categorias->nombreCategoria == $_COOKIE['ambito']) --}}
                  {{-- aqui ocultar todos los que no tengas esa categoria --}}
              {{--@endif --}}
                <div class="mujer">
                    {{-- Ruta de la imagen --}}
                    <img class="imagen" src="./../resources/img/fotosMujeres/{{$a['imagen']}}" style="height:200px"/>
                    {{-- Nombre --}}
                    <h4 class="nombre">{{$a['nombre']}}</h4>
                    {{-- Apellido --}}
                    <h4 class="Apellido">{{$a['apellido']}}</h4>
                    {{-- Categoria --}}
                    <h5 class="Categoria" style="background:'{{$a->categorias->color}}'">{{$a->categorias->nombreCategoria}}</h5>                    
                </div>

              
            
            @endforeach
        
        </div>
<!-- Cerrar galeria -->
    </div>
    
    

@stop
<script src="js/galeria.js"></script>
