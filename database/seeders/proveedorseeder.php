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
            [
            'nombreproveedor'=> 'Asus',
            'contacto' => '300*******'],

            [
            'nombreproveedor'=> 'HP',
            'contacto' => '315*******'],

            [
            'nombreproveedor'=> 'ACER',
            'contacto' => '321*******'],

        ];
        DB::table('proveedors')->insert($proveedor);

    }
}
