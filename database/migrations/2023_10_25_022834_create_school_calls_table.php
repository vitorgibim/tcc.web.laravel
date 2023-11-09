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
        Schema::create('school_calls', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            // $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->foreignId('school_subject_id')->constrained()->onDelete('cascade');    
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->foreignId('classroom_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['pending', 'finished']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_calls');
    }
};
