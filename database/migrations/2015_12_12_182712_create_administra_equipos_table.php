<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministraEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administra_equipos', function (Blueprint $table) {
            $table->string('fun_rut')->unsigned();
            $table->integer('equ_id')->unsigned();

            $table->primary(['fun_rut','equ_id']);
            $table->foreign('fun_rut')->references('fun_rut')->on('funcionarios');
            $table->foreign('equ_id')->references('equ_id')->on('equipos');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('administra_equipos');
    }
}