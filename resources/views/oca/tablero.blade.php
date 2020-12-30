<link rel="stylesheet" href="<?php echo asset('css/inicio.css') ?>" type="text/css">
@extends('layouts.master')
@section('content')
<div class="jugador">
    <div class="row row-cols-1">
        <div class="col">
            <img src="../resources/img/avatars/default.png" alt="No disponible" width="30px" height="30px">
            <h6>Jugador 1</h6>
        </div>
        <div class="col"><img src="../resources/img/avatars/default.png" alt="No disponible" width="30px" height="30px">
            <h6>Jugador 2</h6>
        </div>
        <div class="col"><img src="../resources/img/avatars/default.png" alt="No disponible" width="30px" height="30px">
            <h6>Jugador 3</h6>
        </div>
        <div class="col"><img src="../resources/img/avatars/default.png" alt="No disponible" width="30px" height="30px">
            <h6>Jugador 4</h6>
        </div>
    </div>
    </div>
<div> 
    <tablero-component></tablero-component>
</div>
@endsection
