<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_servicio extends Model
{
   	protected $table = "list_servicios";

    protected $fillable = ['precio_servicio', 'inicio_servicio', 'fin_servicio', 'tipo_ingeniero', 'direccion', 'pago', 'user_id', 'servicio_id'];

    public function servicio() {

    	return $this->belongsTo('App\Servicio');

    }

    public function user() {

    	return $this->belongsTo('App\User');

    }

}
