<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitsFactory extends Factory
{
    private static $produitsDisponibles = ['Planche', 'Acier', 'Petrole', 'Aluminium', 'Eau', 'Betail', 'Métaux lourds'];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        if (empty(self::$produitsDisponibles)) {
            throw new \Exception("Plus de produits disponibles");
        }

        $nomProduit = $this->faker->unique()->randomElement(self::$produitsDisponibles);
        self::$produitsDisponibles = array_diff(self::$produitsDisponibles, [$nomProduit]);

        return [
            'nomProduit' => $nomProduit,
            'prix' => $this->faker->numberBetween(10, 50),
            'totalVendu' => 0,
        ];
    }
}

