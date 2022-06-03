<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Responsablespordependencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsablespordependencias',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('responsable');
            $table->unsignedBigInteger('dependencia');
            $table->foreign('dependencia')->references('id')->on('dependencias');
            $table->foreign('responsable')->references('id')->on('responsables');
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
        Schema::dropIfExists('responsablespordependencias');
    }
}
