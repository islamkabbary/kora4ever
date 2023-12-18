<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class LeaugeComponent extends Component
{
    use WithFileUploads, LivewireAlert;
    public $name, $type, $image, $country_id, $leauge_id;

    protected $rules = [
        'name' => 'required',
        'type' => 'required',
        'country_id' => 'nullable',
        'image' => 'required|image|max:1024',
    ];

    public function render()
    {
        return view('livewire.leauge-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        if ($this->leauge_id) {
            $leauge = Leauge::find($this->leauge_id);
            $leauge->name = $this->name;
            $leauge->type = $this->type;
            $leauge->country_id = $this->country_id;
            if (!is_string($this->image)) {
                $leauge->logo = $this->image->store('leauges', 'public');
            }
            $leauge->save();
            $this->clear();
            $this->alert('success', "successfully updated");
        } else {
            $this->validate();
            $leauge = new Leauge();
            $leauge->name = $this->name;
            $leauge->type = $this->type;
            $leauge->country_id = $this->country_id;
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

    function edit($leauge_id)
    {
        $leauge = Leauge::find($leauge_id);
        $this->leauge_id = $leauge->id;
        $this->name = $leauge->name;
        $this->type = $leauge->type;
        $this->country_id = $leauge->country_id;
        $this->image = $leauge->logo;
    }

    function delete($leauge_id)
    {
        Leauge::destroy($leauge_id);
        $this->alert('success', "successfully deleted");
    }
}
