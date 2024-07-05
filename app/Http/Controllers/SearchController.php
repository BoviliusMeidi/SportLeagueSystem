<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $team = Team::where('name', 'ILIKE', "%{$query}%")->get();

        return view('search', ['teams' => $team, 'query' => $query]);
    }
}
