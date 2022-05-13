<?php

namespace Database\Seeders;

use App\Models\Compania;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companiaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compania =  [
            ['codigocompania'=> '01',
            'nombrecompania'=> 'Alcaldia',
            'localizacion' => 'Fusagasuga'],

            ['codigocompania'=> '02',
            'nombrecompania'=> 'Procuraduria',
            'localizacion' => 'Fusagasuga'],

            ['codigocompania'=> '03',
            'nombrecompania'=> 'Fiscalia',
            'localizacion' => 'Fusagasuga'],

        ];
        DB::table('companias')->insert($compania);
    }


    }

