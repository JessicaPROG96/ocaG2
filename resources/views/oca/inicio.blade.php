<link rel="stylesheet" href="<?php echo asset('css/inicio.css')?>" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
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
            <p><select class="selectjugadores">
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
            <select class="dificultad">
                <option hidden>DIFICULTAD</option> 
                <option>Con Ayuda</option> 
                <option>Sin Ayuda</option>
            </select>
            <br>
            <div class="col-md-2 botonDivInicioJugadores">
                <button id="botonJugar"><a href="{{url('juego')}}">Jugar</a></button>
            </div>
    </div>  


<!-- formulario para el login -->
<!-- <div class="modal fade" id="loginModal"> -->
<!-- <div class="modal hide fade in" data-backdrop="static" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <div class="modal-body">
            <div class="d-flex flex-column text-center"> -->

            <!-- Formulario -->
            <!-- <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Correo') }}</label>

                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Mantener sesión iniciada') }}
                            </label>
                        </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Entrar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Recuperar contraseña') }}
                            </a>
                        @endif
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div> -->



</div>


@stop
<script src="js/javascript.js"></script>
<script src="js/jugadores.js"></script>


