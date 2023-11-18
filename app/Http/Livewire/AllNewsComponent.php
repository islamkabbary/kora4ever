<?php

namespace App\Http\Livewire;

use App\Models\Leauge;
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
        // $news   = News::orderBy('created_at', 'DESC')->paginate(18);
        $news   = News::orderBy('created_at', 'DESC')->first();
        $leauges = Leauge::orderBy('id', 'asc')->take(3)->get();
        return view('livewire.all-news-component',['news' => $news , 'leauges' => $leauges]);
    }

    public function paginationView()
    {
        return 'pagination';
    }
}
