<link rel="stylesheet" href="{{ asset('css/inicio.css') }} " type="text/css">
@extends('layouts.master')

@section('content')
{{-- mensaje inicial --}}
<div class="col-md-6 divInicio">
    <div class="col-2 my-auto botonDivInicio">
        <button id="botonEmpezar">Empezar </button>
    </div>
    {{-- descripción --}}
    <div class="col-10 my-auto textoDivInicio">
        <p class="lead ">Con el objetivo de visibilizar a las mujeres de las ciencias sociales en este sitio web podrás conocerlas
            a través del clasico juego de la Oca. "Mientras juegas aprendes"
        </p>
    </div>
</div>
{{-- Opciones de partida --}}
<div class="col-md-6 divInicioJugadores" >
    <div class="col-md-16 formularioDivInicioJugadores" id="divJugadores">
        {{-- Jugadores --}}
        <div col-12>
            <select class="mx-auto col-12 tremendo selectjugadores" id="jugadores"> 
                <option hidden>SELECCIONAR NUMERO DE JUGADORES</option> 
                <option value="2jug">2 Jugadores</option>
                <option value="3jug">3 Jugadores</option> 
                <option value="4jug">4 Jugadores</option>
            </select>
        </div>
        <div class="row mx-auto" id="caja1">
            <label for="">Nombre jugador 1:</label>
            <input class="col-sm-7 cajatexto tremendo" type="text" name="P1" id="nombreJ1" size="25" placeholder="Nombre  1">
            
        </div>
        <div class="row mx-auto" id="caja2">
            <label for="">Nombre jugador 2:</label>
            <input class="col-sm-7 cajatexto tremendo" type="text" name="P2" id="nombreJ2" size="25" placeholder="Nombre  2">
            
         </div>
        <div class="row mx-auto" id="caja3">
            <label for="">Nombre jugador 3:</label>
            <input class="col-sm-7 cajatexto tremendo" type="text" name="P3" id="nombreJ3" size="25" placeholder="Nombre  3">
            
        </div>
        <div class="row mx-auto" id="caja4">
            <label for="">Nombre jugador 4:</label>
            <input class="col-sm-7 cajatexto tremendo" type="text" name="P4" id="nombreJ4" size="25" placeholder="Nombre 4">
           
        </div>
        {{-- opciones de juego --}}
        <div class="row mx-auto">
            {{-- dificultad --}}
            <!-- <div class="col-6">
                <select class="dificultad">
                    <option hidden>DIFICULTAD</option> 
                    <option>Con Ayuda</option> 
                    <option>Sin Ayuda</option>
                </select>
            </div> -->
             <!-- Elegir el modo juego -->
            <div class="col-6 mx-auto">
                <div class="form-group" ijuegoSeleccionadod="juego">
                    <select class="dificultad tremendo" id="modoJuego">
                        <option hidden value="0">Por defecto</option>
                        {{-- <option value="0"></option>  --}}
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria['id']}}">{{$categoria['nombreCategoria']}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="juegoSeleccionado" value=""/>
                    <p id="juegoSeleccionado"></p>
                </div>
            </div>
        </div>
        {{-- boton jugar --}}
        <div class="row mx-auto">
        <div class="mx-auto botonDivInicioJugadores">
            <button id="botonJugar" >Jugar</a></button>
        </div>
        </div>
    </div> 
</div>

@endsection
