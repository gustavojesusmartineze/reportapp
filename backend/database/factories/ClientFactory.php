<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'tin' => $this->faker->regexify('[A-Z]{5}[0-4]{4}'),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->companyEmail()
        ];
    }
}
