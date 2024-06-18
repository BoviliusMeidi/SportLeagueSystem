<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
