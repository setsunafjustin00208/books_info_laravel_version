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
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastname(),
            'mname' => $this->faker->name(),
            'description' => $this->faker->paragraph(7),
        ];
    }
}
