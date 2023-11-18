<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        try {
            return view('website.News.all_news');
        } catch (\Throwable $th) {
        }
    }

    public function create()
    {
        try {
            return view('Dashboard.news');
        } catch (\Throwable $th) {
        }
    }

    public function Article($id)
    {
        $news  = News::findOrFail($id);
        return view('website.News.Article', ['news' => $news]);
    }
}
