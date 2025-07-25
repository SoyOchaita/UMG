<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';

    protected $fillable = [
        'email',
        'telefono',
        'horario',
        'fondo_color',
    ];
}
