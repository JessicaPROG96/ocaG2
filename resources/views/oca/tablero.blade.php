<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')
@section('content')
<h1 style="color:white">Apartado de Juego</h1>
<div class="nombreJug">
    <h3 style="color:white">JUGADORES</h3>
    <!-- Mostramos los nombres de los jugadores insertados en el formulario -->
    <p id="datos" style="color:red;"></p>        
            <script>
                var mostrarNombres;
                mostrarNombres= setInterval('recuperarDatos()',100);
                function recuperarDatos(){
                    if ((localStorage.nombreJ1 != undefined) && (localStorage.nombreJ2 != undefined) && (localStorage.nombreJ3 != undefined) && (localStorage.nombreJ4 != undefined)) {
                        document.getElementById("datos").innerHTML = "Jugador 1: " + localStorage.nombreJ1 + " Jugador 2: " + localStorage.nombreJ2 + " Jugador 3: " + localStorage.nombreJ3 + " Jugador 4: " + localStorage.nombreJ4;
                    }
                        
                    clearInterval(mostrarNombres);
                }
            </script>
</div>
<div id="app" class="content" name="tablero">
    <tablero-component></tablero-component>
</div>

<main>
        <img 
            v-for="persona in personas" 
            :src="persona.picture.thumbnail" 
            :alt="persona.name.first">
        
</main>
<!-- Para imprimir el tablero -->
<button onclick="window.print()" class="btnImprimir">Imprimir</button>
<!-- Estas fichas las mostraremos solo en la imagen para imprimir -->
<div id="fichasImprimir">
    <svg height="60" width="60">   
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="red" />
    </svg>
    <svg height="60" width="60" >
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="yellow" />
    </svg>
    <svg height="60" width="60">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="blue" />
    </svg>
    <svg height="60" width="60">
        <circle cx="30" cy="30" r="20" stroke="black" stroke-width="3" fill="green" />
    </svg>
</div>
<script src="js/jugadores.js"></script>
@stop
