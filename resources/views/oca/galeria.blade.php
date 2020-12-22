<link rel="stylesheet" href="<?php echo asset('css/galeria.css')?>" type="text/css">
@extends('layouts.master')

@section('content')
<!-- El titulo de la galeria -->
    <h1 class="galeria">Galeria</h1>

    <!-- Search form -->
<div>
    <div class="col-md-10 md-form mb-4 mr-auto ml-auto">
        <input class="form-control" type="text" id="texto" placeholder="Buscar en nuestra galeria">
        <!-- <div class="input-group-append">
            <span class="input-group-text">Buscar</span>
        </div> -->
    </div>
    <div id="resultados"></div>
</div>

<!-- El div de la galeria -->
    <div class="divGaleria col-md-10">

<!-- Por cada mujer que hay en la base de datos creamos un div con los datos -->
<!-- $mujeres = todas las mujeres de la base de datos y la $a = cada mujer -->

        {{-- @for($i=0;$i<=5;$i++) --}}

            <div class="row espacio">

                @php $contador = 0; @endphp <!-- Creamos la variable para romper el foreach -->
                                
                @foreach( $mujeres as $key => $a )
                {{-- @for($i=0;$i<=5;$i++) --}}
                    <div class="mujer">
                        <img class="imagen" src="./../resources/img/fotosMujeres/{{$a['imagen']}}" style="height:200px"/>
                        <h4 class="nombre">{{$a['nombre']}}</h4>
                        <h4 class="Apellido">{{$a['apellido']}}</h4>
                    </div>
                
                    {{-- @php $contador++ @endphp 
                    @if ($contador == 5) <!-- Cada vez que se impriman 3 mujeres, salimos del foreach -->
                        
                        @php break; @endphp
                    @endif --}}
                @endforeach
            </div>
        {{-- @endfor --}}
    
    </div>
<!-- <script>
    //keyuppp
    window.addEventListener("load",function(){
        document.getElementById("texto").addEventListener("keyup", function(){
            if((document.getElementById("texto").value.lenght)>=3)
                fetch(`/nombres/buscador?texto=${document.getElementById("texto").value}`,{
                    method:'get'
                })
                .then(response => response.text() )
                .then(html => {
                    document.getElementById("resultados").innerHTML = html 
                })
            else    
                document.getElementById("resultados").innerHTML = ""; 
        })
    })
    
</script> -->
@stop