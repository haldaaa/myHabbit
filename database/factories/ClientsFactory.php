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
            'nomClient' => $this->faker->name(),
            'ageClient' => $this->faker->numberBetween(18, 80),
            'sexeClient' => $this->faker->randomElement(['Homme', 'Femme', 'Autre']),
            'paysClient' => $this->faker->randomElement(['France', 'Belgique', 'Luxembourg' , 'Italie' , 'Angleterre' , 'Portugal' , 'Bangkok']),
            'villeClient' => $this->faker->city(),
            'commandeClient' => 0,
        ];
    }
}
