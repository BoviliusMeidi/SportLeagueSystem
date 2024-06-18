<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venue extends Model
{
    use HasFactory;
    protected $primaryKey = 'venue_id';
    protected $fillable = [
        'name',
        'country',
        'city',
        'capacity'
    ];
    public function teams() : HasMany {
        return $this->hasMany(Team::class);
    }
    public function matchs() : HasMany {
        return $this->hasMany(MatchGame::class);
    }
}
