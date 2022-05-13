<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(companiaseeder::class);
        $this->call(proveedorseeder::class);
        $this->call(dependenciaseeder::class);
        $this->call(SuperAdminseeder::class);
        $this->call(SeederTablaPermisos::class);





    }
}
