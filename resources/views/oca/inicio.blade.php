<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">
@extends('layouts.master')

@section('content')

<div class="col-md-3 divInicio">
        <div class="col-md-2 botonDivInicio">
        <a href="{{url('juego')}}">Jugar</a> 
        </div>
        <div class="col-md-10 textoDivInicio">
            <p class="lead ">Con el objetivo de visibilizar a las mujeres de las ciencias sociales en este sitio web podrás conocerlas
                 a través del clasico juego de la Oca. "Mientras juegas aprendes, no te lo pierdas". 
            </p>
        </div>  
  </div>


@stop
