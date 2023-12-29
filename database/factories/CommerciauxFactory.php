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
            'nomCommercial' => $faker->name,
            'ageCommercial' => $faker->numberBetween(18, 80),
            'sexeCommercial' => $faker->randomElement(['Homme', 'Femme', 'Autre']),
            'paysCommercial' => $faker->country,
            'villeCommercial' => $faker->city,
            'nombreCommande' => 0,
        ];
    }
}
