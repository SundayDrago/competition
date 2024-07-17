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
        Schema::create('attempt', function (Blueprint $table) {
            $table->string('challengeNumber', 100)->nullable();
            $table->string('username', 500);
            $table->integer('studentNumber');
            $table->integer('score');
            $table->string('isComplete', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempt');
    }
};
