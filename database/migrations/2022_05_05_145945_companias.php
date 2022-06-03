<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Companias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companias',function(Blueprint $table){
        $table->id();
        $table->String('nombrecompania');
        $table->String('localizacion');
        $table->timestamps();
    });
    }


    public function down()
    {
        Schema::dropIfExists('companias');
    }
}
