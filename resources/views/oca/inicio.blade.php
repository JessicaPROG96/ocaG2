<link rel="stylesheet" href="{{ asset('css/inicio.css') }} " type="text/css">
@extends('layouts.master')

@section('content')
{{-- mensaje inicial --}}
<div class="col-md-3 divInicio">
    <div class="col-md-2 botonDivInicio">
        <button id="botonEmpezar">Empezar </button>
    </div>
    {{-- descripción --}}
    <div class="col-md-10 textoDivInicio">
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
            <select class="selectjugadores"> 
                <option hidden>SELECCIONAR NUMERO DE JUGADORES</option> 
                <option>1 Jugador</option> 
                <option>2 Jugadores</option>
                <option>3 Jugadores</option> 
                <option>4 Jugadores</option>
            </select>
        </div>
        <div class="row">
            <input class="col-sm-7 cajatexto" type="text" name="P1" size="25" placeholder="Nombre Jugador 1">
            <button class="col-sm-3" id="botonAvatar">ELEGIR AVATAR</button>
        </div>
        <div class="row">
            <input class="col-sm-7 cajatexto" type="text" name="P2" size="25" placeholder="Nombre Jugador 2">
            <button class="col-sm-3" id="botonAvatar">ELEGIR AVATAR</button>
         </div>
        <div class="row">
            <input class="col-sm-7 cajatexto" type="text" name="P3" size="25" placeholder="Nombre Jugador 3">
            <button class="col-sm-3" id="botonAvatar">ELEGIR AVATAR</button>
        </div>
        <div class="row">
            <input class="col-sm-7 cajatexto" type="text" name="P4" size="25" placeholder="Nombre Jugador 4">
            <button class="col-sm-3" id="botonAvatar">ELEGIR AVATAR</button>
        </div>
        {{-- opciones de juego --}}
        <div class="row">
            {{-- dificultad --}}
            <div class="col-6">
                <select class="dificultad">
                    <option hidden>DIFICULTAD</option> 
                    <option>Con Ayuda</option> 
                    <option>Sin Ayuda</option>
                </select>
            </div>
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
                    {{-- <p id="juegoSeleccionado"></p> --}}
                </div>
            </div>
        </div>
        {{-- boton jugar --}}
        <div class="col-md-2 botonDivInicioJugadores">
            <button id="botonJugar" ><a href="{{url('juego')}}" >Jugar</a></button>
        </div>
    </div> 
</div>

@endsection
