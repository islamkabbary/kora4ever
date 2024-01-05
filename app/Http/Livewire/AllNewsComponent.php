<?php

namespace App\Http\Livewire;

use App\Models\Championship;
use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class AllNewsComponent extends Component
{
    use WithPagination;

    public $posts;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $news = News::orderBy('created_at', 'DESC')->paginate(24);
        $leauges = Championship::orderBy('id', 'asc')->take(3)->get();
        return view('livewire.all-news-component', ['all_news' => $news, 'leauges' => $leauges]);
    }
}
