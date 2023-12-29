<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Livewire\CreateNewsComponent;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class,'login']);
Route::post('/create-news', [NewsController::class, 'create']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('change-password', [AuthController::class,'change_password']);

Route::get('create-news',[NewsController::class,'create_post']);

