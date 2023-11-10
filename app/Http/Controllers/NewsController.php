<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.news');
        } catch (\Throwable $th) {
        }
    }

    public function Article($id)
    {
        // $video = News::where('type', 'video')->get();
        // $left  = News::orderBy('id', 'asc')->take(5)->get();
        // $last  = News::orderBy('id', 'desc')->take(3)->get();
        // $most  = News::all()->random(5);
        $post  = News::findOrFail($id);
        // return view('News.Article', ['post' => $post, 'most' => $most, 'last' => $last, 'left' => $left, 'video' => $video]);
        return view('website.News.Article', ['post' => $post]);
    }
}
