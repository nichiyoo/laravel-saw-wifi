<?php

use App\Enums\VariableType;
use Illuminate\Support\Facades\Schema;
use Repo\SawEngine\Enums\AttributeType;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->enum('variable', VariableType::values())->unique();
            $table->string('description')->nullable();
            $table->enum('type', AttributeType::values());
            $table->decimal('weight', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metrics');
    }
};
