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
        Schema::create('busrides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ftimg')->nullable();
            $table->string('festival_name');
            $table->string('description');
            $table->float('price');
            $table->string('starting_point');
            $table->string('end_point');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('tickets_available')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busrides');
    }
};
