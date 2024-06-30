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
});
