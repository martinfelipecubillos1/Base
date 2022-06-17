<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subgrupoelementos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // {
        Schema::create('subgrupoelementos',function(Blueprint $table){
            $table->id();
            $table->String('nombresubgrupo');
            $table->String('color');
            $table->unsignedBigInteger('codigogrupo');

            $table->foreign('codigogrupo')->references('id')->on('grupoelementos');
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

        Schema::dropIfExists('subgrupoelementos');//
    }
}
