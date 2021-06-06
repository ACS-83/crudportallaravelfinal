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
        // \App\Models\Perfil::factory(4)->create();
        $this->call(PerfilSeeder::class);
        \App\Models\Usuario::factory(25)->create();
    }
}
