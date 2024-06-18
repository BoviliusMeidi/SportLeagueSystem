<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('match_games', function (Blueprint $table) {
            $table->bigIncrements('match_id');
            $table->foreignId('home_team_id')->constrained('teams', 'team_id');
            $table->foreignId('away_team_id')->constrained('teams', 'team_id');
            $table->date('match_date');
            $table->time('match_time');
            $table->foreignId('venue_id')->constrained('venues', 'venue_id');
            $table->foreignId('league_id')->constrained('leagues', 'league_id');
            $table->string('referee');
            $table->integer('home_team_goal');
            $table->integer('away_team_goal');
            $table->string('winner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_games');
    }
};
