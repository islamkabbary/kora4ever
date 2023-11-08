<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
use Livewire\Component;

class LeaugeComponent extends Component
{

    public $leauge , $leauge_id , $image ,$type ,$country_id;

    protected $rules = [
        'leauge' => 'required|max:25',
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
        dd($this->type);
        $this->validate();
        if($this->leauge_id){
            $leauge = Leauge::find($this->leauge_id);
            $leauge->name = $this->leauge;
            $leauge->type = $this->type;
            $leauge->country = $this->country;
            $leauge->save();
            $leauge->photo()->create(['type'=>'leauge', 'path'=> $this->image]);
            $this->cleare();
        }
        else{
            $leauge = new Leauge();
            $leauge->name = $this->leauge;
            $leauge->type = $this->type;
            $leauge->country = $this->country;
            $leauge->save();
            $leauge->photo()->create(['type'=>'leauge', 'path'=> $this->image]);
            $this->cleare();
        }
    }

    public function cleare()
    {
        $this->leauge = null ;
        $this->image = null ;
        $this->type = null ;
        $this->country_id = null ;
    }

    function edit($leauge_id)
    {
        $leauge = Leauge::find($leauge_id);
        $this->leauge_id = $leauge->id;
        $this->leauge = $leauge->name;
        $this->type = $leauge->type;
        $this->country_id = $leauge->country;
        $this->image = $leauge->photo->path;
    }

    function delete($leauge_id)
    {
        Leauge::destroy($leauge_id);
    }
}
