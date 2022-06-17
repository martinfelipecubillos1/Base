<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos',function(Blueprint $table){
            $table->id();
            $table->String('numero');
            $table->unsignedBigInteger('proveedor');
            $table->unsignedBigInteger('dependencia');
            $table->unsignedBigInteger('tipodecontrato');
            $table->String('formadepago');
            $table->String('lugarentrega');
            $table->String('plazoentrega');
            $table->String('otrascondiciones');
            $table->String('pdf');




            $table->foreign('proveedor')->references('id')->on('proveedors');
            $table->foreign('dependencia')->references('id')->on('dependencias');
            $table->foreign('tipodecontrato')->references('id')->on('tipocontratos');
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
        Schema::dropIfExists('contratos');//
    }
}

        //

