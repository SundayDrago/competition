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
        Schema::table('results', function (Blueprint $table) {
            $table->foreign(['attempt_id'], 'results_ibfk_1')->references(['id'])->on('attempts')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['question_id'], 'results_ibfk_2')->references(['id'])->on('questions')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign('results_ibfk_1');
            $table->dropForeign('results_ibfk_2');
        });
    }
};
