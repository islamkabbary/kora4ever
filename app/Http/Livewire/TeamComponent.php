<?php

namespace App\Http\Livewire;

use App\Models\Team;
use App\Models\Championship;
use Livewire\Component;
use App\Helpers\FileHelper;
use Livewire\WithPagination;
use App\Models\TeamHasLeauge;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class TeamComponent extends Component
{
    use WithFileUploads, WithPagination, LivewireAlert;

    public $team_id;
    public $name;
    public $logo;
    public $leaugeSearch;
    public $selectLeague;
    public $national_or_team;
    public $played;
    public $won;
    public $drawn;
    public $lost;
    public $gf;
    public $ga;
    public $gd;
    public $points;
    public $editPointsID;
    public $championship_id = [];

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name' => 'required|max:25',
        "national_or_team" => 'required',
        "championship_id" => 'array|required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
    ];


    public function render()
    {
        if ($this->selectLeague) {
            // $this->edit();
            dd($this->editPointsID);
        }
        $teams = Team::query();
        if ($this->leaugeSearch) {
            $teams->whereHas('leauges', function ($q) {
                $q->where('championship_id', $this->leaugeSearch);
            });
        }
        return view('livewire.team-component', ["teams" => $teams->paginate(10)]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        if ($this->team_id) {
            $this->validate();
            $team = Team::find($this->team_id);
            $team->name = $this->name;
            if (!Storage::exists('public/' . $this->logo)) {
                $team->logo = $this->logo->store("images/team-logos", 'public');
            }
            $team->save();
            $team->leauges()->attach($this->championship_id);
            $this->clear();
            $this->alert('success', "successfully updated");
        } else {
            $this->validate();
            $team = new Team();
            $team->name = $this->name;
            $team->national_or_team = $this->national_or_team;
            $team->logo = $this->logo->store("images/team-logos", 'public');
            $team->save();
            $team->leauges()->attach($this->championship_id);
            $this->clear();
            $this->alert('success', "successfully added");
        }
    }

    public function savePoints($teamId)
    {
        $TeamHasLeauge = TeamHasLeauge::where('team_id', $teamId)->where('championship_id', $this->selectLeague)->where('season_id', 1)->first();
        if ($TeamHasLeauge) {
            $TeamHasLeauge->played = $this->played;
            $TeamHasLeauge->won = $this->won;
            $TeamHasLeauge->drawn = $this->drawn;
            $TeamHasLeauge->lost = $this->lost;
            $TeamHasLeauge->gf = $this->gf;
            $TeamHasLeauge->ga = $this->ga;
            $TeamHasLeauge->gd = $this->gd;
            $TeamHasLeauge->points = $this->points;
            $TeamHasLeauge->updated_by = auth()->id();
            $TeamHasLeauge->save();
            $TeamHasLeauge->clear();
            $this->alert('success', "successfully updated");
        } else {
            $TeamHasLeauge = new TeamHasLeauge;
            $TeamHasLeauge->played = $this->played;
            $TeamHasLeauge->won = $this->won;
            $TeamHasLeauge->drawn = $this->drawn;
            $TeamHasLeauge->lost = $this->lost;
            $TeamHasLeauge->gf = $this->gf;
            $TeamHasLeauge->ga = $this->ga;
            $TeamHasLeauge->gd = $this->gd;
            $TeamHasLeauge->points = $this->points;
            $TeamHasLeauge->save();
            $this->alert('success', "successfully added");
        }
    }

    public function clear()
    {
        $this->name = null;
        $this->logo = null;
        $this->national_or_team = null;
        $this->played = null;
        $this->won = null;
        $this->drawn = null;
        $this->lost = null;
        $this->gf = null;
        $this->ga = null;
        $this->gd = null;
        $this->points = null;
        $this->dispatchBrowserEvent('reset');
    }

    function edit($teamId)
    {
        $TeamHasLeauge = TeamHasLeauge::where('team_id', $teamId)->where('championship_id', $this->selectLeague)->where('season_id', 1)->first();
        $this->played = $TeamHasLeauge->played;
        $this->won = $TeamHasLeauge->won;
        $this->drawn = $TeamHasLeauge->drawn;
        $this->lost = $TeamHasLeauge->lost;
        $this->gf = $TeamHasLeauge->gf;
        $this->ga = $TeamHasLeauge->ga;
        $this->gd = $TeamHasLeauge->gd;
        $this->points = $TeamHasLeauge->points;
    }

    function editPoints($team_id)
    {
        $team = Team::find($team_id);
        $this->team_id = $team->id;
        $this->name = $team->name;
        $this->logo = $team->logo;
        $this->championship_id = $team->leauges->pluck('id')->toArray();
        // dD($this->championship_id);
    }

    function delete($team_id)
    {
        TeamHasLeauge::where('team_id',$team_id)->delete();
        Team::destroy($team_id);
        $this->alert('success', "successfully deleted");
    }
}
