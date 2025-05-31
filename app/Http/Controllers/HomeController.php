<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\Clase;

class HomeController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        return view('home', compact('clases'));
    }
}
