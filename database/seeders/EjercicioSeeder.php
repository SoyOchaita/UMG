<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjercicioSeeder extends Seeder
{
    public function run(): void
    {
        // 1) COMPONENTES DE COMPUTADORAS
        Ejercicio::create([
            'titulo'      => 'COMPONENTES DE COMPUTADORAS',
            'descripcion' => <<<'DESC'
Imagina y diseña la computadora ideal que siempre has soñado, considerando cuidadosamente las siguientes características: características deseables, precios accesibles y tamaño conveniente.

Esta actividad te desafía a explorar tus preferencias y necesidades en cuanto a tecnología, al mismo tiempo que te brinda la oportunidad de reflexionar sobre cómo diseñarías tu herramienta informática perfecta para adaptarse a tu estilo de vida y a tus actividades académicas y personales.
DESC
        ]);

        // 2) SISTEMAS OPERATIVOS 1
        Ejercicio::create([
            'titulo'      => 'SISTEMAS OPERATIVOS 1',
            'descripcion' => <<<'DESC'
Realiza los siguientes ejercicios en cuadros sinópticos:
a. Top 5 de sistemas operativos para PC o laptops.
b. Top 5 de sistemas operativos para móviles.
d. 7 términos de Sistema operativo.
DESC
        ]);

        // 3) SISTEMAS OPERATIVOS 2
        Ejercicio::create([
            'titulo'      => 'SISTEMAS OPERATIVOS 2',
            'descripcion' => <<<'DESC'
A continuación, se listan diferentes niveles funcionales de un sistema operativo. Tu tarea es ordenar los siguientes componentes desde el nivel más bajo (cercano al hardware) hasta el más alto (más cercano al usuario). Luego, deberás describir brevemente la función de cada uno en una oración clara.

Componentes a ordenar:
• Shell de comandos (CLI o GUI)
• Aplicaciones de usuario
• Interfaz de bajo nivel
• Traducción de memoria
• Protocolos de red
• Controladores de dispositivos (drivers)
• Abstracción de alto nivel
• Dispositivos de Entrada/Salida y Red (I/O)
• Interconexión del sistema (bus)
• Gestión de procesos y archivos
DESC
        ]);

        // 4) BASE DE DATOS
        Ejercicio::create([
            'titulo'      => 'BASE DE DATOS',
            'descripcion' => <<<'DESC'
Elaborar en Lucidchart el Diagrama de Entidad-Relación de Control de una biblioteca.
DESC
        ]);

        // 5) REDES PARA PRINCIPIANTES
        Ejercicio::create([
            'titulo'      => 'REDES PARA PRINCIPIANTES',
            'descripcion' => <<<'DESC'
Utilice la siguiente herramienta:
https://www.mycompiler.io/es/new/sql

Se dará cuenta que ya incluye un ejemplo de creación de tabla, INSERT y SELECT.
Cree una tabla con los siguientes campos: Id, Nombre, Apellido, Genero, Edad, Salario, FechaIngreso.
Inserte 06 registros.
Luego aplique cada comando del 1 al 21 en ella.
DESC
        ]);

        // 6) BASES NÚMERICAS
        Ejercicio::create([
            'titulo'      => 'BASES NÚMERICAS',
            'descripcion' => <<<'DESC'
IPv4 Consultando IA Generativa:
• Usando una herramienta de IA generativa, y en tu rol de estudiante, pide un resumen de la IPv4.
• Redacta la respuesta incluyendo la referencia APA para IA.
• Comenta tus hallazgos con otros compañeros.
DESC
        ]);

        // 7) CISCO PACKET TRACER
        Ejercicio::create([
            'titulo'      => 'CISCO PACKET TRACER',
            'descripcion' => <<<'DESC'
En Cisco Packet Tracer crea una topología simple que contenga:
• Un router, un switch y dos PCs.
• Asigna direcciones IP estáticas a cada PC (por ejemplo, 192.168.1.10 y 192.168.1.11 con máscara /24).
• Configura el router para enrutar el tráfico entre ambas PCs.
• Realiza pruebas de conectividad usando el comando ping desde cada PC.
• Añade una VLAN extra en el switch y mueve una PC a esa VLAN; demuestra que sin un subinterfaz en el router no hay comunicación, y luego habilita la subinterfaz VLAN y verifica la conectividad.
DESC
        ]);

        // 8) SUBNETING
        Ejercicio::create([
            'titulo'      => 'SUBNETING',
            'descripcion' => <<<'DESC'
Elaborar ensayo académico de subnetting en formato PDF.
DESC
        ]);

        // 9) INICIO EN LA PROGRAMACIÓN
        Ejercicio::create([
            'titulo'      => 'INICIO EN LA PROGRAMACIÓN',
            'descripcion' => <<<'DESC'
Crear una mini página web con estructura básica en HTML, estilo visual con CSS y una pequeña interacción con JavaScript.
DESC
        ]);
    }
}
