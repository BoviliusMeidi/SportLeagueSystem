<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'match_date',
        'match_time',
        'venue_id',
        'league_id',
        'referee',
        'home_team_goal',
        'away_team_goal',
        'winner'
    ];
}
