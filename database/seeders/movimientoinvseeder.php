<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movimientoinv;
class movimientoinvseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Movimientoinv::create([
                'responsable' => 1,
                'elemento' => 1,
                'estado' => 2,
                'proveedor' => 1,
                'tipomovimiento' => 1,
                'usuario' => 1,
                'actualiza' => 2,
            ]);
    }
}
