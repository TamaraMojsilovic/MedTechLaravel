<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LekarFactory extends Factory
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
            'specijalizacija' => $this->faker->catchPhrase(),
            'broj_telefona' => $this->faker->e164PhoneNumber(),
        ];
    }
}
