<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function getLeagues()
    {
        $leagues = League::paginate(10);
        return view('Admin.league', ['leagues' => $leagues]);
    }
}
