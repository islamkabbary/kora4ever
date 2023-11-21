<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\News;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.tag');
        } catch (\Throwable $th) {
        }
    }

    public function show($id)
    {
        // $top  = News::orderBy('id', 'desc')->take(2)->with('tags')->whereHas(
        //     'tags',
        //     function ($query) use ($id) {
        //         $tag = Tag::findOrFail($id);
        //         $query->where('name', '=', $tag->name);
        //     }
        // )->get();
        $news = News::whereHas('tags', function ($query) use ($id) {
                $tag = Tag::findOrFail($id);
                $query->where('name', '=', $tag->name);
            }
        )->paginate(15);
        // return view("website.tags.show", compact('team', 'leagues', 'news'));
        $tag = Tag::findOrFail($id);
        return view("website.tags.show", ['tag' => $tag, 'news' => $news]);
    }
}
