<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KindController;
use App\Http\Controllers\TafelController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\KindScoreController;

use App\Http\Controllers\UsersController;

use bootstrap\app;

// Alleen voor ingelogde kinderen
Route::get('/kinds/{id}', [KindController::class, 'show']);


// Alleen voor docenten
Route::middleware('docent')->group(function () {
    Route::get('/kinds', [KindController::class, 'index']);
    Route::post('/kinds', [KindController::class, 'store']);
    Route::put('/kinds/{id}', [KindController::class, 'update']);
    Route::delete('/kinds/{id}', [KindController::class, 'destroy']);

    Route::post('/tafels', [TafelController::class, 'store']);
    Route::put('/tafels/{id}', [TafelController::class, 'update']);
    Route::delete('/tafels/{id}', [TafelController::class, 'destroy']);

    Route::post('/scores', [ScoreController::class, 'store']);
    Route::put('/scores/{id}', [ScoreController::class, 'update']);
    Route::delete('/scores/{id}', [ScoreController::class, 'destroy']);

    Route::post('/kindscores', [KindScoreController::class, 'store']);
    Route::put('/kindscores/{id}', [KindScoreController::class, 'update']);
    Route::delete('/kindscores/{id}', [KindScoreController::class, 'destroy']);
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/kind/register', function () {
    return view('kind.register');
});
Route::get('/kind/login', [KindController::class, 'loginForm'])->name('kind.login.form');
Route::post('/kind/login', [KindController::class, 'login'])->name('kind.login');

Route::get('/docent/register', function () {
    return view('docent.register');
});
Route::get('/docent/login', [UsersController::class, 'loginForm'])->name('docent.login.form');
Route::post('/docent/login', [UsersController::class, 'login'])->name('docent.login');

Route::get('/docents', [UsersController::class, 'index']);
Route::get('/docent/{id}', [UsersController::class, 'show']);
Route::post('/docents', [UsersController::class, 'store']);
Route::put('/docent/{id}', [UsersController::class, 'update']);
Route::delete('/docent/{id}', [UsersController::class, 'destroy']);