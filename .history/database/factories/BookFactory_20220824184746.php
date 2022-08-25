<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_name' => $this->faker->sentence(),
            'author' => $this->faker->author(),
            'description' => $this->faker->paragraph(7),
            'publication_date_n_time' => now(),
        ];
    }
}
