<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['id','titulo','descripcion','fecha_estreno','director','duracion','imagen','likes'];
}
