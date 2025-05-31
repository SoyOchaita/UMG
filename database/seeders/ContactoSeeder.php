<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contactos')->insert([
            'email'       => 'servicioalcliente@gruporuby.gt',
            'telefono'    => '+502 0000-0000',
            'horario'     => <<<'TXT'
Lunes a viernes: 9:00 – 16:00  
Sábados: 9:00 – 12:00  
Domingos: Cerrado
TXT
            ,
            'fondo_color' => '#3e1e86',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
