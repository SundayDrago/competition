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
        Schema::create('participant_performance', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->unsignedBigInteger('participant_id');
            $table->year('year');
            $table->string('studentNumber');
            $table->unsignedBigInteger('school_id');
            $table->decimal('score');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_performance');
    }
};
