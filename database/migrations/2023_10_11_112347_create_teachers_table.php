<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('cpf', 11);
            $table->unique('cpf'); // Determina que não pode haver outros cpf's iguais
            $table->string('email', 40);
            $table->string('address', 150)->nullable(); // Rua, avenida
            $table->string('address_number', 10)->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->foreignId('city_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
