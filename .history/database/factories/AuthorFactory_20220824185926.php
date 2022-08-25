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
            'fname' => ->fname(),
            'lname' => fake()->lname(),
            'mname' => fake()->mname(),
            'description' => $this->faker->paragraph(7),
        ];
    }
}