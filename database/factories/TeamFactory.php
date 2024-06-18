<?php

namespace Database\Factories;

use App\Models\League;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
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
            'country' => $this->faker->country(),
            'founded' => $this->faker->year(),
            'league_id' => League::factory(),
            'venue_id' => Venue::factory()
        ];
    }
}
