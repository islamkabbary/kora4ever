<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Championship;
use App\Models\Matche;
use App\Models\TeamHasLeauge;

class LeaugeController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.leagues');
        } catch (\Throwable $th) {
        }
    }
    public function show($id)
    {
        try {
            $leauge = Championship::findOrFail($id);
            $teams = $leauge->teams;
            $matches = Matche::where('championship_id', $leauge->id)->where('date', Carbon::today()->toDateString())->get();
            $news   = News::where('championship_id', $id)->get();
            $table = TeamHasLeauge::where('championship_id', $id)->orderBy('points', 'DESC')->get();
            return view('website.championships.championship', ['leauge' => $leauge, 'teams' => $teams, 'news' => $news, 'table' => $table, 'matches' => $matches]);
        } catch (\Throwable $th) {
        }
    }
}
