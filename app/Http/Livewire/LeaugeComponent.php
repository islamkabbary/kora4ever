<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Championship;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class LeaugeComponent extends Component
{
    use WithFileUploads, LivewireAlert, WithPagination;
    public $name, $type, $image, $country_id, $championship_id, $tournament_type, $season_id, $tournament_typeSearch, $typeSearch;
    protected $paginationTheme = 'bootstrap';
    protected $rules = [
        'name' => 'required',
        // 'season_id' => 'required',
        'tournament_type' => 'required',
        'image' => 'required|image|max:1024',
    ];

    public function render()
    {
        $championship = Championship::query();
        if ($this->tournament_typeSearch) {
            $championship->where('tournament_type', $this->tournament_typeSearch);
        }
        if ($this->typeSearch) {
            $championship->where('type', $this->typeSearch);
        }
        return view('livewire.leauge-component', ['championships' => $championship->paginate(10)]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        if ($this->championship_id) {
            $leauge = Championship::find($this->championship_id);
            $leauge->name = $this->name;
            $leauge->type = $this->type ? $this->type : null;
            // $leauge->season_id = $this->season_id;
            $leauge->country_id = $this->country_id ? $this->country_id : null;
            $leauge->tournament_type = $this->tournament_type;
            if (!is_string($this->image)) {
                $leauge->logo = $this->image->store('leauges', 'public');
            }
            $leauge->save();
            $this->clear();
            $this->alert('success', "successfully updated");
        } else {
            $this->validate();
            $leauge = new Championship();
            $leauge->name = $this->name;
            $leauge->type = $this->type ? $this->type : null;
            // $leauge->season_id = $this->season_id;
            $leauge->country_id = $this->country_id ? $this->country_id : null;
            $leauge->tournament_type = $this->tournament_type;
            $leauge->logo = $this->image->store('leauges', 'public');
            $leauge->save();
            $this->clear();
            $this->alert('success', "successfully added");
        }
    }

    public function clear()
    {
        $this->name = null;
        $this->image = null;
        $this->type = null;
        $this->country_id = null;
    }

    function edit($championship_id)
    {
        $leauge = Championship::find($championship_id);
        $this->championship_id = $leauge->id;
        $this->name = $leauge->name;
        $this->type = $leauge->type;
        $this->image = $leauge->logo;
        // $this->season_id = $leauge->season_id;
        $this->country_id = $leauge->country_id;
        $this->tournament_type = $leauge->tournament_type;
    }

    function delete($championship_id)
    {
        Championship::destroy($championship_id);
        $this->alert('success', "successfully deleted");
    }
}
