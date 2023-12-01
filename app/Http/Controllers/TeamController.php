<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\News;
use App\Models\Team;
use App\Models\Matche;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.team');
        } catch (\Throwable $th) {
        }
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        $leagues = [];
        foreach ($team->leauges->all() as $leauge) {
            if ($leauge['type'] == 'league') {
                $leagues[] = $leauge;
            }
        }
        $matches = Matche::where('team1', $team->id)->orWhere('team2', $team->id)->get();
        // $videos =  News::where('type', 'video')->with('tags')->whereHas(
        //     'tags',
        //     function ($query) use ($team) {
        //         $tag = Tag::where('name', $team->name)->first();
        //         $query->where('name', '=', $tag->name);
        //     }
        // )->get();
        $news = News::where('team_id', $id)->get();
        // dd($news);
        // return view("team", compact('team', 'leagues', 'matches', 'news', 'videos'));
        return view("website.teams.team", compact('team', 'leagues', 'news','matches'));
    }
}
