@extends('layouts.master')
@section('content')

<form enctype="multipart/form-data" method="POST" action="{{url('crearMujer')}}">
    @csrf 
    <div class="form-group cajas">
        <input type="text" name="nombre" class="form-control box"  placeholder="Nombre" required>
        <input type="text" name="apellido" class="form-control box"  placeholder="Apellido" required>

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
                <input type="file" name="imagen" class="form-control-file" required>
            </div>
         </div>

        <input type="text" name="enlace"  class="form-control box"  placeholder="Enlace">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
            <textarea name="descripcion" class="form-control box" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
  <button class="btn btn-primary box" type="submit">Enviar</button>    
    </div>
</form>

    
@endsection
