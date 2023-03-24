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
        Schema::create('exam_files', function (Blueprint $table) {
            $table->id('id_exam_files');
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('exam_date_start')->nullable();
            $table->string('exam_date_end')->nullable();
            $table->string('exam_duration')->nullable();
            $table->string('status')->nullable();
            $table->integer('number')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_files');
    }
};
