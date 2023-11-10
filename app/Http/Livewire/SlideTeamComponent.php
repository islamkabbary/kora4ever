<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class SlideTeamComponent extends Component
{
    public function render()
    {
        $teams = Team::all();
        return view('livewire.slide-team-component', ['teams' => $teams]);
    }
}
