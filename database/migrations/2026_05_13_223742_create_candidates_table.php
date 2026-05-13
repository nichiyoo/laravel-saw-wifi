<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('bps_code', 6)->unique();
            $table->string('kemendagri_code', 6)->unique();
            $table->string('kemantren');
            $table->unsignedInteger('jss_users')->default(0);
            $table->unsignedInteger('wifi_count')->default(0);
            $table->unsignedInteger('population_density')->default(0);
            $table->unsignedBigInteger('self_funding')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
