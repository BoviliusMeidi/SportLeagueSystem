<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatchGame extends Model
{
    use HasFactory;
    protected $primaryKey = 'match_id';
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
    public function homeTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function awayTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class, 'league_id');
    }
}
