<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
use App\Models\News;
use Livewire\Component;

class BlockNewsComponent extends Component
{
    public $league;

    public function render()
    {
        $nameLeauge = Leauge::find($this->league)->name;
        $fourNews = News::take(4)->get();
        return view('livewire.block-news-component', ['fourNews' => $fourNews, 'nameLeauge' => $nameLeauge]);
    }
}
