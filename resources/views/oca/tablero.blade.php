<link rel="stylesheet" href="<?php echo asset('css/inicio.css') ?>" type="text/css">
<link rel="stylesheet" href="<?php echo asset('css/tablero.css') ?>" type="text/css">


@extends('layouts.master')
@section('content')

<div id="jugadorCategoriaInicio">
        <categoria-component></categoria-component>
</div>

<div>
    <tablero-component></tablero-component>
</div>


@endsection
