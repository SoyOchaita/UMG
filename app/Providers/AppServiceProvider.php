<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Comparte la ruta del logo con todas las vistas
        View::share('logoPath', 'images/logoblanco.jpg');
    }
}
