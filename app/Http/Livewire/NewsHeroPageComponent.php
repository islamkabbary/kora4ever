<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsHeroPageComponent extends Component
{
    public function render()
    {
        // $news = News::all();
        $main_news = News::where('show_as_main_news', 1)->latest()->first();
        if(!$main_news){
            $main_news = News::latest('created_at')->first();
        }
        $twoNewsLeft = News::where('show_from_the_five_main_news', 1)->latest()->take(2)->get();
        $threeNewsUnderMain = News::where('show_from_the_five_main_news', 1)->latest()->take(3)->get();
        return view('livewire.news-hero-page-component', ['main_news' => $main_news, 'five_main_news' => $twoNewsLeft, 'threeNewsUnderMain' => $threeNewsUnderMain]);
    }
}
