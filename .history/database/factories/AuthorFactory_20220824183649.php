<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname' => fake()->fname(),
            'lname' => fake()->lname(),
            'mname' => fake()->mname(),
            'author' => fake()->author(),
            'description' => fake()->description(),
            'publication_date_n_time' => now(),
        ];
    }
}
