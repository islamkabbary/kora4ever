<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
use App\Models\News;
use Livewire\Component;

class LeftSideBarComponent extends Component
{
    public $league;

    public function render()
    {
        $most = News::where('show_in_most_read', 1)->take(5)->get();
        $egyptianLeague = Leauge::where('id', $this->league)->first();
        return view('livewire.left-side-bar-component', ['most' => $most, 'egyptianLeague' => $egyptianLeague]);
    }
}
