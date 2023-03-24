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
        Schema::create('quiz_exam_banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_quiz')->nullable();
            $table->unsignedBigInteger('id_exam_banks')->nullable();
            $table->foreign('id_quiz')->references('id_quiz')->on('quiz_in_banks');
            $table->foreign('id_exam_banks')->references('id_exam_banks')->on('exam_banks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_exam_banks');
    }
};
