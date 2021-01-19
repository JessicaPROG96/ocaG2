<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    // Parametros iniciales
    protected $table = 'mujeres';
    public $timestamps = false;

    protected $fillable = ['id', 'nombre', 'apellido', 'fechaNacimiento', 'fechaFallecimiento', 'imagen', 'enlace', 'descripcion', 'zonaGeografica', 'id_categoria'];
    
    //Funcion
    public function categorias() 
    {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria', 'id');
    }

}
