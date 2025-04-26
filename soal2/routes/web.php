<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GolfLeaderboardDataController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk mendapatkan semua tim
Route::get('api/teams', [GolfLeaderboardDataController::class, 'getAllTeams']);
