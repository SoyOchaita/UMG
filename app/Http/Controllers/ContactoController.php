<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        // Recupera el único registro de 'contactos'
        $info = Contacto::firstOrFail();

        // Pásalo a la vista como $info
        return view('contacto.index', compact('info'));
    }
}
