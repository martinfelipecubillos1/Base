<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movimientoinvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientoinvs',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('responsable');
            $table->unsignedBigInteger('elemento');
            $table->unsignedBigInteger('estado');
            $table->unsignedBigInteger('proveedor');
            $table->unsignedBigInteger('tipomovimiento');
            $table->unsignedBigInteger('usuario');
            $table->unsignedBigInteger('actualiza');

            $table->foreign('responsable')->references('id')->on('responsablespordependencias');
            $table->foreign('elemento')->references('id')->on('elementoinventarios');
            $table->foreign('estado')->references('id')->on('estados');
            $table->foreign('proveedor')->references('id')->on('proveedors');
            $table->foreign('tipomovimiento')->references('id')->on('movimientos');
            $table->foreign('usuario')->references('id')->on('users');
            $table->foreign('actualiza')->references('id')->on('users');
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
        Schema::dropIfExists('movimientoinvs');//
    }
}
