<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->string('fun_rut');
            $table->string('fun_tipo');
            $table->string('fun_nombres');
            $table->string('fun_paterno');
            $table->string('fun_materno');
            $table->string('fun_fono');
            $table->string('fun_correo');
            $table->timestamps();
            $table->primary('fun_rut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}