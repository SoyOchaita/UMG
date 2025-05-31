<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nosotros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('contenido');
            $table->string('fondo_color', 7)->default('#a8bfd9'); // color de fondo
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nosotros');
    }
};
