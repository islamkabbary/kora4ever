<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
class NewsController extends Controller
{
    public function index()
    {
        try {
            return view('website.News.all_news');
        } catch (\Throwable $th) {
        }
    }

    public function create(Request $request)
    {
        try {
            return view('Dashboard.news');
            // $news = new News;
            // $news->title = $request->title;
            // $news->body = $request->body;
            // $news->team_id = $request->team_id;
            // $news->championship_id = $request->championship_id;
            // $news->show_as_main_news = $request->show_as_main_news ? true : false;
            // $news->show_in_most_read = $request->show_in_most_read ? true : false;
            // $news->show_from_the_five_main_news = $request->show_from_the_five_main_news ? true : false;
            // $news->created_by = 1;
            // $news->save();
            // if ($request->tag_id) {
            //     foreach ($request->tag_id as $tag) {
            //         NewsHasTag::create([
            //             'news_id' => $news->id,
            //             'tag_id' => $tag
            //         ]);
            //     }
            // }
            // if ($request->video_url) {
            //     $news->media()->create(['url' => $request->video_url, 'type' => "video"]);
            // } else {
            //     if (!is_string($request->image)) {
            //         $img = $request->image->store('news', 'public');
            //         $news->media()->create(['url' => $img]);
            //     }
            // }
            // // $request->clear();
            // dd(123);
        } catch (\Throwable $th) {
            Log::info("NewsController" . $th->getMessage());
        }
    }

    public function Article($id)
    {
        $news  = News::findOrFail($id);
        return view('website.News.Article', ['news' => $news]);
    }


    public function create_post()
    {
        $clint = new Client();
        $response = $clint->request('GET' , 'https://newsapi.org/v2/top-headlines?country=eg&category=sports&apiKey=7a541a84bbde4a459c09a488b10ad92a');
        $news = json_decode($response->getBody());
        foreach($news->articles as  $post){
            dd($news->articles[5]);
            $title = explode("-", $post->title);
            $p = new News();
            $p->title = $title[0];
            $p->body = ($post->description ? $post->description : $title[0]);
            $p->created_by = random_int(1,2);
            $p->championship_id = random_int(1,4);
            $p->team_id = random_int(1,4);
            $p->save();
            $p->tags()->create(['name'=>'News']);
            $p->media()->create(['type'=>'image', 'url'=> $post->urlToImage ? $post->urlToImage : asset('images/mainlogo.png')]);
        }
    }
}
