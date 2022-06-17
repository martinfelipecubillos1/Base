<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class tipocontratoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipocontrato =  [
            [
                'tipodecontrato' => "ENTRADA CONSUMO REQUISICION COMPRA",
            ],
            [
                'tipodecontrato' => "ENTRADA CONSUMO REQUISICION CAJA MENOR",
            ],
            [
                'tipodecontrato' => "ENTRADA CONSUMO REQUISICION COMPRAVENTA",
            ],
            [
                'tipodecontrato' => "ENTRADA CONSUMO REQUISICION SUMINISTRO",
            ],
            [
                'tipodecontrato' => "ENTRADA DE ELEMENTOS PARA DONACION",
            ],
        ];
        DB::table('tipocontratos')->insert($tipocontrato);
    }
}
