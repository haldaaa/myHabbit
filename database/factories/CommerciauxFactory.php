<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommerciauxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomCommercial' => $this->faker->name(),
            'ageCommercial' => $this->faker->numberBetween(18, 80),
            'sexeCommercial' => $this->faker->randomElement(['Homme', 'Femme', 'Autre']),
            'paysCommercial' => $this->faker->country(),
            'villeCommercial' => $this->faker->city(),
            'nombreCommande' => 0,
        ];
    }
}
