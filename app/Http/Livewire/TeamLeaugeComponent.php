<?php

namespace App\Http\Livewire;

use App\Models\TeamHasLeauge;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class TeamLeaugeComponent extends Component
{
    use WithFileUploads;
    use WithPagination;


    protected $paginationTheme = 'bootstrap';
    public $team_id, $logo, $championship_id, $played, $won, $drawn, $lost, $gf, $ga, $gd;
    protected $rules = [
        "championship_id" => 'required|exists:leauges,id',
    ];

    public function render()
    {
        $teams = \App\Models\TeamHasLeauge::paginate(20);
        return view('livewire.team-leauge-component', compact('teams'));
    }

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
    }

    public function save()
    {
        // dd($this->championship_id);
        $this->validate();
        if ($this->team_id) {
            $team_has_leauge = TeamHasLeauge::where('championship_id', $this->championship_id)->where('team_id', $this->team_id)->first();
            if ($team_has_leauge) {
                $team_has_leauge->update([
                    'team_id' => $this->team_id,
                    'championship_id' => $this->championship_id,
                    'played' => $this->played,
                    'won' => $this->won,
                    'drawn' => $this->drawn,
                    'lost' => $this->lost,
                    'gf' => $this->gf,
                    'ga' => $this->ga,
                    'gd' => $this->gf - $this->ga,
                    'points' =>  $this->won * 3 + $this->drawn,
                    'next' => 4,
                ]);
            } else {
                TeamHasLeauge::create([
                    'team_id' => $this->team_id,
                    'championship_id' => $this->championship_id,
                    'played' => $this->played,
                    'won' => $this->won,
                    'drawn' => $this->drawn,
                    'lost' => $this->lost,
                    'gf' => $this->gf,
                    'ga' => $this->ga,
                    'gd' => $this->gf - $this->ga,
                    'points' =>  $this->won * 3 + $this->drawn,
                    'next' => 4,
                ]);
            }
            $this->clear();
        } else {
            $team = new Team;
            $team->name = $this->name;
            $team->save();
            $team->logos()->create(['type' => 'Logo', 'path' => $team->logos[0]->path]);
            if ($this->league) {
            }
            $this->clear();
        }
    }
    public function clear()
    {
        $this->team_id = null;
        $this->championship_id = null;
        $this->played = null;
        $this->won = null;
        $this->drawn = null;
        $this->lost = null;
        $this->gf = null;
        $this->ga = null;
        $this->gd = null;
        // $this->points= null;
    }

    function edit($team_id)
    {
        $team = TeamHasLeauge::where('team_id', $team_id)->where('championship_id', $this->championship_id)->first();
        $this->team_id = $team_id;
        $this->championship_id = $team->championship_id;
        $this->played = $team->played;
        $this->won = $team->won;
        $this->drawn = $team->drawn;
        $this->lost = $team->lost;
        $this->gf = $team->gf;
        $this->ga = $team->ga;
        $this->gd = $team->gd;
        // $this->points= $team->points;
    }
}
