<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Matche;
use App\Models\TeamHasLeauge;
use App\Http\Controllers\Controller;
class MatcheController extends Controller
{
    public function index()
    {
        $matches = Matche::all()->groupBy('championship_id');
        $dateMatches = Matche::all()->groupBy('date');
        return view('website.matches.allmatches', ['matches' => $matches,'dateMatches' => $dateMatches]);
    }

    public function create()
    {
        try {
            return view("Dashboard.create_match");
        } catch (\Throwable $th) {
        }
    }

    public function show($id)
    {
        $match = Matche::findOrFail($id);
        $twoTeams = TeamHasLeauge::whereIn('team_id', [$match->team1, $match->team2])
            ->where('championship_id', $match->leauge->id)
            ->orderBy('points', 'DESC')
            ->get();
        $most  = News::all()->random(5);
        $statistc = TeamHasLeauge::where('championship_id', $match->leauge->id)->orderBy('points', 'DESC')->get()->take(4);
        $affiliateNews   = News::where('championship_id', $match->leauge->id)->get();
        if ($affiliateNews->count() > 6) {
            return view('website.matches.MatchDetails', ['match' => $match, 'most' => $most, 'statistc' => $statistc, 'twoTeams' => $twoTeams, 'affiliateNews' => $affiliateNews->take(6)]);
        } elseif ($affiliateNews->count() < 6 && $affiliateNews->count() > 3) {
            return view('website.matches.MatchDetails', ['match' => $match, 'most' => $most, 'statistc' => $statistc, 'twoTeams' => $twoTeams, 'affiliateNews' => $affiliateNews->take(3)]);
        } else {
            return view('website.matches.MatchDetails', ['match' => $match, 'most' => $most, 'statistc' => $statistc, 'twoTeams' => $twoTeams, 'affiliateNews' => $affiliateNews]);
        }
    }
}
