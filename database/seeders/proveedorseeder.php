<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $proveedor =  [
            ['codigoproveedor'=> '01',
            'nombreproveedor'=> 'Asus',
            'contacto' => '300*******'],

            ['codigoproveedor'=> '02',
            'nombreproveedor'=> 'HP',
            'contacto' => '315*******'],

            ['codigoproveedor'=> '03',
            'nombreproveedor'=> 'ACER',
            'contacto' => '321*******'],

        ];
        DB::table('proveedors')->insert($proveedor);

    }
}
