<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Si existe, la eliminamos primero
        Schema::dropIfExists('ejercicios');

        // Ahora la volvemos a crear con solo los campos necesarios
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descripcion');
            $table->timestamps(); // created_at + updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ejercicios');
    }
};
