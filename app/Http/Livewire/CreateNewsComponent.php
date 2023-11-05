<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use App\Models\NewsHasTag;
use App\Helpers\FileHelper;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class CreateNewsComponent extends Component
{
    use WithFileUploads, LivewireAlert;

    public $title, $body, $image, $video_url, $tag_id, $news_id, $leauge_id, $team_id;
    protected $listeners = ['add'];

    protected $messages = [
        'title.required' => 'Please enter title',
        'body.min' => 'Body Must be at least 50 characters',
        'leauge_id.required' => 'Please enter Leauge',
    ];

    public function render()
    {
        return view('livewire.create-news-component');
    }

    public function add()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
            // 'tag_id' => 'required',
            'team_id' => 'required',
            'leauge_id' => 'required',
            'image' => 'required|image',
        ]);
        // if ($this->news_id) {
        //     $news = News::find($this->news_id);
        //     $news->title = $this->title;
        //     $news->body = $this->body;
        //     $news->leauge = $this->leauge_id;
        //     $news->created_by = Auth::id();
        //     $this->video_url ? $news->type = 'video' : 'post';
        //     $this->video_url ? $news->video_url = $this->video_url : null;
        //     if ($this->tag) {
        //         foreach ($this->tag as $tag) {
        //             NewsHasTag::create([
        //                 'news_id' => $news->id,
        //                 'tag_id' => $tag
        //             ]);
        //         }
        //     }
        // } else {
        $news = new News;
        $news->title = $this->title;
        $news->body = $this->body;
        $news->team_id = $this->team_id;
        $news->leauge_id = $this->leauge_id;
        $news->created_by = Auth::user()->id;
        $news->save();
        if ($this->tag_id) {
            foreach ($this->tag_id as $tag) {
                NewsHasTag::create([
                    'news_id' => $news->id,
                    'tag_id' => $tag
                ]);
            }
        }
        $img = FileHelper::upload_file('news', $this->image);
        $news->media()->create(['url' => $img]);
        $this->alert('success', "successfully added");
        // $this->clear();
        // }
    }

    public function clear()
    {
        $this->title = null;
        $this->body = null;
        $this->image = null;
        $this->leauge_id = null;
        $this->video_url = null;
        $this->tag_id = null;
    }

    function edit($news_id)
    {
        $news = News::find($news_id);
        $this->news_id = $news->id;
        $this->title = $news->title;
        $this->leauge_id = $news->leauge;
        $this->image = $news->photos[0]->path;
        $this->body = $news->body;
        $this->video_url = $news->video_url;
        $this->tag_id = $news->tag;
    }


    function delete($news_id)
    {
        $news = News::find($news_id);
        $news->photos()->delete();
        $news->delete();
    }
}
