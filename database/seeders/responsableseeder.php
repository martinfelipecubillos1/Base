<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class responsableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $responsable =  [
            ['cedula'=> '1007726049',
            'nombre'=> 'martin felipe',
            'correo'=> 'martim@gmail',
            'numero' => '300*******',
            'cargo' => '1',],

            ['cedula'=> '1007726039',
            'nombre'=> 'Felipe hunberto',
            'correo'=> 'martim@gmal',
            'numero' => '300*******',
            'cargo' => '2',],


            ['cedula'=> '1007726029',
            'nombre'=> 'wilson cangrejo',
            'correo'=> 'martim@gail',
            'numero' => '300*******',
            'cargo' => '3',],

        ];
        DB::table('responsables')->insert($responsable);
    }
}
