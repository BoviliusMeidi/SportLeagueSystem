<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 40),
            'position' => $this->faker->randomElement(['Forward', 'Midfielder', 'Defender', 'Goalkeeper']),
            'team_id' => Team::factory(),
            'jersey_no' => $this->faker->numberBetween(0, 100)
        ];
    }
}
