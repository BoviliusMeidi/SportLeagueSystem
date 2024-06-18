<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    protected $primaryKey = 'team_id';
    protected $fillable = [
        'name',
        'country',
        'founded',
        'league_id',
        'venue_id'
    ];
    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class, 'league_id');
    }
    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }
    public function players() : HasMany {
        return $this->hasMany(Player::class);
    }
}
