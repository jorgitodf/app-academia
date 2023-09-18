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
        Schema::create('day_week_training_exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exercise_id');
            $table->unsignedInteger('day_week_training_id');
            $table->integer('series');
            $table->char('repetition', 16);
            $table->integer('charge');
            $table->timestamps();

            $table->foreign('day_week_training_id', 'fk_day_week_training_exercises_day_week_trainings')->references('id')->on('day_week_trainings')->onUpdate('cascade');
            $table->foreign('exercise_id', 'fk_day_week_training_exercises_exercises')->references('id')->on('exercises')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_week_training_exercises');
    }
};
