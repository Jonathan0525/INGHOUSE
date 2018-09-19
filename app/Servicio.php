<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ['nombre', 'precio_hora', 'descripcion'];

    public function list_servicios() {

    	return $this->hasMany('App\List_asesoria');

    }
}

