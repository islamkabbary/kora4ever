<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TeamHasLeauge;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class TeamComponent extends Component
{
    use WithFileUploads, WithPagination, LivewireAlert;

    public $team_id;
    public $name;
    public $logo;
    public $leauge_id = [];

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name' => 'required|max:25',
        'logo' => 'required',
        "leauge_id" => 'required',
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
        if ($this->team_id) {
            $team = Team::find($this->team_id);
            $team->name = $this->name;
            $team->logo = $this->logo;
            $team->save();
            foreach ($this->leauge_id as $leag) {
                TeamHasLeauge::create([
                    'team_id' => $team->id,
                    'leauge_id' => $leag,
                    'played' => 0,
                    'won' => 0,
                    'drawn' => 0,
                    'lost' => 0,
                    'gf' => 0,
                    'ga' => 0,
                    'gd' => 0,
                    'points' => 0,
                    'next' => $team->id,
                ]);
            }
            $this->clear();
            $this->alert('success', "successfully updated");
        } else {
            $this->validate();
            $team = new Team();
            $team->name = $this->name;
            $team->logo = $this->logo;
            $team->save();
            foreach ($this->leauge_id as $leag) {
                TeamHasLeauge::create([
                    'team_id' => $team->id,
                    'leauge_id' => $leag,
                    'played' => 0,
                    'won' => 0,
                    'drawn' => 0,
                    'lost' => 0,
                    'gf' => 0,
                    'ga' => 0,
                    'gd' => 0,
                    'points' => 0,
                    'next' => $team->id,
                ]);
            }
            $this->clear();
            $this->alert('success', "successfully added");
        }
    }
    public function clear()
    {
        $this->name = null;
        $this->logo = null;
        $this->leauge_id = [];
    }
    function edit($team_id)
    {
        $team = Team::find($team_id);
        // dd($team->leauges->pluck('id')->toArray());
        $this->team_id = $team->id;
        $this->name = $team->name;
        $this->logo = $team->logo;
        $this->leauge_id = $team->leauges->pluck('id')->toArray();
    }

    function delete($team_id)
    {
        Team::destroy($team_id);
    }
}
