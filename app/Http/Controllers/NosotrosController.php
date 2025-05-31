<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;

class NosotrosController extends Controller
{
    public function index()
    {
        // Asumimos un único registro
        $info = Nosotros::firstOrFail();
        return view('nosotros.index', compact('info'));
    }
}
