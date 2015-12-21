<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardwares', function (Blueprint $table) {
            $table->increments('hard_id');
            $table->string('hard_ram')->nullable();
            $table->string('hard_procesador')->nullable();
            $table->string('hard_disco')->nullable();
            $table->string('hard_tamano')->nullable();
            $table->string('hard_video')->nullable();
            $table->string('hard_bateria')->nullable();
            $table->string('hard_optica')->nullable();

           
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hardwares');
    }
}