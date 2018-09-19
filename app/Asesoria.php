<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    protected $table = "asesorias";

    protected $fillable = ['nombre', 'precio_hora', 'descripcion'];

    public function list_asesorias() {

    	return $this->hasMany('App\List_asesoria');

    }

    


}
