<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class elementoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



            $elemento =  [
                [
                'nombreelemento'=> 'Computador',
                'color' => '4099ff', ],

                [
                'nombreelemento'=> 'Esfero',
                'color' => 'd7e052',],

                [
                'nombreelemento'=> 'Impresora',
                'color' => 'FF5370',],

            ];
            DB::table('elementos')->insert($elemento);


    }
}
