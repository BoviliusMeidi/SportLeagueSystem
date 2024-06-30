<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function getVenues(){
        $venueData = Venue::paginate(10);
        return view('Admin.venue', ['venues' => $venueData]);
    }

}
