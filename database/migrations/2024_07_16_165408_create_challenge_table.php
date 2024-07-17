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
        Schema::create('challenge', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('challengeNumber');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration');
            $table->integer('num_questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenge');
    }
};
