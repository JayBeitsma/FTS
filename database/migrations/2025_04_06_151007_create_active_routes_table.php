<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Busride;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('active_routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignid('busride_id')->constrained('busrides')->onDelete('cascade');
            $table->string('starting_point');
            $table->string('end_point');
            $table->integer('number_of_passangers')->nullable();
            $table->integer('number_of_seats')->nullable();
            $table->date('departure_date');
            $table->time('departure_time');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('active_routes');
    }
};
