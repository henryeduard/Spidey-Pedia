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
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 100);
            // $table->foreignId('idMedia')
            $table->enum('tipoMedia', ['C', 'P', 'V', 'Tv', 'M', 'Te', 'F', 'A'])
                ->comment("C: Cómic -  
                           P: Película - 
                           V: Videojuego - 
                           Tv: SerieTV - 
                           M: Manga - 
                           Te: Teatro - 
                           F: Figura Coleccionable - 
                           A: Arte");
            $table->date('fechaEstreno')->nullable();
            $table->text('descripcion');
            $table->string('imagen', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
