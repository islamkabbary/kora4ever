<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class TeamComponent extends Component
{
    use WithFileUploads, WithPagination;

    public $team_id;
    public $name;
    public $logo;
    public $league;

    protected $rules = [
        'name' => 'required|max:25',
        'logo' => 'required',
        "league" => 'required|exists:leauges,id',
    ];


    public function render()
    {
        return view('livewire.team-component', [
            'teams' => Team::paginate(10),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        if ($this->team_id) {
            $team = Team::find($this->team_id);
            $team->name = $this->name;
            $team->logo = $this->logo;
            $team->save();
            $team->logos()->create(['type' => 'Logo', 'path' => $this->logo]);
            foreach ($this->league as $leag) {
                // TeamHasLeauge::create([
                //     'team_id' => $team->id,
                //     'leauge_id' => $leag,
                //     'played' => 0,
                //     'won' => 0,
                //     'drawn' => 0,
                //     'lost' => 0,
                //     'gf' => 0,
                //     'ga' => 0,
                //     'gd' => 0,
                //     'points' => 0,
                //     'next' => $team->id,
                // ]);
            }
            $this->cleare();
        } else {
            $team = new Team();
            $team->name = $this->name;
            $team->logo = $this->logo;
            $team->save();
            $team->logos()->create(['type' => 'Logo', 'path' => $this->logo]);
            foreach ($this->league as $leag) {
                // TeamHasLeauge::create([
                //     'team_id' => $team->id,
                //     'leauge_id' => $leag,
                //     'played' => 0,
                //     'won' => 0,
                //     'drawn' => 0,
                //     'lost' => 0,
                //     'gf' => 0,
                //     'ga' => 0,
                //     'gd' => 0,
                //     'points' => 0,
                //     'next' => $team->id,
                // ]);
            }
            $this->cleare();
        }
    }
    public function cleare()
    {
        $this->name = null;
        $this->logo = null;
    }
    function edit($team_id)
    {
        $team = Team::find($team_id);
        $this->team_id = $team->id;
        $this->name = $team->name;
        $this->logo = $team->logo;
    }

    function delete($team_id)
    {
        Team::destroy($team_id);
    }
}
