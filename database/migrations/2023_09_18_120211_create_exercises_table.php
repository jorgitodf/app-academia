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
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->unsignedInteger('group_exercise_id');
            $table->timestamps();

            $table->foreign('group_exercise_id', 'fk_group_exercises_exercises')->references('id')->on('group_exercises')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
