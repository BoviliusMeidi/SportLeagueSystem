<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $primaryKey = 'league_id';
    protected $fillable =[
        'name',
        'region'
    ];
}
