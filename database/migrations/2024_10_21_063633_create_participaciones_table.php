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
        Schema::create('participaciones', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idMedia')
                ->constrained("media")
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('idCreativo')
                ->constrained("creativos")
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->enum('tipoMedia', ['Dib', 'E', 'Col', 'Dir', 'P', 'De', 'A', 'Av', 'Com'])
                ->comment("Dib: Dibujante -  
                           E: Escritor - 
                           Col: Colorista - 
                           Dir: Director - 
                           P: Productor - 
                           De: Desarrollador - 
                           A: Actor - 
                           Av: Actor de voz -
                           Com: Compositor");
            $table->string('imagen', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participaciones');
    }
};
