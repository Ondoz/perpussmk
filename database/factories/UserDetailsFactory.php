<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Validation\Rules\Unique;

class UserDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 10),
            'alamat' => $this->faker->address(),
            'no_phone' => $this->faker->phoneNumber(),
            'dob' => now()
        ];
    }
}
