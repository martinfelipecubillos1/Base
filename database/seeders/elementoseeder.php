<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class elementoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $elemento =  [
            [
                'nombreelemento' => 'Computador',
                'codigosubgrupo' => 3,
                'marca' => 1,
                'descripcion' => "Unidad de computo: 4G de Ram, 1 T de almacenamiento, color plateado de 15 pulgadas",
            ],

            [
                'nombreelemento' => 'mesa',
                'codigosubgrupo' => 1,
                'marca' => 1,
                'descripcion' => "Mesa de madera con soportes de metal, medidas: 1.50*140, color cafe ",
            ],
            [
                'nombreelemento' => 'silla',
                'codigosubgrupo' => 2,
                'marca' => 1,
                'descripcion' => "silla de metal con asiento alchado, medidas: 90*60, color negro",
            ],

        ];
        DB::table('elementos')->insert($elemento);
    }
}
