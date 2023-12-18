<?php

namespace App\Http\Livewire;

use App\Models\Team;
use App\Models\Leauge;
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
    public $leauge_id = [];

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name' => 'required|max:25',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
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
            $this->validate();
            $team = Team::find($this->team_id);
            $team->name = $this->name;
            if (!Storage::exists('public/' . $this->logo)) {
                $team->logo = $this->logo->store("images/team-logos", 'public');
            }
            $team->save();
            $team->leauges()->attach($this->leauge_id);
            $this->clear();
            $this->alert('success', "successfully updated");
        } else {
            $this->validate();
            $team = new Team();
            $team->name = $this->name;
            $team->logo = $this->logo->store("images/team-logos", 'public');
            $team->save();
            $team->leauges()->attach($this->leauge_id);
            $this->clear();
            $this->alert('success', "successfully added");
        }
    }
    public function clear()
    {
        $this->name = null;
        $this->logo = null;
        $this->emit('reset');
    }
    function edit($team_id)
    {
        $team = Team::find($team_id);
        $this->team_id = $team->id;
        $this->name = $team->name;
        $this->logo = $team->logo;
        $this->leauge_id = $team->leauges->pluck('id')->toArray();
    }

    function delete($team_id)
    {
        Team::destroy($team_id);
        $this->alert('success', "successfully deleted");
    }
}
