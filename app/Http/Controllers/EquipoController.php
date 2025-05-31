<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipo = Equipo::orderBy('id')->get();
        // obtenemos el color de fondo del primer registro (o fallback)
        $color = optional($equipo->first())->fondo_color ?? '#0297a7';

        return view('equipo.index', compact('equipo', 'color'));
    }
}
