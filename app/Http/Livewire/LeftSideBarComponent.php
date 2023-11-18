<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
use App\Models\News;
use Livewire\Component;

class LeftSideBarComponent extends Component
{
    public function render()
    {
        $news = News::first();
        $most = News::orderBy('id', 'desc')->take(5)->get();
        $egyptianLeague = Leauge::where('name', 'Egyptian Premier League')->first();
        return view('livewire.left-side-bar-component', ['most' => $most, 'news' => $news, 'egyptianLeague' => $egyptianLeague]);
    }
}
