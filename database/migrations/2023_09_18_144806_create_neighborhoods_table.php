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
        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('neighborhood', 50);
            $table->unsignedInteger('citie_id');
            $table->timestamps();

            $table->foreign('citie_id', 'fk_neighborhoods_cities')->references( 'id' )->on('cities')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighborhoods');
    }
};
