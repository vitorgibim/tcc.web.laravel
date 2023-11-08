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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('ra',8);
            $table->string('cpf', 11);
            $table->unique('cpf'); // Determina que não pode haver outros cpf's iguais
            $table->string('email', 40);
            $table->string('address', 150)->nullable(); // Rua, avenida
            $table->string('address_number', 10)->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            // $table->unsignedBigInteger('city_id'); //FK
            // $table->unsignedBigInteger('course_id'); //FK
            // $table->foreign('city_id')->references('id')->on('cities');
            // $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
