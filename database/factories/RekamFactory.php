<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RekamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kondisi' => $this->faker->paragraph(mt_rand(10,100)),
            'suhu' => $this->faker->randomFloat(1, 35, 45.5)
        ];
    }
}
