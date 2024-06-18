<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;
    protected $primaryKey = 'player_id';
    protected $fillable = [
        'name',
        'age',
        'position',
        'team_id',
        'jersey_no'
    ];
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
