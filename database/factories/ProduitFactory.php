<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomProduit' => $faker->word,
            'provenanceProduit' => $faker->country,
            'totalVendu' => 0,
        ];
    }
}
