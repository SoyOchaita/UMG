<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run()
    {
        Setting::updateOrCreate(
            ['key' => 'logo_path'],
            ['value' => 'icono.svg']   // o 'carousel/logo.png' si lo guardas en storage/app/public
        );
    }
}
