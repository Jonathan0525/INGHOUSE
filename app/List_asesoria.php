<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_asesoria extends Model
{
    protected $table = "list_asesorias";

    protected $fillable = ['precio_asesoria', 'inicio_asesoria', 'fin_asesoria', 'tipo_ingeniero', 'direccion', 'pago', 'user_id', 'asesoria_id'];

    public function asesoria() {

    	return $this->belongsTo('App\Asesoria');

    }

    public function user() {

    	return $this->belongsTo('App\User');

    }
}

