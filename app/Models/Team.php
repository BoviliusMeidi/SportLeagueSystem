<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
