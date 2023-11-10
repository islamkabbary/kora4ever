<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LeaugeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Dashboard
Route::middleware(['auth:sanctum'])->get('/dashboard-match-live-team', function () {
    return view('Dashboard.dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        //News
        Route::get('/create-news', [NewsController::class, 'create'])->name('create_news');
        //League
        Route::get('/leagues', [LeaugeController::class, 'create'])->name('create_leagues');
        //Tag
        Route::get('/tag', [TagController::class, 'create'])->name('create_tags');
        //Team
        Route::get('/teams', [TeamController::class, "create"])->name('create_teams');
        //Team
        Route::get('/teams_leauge', function () {
            return view('Dashboard.team_leauge');
        })->name('teams_leauge.dashboard');
        // Route::get('/test', function () {
        //     return view('Dashboard.test');
        // });
        // Route::get('/channel', function () {
        //     return view('Dashboard.channel');
        // })->name('channel.dashboard');
        // Route::get('/create-matches', [CreateMatchController::class, "create"])->name('create_matches');
        // Route::get('/commentators', function () {
        //     return view('Dashboard.commentators');
        // })->name('commentators.dashboard');
    });
});

//Web
Route::get('/test', function () {
    return view('website.test');
});
Route::get('/Article/{id}', [NewsController::class, "Article"])->name('Article');
