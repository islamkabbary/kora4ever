<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsHeroPageComponent extends Component
{
    public function render()
    {
        $news = News::all();
        return view('livewire.news-hero-page-component', ['news' => $news]);
    }
}
