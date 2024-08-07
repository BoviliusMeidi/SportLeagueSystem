<?php

use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthenticationController;

Route::get('/match', function(){
    return view('match');
});

Route::controller(APIController::class)->group(function () {
    Route::get('/','getStandingsAndFixtures')->name('homepage');
    Route::get('/standings','getDetailStandings')->name('standings');
    Route::get('/fixtures','getDetailFixtures')->name('fixtures');
    Route::get('/teams', 'getTeams')->name('allTeams');
    Route::get('/team/{id}/{name}', 'detailTeam')->name('detailTeam');
});


Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerPost')->name('register.post');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost')->name('login.post');
    Route::get('/logout', 'logout')->name('logout');
});

Route::prefix('database')->group(function () {
    Route::controller(VenueController::class)->group(function () {
        Route::get('/venue', 'getVenues')->name('venue');
        Route::get('/venue/add', 'addVenue')->name('addVenue');
        Route::post('/venue/add', 'createVenue')->name('createVenue');
        Route::get('/venue/{venue}/edit', 'editVenue')->name('editVenue');
        Route::post('/venue/{venue}/edit', 'updateVenue')->name('updateVenue');
        Route::delete('/venue/{venue}/delete', 'deleteVenue')->name('deleteVenue');
    });

    Route::controller(LeagueController::class)->group(function () {
        Route::get('/league', 'getLeagues')->name('league');
        Route::get('/league/add', 'addLeague')->name('addLeague');
        Route::post('/league/add', 'createLeague')->name('createLeague');
        Route::get('/league/{league}/edit', 'editLeague')->name('editLeague');
        Route::post('/league/{league}/edit', 'updateLeague')->name('updateLeague');
        Route::delete('/league/{league}/delete', 'deleteLeague')->name('deleteLeague');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('/team', 'viewAllTeam')->name('team');
        Route::get('/team/{name}', 'detailTeam')->name('detailsTeam');
    });
});

Route::get('/search', [SearchController::class, 'search'])->name('search');


