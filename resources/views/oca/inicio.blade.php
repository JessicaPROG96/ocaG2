
<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
<!-- <link rel="stylesheet" href="<?php echo asset('css/plantilla.css')?>" type="text/css"> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
        <div class="col-md-16 formularioDivInicioJugadores" id="divJugadores" onchange="mostrarJugadores()">
                
                        <div><select class="selectjugadores" id="jugadores">
                                <option hidden>SELECCIONAR NUMERO DE JUGADORES</option> 
                                <option value="1jug">1 Jugador</option> 
                                <option value="2jug">2 Jugadores</option>
                                <option value="3jug">3 Jugadores</option> 
                                <option value="4jug">4 Jugadores</option>
                            </select>
                        </div> 
                    <br>
        <form action="{{url('juego')}}" id="formularioJugadores" name="formularioJugadores">
            <div id="datos">
                    <div id="caja1"> 
                        <input class="cajatexto" type="text" name="P1" id="nombreJ1" size="25" placeholder="Nombre J1">
                        <button class="btn btn-warning" id="btnAvatar">ELEGIR AVATAR</button>
                    </div>   
                    <div id="caja2" >
                        <input class="cajatexto" type="text" name="P2" id="nombreJ2" size="25" placeholder="Nombre J2">
                        <button class="btn btn-warning" id="btnAvatar">ELEGIR AVATAR</button>
                    </div>
                    <div id="caja3">
                        <input class="cajatexto" type="text" name="P3" id="nombreJ3" size="25" placeholder="Nombre J3">
                        <button class="btn btn-warning" id="btnAvatar">ELEGIR AVATAR</button>
                    </div>
                    <div id="caja4">
                        <input class="cajatexto" type="text" name="P4" id="nombreJ4" size="25" placeholder="Nombre J4">
                        <button class="btn btn-warning" id="btnAvatar">ELEGIR AVATAR</button>
                    </div>
                    <br>
                    <select class="dificultad">
                        <option hidden>DIFICULTAD</option> 
                        <option>Con Ayuda</option> 
                        <option>Sin Ayuda</option>
                    </select>
                    <br>
                    <div class="col-md-2 botonDivInicioJugadores">
                        <input type="submit" value="JUGAR" id="botonJugar">
                    </div>
            </div>
                    
        </form> 
    </div>
</div>
    

<!-- Modal para elegir el Avatar --> 
<div id="contenedor-mensaje" class="ocultar-mensaje">
            <div id="mensaje">
                <h5 id="titulo-mensaje">ELIGE TU AVATAR</h5>
                    <div class="imagenes">
                        <img class="imagen" src="./../resources/img/otros/AvatarRojo.png" style="height:85px"/>
                        <img class="imagen" src="./../resources/img/otros/AvatarAzul.png" style="height:85px"/>
                        <img class="imagen" src="./../resources/img/otros/AvatarAmarillo.png" style="height:85px"/>
                        <img class="imagen" src="./../resources/img/otros/AvatarVerde.png" style="height:85px"/>
                    </div>
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>   
</div>


<script>
// Boton que despliega los avatares
document.getElementById('btnAvatar').onclick=function(){
    var mensaje = document.querySelector("#contenedor-mensaje");
    // Muestro el mensaje primero 
        if (mensaje.classList.contains("ocultar-mensaje")) {
        mensaje.classList.remove("ocultar-mensaje");
    }
}
</script>
<script src="js/javascript.js"></script>
<script src="js/jugadores.js"></script>
@stop