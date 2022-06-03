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
            ['nombrecompania'=> 'Alcaldia',
            'localizacion' => 'Fusagasuga'],

            ['nombrecompania'=> 'Procuraduria',
            'localizacion' => 'Fusagasuga'],

            ['nombrecompania'=> 'Fiscalia',
            'localizacion' => 'Fusagasuga'],

        ];
        DB::table('companias')->insert($compania);
    }


    }

