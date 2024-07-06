<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function viewAllTeam(){
        $teamData = Team::paginate(20);
        return view('Team.allTeam', ['teams' => $teamData]);
    }

    public function detailTeam($name){
        $team = Team::where('name', $name)->first();
        return view('Team.detailTeam', ['team'=> $team]);
    }
}
