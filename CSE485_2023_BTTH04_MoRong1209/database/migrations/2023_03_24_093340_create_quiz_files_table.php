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
        Schema::create('quiz_files', function (Blueprint $table) {
            $table->id('id_quiz_files');
            $table->string('questions')->nullable();
            $table->string('ans1')->nullable();
            $table->string('ans2')->nullable();
            $table->string('ans3')->nullable();
            $table->string('ans4')->nullable();
            $table->string('ans_true')->nullable();
            $table->unsignedBigInteger('id_exam_files');
            $table->foreign('id_exam_files')->references('id_exam_files')->on('exam_files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_files');
    }
};
