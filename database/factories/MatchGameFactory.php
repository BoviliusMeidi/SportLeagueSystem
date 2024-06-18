<?php

namespace Database\Factories;

use App\Models\League;
use App\Models\Team;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MatchGame>
 */
class MatchGameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'home_team_id' => Team::factory(),
            'away_team_id' => Team::factory(),
            'match_date' => $this->faker->date(),
            'match_time' => $this->faker->time(),
            'venue_id' => Venue::factory(),
            'league_id' => League::factory(),
            'referee' => $this->faker->name(),
            'home_team_goal' => $this->faker->randomDigit(),
            'away_team_goal' => $this->faker->randomDigit(),
            'winner' => $this->faker->name()
        ];
    }
}
