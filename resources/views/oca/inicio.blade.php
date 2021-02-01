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
        <div>
            <select class="selectjugadores" id="jugadores"> 
                <option hidden>SELECCIONAR NUMERO DE JUGADORES</option> 
                <option value="2jug">2 Jugadores</option>
                <option value="3jug">3 Jugadores</option> 
                <option value="4jug">4 Jugadores</option>
            </select>
        </div>
        <div class="row" id="caja1">
            <input class="col-sm-7 cajatexto" type="text" name="P1" id="nombreJ1" size="25" placeholder="Nombre Jugador 1">
            
        </div>
        <div class="row" id="caja2">
            <input class="col-sm-7 cajatexto" type="text" name="P2" id="nombreJ2" size="25" placeholder="Nombre Jugador 2">
            
         </div>
        <div class="row" id="caja3">
            <input class="col-sm-7 cajatexto" type="text" name="P3" id="nombreJ3" size="25" placeholder="Nombre Jugador 3">
            
        </div>
        <div class="row" id="caja4">
            <input class="col-sm-7 cajatexto" type="text" name="P4" id="nombreJ4" size="25" placeholder="Nombre Jugador 4">
           
        </div>
        {{-- opciones de juego --}}
        <div class="row">
            {{-- dificultad --}}
            <!-- <div class="col-6">
                <select class="dificultad">
                    <option hidden>DIFICULTAD</option> 
                    <option>Con Ayuda</option> 
                    <option>Sin Ayuda</option>
                </select>
            </div> -->
             <!-- Elegir el modo juego -->
            <div class="col-6">
                <div class="form-group" ijuegoSeleccionadod="juego">
                    <select class="dificultad" id="modoJuego">
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
        <div class="col-md-2 botonDivInicioJugadores">
            <button id="botonJugar" >Jugar</a></button>
        </div>
    </div> 
</div>

@endsection
