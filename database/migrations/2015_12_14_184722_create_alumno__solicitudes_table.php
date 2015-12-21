<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoSolicitudesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno__solicitudes', function(Blueprint $table)
		{
            $table->string('new_rut');
            $table->string('new_nombres');
            $table->string('new_paterno');
            $table->string('new_materno');
            $table->string('new_direccion');
            $table->string('new_fono');
            $table->string('new_carrera');
            $table->string('new_correo');
            $table->timestamps();
            
            $table->primary('new_rut');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumno__solicituds');
	}

}
