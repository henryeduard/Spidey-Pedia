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
        Schema::create('apariciones', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idTotem')
                ->constrained("totems")
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('idMedia')
                ->constrained("media")
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->boolean('primeraAparicion')->default(false);
            $table->string('imagen', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apariciones');
    }
};
