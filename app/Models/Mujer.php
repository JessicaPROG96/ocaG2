<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mujer extends Model
{
    protected $table = 'mujeres';
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'fechaNacimiento', 'fechaFallecimiento', 'imagen', 'enlace', 'descripcion', 'zonaGeografica', 'id_categoria'];
}
