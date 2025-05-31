<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EquipoController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas de la Aplicación
|--------------------------------------------------------------------------
|
| Aquí se definen todas las rutas que muestran vistas públicas:
| - Home
| - Temas (Clases)
| - Ejercicios
| - Nosotros
| - Contacto
| - Equipo
|
*/

// Página de inicio (carrusel de clases)
Route::get('/', [HomeController::class, 'index'])
     ->name('home');     // Nombre de ruta: home

// -------------------------------------------------------------------------
// RUTAS DE CLASES (AKA TEMAS)
// -------------------------------------------------------------------------

// Listado de temas
Route::get('/clases', [ClaseController::class, 'index'])
     ->name('clases.index');   // Nombre de ruta: clases.index

// Detalle de un tema específico (por ID)
Route::get('/clases/{tema}', [ClaseController::class, 'show'])
     ->where('tema', '[0-9]+') // Solo numérico
     ->name('clases.show');    // Nombre de ruta: clases.show

// -------------------------------------------------------------------------
// RUTAS DE EJERCICIOS
// -------------------------------------------------------------------------

// Listado de ejercicios
Route::get('/ejercicios', [EjercicioController::class, 'index'])
     ->name('ejercicios.index');  // Nombre de ruta: ejercicios.index

// Detalle de un ejercicio específico (por ID)
Route::get('/ejercicios/{ejercicio}', [EjercicioController::class, 'show'])
     ->where('ejercicio', '[0-9]+') // Solo numérico
     ->name('ejercicios.show');      // Nombre de ruta: ejercicios.show

// -------------------------------------------------------------------------
// RUTAS DE PÁGINAS INSTITUCIONALES
// -------------------------------------------------------------------------

// Nuestra historia / “Nosotros”
Route::get('/nosotros', [NosotrosController::class, 'index'])
     ->name('nosotros');   // Nombre de ruta: nosotros

// Página de Contacto
Route::get('/contacto', [ContactoController::class, 'index'])
     ->name('contacto');   // Nombre de ruta: contacto

// Página de Equipo
Route::get('/equipo', [EquipoController::class, 'index'])
     ->name('equipo');     // Nombre de ruta: equipo
