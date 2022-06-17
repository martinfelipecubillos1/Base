<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class marcaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca =  [
            [
                'nombremarca'=> 'NA',],
            [
            'nombremarca'=> 'activision',],

            [
            'nombremarca'=> 'lg',],

            [
            'nombremarca'=> 'movistar',],

        ];
        DB::table('marcas')->insert($marca);
    }
}
