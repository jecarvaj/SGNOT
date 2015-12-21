<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('re_id');
            $table->integer('equ_id')->unsigned();
            $table->string('alu_rut')->unsigned();
            $table->date('re_fecha_solicitud')->nulable();
            $table->date('re_fecha_retiro')->nullable();
            $table->date('re_fecha_devolucion')->nullable();
            $table->date('re_fecha_real_devolucion')->nullable();
            $table->timestamps();

            $table->foreign('equ_id')->references('equ_id')->on('equipos');
            $table->foreign('alu_rut')->references('alu_rut')->on('alumnos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservas');
    }
}