<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomClient' => $faker->name,
            'ageClient' => $faker->numberBetween(18, 80),
            'sexeClient' => $faker->randomElement(['Homme', 'Femme', 'Autre']),
            'paysClient' => $faker->country,
            'villeClient' => $faker->city,
            'commandeClient' => 0,
        ];
    }
}
