<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script> -->
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
            <select class="selectjugadores">
                <option hidden>SELECCIONAR NUMERO DE JUGADORES</option> 
                <option>1 Jugador</option> 
                <option>2 Jugadores</option>
                <option>3 Jugadores</option> 
                <option>4 Jugadores</option>
            </select>
            <p>NOMBRE DEL JUGADOR 1:
                <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J1">
            </p>   
            <p>NOMBRE DEL JUGADOR 2:
                <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J2">
            </p>
            <p>NOMBRE DEL JUGADOR 3:
                <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J3">
            </p>
            <p>NOMBRE DEL JUGADOR 4:
                <input class="cajatexto" type="text" name="P1" size="25" placeholder="Nombre J4">
            </p>
        </div>  
        <select class="dificultad">
            <option hidden>Dificultad</option> 
            <option>Con Ayuda</option> 
            <option>Sin Ayuda</option>
        </select>
        <div class="col-md-2 botonDivInicioJugadores">
            <button id="botonJugar"><a href="{{url('juego')}}">Jugar</a></button>
        </div>
</div>


@stop
<script src="js/javascript.js"></script>



