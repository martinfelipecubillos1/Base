<?php

namespace Database\Seeders;

use App\Models\Unidad;
use Illuminate\Database\Seeder;

class unidadseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Unidad::create([
            'nombreunidad' => 'metros',
            'valorunidad' => 1,
        ]);
    }
}
