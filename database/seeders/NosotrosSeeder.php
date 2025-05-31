<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NosotrosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nosotros')->insert([
            'titulo'       => 'Nuestra Historia',
            'contenido'    => <<<'TEXT'
Nos unimos como grupo sin conocernos, sin saber los nombres ni las habilidades de cada uno. A pesar de eso, desde el primer día asumimos con responsabilidad y compromiso el reto de aprender juntos en cada clase. Con entusiasmo y disposición, trabajamos en equipo para aplicar lo aprendido y construir bases sólidas que nos preparen para enfrentar el mundo de la ingeniería en sistemas.
TEXT
            ,
            'fondo_color'  => '#a8bfd9',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
