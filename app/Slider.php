<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   protected $fillable = ['image_url','titulo_principal','subtitulo_principal','descripcion_principal','titulo_secundario','subtitulo_secundario','descripcion_secundario'];
}
