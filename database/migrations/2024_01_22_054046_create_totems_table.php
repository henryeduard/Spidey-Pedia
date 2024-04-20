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
        Schema::create('totems', function (Blueprint $table) {
            $table->id();
            $table->string('alias', 100)
                ->comment("Nombre de Héroe");
            $table->string('nombre', 100)
                ->comment("Nombre de civil");
            $table->string('apodo', 100)
                ->comment("Nombre (no oficial) con el que se le conoce");
            // $table->foreignId('idUniverso')
            //     ->nullable()
            //     ->constrained("universos")
            //     ->restrictOnDelete()
            //     ->cascadeOnUpdate();
            $table->integer('universo');
            $table->string('primeraAparicion', 250);
            // $table->foreignId('primeraAparicion')
            //     ->nullable()
            //     ->constrained("media")
            //     ->restrictOnDelete()
            //     ->cascadeOnUpdate();
            $table->integer('anioCreacion');
            $table->text('poderes');
            $table->text('historia');
            $table->enum('vivido', ['V', 'M', 'D'])
                ->comment("V: Vivo  -  M: Muerto - D: Desconocido");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('totems');
    }
};
