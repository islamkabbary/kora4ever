<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class TabsSlideNewsComponent extends Component
{
    public function render()
    {
        $news = News::all();
        return view('livewire.tabs-slide-news-component', ['news' => $news]);
    }
}
