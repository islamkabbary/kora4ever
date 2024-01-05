<?php

namespace App\Http\Livewire;

use App\Models\Championship;
use App\Models\News;
use Livewire\Component;

class BlockNewsComponent extends Component
{
    public $league;
    public function render()
    {
        $leauge = Championship::find($this->league);
        $fourNews = News::whereHas('leauge', function ($q) {
            $q->where("id", $this->league);
            $q->where("show_as_main_news", false);
            $q->where("show_from_the_five_main_news", false);
            $q->where("show_in_most_read", false);
        })->orderBy('created_at', 'desc')->take(4)->get();
        return view('livewire.block-news-component', ['fourNews' => $fourNews, 'leauge' => $leauge]);
    }
}
