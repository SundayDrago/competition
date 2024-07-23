<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id')->nullable(); // Foreign key for schools, but no constraint
            $table->unsignedBigInteger('participant_id')->nullable(); // Foreign key for participants, but no constraint
            $table->year('year'); // The year for the performance data
            $table->decimal('average_score', 8, 2)->nullable(); // Average score
            $table->unsignedInteger('total_attempts')->nullable(); // Total attempts
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('performances');
    }
}
