<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function getVenues(){
        $venueData = Venue::paginate(10);
        return view('Admin.venue', ['venues' => $venueData]);
    }
    public function deleteVenue(Venue $venue){
        $venue->delete();
        return redirect()->back()->with('success', 'Delete Venue Successfully!');
    }

    public function editVenue(Venue $venue){
        return view('Admin.editVenue', ['venue'=> $venue]);
    }

    public function updateVenue(Venue $venue, Request $request){
        $venueData = $request->validate([
            'name'=>['required', 'string'],
            'country'=>['required', 'string'],
            'city'=>['required', 'string'],
            'capacity'=>['required', 'numeric']
        ]);
        $venue->update($venueData);
        return redirect()->back()->with('success', 'Successfully update venue!');
    }

    public function addVenue(){
        return view('Admin.addVenue');
    }

    public function createVenue(Request $request){
        $venueData = $request->validate([
            'name'=>['required', 'string'],
            'country'=>['required', 'string'],
            'city'=>['required', 'string'],
            'capacity'=>['required', 'numeric']
        ]);

        $venue = Venue::create($venueData);

        if(!$venue){
            return redirect()->back()->with('error', 'Unsuccessfully add venue');
        }

        return redirect(route('venue'))->with('success', 'Successfully add venue');
    }
}
