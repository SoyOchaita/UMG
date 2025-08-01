<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ejercicios', function (Blueprint $table) {
        $table->id();
        $table->foreignId('clase_id')
              ->constrained('clases')
              ->cascadeOnDelete();
        $table->string('title');
        $table->text('content')->nullable();
        $table->string('resource_url')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejercicios');
    }
};
