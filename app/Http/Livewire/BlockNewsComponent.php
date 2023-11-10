<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class BlockNewsComponent extends Component
{
    public function render()
    {
        $news = News::all();
        return view('livewire.block-news-component', ['news' => $news]);
    }
}
