<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuspensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspensiones', function (Blueprint $table) {
            $table->increments('sus_id');
            $table->integer('re_id')->unsigned();
            $table->string('sus_motivo');
            $table->date('sus_fecha_inicio');
            $table->date('sus_fecha_fin');
            $table->timestamps();



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
        Schema::drop('suspensiones');
    }
}