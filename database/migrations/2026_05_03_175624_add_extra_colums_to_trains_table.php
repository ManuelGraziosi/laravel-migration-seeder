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
        Schema::table('trains', function (Blueprint $table) {
            $table->string("arrival_platform")->nullable();
            $table->string("departure_platform")->nullable();
            $table->unsignedInteger("delay_minutes");
            $table->enum("status", [
                'scheduled',
                'on_time',
                'delayed',
                'cancelled',
                'departed',
                'arrived'
            ]);
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->dropColumn("arrival_platform");
            $table->dropColumn("departure_platform");
            $table->dropColumn("delay_minutes");
            $table->dropColumn("status");
        });
    }
};
