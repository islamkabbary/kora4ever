<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsChampionshipComponent extends Component
{
    use WithPagination;

    public $leauge_id;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $news = News::where('championship_id', $this->leauge_id)->orderBy('created_at', 'desc')->paginate(9);
        return view('livewire.news-championship-component', ['news' => $news]);
    }
}
