<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'slug' => $this->faker->slug(), // 'the-event title'
            'content' => $this->faker->paragraphs(5, true),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['draft', 'published']),
        ];
    }
}
