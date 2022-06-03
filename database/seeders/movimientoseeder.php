<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class movimientoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movimiento =  [
            [
            'nombremovimiento'=> 'salida',],

            [
            'nombremovimiento'=> 'entrada',],

            [
            'nombremovimiento'=> 'prestamo',],

        ];
        DB::table('movimientos')->insert($movimiento);

    }
}
