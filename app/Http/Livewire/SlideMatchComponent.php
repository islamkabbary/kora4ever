<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Matche;
use Livewire\Component;

class SlideMatchComponent extends Component
{
    public function render()
    {
        $allMatches['yesterday'] = Matche::orderBy('time', 'asc')->where('date', Carbon::yesterday()->toDateString())->get();
        $allMatches['today'] = Matche::orderBy('time', 'asc')->where('date', Carbon::today()->toDateString())->get();
        $allMatches['tomorrow'] = Matche::orderBy('time', 'asc')->where('date', Carbon::tomorrow()->toDateString())->get();
        return view('livewire.slide-match-component', ['yesterday' => $allMatches['yesterday'], 'today' => $allMatches['today'], 'tomorrow' => $allMatches['tomorrow']]);
    }
}
