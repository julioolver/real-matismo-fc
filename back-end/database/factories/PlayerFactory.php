<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'slug'  => $this->faker->slug(),
            'open_value' => $this->faker->randomNumber(2, 0, 8),
            'description' => $this->faker->text()
        ];
    }
}
