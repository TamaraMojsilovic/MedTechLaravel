<?php

namespace Database\Factories;

use App\Models\Lekar;
use App\Models\Pacijent;
use Illuminate\Database\Eloquent\Factories\Factory;

class PregledFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'lekar_id' => Lekar::factory(),
            'pacijent_id' => Pacijent::factory()
        ];
    }
}
