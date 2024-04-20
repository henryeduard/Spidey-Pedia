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
        Schema::create('universos', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 25);
            $table->text('descripcion');
            $table->string('tipoMedia', 100);
            // $table->foreignId('idTipoMedia')
            //     ->nullable()
            //     ->constrained("tipoMedia")
            //     ->restrictOnDelete()
            //     ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universos');
    }
};
