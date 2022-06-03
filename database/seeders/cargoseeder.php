<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class cargoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo =  [
            ['nombrecargo'=> 'Contratista'],

           [ 'nombrecargo'=> 'Admin'],

            ['nombrecargo'=> 'aseo'],

        ];
        DB::table('cargos')->insert($cargo);
    }
    }

