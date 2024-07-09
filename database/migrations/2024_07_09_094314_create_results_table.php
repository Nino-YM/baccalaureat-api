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
        Schema::create('results', function (Blueprint $table) {
            $table->id('id_result');
            $table->foreignId('student_id')->constrained('students', 'id_student')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects', 'id_subject')->onDelete('cascade');
            $table->float('score');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
