<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'organization' => fake()->company(),
            'description' => fake()->paragraph(),
            'duration' => fake()->randomNumber(1, 10),
            'tags' => fake()->word(3),
        ];
    }
}
