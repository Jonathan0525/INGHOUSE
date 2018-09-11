<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precio_servicio');
            $table->dateTime('inicio_servicio');
            $table->dateTime('fin_servicio');
            $table->string('tipo_ingeniero');
            $table->string('direccion');
            $table->string('pago');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('servicio_id');

            
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
