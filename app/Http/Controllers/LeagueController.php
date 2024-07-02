<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function getLeagues(){
        $leagues = League::paginate(10);
        return view('Admin.league', ['leagues' => $leagues]);
    }
    public function addLeague(){
       return view('Admin.addLeague');
    }
    public function createLeague(Request $request){
        $leagueData = $request->validate([
            'name'=>['required', 'string'],
            'region'=>['required', 'string']
        ]);

        $league = League::create($leagueData);

        if(!$league){
            return redirect()->back()->with('error', 'Unsuccessfully Add League');
        }

        return redirect(route('league'))->with('success', 'Successfully Add League');
    }
    public function editLeague(League $league){
        return view('Admin.editLeague', ['league'=>$league]);
    }
    public function updateLeague(League $league, Request $request){
        $leagueData = $request->validate([
            'name'=>['required', 'string'],
            'region'=>['required', 'string']
        ]);
        $league->update($leagueData);
        return redirect()->back()->with('success', 'Successfully Update League!');
    }
    public function deleteLeague(League $league){
        $league->delete();
        return redirect()->back()->with('success', 'Successfully Delete League!');
    }
}
