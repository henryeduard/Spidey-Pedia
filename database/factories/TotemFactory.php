<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Totem>
 */
class TotemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alias' => $this->faker->userName,
            'nombre' => $this->faker->name,
            'apodo' => $this->faker->domainWord,
            'universo' => $this->faker->randomNumber,
            'primeraAparicion' => $this->faker->secondaryAddress,
            'anioCreacion' => $this->faker->year,
            'poderes' => $this->faker->text($maxNbChars = 50),
            'historia' => $this->faker->text($maxNbChars = 400),
            'vivido' => $this->faker->randomElement($array = array ('V','M', 'D')),
        ];
    }
}
