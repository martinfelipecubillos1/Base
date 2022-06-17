<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class colorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dependencia =  [
            ['color'=> 'F91616',
            'nombrecolor' => 'rojo',],

            ['color'=> 'F99916',
            'nombrecolor' => 'Amarillo',],

            ['color'=> '35F916',
            'nombrecolor' => 'verde',],

            ['color'=> '16F9A0',
            'nombrecolor' => 'cyan',],

            ['color'=> '16B1F9',
            'nombrecolor' => 'azul',],

            ['color'=> '2016F9',
            'nombrecolor' => 'azul rey',],

            ['color'=> '7316F9',
            'nombrecolor' => 'morado',],

            ['color'=> 'E116F9',
            'nombrecolor' => 'rosado',],

            ['color'=> 'F9168E',
            'nombrecolor' => 'fuxia',],

            ['color'=> 'F87209',
            'nombrecolor' => 'naranja',],


        ];
        DB::table('colors')->insert($dependencia);//
    }
}

