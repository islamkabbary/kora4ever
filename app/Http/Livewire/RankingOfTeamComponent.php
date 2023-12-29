<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Championship;
use App\Models\TeamHasLeauge;

class RankingOfTeamComponent extends Component
{
    public $leauge_id;

    public function render()
    {
        $name_leauge = Championship::findOrFail($this->leauge_id)->name;
        $rankingOfTeams = TeamHasLeauge::where('championship_id', $this->leauge_id)->orderBy('points', 'DESC')->get();
        return view('livewire.ranking-of-team-component', ['name_leauge' => $name_leauge, 'rankingOfTeams' => $rankingOfTeams]);
    }
}
