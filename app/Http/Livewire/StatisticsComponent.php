<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
use Livewire\Component;
use App\Models\TeamHasLeauge;

class StatisticsComponent extends Component
{
    public $leauge;
    public function mount($leauge)
    {
        $this->leauge = $leauge;
    }
    public function render()
    {
        $statistc = TeamHasLeauge::where('leauge_id', $this->leauge)->orderBy('points', 'DESC')->get()->take(4);
        return view('livewire.statistics-component', ['statistc' => $statistc, 'leauge' => $this->leauge]);
    }
}
