<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LeaugeController;
use App\Http\Controllers\MatcheController;

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
Auth::routes();

//Web
Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/test', [HomeController::class, "test"])->name('home');
Route::get('/all-news', [NewsController::class, "index"])->name('all_news');
// Route::get('/all-matches', [MatcheController::class, "index"])->name('all_matches');
Route::get('/news/{id}', [NewsController::class, "Article"])->name('Article');
Route::get('/championship/{id}', [LeaugeController::class, "show"])->name('championship');
Route::get('/championships', [LeaugeController::class, "index"])->name('all_championships');
Route::get('/team/{id}', [TeamController::class, 'show'])->name('team');
Route::get('/tag/{id}', [TagController::class, 'show'])->name('TagNews');
Route::get('/match-detail/{id}', [MatcheController::class, 'show'])->name('MatchDetails');

// Dashboard
Route::middleware(['auth:sanctum'])->get('/dashboard-match-live-team', function () {
    return view('Dashboard.dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        //News
        Route::get('/create-news', [NewsController::class, 'create'])->name('create_news');
        //League
        Route::get('/championships', [LeaugeController::class, 'create'])->name('create_leagues');
        //Tag
        Route::get('/tag', [TagController::class, 'create'])->name('create_tags');
        //Team
        Route::get('/teams', [TeamController::class, "create"])->name('create_teams');
        //Team
        Route::get('/create-matches', [MatcheController::class, "create"])->name('create_matches');
        Route::get('/teams_leauge', function () {
            return view('Dashboard.team_leauge');
        })->name('teams_leauge.dashboard');
        Route::get('/channel', function () {
            return view('Dashboard.channel');
        })->name('channel.dashboard');
        Route::get('/commentators', function () {
            return view('Dashboard.commentators');
        })->name('commentators.dashboard');
    });
});
