<?php

namespace Database\Seeders;

use App\Models\Elementoinventario;
use Illuminate\Database\Seeder;

class elementoinventarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elementoinventario::create([
            'elemento' => 1,
            'marca' => 2,
            'referencia' => 1,
            'unidad' => 1,
            'placainterna' => 1,
            'placaexterna' => 1,
        ]);
    }
}
