<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministraReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administra_reservas', function (Blueprint $table) {
            $table->string('fun_rut')->unsigned;;
            $table->integer('re_id')->unsigned;
            $table->timestamps();

            $table->primary(['fun_rut','re_id']);
            $table->foreign('fun_rut')->references('fun_rut')->on('funcionarios');
            $table->foreign('re_id')->references('re_id')->on('reservas');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('administra_reservas');
    }
}