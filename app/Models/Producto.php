<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//softdelete
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;

    use SoftDeletes;
    
    protected $fillable = ['NombreArticulo','Seccion','Precio','Fecha','PaisOrigen','ruta'];
}
