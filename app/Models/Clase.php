<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'clases';

    protected $fillable = [
        'title',
        'description',
        'image_path',
    ];

    public function ejercicios()
    {
        return $this->hasMany(Ejercicio::class, 'clase_id');
    }
}
