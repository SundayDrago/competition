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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('username', 100)->unique()->nullable(false);
            $table->string('firstname', 100)->nullable(false);
            $table->string('lastname', 100)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->string('registration_number', 100)->nullable(); // Change to string

            // Ensure the schools table exists and the column registration_number is indexed and unique
            $table->foreign('registration_number')->references('registration_number')->on('schools')->onDelete('cascade');

            $table->string('image_file', 255)->nullable();
            $table->enum('status', ['pending', 'confirmed', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
