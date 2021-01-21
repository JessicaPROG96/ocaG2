<link rel="stylesheet" href="<?php echo asset('css/galeria.css')?>" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@extends('layouts.master')

@section('content')

@php
    session_start();
@endphp

<!-- script para saber si hay un usuario logueado y poder usarlo en JS -->
<script>
  var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
</script>


<!-- El titulo de la galeria -->
    <h1 class="galeria">Galeria</h1>

<!-- Barra de busqueda -->
<div class="col-md-10 md-form mb-4 ml-auto">
    <input class="form-control col-md-7 d-inline" id="searchbar" type="text" placeholder="Buscar en nuestra galeria" aria-label="Search">
    <select id="ambito" class="form-control col-md-3 d-inline" aria-label="Default select example">
      
      @php
        // Esta función guarda los "id_categorias" diferentes y los guarda en otro array
        function unique_multidim_array($array, $key) {
            $temp_array = array();
            $i = 0;
            $key_array = array();
          
            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }
            return $temp_array;
        }

        // Guardamos en el array "Filtrado" las categorias diferentes del array mujeres
        $filtrado = unique_multidim_array($mujeres,'id_categoria');
    
        // La opción seleccionada por defecto
        echo '<option selected value>Todas</option>';
    
        // Cargamos las demas opciones cogiendolas del array filtrado
        foreach ($filtrado as $key => $value) {
            echo '<option>'.$value->categorias->nombreCategoria.'</option>';
        }
        
      @endphp
    
    </select>
  </div>

<!-- Select -->


<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title col-11" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                {{-- Imagen --}}
                <img class="imagen-modal text" src="null" alt="">
              </div>
              <div class="col-md-4 m-auto">
                {{-- Fecha --}}
                <label>Fecha: </label>
                <input readonly class="fecha-modal text"></input>
                {{-- Zona --}}
                <label>Zona: </label>
                <input readonly class="zona-modal text"></input>

                <label>Ambito: </label>
                <input readonly class="ambito-modal text"></input>
              </div>
            </div>
            <div class="row">
              <div class="col-10">
                Descripción: <br>
                <textarea readonly maxlength="10000" rows="10" cols="100" class="desc-modal text"></textarea>
              </div>
              <div class="modal-footer col-10 mx-auto">
                {{-- Link a la wiki --}}
                <button type="button" class="btn btn-outline-dark mx-auto" data-dismiss="modal">Saber mas 🔗</button>
              </div>
            </div>
          </div>
          {{-- Imagen --}}
          {{-- <img class="imagen-modal text" src="null" alt=""> --}}
          {{-- Descripcion --}}
          {{-- <b>Fecha: </b> --}}
          {{-- <input readonly class="fecha-modal text"></input> --}}
          {{-- Descripcion --}}
          {{-- <b>Zona: </b> --}}
          {{-- <input readonly class="zona-modal text"></input> --}}
          {{-- Descripcion --}}
          {{-- <b>Descripción: </b> --}}
          {{-- <textarea readonly class="desc-modal text"></textarea> --}}
          
        </div>
        
        @php
            // Si el usuario ha iniciado sesión sale el boton guardar
            if(isset(Auth::user()->name)){
              echo '<div class="modal-footer">';
                echo '<button type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>';
              echo '</div>';
            }
        @endphp 
          
      </div>
    </div>
  </div>

<!-- El div de la galeria -->
    <div class="divGaleria col-md-10">

<!-- Por cada mujer que hay en la base de datos creamos un div con los datos -->
<!-- $mujeres = todas las mujeres de la base de datos que nos pasa el controlador-->

        <div class="row espacio">
                            
            @foreach( $mujeres as $key => $a)
            
              
                <div class="mujer">
                    {{-- Ruta de la imagen --}}
                    <img class="imagen" src="./../resources/img/fotosMujeres/{{$a['imagen']}}" style="height:200px"/>
                    {{-- Nombre --}}
                    <h4 class="nombre">{{$a['nombre']}}</h4>
                    {{-- Apellido --}}
                    <h4 class="Apellido">{{$a['apellido']}}</h4>
                    {{-- Fecha de nacimiento --}}
                    <h4 style="display:none;" class="fecha">{{$a['fechaNacimiento']}}</h4>
                    {{-- Zona --}}
                    <h4 style="display:none;" class="zona">{{$a['zonaGeografica']}}</h4>
                    {{-- Link --}}
                    <h4 style="display:none;" class="enlace">{{$a['enlace']}}</h4>
                    {{-- Descripción --}}
                    <h4 style="display:none;" class="descripcion">{{$a['descripcion']}}</h4>
                    {{-- Descripción --}}
                    <h4 style="display:none;" class="enlace">{{$a['enlace']}}</h4>
                    {{-- Categoria --}}
                    <h5 class="Categoria" style="background:{{$a->categorias->color}}">{{$a->categorias->nombreCategoria}}</h5>                  
                </div>

              
            
            @endforeach
        
        </div>

<!-- Cerrar galeria -->
    </div>
    
    

@stop
<script src="js/galeria.js"></script>
