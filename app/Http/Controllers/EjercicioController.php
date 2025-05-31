<?php
// app/Http/Controllers/EjercicioController.php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    /**
     * Lista de ejercicios.
     */
    public function index()
    {
        $ejercicios = Ejercicio::orderBy('id')
                               ->get()
                               ->unique('id')   // elimina duplicados de ejercicios con mismo id
                               ->values();      // reindexa la colección

        return view('ejercicios.index', compact('ejercicios'));
    }

    /**
     * Detalle de un ejercicio.
     */
    public function show(Ejercicio $ejercicio)
    {
        $prevId = Ejercicio::where('id', '<', $ejercicio->id)->max('id');
        $nextId = Ejercicio::where('id', '>', $ejercicio->id)->min('id');

        return view('ejercicios.show', compact('ejercicio', 'prevId', 'nextId'));
    }
}
