<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class grupoelementoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupo =  [
            [
                'id' => '123',
                'nombregrupo' => 'Muebles ',
                'color' => 'FF5370',
            ],

            [
                'id' => '124',
                'nombregrupo' => 'Electronicos',
                'color' => 'FF5370',
            ],
            [
                'id' => '135',
                'nombregrupo' => 'Construcción',
                'color' => 'FF5370',
            ],

            [
                'id' => '234',
                'nombregrupo' => 'Papeleria',
                'color' => 'FF5370',
            ],

            [
                'id' => '456',
                'nombregrupo' => 'Consumibles',
                'color' => 'FF5370',
            ],
            [
                'id' => '789',
                'nombregrupo' => 'Emergencias',
                'color' => 'FF5370',
            ],


        ];
        DB::table('grupoelementos')->insert($grupo);
    }
}
