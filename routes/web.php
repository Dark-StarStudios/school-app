<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KindController;
use App\Http\Controllers\TafelController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\KindScoreController;

Route::get('/kinds', [KindController::class, 'index']);
Route::get('/kinds/{id}', [KindController::class, 'show']);
Route::post('/kinds', [KindController::class, 'store']);
Route::put('/kinds/{id}', [KindController::class, 'update']);
Route::delete('/kinds/{id}', [KindController::class, 'destroy']);

Route::get('/tafels', [TafelController::class, 'index']);
Route::get('/tafels/{id}', [TafelController::class, 'show']);
Route::post('/tafels', [TafelController::class, 'store']);
Route::put('/tafels/{id}', [TafelController::class, 'update']);
Route::delete('/tafels/{id}', [TafelController::class, 'destroy']);

Route::get('/scores', [ScoreController::class, 'index']);
Route::get('/scores/{id}', [ScoreController::class, 'show']);
Route::post('/scores', [ScoreController::class, 'store']);
Route::put('/scores/{id}', [ScoreController::class, 'update']);
Route::delete('/scores/{id}', [ScoreController::class, 'destroy']);

Route::get('/kindscores', [KindScoreController::class, 'index']);
Route::get('/kindscores/{id}', [KindScoreController::class, 'show']);
Route::post('/kindscores', [KindScoreController::class, 'store']);
Route::put('/kindscores/{id}', [KindScoreController::class, 'update']);
Route::delete('/kindscores/{id}', [KindScoreController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kind/register', function () {
    return view('kind.register');
});
Route::get('/kind/login', [KindController::class, 'loginForm'])->name('kind.login.form');
Route::post('/kind/login', [KindController::class, 'login'])->name('kind.login');