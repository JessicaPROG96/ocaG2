@extends('layouts.master')
@section('content')

<form enctype="multipart/form-data" method="GET" action="{{url('crearMujer')}}">
    @csrf 
    <div class="form-group cajas">
        <input type="text" name="nombre" class="form-control box" id="" placeholder="Nombre">
        <input type="text" name="apellido" class="form-control box" id="" placeholder="Apellido">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha Nacimiento</label>
            <div class="col-sm-10">
            <input type="date" name="fechaNacimiento" class="form-control box" id="">
            </div>
         </div>
        
         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha Fallecimiento</label>
            <div class="col-sm-10">
            <input type="date" name="fechaFallecimiento"  class="form-control box" id="">
            </div>
         </div>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
                <input type="file" name="imagen" class="form-control-file" id="" accept=".jpg, .png, .gif, .jpeg">
            </div>
         </div>

        <input type="text" name="enlace"  class="form-control box" id="" placeholder="Enlace">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
            <textarea name="descripcion" class="form-control box" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
         </div>
         <input type="text" name="zonaGeografica" class="form-control box" id="" placeholder="Zona Geográfica">

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Categoría</label>
            <div class="col-sm-10">
           
                <select name="id_categoria" class="form-control form-control-lg box">
                @foreach($categorias as $categoria)
                <option value="{{$categoria['id']}}">{{$categoria['nombreCategoria']}}</option>
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
