<?php

namespace Database\Factories;

use App\Models\Position;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = Department::all()->pluck('id')->toArray();
        $positions = Position::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->name(),
            'nim' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'department_id' => $this->faker->randomElement($departments),
            'position_id' => $this->faker->randomElement($positions),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(640, 480),
            'instagram' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'github' => $this->faker->url(),
        ];
    }
}
