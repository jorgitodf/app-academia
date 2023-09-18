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
        Schema::create('day_week_trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day_week', 16);
            $table->unsignedInteger('training_sheets_id');
            $table->timestamps();

            $table->foreign('training_sheets_id', 'fk_day_week_training_training_sheets')->references('id')->on('training_sheets')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_week_trainings');
    }
};
