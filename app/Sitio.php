<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    //
    protected $fillable = ['id','Tipo', 'Nombre', 'Categoria', 'Importe'];
}
