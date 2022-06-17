<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Elementoinventarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementoinventarios',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('elemento');
            $table->unsignedBigInteger('marca');
            $table->unsignedBigInteger('unidad');
            $table->unsignedBigInteger('placainterna');
            $table->unsignedBigInteger('precio');
            $table->unsignedBigInteger('cantidad');

            $table->foreign('elemento')->references('id')->on('elementos');
            $table->foreign('marca')->references('id')->on('marcas');
            $table->foreign('unidad')->references('id')->on('unidads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementoinventarios');
    }
}

