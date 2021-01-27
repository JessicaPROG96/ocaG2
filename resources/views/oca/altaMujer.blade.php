<link rel="stylesheet" href="{{ asset('css/inicio.css') }} " type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
@extends('layouts.master')
@section('content')

<form enctype="multipart/form-data" method="POST" action="{{url('crearMujer')}}" id="formInsertMujer">
    @csrf 
    <div class="form-group cajas">
        <input type="text" name="nombre"  class="form-control box" id="nombre"  placeholder="Nombre" required>
        <p  class="box"  id="mensajeError"></p>
        <input type="text" name="apellido" class="form-control box"  id="apellido" placeholder="Apellido" required>
        <p  class="box"  id="mensajeErrorA"></p>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha Nacimiento</label>
            <div class="col-sm-10">
            <input type="text" name="fechaNacimiento" class="form-control box" required>
            </div>
         </div>
        
         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha Fallecimiento</label>
            <div class="col-sm-10">
            <input type="text" name="fechaFallecimiento"  class="form-control box">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
                <input type="file" name="imagen" class="form-control-file">
            </div>
         </div>

        <input type="text" name="enlace"  class="form-control box"  placeholder="Enlace">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
            <textarea name="descripcion" class="form-control box" id="descripcion" rows="3" required></textarea>
            </div>
         </div>
         <input type="text" name="zonaGeografica" class="form-control box"  placeholder="Zona Geográfica" required>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Categoría</label>
            <div class="col-sm-10">
                <select name="id_categoria" class="form-control form-control-lg box">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
                @endforeach
                </select>
            </div>
         </div>

        <div class="form-row box">
            <div class="col-2">
                <button type="reset" class="btn btn-primary">Borrar</button>
            </div>
            <div class="col">
            <button type="button" class="btn btn-primary">Volver</button>
            </div>
        </div>
  <button class="btn btn-primary box" type="submit" id="submit">Enviar</button>    
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