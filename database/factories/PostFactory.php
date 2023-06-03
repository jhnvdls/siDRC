<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'content' => $this->faker->paragraphs(5, true),
            'image' => $this->faker->imageUrl(1024, 631, 'animals', true, 'cats'),
            'status' => $this->faker->randomElement(['draft', 'published']),
        ];
    }
}
