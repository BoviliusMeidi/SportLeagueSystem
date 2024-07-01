<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\VenueController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerPost')->name('register.post');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost')->name('login.post');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(VenueController::class)->group(function(){
    Route::get('/venue', 'getVenues')->name('venue');
    Route::get('/venue/add', 'addVenue')->name('addVenue');
    Route::post('/venue/add', 'createVenue')->name('createVenue');
    Route::get('/venue/{venue}/edit', 'editVenue')->name('editVenue');
    Route::post('/venue/{venue}/edit', 'updateVenue')->name('updateVenue');
    Route::delete('/venue/{venue}/delete', 'deleteVenue')->name('deleteVenue');
});

Route::controller(LeagueController::class)->group(function(){
    Route::get('/league', 'getLeagues')->name('league');
});
