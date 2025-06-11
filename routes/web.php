<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KindController;
use App\Http\Controllers\TafelController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\KindScoreController;

use App\Http\Controllers\UsersController;
use App\Models\Score;
use Illuminate\Support\Facades\DB;


// Alleen voor ingelogde kinderen
Route::get('/kinds/{id}', [KindController::class, 'show']);
Route::middleware('kind')->group(function () {
    Route::get('/opdracht', function () {
        $kinds = App\Models\Kind::all();
        return view('kind.opdracht', compact('kinds'));
    });
});


// Alleen voor docenten
Route::middleware('docent')->group(function () {
    Route::get('/kind/register', function () {
        return view('kind.register');
    });

    Route::get('/kinds', [KindController::class, 'index']);
    Route::post('/kinds', [KindController::class, 'store']);
    Route::put('/kinds/{id}', [KindController::class, 'update']);
    Route::delete('/kinds/{id}', [KindController::class, 'destroy']);



    // Route::get('/dash', function () {
    //     return view('docent.dash', compact('kinds', 'tafels'));
    // });


    Route::post('/tafels', [TafelController::class, 'store']);
    Route::put('/tafels/{id}', [TafelController::class, 'update']);
    Route::delete('/tafels/{id}', [TafelController::class, 'destroy']);
    Route::get('/dash', function () {
        $kinds = DB::table('kind')
            ->join('kind_score', 'kind.idKind', '=', 'kind_score.idKind') // let op: idKind
            ->join('score', 'kind_score.idScore', '=', 'score.idScore')   // let op: idScore
            ->join('tafel', 'score.idTafeltje', '=', 'tafel.idTafeltje') // let op: idTafeltje
            ->select(
                'kind.idKind',
                'kind_score.idKindScore',
                'score.idScore',
                'kind.gebruikersnaam',
                'score.score',
                'tafel.nummer as tafel'
            )
            ->get();

        KindScoreController::class;
        ScoreController::class;

        return view('docent.dash', compact('kinds'));
    });
    // Route::get('/scores/{id}', [ScoreController::class, 'destroy']);

    // Route::post('/kindscores', [KindScoreController::class, 'store']);
    Route::put('/score/{id}', [ScoreController::class, 'update']);
    
    Route::delete('/kindscores/{id}', [KindScoreController::class, 'destroy']);
});



Route::get('/', function () {
    return view('welcome');
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
