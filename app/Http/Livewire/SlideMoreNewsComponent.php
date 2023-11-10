<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class SlideMoreNewsComponent extends Component
{
    public function render()
    {
        $news = News::all();
        return view('livewire.slide-more-news-component',['news' => $news]);
    }
}
