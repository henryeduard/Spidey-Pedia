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
            $table->string('nombre', 100);
            // $table->foreignId('idUniverso')
            //     ->nullable()
            //     ->constrained("universos")
            //     ->restrictOnDelete()
            //     ->cascadeOnUpdate();
            $table->integer('universo');
            $table->string('alias', 100);
            $table->string('primeraAparicion', 250);
            $table->string('primeraAparicion', 250);
            $table->integer('anioCreacion');
            $table->text('poderes');
            $table->text('historia');
            $table->enum('vivido', ['V', 'M'])
                ->comment("V: Vivo  -  M: Muerto");
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
