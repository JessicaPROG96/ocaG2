<link rel="stylesheet" href="{{ asset('css/inicio.css') }} " type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src=http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
@extends('layouts.master')

@section('content')

<form enctype="multipart/form-data" method="POST" action="{{url('crearMujer')}}" id="formInsertMujer">
    @csrf {{-- seguridad --}}
    <div class="form-group cajas">
        <input type="text" name="nombre"  class="form-control is-invalid box" id="nombre"  placeholder="Nombre" required> {{-- nombre --}}
        <p id="mensajeError"></p>
        <input type="text" name="apellido" class="form-control is-invalid box"  id="apellido" placeholder="Apellido" required> {{-- apellido --}}
        <p  class="box"  id="mensajeErrorA"></p>
        <div class="form-group row">{{-- fecha de nacimiento --}}
            <label class="col-sm-2 col-form-label">Fecha Nacimiento</label>
            <div class="col-sm-10">
            <input type="text" name="fechaNacimiento" id="fNacimiento" class="form-control box is-invalid" required>
            <p  class="box"  id="mensajeErrorFN"></p>
            </div>
         </div>
         <div class="form-group row">{{-- fecha fallecimiento --}}
            <label class="col-sm-2 col-form-label">Fecha Fallecimiento</label>
            <div class="col-sm-10">
            <input type="text" name="fechaFallecimiento"  class="form-control box is-valid">
            </div>
         </div>
         <div class="form-group row">{{-- imagen --}}
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
                <input type="file" name="imagen" class="form-control-file is-valid" accept="image/png,image/jpeg">
            </div>
         </div>
        <input type="text" name="enlace"  class="form-control box is-valid"  placeholder="Enlace">{{-- enlace --}}
        <div class="form-group row"> {{-- descripción --}}
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
            <textarea name="descripcion" class="form-control box is-invalid" id="descripcion" rows="3" required></textarea>
            <p class="box" id="mensajeErrorDes"></p>
            </div>
         </div>
         <input type="text" name="zonaGeografica" class="form-control box is-invalid" id="zona" placeholder="Zona Geográfica" required>{{-- zona geográfica--}}
         <p  class="box"  id="mensajeErrorZ"></p>
         <div class="form-group row">{{-- categoría --}}
            <label class="col-sm-2 col-form-label">Categoría</label>
            <div class="col-sm-10">
                <select name="id_categoria" class="form-control form-control-lg box">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
                @endforeach
                </select>
            </div>
         </div>
        {{-- botones  --}}
        <div class="btn-group" role="group">
            <div class="col"><button class="btn btn-success" type="submit" id="submit">Enviar</button> </div>
            <div class="col"><button type="reset" class="btn btn-success">Limpiar</button></div>
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