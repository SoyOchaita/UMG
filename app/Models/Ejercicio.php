<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $table = 'ejercicios';

    protected $fillable = [
        'clase_id',
        'title',
        'content',
        'resource_url',
    ];

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'clase_id');
    }
}

