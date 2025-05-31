<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    public function run(): void
    {
        $registros = [
            ['nombre' => 'MSc. M.A. Lic. Aldo Ernesto Alí Barrera Donis',   'rol' => 'MSc. M.A. Lic. Aldo Ernesto Alí Barrera Donis',    'foto_path' => 'images/lbases.jpg'],
            ['nombre' => 'Douglas Peruch',  'rol' => 'Ing. Sistemas',             'foto_path' => 'images/douglas.jpeg'],
            ['nombre' => 'Nicolas Ochaita',  'rol' => 'Ing. Sistemas',             'foto_path' => 'images/nochaita.jpg'],
        ];

        

        foreach ($registros as $item) {
            DB::table('equipos')->insert(array_merge($item, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
