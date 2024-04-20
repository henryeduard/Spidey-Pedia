<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universo>
 */
class UniversoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => $this->faker->randomNumber,
            'descripcion' => $this->faker->text($maxNbChars = 400),
            'tipoMedia' => $this->faker->randomElement($array = array ('Cómic','Película', 'Videojuego')),
        ];
    }
}
