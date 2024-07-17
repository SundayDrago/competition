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
        Schema::create('rejected', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 100)->unique('username');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('studentNumber', 50)->nullable();
            $table->string('image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rejected');
    }
};
