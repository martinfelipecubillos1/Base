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
            ['nombredependencia'=> 'Oficina tic',
            'compania' => '1',],

            ['nombredependencia'=> 'Oficina de salud',
            'compania' => '1',],



            ['nombredependencia'=> 'movilidad',
            'compania' => '1',],


        ];
        DB::table('dependencias')->insert($dependencia);
    }
}
