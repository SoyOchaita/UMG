<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClaseSeeder extends Seeder
{
    public function run()
    {
        $slides = [
            [
                'title'      => 'Introducción a Bases de Datos',
                'description'=> 'Conceptos básicos de BBDD',
                'image_path' => 'carousel/slide1.jpg',
            ],
            [
                'title'      => 'Modelado Entidad-Relación',
                'description'=> 'Diagramas y normalización',
                'image_path' => 'carousel/slide2.jpg',
            ],
            [
                'title'      => 'SQL Avanzado',
                'description'=> 'Subconsultas, joins y transacciones',
                'image_path' => 'carousel/slide3.jpg',
            ],
            [
                'title'      => 'Optimización de Consultas',
                'description'=> 'Índices y planes de ejecución',
                'image_path' => 'carousel/slide4.jpg',
            ],
        ];

        foreach ($slides as $data) {
            Clase::updateOrCreate(
                ['title' => $data['title']],
                $data
            );
        }
    }
}
