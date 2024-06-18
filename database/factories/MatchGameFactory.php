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
        $teams = Team::pluck('team_id');
        $venues = Venue::pluck('venue_id');
        $leagues = League::pluck('league_id');

        return [
            'home_team_id' => $this->faker->randomElement($teams),
            'away_team_id' => $this->faker->randomElement($teams),
            'match_date' => $this->faker->date(),
            'match_time' => $this->faker->time(),
            'venue_id' => $this->faker->randomElement($venues),
            'league_id' => $this->faker->randomElement($leagues),
            'referee' => $this->faker->name(),
            'home_team_goal' => $this->faker->randomDigit(),
            'away_team_goal' => $this->faker->randomDigit(),
            'winner' => $this->faker->name()
        ];
    }
}
