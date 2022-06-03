<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dependencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('dependencias',function(Blueprint $table){
            $table->id();
            $table->String('nombredependencia');
            $table->unsignedBigInteger('compania');
            $table->foreign('compania')->references('id')->on('companias');
            $table->timestamps();
        });
        }
    }


    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}
