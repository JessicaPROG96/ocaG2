<link rel="stylesheet" href="{{ asset('css/inicio.css') }} " type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
@extends('layouts.master')

@section('content')

<form enctype="multipart/form-data" class="pt-4" method="POST" action="{{url('crearMujer')}}">
    @csrf 
    <div class="form-group cajas col-4 mx-auto pt-auto">

        <div class="form-group row">
            {{-- Nombre --}}
            <label class="labelAlta col-sm-4 col-form-label">Nombre:</label>
            <div class="col-sm-12">
                <input type="text" name="nombre" class=" inputAlta form-control box"  placeholder="Nombre">
            </div>

            {{-- Apellido --}}
            <label class="labelAlta col-sm-4 col-form-label">Apellidos:</label>
            <div class="col-sm-12">
                <input type="text" name="apellido" class=" inputAlta form-control box"  placeholder="Apellido">
            </div>

         </div>

         {{-- Fecha nacimiento --}}
        <div class="form-group row">
            <label class="labelAlta col-sm-12 col-form-label">Fecha Nacimiento:</label>
            <div class="col-sm-12">
                <input type="text" placeholder="Fecha Nacemiento" name="fechaNacimiento" class="inputAlta form-control box">
            </div>
         </div>
        {{-- Fecha morir --}}
         <div class="form-group row">
            <label class="labelAlta col-sm-12 col-form-label">Fecha Fallecimiento:</label>
            <div class="col-sm-12">
                <input type="text" placeholder="Fecha Fallecimiento" name="fechaFallecimiento"  class="inputAlta form-control box">
            </div>
         </div>
         {{-- Imagen --}}
         <div class="form-group row">
            <label class="labelAlta col-sm-2 col-form-label">Imagen: </label>
            <div class="col-sm-12">
                <input type="file" name="imagen" class="inputAlta form-control-file" accept=".jpg, .png, .gif, .jpeg">
            </div>
         </div>

         <div class="form-group row">
            <label class="labelAlta col-sm-2 col-form-label">Enlace: </label>
            <div class="col-sm-12">
                <input type="text" name="enlace"  class="form-control inputAlta box"  placeholder="Enlace">
            </div>
         </div>

        <div class="form-group row">
            <label class="labelAlta col-3 my-auto col-form-label">Descripción:</label>
            <div class="col-9">
            <textarea name="descripcion" class="form-control inputAlta box" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
         </div>

         <div class="form-group row">
            <label class="labelAlta col-3 my-auto col-form-label">Zona:</label>
            <div class="col-sm-12">
                <input type="text" name="zonaGeografica" class="form-control inputAlta box"  placeholder="Zona Geográfica">
            </div>
        </div>

         <div class="form-group row">
            <label class="labelAlta col-12 col-form-label">Categoría:</label>
            <div class="col-12 pt-1">
                <select name="id_categoria" class="form-control inputAlta form-control box">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
                @endforeach
                </select>
            </div>
         </div>

        <div class="form-row pt-5 box">
            <div class="col-2">
                <button type="reset" class="btn btn-outline-light">Borrar</button>
            </div>
            <div class="col">
            <button type="button" class="btn btn-outline-light">Volver</button>
            </div>
            <button class="btn col-3 btn-outline-light box" type="submit">Enviar</button>
        </div>
 
    </div>
    <p id="mensajeError"></p>
</form>

    
@endsection
<script>
    // function enviar() { 
    //    console.log("entra correctamente"); 
    // }
//     function myFunction() {
//   alert("Bienvenido");
// }

   
</script>

<script src="js/jugadores.js"></script>