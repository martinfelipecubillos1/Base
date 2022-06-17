<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grupoelementos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // {
        Schema::create('grupoelementos',function(Blueprint $table){
            $table->id();
            $table->String('nombregrupo');
            $table->String('color');

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

        Schema::dropIfExists('grupoelementos');//
    }
}
