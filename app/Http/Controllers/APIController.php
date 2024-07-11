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
    public function getStandingsAndFixtures()
    {
        $standings = $this->serviceProvider->getStandings();
        if (isset($standings['errors']) && !empty($standings['errors'])) {
            session()->flash('error', $standings['errors']['requests']);
            return view('homepage', ['standings' => []]);
        }
        $params = ['league' => 39, 'season' => 2024, 'round' => 'Regular Season - 1'];
        $fixtures = $this->serviceProvider->getFixtures($params);
        if (isset($fixtures['errors']) && !empty($fixtures['errors'])) {
            session()->flash('error', $fixtures['errors']['requests']);
            return view('homepage', ['fixtures' => []]);
        }
        $teams = $this->serviceProvider->getTeams();

        // Create a mapping of team IDs to codes
        $teamCodes = [];
        if (isset($teams['response'])) {
            foreach ($teams['response'] as $team) {
                $teamCodes[$team['team']['id']] = $team['team']['code'];
            }
        }

        return view('homepage', compact('standings', 'fixtures', 'teamCodes'));
    }
    public function getDetailStandings()
    {
        $standings = $this->serviceProvider->getStandings();
        if (isset($standings['errors']) && !empty($standings['errors'])) {
            session()->flash('error', $standings['errors']['requests']);
            return view('standings', ['standings' => []]);
        }
        return view('standings', compact('standings'));
    }
    public function getDetailFixtures()
    {
        $fixtures = $this->serviceProvider->getFixtures();
        // dd($fixtures);
        if (isset($fixtures['errors']) && !empty($fixtures['errors'])) {
            session()->flash('error', $fixtures['errors']['requests']);
            return view('fixtures', ['fixtures' => []]);
        }
        return view('fixtures', compact('fixtures'));
    }
}
