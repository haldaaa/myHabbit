<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomProduit' => $this->faker->word(),
            'prix' => $this->faker->numberBetween(10, 50),
            'totalVendu' => 0,
        ];
    }
}
