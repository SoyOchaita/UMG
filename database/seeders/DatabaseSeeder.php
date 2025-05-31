<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\ClaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Si prefieres resetear los IDs y registros, descomenta la línea:
        // \DB::table('users')->truncate();

        // Crea o actualiza el usuario de prueba sin duplicados
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name'     => 'Test User',
                'password' => bcrypt('password'),  // o la contraseña que desees
            ]
        );

        // Llama al seeder de clases
        $this->call([
        SettingSeeder::class,
        ClaseSeeder::class,
        TemaSeeder::class,
        EjercicioSeeder::class,
        NosotrosSeeder::class,
        ContactoSeeder::class,
        EquipoSeeder::class
        // ...
    ]);
    }
}
