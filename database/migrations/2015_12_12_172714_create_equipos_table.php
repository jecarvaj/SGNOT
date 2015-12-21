<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            
            $table->increments('equ_id');
            $table->integer('hard_id')->unsigned()->nullable();
            $table->integer('pro_id')->unsigned()->nullable();
            $table->string('equ_tipo')->nullable();
            $table->string('equ_marca')->nullable();
            $table->string('equ_descripcion')->nullable();
            $table->string('equ_estado')->nullable();
           // $table->timestamps();

            
            $table->foreign('hard_id')->references('hard_id')->on('hardwares');
            $table->foreign('pro_id')->references('pro_id')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipos');
    }
}
