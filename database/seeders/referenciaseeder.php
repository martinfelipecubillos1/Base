<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class referenciaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            $referencia =  [
                [
                'nombrereferencia'=> 'Ag-4052',],

                [
                'nombremarca'=> 'Ac-5621',],

                [
                'nombremarca'=> 'Eb-8524',],
            ];
            DB::table('referencias')->insert($referencia);



    }
}
