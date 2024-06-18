<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\MatchGame;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;
use App\Models\Venue;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Player::factory(100)->recycle(
            Team::factory(10)->recycle([
                League::factory(5)->create(),
                Venue::factory(10)->create()
            ])->create()
        )->create();

        MatchGame::factory(200)->create();
    }
}
