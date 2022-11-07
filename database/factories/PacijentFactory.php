<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'broj_telefona' => $this->faker->e164PhoneNumber()
        ];
    }
}
