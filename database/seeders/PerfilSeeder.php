<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfils')->insert([
            'nombre' => 'Director',
            'descripcion' => 'Supervisa a los demás. También puede dirigir actividades, procesos, recursos materiales y más',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('perfils')->insert([
            'nombre' => 'Diseñador gráfico',
            'descripcion' => 'Reunirse con clientes o el director de arte para establecer cuál es el alcance de un proyecto',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('perfils')->insert([
            'nombre' => 'Editor de sonido',
            'descripcion' => 'Responsable de seleccionar e integrar grabaciones de sonido',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('perfils')->insert([
            'nombre' => 'Informático',
            'descripcion' => 'Técnico que hace posible el tratamiento automático de la información por medio de ordenadores',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('perfils')->insert([
            'nombre' => 'Productor musical',
            'descripcion' => 'Se encarga de un montón de detalles que van desde la grabación a la incorporación de efectos',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
