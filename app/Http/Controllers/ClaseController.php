<?php
// app/Http/Controllers/ClaseController.php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    /**
     * Muestra el listado de temas.
     */
    public function index()
    {
        $temas = Tema::orderBy('id')
                     ->get()
                     ->unique('id')   // elimina cualquier duplicado de tema con el mismo id
                     ->values();      // reindexa la colección

        return view('clases.index', compact('temas'));
    }

    /**
     * Muestra el detalle de un tema.
     */
    public function show(Tema $tema)
    {
        $prevId = Tema::where('id', '<', $tema->id)->max('id');
        $nextId = Tema::where('id', '>', $tema->id)->min('id');

        return view('clases.show', compact('tema', 'prevId', 'nextId'));
    }
}
