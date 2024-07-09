<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\AppServiceProvider;

class APIController extends Controller
{
    protected $serviceProvider;

    public function __construct(AppServiceProvider $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
    }

    public function getTeams()
    {
        $teams = $this->serviceProvider->getTeams();
        return view('team.allTeam', compact('teams'));
    }

    public function detailTeam($id, $name)
    {
        $teams = $this->serviceProvider->getTeams();
        $team = null;

        foreach ($teams['response'] as $teamData) {
            if ($teamData['team']['id'] == $id) {
                $team = $teamData;
                break;
            }
        }

        if (!$team) {
            return redirect()->back()->with('error', 'Did not get the detail team !!');
        }

        return view('team.detailTeam', compact('team'));
    }
    public function getStandings(){
        $standings = $this->serviceProvider->getStandings();
        if (isset($standings['errors']) && !empty($standings['errors'])) {
            session()->flash('error', $standings['errors']['requests']);
            return view('homepage', ['standings' => []]);
        }
        return view('homepage', compact('standings'));
    }
}
