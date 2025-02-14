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
        Schema::create('multiple_choice_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question'); // Kolom untuk menyimpan soal
            $table->string('option_a'); // Opsi jawaban A
            $table->string('option_b'); // Opsi jawaban B
            $table->string('option_c'); // Opsi jawaban C
            $table->string('option_d'); // Opsi jawaban D
            $table->enum('correct_answer', ['A', 'B', 'C', 'D']); // Menandakan jawaban yang benar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple_choice_questions');
    }
};
