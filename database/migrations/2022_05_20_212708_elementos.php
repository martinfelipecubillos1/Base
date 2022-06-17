<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Elementos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos',function(Blueprint $table){
            $table->id();
            $table->String('nombreelemento');
            $table->unsignedBigInteger('codigosubgrupo');
            $table->unsignedBigInteger('marca');
            $table->longText('descripcion');
            $table->foreign('codigosubgrupo')->references('id')->on('subgrupoelementos');
            $table->foreign('marca')->references('id')->on('marcas');
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

        Schema::dropIfExists('elementos');//
    }
}
