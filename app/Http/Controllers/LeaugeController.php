<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Matche;
use App\Models\Championship;
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
            $teams = TeamHasLeauge::where('championship_id', $id)->orderBy('points', 'DESC')->get();
            $matches = Matche::where('championship_id', $leauge->id)->where('date', Carbon::today()->toDateString())->get();
            return view('website.championships.championship', ['leauge' => $leauge, 'teams' => $teams, 'matches' => $matches]);
        } catch (\Throwable $th) {
        }
    }
}
