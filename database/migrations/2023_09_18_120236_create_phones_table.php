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
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fixed', 11)->nullable();
            $table->string('mobile', 12)->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id', 'fk_phones_users')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
