<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("operator")->nullable();
            $table->string("departure_station")->nullable();
            $table->string("arrival_station")->nullable();
            $table->dateTime("departure_time")->nullable();
            $table->dateTime("arrival_time")->nullable();
            $table->string("train_number")->unique();
            $table->unsignedTinyInteger("carriages_count")->nullable();
            $table->boolean("is_on_time");
            $table->boolean("is_cancelled");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
