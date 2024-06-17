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
            $table->id('match_id');
            $table->integer('home_team_id');
            $table->integer('away_team_id');
            $table->date('match_date');
            $table->time('match_time');
            $table->integer('venue_id');
            $table->integer('league_id');
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
