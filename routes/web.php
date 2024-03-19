<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

//LANDING
Route::get('/voting', [VotingController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    //DASHBOARD
    Route::get('/home', [HomeController::class, 'index']);
    //USERS
});


