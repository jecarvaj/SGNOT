<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('alu_rut');
            $table->string('alu_nombres');
            $table->string('alu_paterno');
            $table->string('alu_materno')->nullable();
            $table->string('alu_direccion')->nullable();
            $table->string('alu_fono')->nullable();
            $table->string('alu_carrera')->nullable();
            $table->string('alu_correo')->nullable();
            $table->string('alu_estado')->nullable();
            //$table->timestamps();
            
            $table->primary('alu_rut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumnos');
    }
}