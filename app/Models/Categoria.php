<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Parametros iniciales
    protected $table = 'categorias';
    public $timestamps = false;

    protected $fillable = ['nombreCategoria','color'];

    // Funciones
    public function galeria() {
        return $this->hasMany('App\Models\Galeria');
    }

}