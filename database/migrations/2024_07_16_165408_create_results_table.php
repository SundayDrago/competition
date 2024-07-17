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
            $table->integer('id', true);
            $table->integer('attempt_id')->nullable()->index('attempt_id');
            $table->integer('question_id')->nullable()->index('question_id');
            $table->text('given_answer');
            $table->integer('marks_obtained')->nullable();
            $table->integer('time_taken')->nullable();
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
