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
        Schema::create('training_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->char('active', 3);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('instructor_id');
            $table->timestamps();

            $table->foreign('instructor_id', 'fk_instructor_training_sheet')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('user_id', 'fk_users_training_sheet')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_sheets');
    }
};
