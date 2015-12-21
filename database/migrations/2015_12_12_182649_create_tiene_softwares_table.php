<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTieneSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiene_softwares', function (Blueprint $table) {
            $table->integer('equ_id')->unsigned();
            $table->integer('soft_id')->unsigned();

            $table->primary(['equ_id','soft_id']);
            $table->foreign('equ_id')->references('equ_id')->on('equipos');
            $table->foreign('soft_id')->references('soft_id')->on('softwares');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tiene_softwares');
    }
}