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
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          {{-- Empieza el grid --}}
            <div class="container-fluid">
                <div class="row">
                    {{-- Div con la imagen --}}
                    <div class="col-md-6">
                        <img class="imagen-modal" src="null" alt="">
                    </div>
                    {{-- Div con la fecha y la zona --}}
                    <div class="col-md-3 m-auto">
                      <div class="row"><b>Fecha nacimiento:&nbsp;</b>
                        <p class="fecha-modal"></p>
                      </div>
                      <div class="row"><b>Zona:&nbsp;</b>
                        <p class="zona-modal"></p>
                      </div>
                    </div>
                </div>

                <div class="row">
                    {{-- Div con la descripción --}}
                    <div class="col-md-12 ml-auto"><b>Descripción: </b>
                        <p class="desc-modal"></p>
                    </div>
                </div>
            </div>
      </div>

        <div class="modal-footer">
          {{-- Link a la wiki --}}
          <button type="button" class="btn mx-auto btn-ambito" data-dismiss="modal"><a class="enlace-btn" href="">Saber mas 🔗</a></button>
        </div>
      </div>
    </div>
  </div>

<!-- El div de la galeria -->
    <div class="divGaleria col-md-10">

<!-- Por cada mujer que hay en la base de datos creamos un div con los datos -->
<!-- $mujeres = todas las mujeres de la base de datos que nos pasa el controlador-->

        <div class="row espacio">

            @php $contador = 0; @endphp 
                            
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
                    {{-- Categoria --}}
                    <h5 class="Categoria" style="background:{{$a->categorias->color}}">{{$a->categorias->nombreCategoria}}</h5>                  
                </div>

              
            
            @endforeach
        
        </div>

<!-- Cerrar galeria -->
    </div>
    
    

@stop
<script src="js/galeria.js"></script>