<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class estadoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado =  [
            ['nombreestado'=> 'Bueno'],


            ['nombreestado'=> 'Dañado'],


            ['nombreestado'=> 'Funcional'],
        ];
        DB::table('estados')->insert($estado);

    }
}
