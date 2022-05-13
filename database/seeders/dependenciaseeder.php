<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class dependenciaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dependencia =  [
            ['codigodependencia'=> '01',
            'nombredependencia'=> 'Oficina tic',],


            ['codigodependencia'=> '02',
            'nombredependencia'=> 'Oficina de salud',],


            ['codigodependencia'=> '03',
            'nombredependencia'=> 'movilidad',]


        ];
        DB::table('dependencias')->insert($dependencia);
    }
}
