<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class subgrupoelementoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subgrupo =  [
            [
                'id' => '1',
                'nombresubgrupo' => 'mesas',
                'codigogrupo' => '123',
                'color' => 'FF5370',
            ],

            [
                'id' => '2',
                'nombresubgrupo' => 'sillas',
                'codigogrupo' => '123',
                'color' => 'FF5370',
            ],
            [
                'id' => '3',
                'nombresubgrupo' => 'portatiles',
                'codigogrupo' => '124',
                'color' => 'FF5370',
            ],
        ];
        DB::table('subgrupoelementos')->insert($subgrupo);
    }
}
