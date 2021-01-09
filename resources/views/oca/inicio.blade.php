<link rel="stylesheet" href="{{ asset('css/inicio.css') }} " type="text/css">
@extends('layouts.master')

@section('content')

<div class="col-md-3 divInicio">
    <div class="col-md-2 botonDivInicio">
        <button id="botonEmpezar">Empezar </button>
    </div>
    <div class="col-md-10 textoDivInicio">
        <p class="lead ">Con el objetivo de visibilizar a las mujeres de las ciencias sociales en este sitio web podrás conocerlas
            a través del clasico juego de la Oca. "Mientras juegas aprendes"
        </p>
    </div>
</div>

<div class="col-md-6 divInicioJugadores" >
    <div class="col-md-16 formularioDivInicioJugadores" id="divJugadores">
        <p>
            <select class="selectjugadores">
                <option hidden>SELECCIONAR NUMERO DE JUGADORES</option> 
                <option>1 Jugador</option> 
                <option>2 Jugadores</option>
                <option>3 Jugadores</option> 
                <option>4 Jugadores</option>
            </select>
        </p>
        <br>
        <p>NOMBRE DEL JUGADOR 1:
            <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J1">
            <button id="botonAvatar">ELEGIR AVATAR</button>
        </p>   
        <p>NOMBRE DEL JUGADOR 2:
            <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J2">
            <button id="botonAvatar">ELEGIR AVATAR</button>
        </p>
        <p>NOMBRE DEL JUGADOR 3:
            <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J3">
            <button id="botonAvatar">ELEGIR AVATAR</button>
        </p>
        <p>NOMBRE DEL JUGADOR 4:
            <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J4">
            <button id="botonAvatar">ELEGIR AVATAR</button>
        </p>
        <br>
        <div class="row">
            <div class="col-6">
                <select class="dificultad">
                    <option hidden>DIFICULTAD</option> 
                    <option>Con Ayuda</option> 
                    <option>Sin Ayuda</option>
                </select>
            </div>
            <div class="col-6">
                <!-- select para elegir el modo juego -->
                <div class="form-group" ijuegoSeleccionadod="juego">
                    <select class="dificultad" id="modoJuego">
                        <option hidden value="">Modo Juego</option>
                        <option value="Normal">Normal</option> 
                        <option value="Categoria">Categorías</option>
                    </select>
                    <input type="hidden" name="juegoSeleccionado" value=""/>
                    <p id="juegoSeleccionado"></p>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-2 botonDivInicioJugadores">
            <button id="botonJugar" ><a href="{{url('juego')}}">Jugar</a></button>
        </div>
    </div> 
</div>

@stop
