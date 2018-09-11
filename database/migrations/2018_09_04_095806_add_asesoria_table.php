<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAsesoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesoria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precio_asesoria');
            $table->dateTime('inicio_asesoria');
            $table->dateTime('fin_asesoria');
            $table->string('tipo_ingeniero');
            $table->string('direccion');
            $table->string('pago');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('asesoria_id');

            
            $table->foreign('asesoria_id')->references('id')->on('asesorias')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesoria');
    }
}
