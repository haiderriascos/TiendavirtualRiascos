<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
 
    protected $table = 'productos';
    protected $fillable = [
        'nombre', 
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria_id'
        ];
}

